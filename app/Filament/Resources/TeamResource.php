<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Team;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TeamResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TeamResource\RelationManagers;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->placeholder('Enter Your Name?'),
                TextInput::make('designation')->required()->placeholder('Enter Your Designation?'),
                TextInput::make('insta_url')->required()->label('Instagram Url')->placeholder('Enter Your Insta Url?'),
                TextInput::make('fb_url')->required()->label('Facebook Url')->placeholder('Enter Your FB Url?'),
                TextInput::make('linkedin_url')->url()->required()->label('LinkdIn Url')->placeholder('Enter Your LinkedIN Url?'),
                TextInput::make('twitter_url')->required()->label('Twitter Url')->placeholder('Enter Your Twitter Url?'),
                FileUpload::make('image')->required(),
                Select::make('status')->options([
                    1=>'Active',
                    0=>'In active'
                ])->native(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->circular(),
                TextColumn::make('name'),
                TextColumn::make('designation'),
                SelectColumn::make('status')
                ->options([
                   1 => 'Active',
                   0 => 'In active',
                ])
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
