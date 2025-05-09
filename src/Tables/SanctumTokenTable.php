<?php

namespace EleganceCMS\Api\Tables;

use EleganceCMS\Api\Models\PersonalAccessToken;
use EleganceCMS\Table\Abstracts\TableAbstract;
use EleganceCMS\Table\Actions\DeleteAction;
use EleganceCMS\Table\BulkActions\DeleteBulkAction;
use EleganceCMS\Table\Columns\Column;
use EleganceCMS\Table\Columns\CreatedAtColumn;
use EleganceCMS\Table\Columns\DateTimeColumn;
use EleganceCMS\Table\Columns\IdColumn;
use EleganceCMS\Table\Columns\NameColumn;
use EleganceCMS\Table\HeaderActions\CreateHeaderAction;
use Illuminate\Database\Eloquent\Builder;

class SanctumTokenTable extends TableAbstract
{
    public function setup(): void
    {
        $this
            ->setView('packages/api::table')
            ->model(PersonalAccessToken::class)
            ->addHeaderAction(CreateHeaderAction::make()->route('api.sanctum-token.create'))
            ->addAction(DeleteAction::make()->route('api.sanctum-token.destroy'))
            ->addColumns([
                IdColumn::make(),
                NameColumn::make(),
                Column::make('abilities')
                    ->label(trans('packages/api::sanctum-token.abilities')),
                DateTimeColumn::make('last_used_at')
                    ->label(trans('packages/api::sanctum-token.last_used_at')),
                CreatedAtColumn::make(),
            ])
            ->addBulkAction(DeleteBulkAction::make())
            ->queryUsing(fn (Builder $query) => $query->select([
                'id',
                'name',
                'abilities',
                'last_used_at',
                'created_at',
            ]));
    }
}
