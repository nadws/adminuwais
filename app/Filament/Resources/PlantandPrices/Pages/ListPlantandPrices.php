<?php

namespace App\Filament\Resources\PlantandPrices\Pages;

use App\Filament\Resources\PlantandPrices\PlantandPriceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlantandPrices extends ListRecords
{
    protected static string $resource = PlantandPriceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
    public function getTitle(): string
    {
        return 'Paket & Harga';
    }
}
