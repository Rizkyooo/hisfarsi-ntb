<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrationResource\Pages;
use App\Filament\Resources\RegistrationResource\RelationManagers;
use App\Models\Registration;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegistrationResource extends Resource
{
    protected static ?string $model = Registration::class;
    
    protected static ?string $navigationGroup = 'Manajemen Event';

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('event_id')
                    ->relationship('event', 'nama_event')
                    ->required(),
                Forms\Components\TextInput::make('nama_lengkap')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('no_hp')->required(),
                Forms\Components\TextInput::make('organisasi'),
                Forms\Components\Select::make('status_pendaftaran')
                    ->options([
                        'Pending' => 'Pending',
                        'Dikonfirmasi' => 'Dikonfirmasi',
                        'Ditolak' => 'Ditolak',
                    ])->default('Pending'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('event.nama_event')->label('Event'),
                Tables\Columns\TextColumn::make('nama_lengkap'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('no_hp'),
                Tables\Columns\BadgeColumn::make('status_pendaftaran'),
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
            'index' => Pages\ListRegistrations::route('/'),
            'create' => Pages\CreateRegistration::route('/create'),
            'edit' => Pages\EditRegistration::route('/{record}/edit'),
        ];
    }
}
