<?php

namespace App\Http\Livewire\traits;

trait WithSortingTrait
{
    public $sortBy = '';
    public $sortDirection = 'asc';
    public $paginate = 10;
    public $paginate_list = ['5'=>'5','10'=>'10','20'=>'20','50'=>'50','100'=>'100'];
 
    public function sortBy($field)
    {
        $this->sortDirection = $this->sortBy === $field
            ? $this->reverseSort()
            : 'asc';
 
        $this->sortBy = $field;
    }
 
    public function reverseSort()
    {
        return $this->sortDirection === 'asc'
            ? 'desc'
            : 'asc';
    }

    public function getSortBy ($sortBy,$sortDirection)
    {
        $this->sortBy = $sortBy;
        $this->sortDirection = ($sortDirection == 'asc') ? 'desc':'asc';
    }
}

?>