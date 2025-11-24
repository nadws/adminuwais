<?php

namespace App\Filament\Resources\DetailPlans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class DetailPlansForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Detail')
                    ->required()
                    ->maxLength(100),
                Select::make('plants_pricings_id')
                    ->label('Plants Pricing')
                    ->relationship('plantsPricing', 'name')
                    ->required()



            ]);
    }
}
