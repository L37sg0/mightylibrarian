<?php

namespace App\Http\Livewire;

use App\Models\Author\Author as Model;
use Livewire\Component;

class SearchAuthors extends Component
{
    public $search;
    public $currentItem;
    public $parentId;

    public function render()
    {
        $label          = 'Author';
        $view           = 'livewire.search-authors';
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
