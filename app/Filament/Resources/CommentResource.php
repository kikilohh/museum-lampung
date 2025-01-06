<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Models\Comment;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn; 

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Comment';


    /**
     * Form schema for creating and editing comments.
     *
     * @param Form $form
     * @return Form
     */
    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->required()
                ->label('Name')
                ->disabled(), // Nama tidak bisa diubah
            
            TextInput::make('email')
                ->required()
                ->label('Email')
                ->disabled(), // Email tidak bisa diubah
            
            Textarea::make('message')
                ->required()
                ->label('Message')
                ->disabled(), // Pesan asli tidak bisa diubah
        ]);
    }
    
    /**
     * Table schema to display comments.
     *
     * @param Table $table
     * @return Table
     */
    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')
                ->searchable()
                ->label('Name'),
            TextColumn::make('email')
                ->label('Email'),
            TextColumn::make('message')
                ->limit(50)
                ->label('Message'),
            TextColumn::make('created_at')
                ->dateTime()
                ->label('Created At'),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }    

    /**
     * Define relations if there are any.
     *
     * @return array
     */
    public static function getRelations(): array
    {
        return [];
    }

    /**
     * Define the pages for this resource.
     *
     * @return array
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComment::route('/'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }
}
