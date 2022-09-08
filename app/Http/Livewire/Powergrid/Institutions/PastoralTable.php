<?php

namespace App\Http\Livewire\Powergrid\Institutions;

use App\Models\app\Pastoral;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class PastoralTable extends PowerGridComponent
{
    use ActionButton;


    protected $listeners = ['postAdded' => 'incrementPostCount'];

    public function incrementPostCount()

    {
        // $this->postCount = Post::count();
    }

    //..

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                // ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
                ->type(Exportable::TYPE_XLS),
            Header::make()
            ->showSearchInput()
            ->showToggleColumns()
            ,
            Footer::make()
                ->showPerPage()
                // ->showRecordCount()
                ->showRecordCount(mode: 'full')
                ,
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
    * PowerGrid datasource.
    *
    * @return Builder<\App\Models\app\Pastoral>
    */
    public function datasource(): Builder
    {
        return Pastoral::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('name')
            ->addColumn('code')
            ->addColumn('description')
            ->addColumn('description_excerpt', function (Pastoral $model) {
                return Str::words(e($model->description), 3); //Gets the first 8 words
            })
            ->addColumn('email_institution')
            ->addColumn('created_at')
            ->addColumn('created_at_formatted', fn (Pastoral $model) => Carbon::parse($model->created_at)->format('d/m/Y'))
            ;
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),

            Column::make('Nombre', 'name')
                ->searchable()
                ->makeInputText('name')
                ->sortable(),

            Column::make('Código', 'code')
                ->searchable()
                ->makeInputText('Código')
                ->sortable(),
            Column::make('Descripción', 'description_excerpt')
                ->searchable()
                ->makeInputText('Descripción')
                ->sortable(),

            Column::make('Correo Electrónico', 'email_institution')
                ->searchable()
                ->makeInputText('Correo Electrónico')
                ->sortable(),

            Column::make('Created at', 'created_at')
                ->hidden(),

            Column::make('Creado', 'created_at_formatted', 'created_at')
                ->makeInputDatePicker()
                ->searchable(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

     /**
     * PowerGrid Pastoral Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
       return [
           Button::make('edit', 'Editar')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 my-1 mx-1 rounded text-sm')
               // ->emitTo('admin-component','postAdded', ['key' => 'id'])
               ->emit('editPastoral', ['pastoral_id' => 'id'])
               // ->route('pastoral.edit', ['pastoral' => 'id'])
               // ->openModal('institutions.pastorals.modals.edit', ['pastoral_id' => 'id']) // /home/nuser/code/pastoral/resources/views/livewire/institutions/pastorals/modals/edit.blade.php
               ,

           Button::make('destroy', 'Eliminar')
               ->class('bg-red-600 cursor-pointer text-white px-3 py-2.5 my-1 rounded text-sm')
               ->route('pastoral.destroy', ['pastoral' => 'id'])
               ->method('delete')
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

     /**
     * PowerGrid Pastoral Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($pastoral) => $pastoral->id === 1)
                ->hide(),
        ];
    }
    */
}
