<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\BlackVinyl;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\BlackVinylResource\Pages;

class BlackVinylResource extends Resource
{
    protected static ?string $model = BlackVinyl::class;

    protected static ?string $navigationGroup = 'Vinyl options';

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
                Forms\Components\TextInput::make('energetic_extra_charge')
                    ->numeric(),
                Forms\Components\TextInput::make('assembly')
                    ->numeric(),
                Forms\Components\TextInput::make('100_199')
                    ->numeric(),
                Forms\Components\TextInput::make('200_249')
                    ->numeric(),
                Forms\Components\TextInput::make('250_499')
                    ->numeric(),
                Forms\Components\TextInput::make('500_999')
                    ->numeric(),
                Forms\Components\TextInput::make('1000_1199')
                    ->numeric(),
                Forms\Components\TextInput::make('2000_2999')
                    ->numeric(),
                Forms\Components\TextInput::make('3000_4999')
                    ->numeric(),
                Forms\Components\TextInput::make('5000_7499')
                    ->numeric(),
                Forms\Components\TextInput::make('7500_9999')
                    ->numeric(),
                Forms\Components\TextInput::make('10000_14999')
                    ->numeric(),
                Forms\Components\TextInput::make('15000_19999')
                    ->numeric(),
                Forms\Components\TextInput::make('20000_29999')
                    ->numeric(),
                Forms\Components\TextInput::make('30000_49999')
                    ->numeric(),
                Forms\Components\TextInput::make('50000_100000')
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
                    ->searchable(),
                Tables\Columns\TextColumn::make('disc_size')
                    ->searchable(),
                Tables\Columns\TextInputColumn::make('energetic_extra_charge')
                    ->type('number')
                    ->sortable(),
                Tables\Columns\TextInputColumn::make('assembly')
                    ->type('number')
                    ->sortable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListBlackVinyls::route('/'),
            'create' => Pages\CreateBlackVinyl::route('/create'),
            'edit' => Pages\EditBlackVinyl::route('/{record}/edit'),
        ];
    }
}