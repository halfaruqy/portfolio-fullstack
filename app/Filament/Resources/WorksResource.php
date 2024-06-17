<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorksResource\Pages;
use App\Filament\Resources\WorksResource\RelationManagers;
use App\Models\Works;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorksResource extends Resource
{
    protected static ?string $model = Works::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\TextInput::make('livelink'),
                Forms\Components\TextInput::make('livelink_text'),
                Forms\Components\TextInput::make('repolink'),
                Forms\Components\TextInput::make('caselink'),
                Forms\Components\Repeater::make('tech_stack')
                    ->schema([
                        Forms\Components\FileUpload::make('icon')
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('livelink'),
                Tables\Columns\TextColumn::make('livelink_text'),
                Tables\Columns\TextColumn::make('repolink'),
                Tables\Columns\TextColumn::make('caselink'),
                Tables\Columns\TextColumn::make('tech_stack')
                    ->formatStateUsing(function ($state) {
                        return implode(', ', json_decode($state, true));
                    }),
            ])
            ->filters([
                //
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
            'index' => Pages\ListWorks::route('/'),
            'create' => Pages\CreateWorks::route('/create'),
            'edit' => Pages\EditWorks::route('/{record}/edit'),
        ];
    }
}
