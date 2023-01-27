@php
use App\Models\Student\Address as Model;
/** @var array $currentAddress */
@endphp
<div class="form-group" id="{{$name}}" name="{{$name}}">
    <h3>Address</h3>
    @foreach(Model::FILLABLE as $attribute)
        @php
        $label = '';
        foreach(explode('_',$attribute) as $part) {
            $label = $label . ucfirst($part) . ' ';
        }
        $placeholder = "Type " . strtolower($label);
        $value = $currentAddress[$attribute];
        @endphp
        <x:text-input id="{{$id}}.{{$attribute}}"
                      name="{{$name}}.{{$attribute}}"
                      :label="$label"
                      placeholder="{{$placeholder}}"
                      value="{{$value}}"
        />
    @endforeach
</div>
