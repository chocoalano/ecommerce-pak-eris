<?php
namespace App\Filament\Component\Tables;

use Filament\Tables\Columns\TextColumn;

class OrderTable
{
    public static function table(): array
    {
        return [
            TextColumn::make('No.')
                ->rowIndex(),
            TextColumn::make('buyer.name')
                ->searchable()
                ->sortable(),
            TextColumn::make('payment.amount_paid')
                ->money('IDR')
                ->sortable(),
            TextColumn::make('total_price')
                ->money('IDR')
                ->sortable(),
            TextColumn::make('status')
                ->badge()
                ->color(fn(string $state): string => match ($state) {
                    'pending' => 'gray',
                    'paid' => 'info',
                    'shipped' => 'warning',
                    'completed' => 'success',
                    'cancelled' => 'danger',
                }),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true)
        ];
    }
}
