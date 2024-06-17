<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorksSectionResource\Pages;
use App\Filament\Resources\WorksSectionResource\RelationManagers;
use App\Models\WorksSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorksSectionResource extends Resource
{
    protected static ?string $model = WorksSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\Select::make('work_id')
                    ->relationship('work', 'title')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('work.title')
                    ->label('Work Title'),
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
            'index' => Pages\ListWorksSection::route('/'),
            'create' => Pages\CreateWorksSection::route('/create'),
            'edit' => Pages\EditWorksSection::route('/{record}/edit'),
        ];
    }
}