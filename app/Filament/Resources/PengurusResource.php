<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengurusResource\Pages;
use App\Filament\Resources\PengurusResource\RelationManagers;
use App\Models\Anggota;
use App\Models\Pengurus;
use Filament\Forms;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengurusResource extends Resource
{
    protected static ?string $model = Pengurus::class;

    protected static ?string $navigationLabel = 'Bidang Pengurus';

    protected static ?string $navigationGroup = 'Manajemen Pengurus';

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('nama_bidang')
                    ->required(),

                    Select::make('anggota')
            ->multiple() // Mengaktifkan multiple select
            ->relationship('anggota', 'name') // Menggunakan relationship yang sudah didefinisikan
            ->preload() // Memuat opsi saat form dibuka
            ->required()
            ->label('Anggota'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_bidang')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('anggota.name')
                    ->label('Anggota'),
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
            'index' => Pages\ListPenguruses::route('/'),
            'create' => Pages\CreatePengurus::route('/create'),
            'edit' => Pages\EditPengurus::route('/{record}/edit'),
        ];
    }
}
