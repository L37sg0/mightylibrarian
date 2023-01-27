@php
    use App\Models\Author\Author as Model;
    use App\Models\Globals;
@endphp
<div
    wire:model="search">
    <label for="{{strtolower($label)}}{{$parentId}}" class="form-label">{{__($label)}}</label>
    <input type="text"
           class="form-control rounded-3"
           id="{{strtolower($label)}}{{$parentId}}"
           name="{{strtolower($label)}}_id"
           placeholder="Search for {{strtolower($label)}}..."
           value="{{($currentItem) ? $currentItem->getAttribute(Model::FIELD_NAME) . Globals::SEARCH_DIVIDER . $currentItem->getAttribute(Model::FIELD_ID) : ''}}"
           list="{{strtolower($label)}}Options{{$parentId}}"
    >
    <datalist id="{{strtolower($label)}}Options{{$parentId}}">
        @foreach($items as $item)
            <option
                value="{{$item->getAttribute(Model::FIELD_NAME) . Globals::SEARCH_DIVIDER . $item->getAttribute(Model::FIELD_ID)}}">
        @endforeach
    </datalist>
</div>
