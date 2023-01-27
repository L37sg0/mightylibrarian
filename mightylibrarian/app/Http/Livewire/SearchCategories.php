<?php

namespace App\Http\Livewire;

use App\Models\Category\Category as Model;
use Livewire\Component;

class SearchCategories extends Component
{
    public $search;
    public $currentItem;
    public $parentId;

    public function render()
    {
        $label          = 'Category';
        $view           = 'livewire.search-categories';
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
