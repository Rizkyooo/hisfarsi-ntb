<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KegiatanResource\Pages;
use App\Filament\Resources\KegiatanResource\RelationManagers;
use App\Models\Kegiatan;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KegiatanResource extends Resource
{
    protected static ?string $model = Kegiatan::class;


    protected static ?string $navigationLabel = 'Kegiatan';

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                FileUpload::make('media')
                    ->label('Banner')
                    ->image()
                    ->imageEditor(),
                TextInput::make('judul')
                    ->required()
                    ->label('Judul Kegiatan'),
                
                // Textarea::make('deskripsi')
                //     ->required()
                //     ->label('Deskripsi'),

                    RichEditor::make('deskripsi')
                    ->required()
                    ->label('Deskripsi'),
                
                DatePicker::make('tanggal_mulai')
                    ->label('Tanggal Mulai'),

                DatePicker::make('tanggal_selesai')
                    ->label('Tanggal Selesai'),
                    
                TextInput::make('alamat')
                    ->required()
                    ->label('Alamat'),

                
                    
                FileUpload::make('dokumentasi')
                    ->label('Dokumentasi')
                    ->multiple()
                    ->image()
                    ->imageEditor()
            ]);
    }

    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->searchable()->sortable(),
                TextColumn::make('tanggal_mulai')->sortable(),
                TextColumn::make('alamat')->sortable(),
                ImageColumn::make('media')->sortable(),
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
            'index' => Pages\ListKegiatans::route('/'),
            'create' => Pages\CreateKegiatan::route('/create'),
            'edit' => Pages\EditKegiatan::route('/{record}/edit'),
        ];
    }


    
}
