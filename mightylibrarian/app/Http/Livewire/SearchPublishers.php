<?php

namespace App\Http\Livewire;

use App\Models\Publisher\Publisher as Model;
use Livewire\Component;

class SearchPublishers extends Component
{
    public $search;
    public $currentItem;
    public $parentId;

    public function render()
    {
        $label          = 'Publisher';
        $view           = 'livewire.search-publishers';
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
