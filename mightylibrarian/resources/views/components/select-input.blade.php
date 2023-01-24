<div class="form-group">
    <label for="{{$id}}">{{$label}}</label>
    <select
        class="form-select rounded-3"
        aria-label="{{$label}}"
        id="{{$id}}"
        name="{{$name}}">
        <option value="{{$currentCase->value}}" selected>{{$currentCase->name}}</option>
        @foreach($cases as $case)
            @if($case !== $currentCase)
                <option value="{{$case->value}}">{{$case->name}}</option>
            @endif
        @endforeach
    </select>
</div>
