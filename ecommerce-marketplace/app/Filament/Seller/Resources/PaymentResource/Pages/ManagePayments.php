<?php

namespace App\Filament\Seller\Resources\PaymentResource\Pages;

use App\Filament\Seller\Resources\PaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePayments extends ManageRecords
{
    protected static string $resource = PaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}
