<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PegawaiResource\Pages;
use App\Models\Pegawai;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Pegawai';
    protected static ?string $pluralModelLabel = 'Pegawai';
    protected static ?string $modelLabel = 'Pegawai';
    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->required()->maxLength(255),
                Forms\Components\TextInput::make('email')->email()->required()->unique(),
                Forms\Components\TextInput::make('telepon')->maxLength(15),
                Forms\Components\TextInput::make('jabatan')->required(),
                Forms\Components\DatePicker::make('tanggal_masuk')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->searchable()->sortable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('telepon'),
                TextColumn::make('jabatan')->sortable(),
                TextColumn::make('tanggal_masuk')
                    ->label('Tanggal Masuk')
                    ->date('d-m-Y')
                    ->sortable(),
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePegawai::route('/'),
        ];
    }
}
