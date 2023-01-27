<?php

namespace App\Http\Livewire;

use App\Models\Student\Student as Model;
use Livewire\Component;

class SearchStudents extends Component
{
    public $search;
    public $currentItem;
    public $parentId;

    public function render()
    {
        $label          = 'Student';
        $view           = 'livewire.search-students';
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
