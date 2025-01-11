<?php

namespace App\Filament\Seller\Pages;

use App\Models\User;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Http\Responses\Auth\RegistrationResponse;
use Filament\Pages\Auth\Register;
use Illuminate\Support\Facades\DB;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class Registration extends Register
{
    public function form(Form $form): Form
    {
        $province = RajaOngkir::provinsi()->all();
        $city = RajaOngkir::kota()->all();
        $option_province = [];
        $option_city = [];

        foreach ($province as $key => $value) {
            $option_province[$value['province_id']."-".$value['province']] = $value['province'];
        }
        foreach ($city as $key => $value) {
            $option_city[$value['city_name']] = $value['city_name'];
        }

        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Account')
                        ->schema([
                            $this->getNameFormComponent(),
                            $this->getEmailFormComponent(),
                            $this->getPasswordFormComponent(),
                            $this->getPasswordConfirmationFormComponent(),
                        ]),
                    Wizard\Step::make('Store')
                        ->schema([
                            TextInput::make('phone_number')->unique('users')->numeric()->tel(),
                            TextInput::make('store_name')->unique('sellers'),
                            FileUpload::make('logo')->directory('logo-store'),
                            Textarea::make('description'),
                        ]),
                    Wizard\Step::make('Address')
                        ->schema([
                            Textarea::make('store_address')->required(),
                            Select::make('province')
                                ->searchable()
                                ->options($option_province)
                                ->live()
                                ->afterStateUpdated(function ($state, callable $set) {
                                    $parts = explode('-', $state);
                                    $daftarKota = RajaOngkir::kota()->dariProvinsi($parts[0])->get();
                                    $option_city = [];
                                    foreach ($daftarKota as $key => $value) {
                                        $option_city[$value['city_name']] = $value['city_name'];
                                    }
                                    $set('city', null);
                                    $set('city_options', $option_city);
                                }),
                            Select::make('city')
                                ->searchable()
                                ->options(function (Get $get) {
                                    return $get('city_options') ?? [];
                                })
                                ->required(),
                        ]),
                ])
            ]);
    }


    public function register(): ?RegistrationResponse
    {
        $data = $this->form->getState();
        DB::beginTransaction();
        try {
            // Buat user baru
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
                'phone_number' => $data['phone_number'] ?? null,
                'type' => 'seller',
            ]);

            // Buat data seller terkait
            $user->seller()->create([
                'store_name' => $data['store_name'],
                'description' => $data['description'],
                'logo' => $data['logo'] ?? null,
                'store_address' => $data['store_address'],
                'store_status' => 'active',
                'province' => $data['province'],
                'city' => $data['city'],
            ]);
            DB::commit();
            // Return response untuk registrasi sukses
            return app(RegistrationResponse::class, ['user' => $user]);
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
        }
    }
}
