<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MuseumResource\Pages;
use App\Filament\Resources\MuseumResource\RelationManagers;
use App\Models\Museum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MuseumResource extends Resource
{
    protected static ?string $model = Museum::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                ->required(),
                Forms\Components\TextInput::make('name')
                ->required(),
                Forms\Components\TextInput::make('location')
                ->required(),
                Forms\Components\TextArea::make('history')
                ->required()
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('history'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListMuseums::route('/'),
            'create' => Pages\CreateMuseum::route('/create'),
            'edit' => Pages\EditMuseum::route('/{record}/edit'),
        ];
    }
}
