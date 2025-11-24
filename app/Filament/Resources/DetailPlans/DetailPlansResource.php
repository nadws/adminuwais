<?php

namespace App\Filament\Resources\DetailPlans;

use App\Filament\Resources\DetailPlans\Pages\CreateDetailPlans;
use App\Filament\Resources\DetailPlans\Pages\EditDetailPlans;
use App\Filament\Resources\DetailPlans\Pages\ListDetailPlans;
use App\Filament\Resources\DetailPlans\Schemas\DetailPlansForm;
use App\Filament\Resources\DetailPlans\Tables\DetailPlansTable;
use App\Models\DetailPlans;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Filament\Resources\Enums\NavigationGroups;

class DetailPlansResource extends Resource
{
    protected static ?string $model = DetailPlans::class;
    protected static ?int $navigationSort = 2;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentMagnifyingGlass;
    protected static string|UnitEnum|null $navigationGroup = NavigationGroups::Katalog;

    protected static ?string $recordTitleAttribute = 'Detail Plans dan Pricing';

    public static function form(Schema $schema): Schema
    {
        return DetailPlansForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DetailPlansTable::configure($table);
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
            'index' => ListDetailPlans::route('/'),
            'create' => CreateDetailPlans::route('/create'),
            'edit' => EditDetailPlans::route('/{record}/edit'),
        ];
    }
}
