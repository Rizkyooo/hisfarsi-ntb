<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationGroup = 'Manajemen Event';


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('nama_event')
                ->required(),
                FileUpload::make('banner')
                ->image()
                ->imageEditor(),
            // Forms\Components\Textarea::make('deskripsi'),
            RichEditor::make('deskripsi')
                    ->required()
                    ->label('Deskripsi'),
            Forms\Components\DateTimePicker::make('tanggal_mulai'),
            Forms\Components\DateTimePicker::make('tanggal_selesai'),
            Forms\Components\TextInput::make('lokasi')->required(),
            Forms\Components\Select::make('jenis_event')
                ->options([
                    'Seminar' => 'Seminar',
                    'Workshop' => 'Workshop',
                    'Webinar' => 'Webinar',
                ])
                ->required(),
            Forms\Components\TextInput::make('kuota_peserta')->numeric(),
            Forms\Components\Select::make('status')
                ->options([
                    'Aktif' => 'Aktif',
                    'Ditutup' => 'Ditutup',
                    'Selesai' => 'Selesai',
                ])->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('nama_event')->sortable(),
            Tables\Columns\TextColumn::make('tanggal_mulai')->dateTime()->sortable(),
            Tables\Columns\TextColumn::make('kuota_peserta')->sortable(),
            Tables\Columns\BadgeColumn::make('status'),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
