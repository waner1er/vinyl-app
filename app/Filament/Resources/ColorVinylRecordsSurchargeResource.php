<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextColumn;
use App\Models\ColorVinylRecordsSurcharge;
use Illuminate\Contracts\Database\Eloquent\Builder;
use App\Filament\Resources\ColorVinylRecordsSurchargeResource\Pages;

class ColorVinylRecordsSurchargeResource extends Resource
{
    protected static ?string $model = ColorVinylRecordsSurcharge::class;
    protected static ?string $navigationGroup = 'Vinyl options';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('disc_size'),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->prefix('€'),
                Forms\Components\Toggle::make('isFixedPrice')
                    ->required(),
                Forms\Components\TextInput::make('fixed_price')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();

                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }

                        // Only render the tooltip if the column content exceeds the length limit.
                        return $state;
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('disc_size')
                    ->sortable(),
                Tables\Columns\TextInputColumn::make('price'),
                Tables\Columns\ToggleColumn::make('isFixedPrice')
                    ->sortable(),
                Tables\Columns\TextInputColumn::make('fixed_price')
            ])
            ->filters([
                Filter::make('Is Fixed Price')
                    ->query(fn (Builder $query): Builder => $query->where('isFixedPrice', true)),
                Filter::make('Is Not Fixed Price')
                    ->query(fn (Builder $query): Builder => $query->where('isFixedPrice', false))
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListColorVinylRecordsSurcharges::route('/'),
            'create' => Pages\CreateColorVinylRecordsSurcharge::route('/create'),
            'edit' => Pages\EditColorVinylRecordsSurcharge::route('/{record}/edit'),
        ];
    }
}
