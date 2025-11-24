<?php

namespace App\Filament\Resources\PlantandPrices;

use App\Filament\Resources\PlantandPrices\Pages\CreatePlantandPrice;
use App\Filament\Resources\PlantandPrices\Pages\EditPlantandPrice;
use App\Filament\Resources\PlantandPrices\Pages\ListPlantandPrices;
use App\Filament\Resources\PlantandPrices\Schemas\PlantandPriceForm;
use App\Filament\Resources\PlantandPrices\Tables\PlantandPricesTable;
use App\Models\PlantsPricing;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Filament\Resources\Enums\NavigationGroups;

class PlantandPriceResource extends Resource
{
    protected static ?string $model = PlantsPricing::class;
    protected static ?int $navigationSort = 1;


    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentCheck;

    protected static string|UnitEnum|null $navigationGroup = NavigationGroups::Katalog;

    protected static ?string $navigationLabel = 'Paket & Harga';


    protected static ?string $recordTitleAttribute = 'Paket & Harga';

    public static function getBreadcrumb(): string
    {
        return 'Paket & Harga';
    }
    public static function form(Schema $schema): Schema
    {
        return PlantandPriceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlantandPricesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPlantandPrices::route('/'),
            'create' => CreatePlantandPrice::route('/create'),
            'edit' => EditPlantandPrice::route('/{record}/edit'),
        ];
    }
}
