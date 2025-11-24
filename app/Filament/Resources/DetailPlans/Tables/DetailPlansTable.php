<?php

namespace App\Filament\Resources\DetailPlans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\DeleteAction;
use Filament\Tables\Grouping\Group;

class DetailPlansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->label('Detail')->sortable(),
                // TextColumn::make('plantsPricing.name')
                //     ->label('Paket & Harga')
                //     ->sortable(),
            ])
            ->groups([
                Group::make('plantsPricing.name')
                    ->label('Paket & Harga'), // nama group custom
            ])
            ->defaultGroup('plantsPricing.name')

            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
