<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\WartaParoki;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WartaParokiResource\Pages;
use App\Filament\Resources\WartaParokiResource\RelationManagers;

class WartaParokiResource extends Resource
{
    protected static ?string $model = WartaParoki::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Judul')->required(),
                DateTimePicker::make('TanggalUpload')->required(),
                Textarea::make('Isi')->required(),
                FileUpload::make('attachment')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Judul')->sortable()->searchable(),
                TextColumn::make('Isi')->limit(50),
                TextColumn::make('TanggalUpload')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListWartaParokis::route('/'),
            'create' => Pages\CreateWartaParoki::route('/create'),
            'edit' => Pages\EditWartaParoki::route('/{record}/edit'),
        ];
    }    
}
