<?php

namespace App\Http\Livewire;

use App\Models\Book\Book as Model;
use Livewire\Component;

class SearchBooks extends Component
{
    public $search;
    public $currentItem;
    public $parentId;

    public function render()
    {
        $label          = 'Book';
        $view           = 'livewire.search-books';
        $currentItem    = null;
        if ($this->currentItem) {
            $currentItem = $this->currentItem;
        }
        $items = Model::search($this->search)->paginate(5);

        return view(
            $view,
            compact(
                'items',
                'currentItem',
            ),
            [
                'label'     => $label,
                'parentId'  => $this->parentId
            ]);
    }
}
