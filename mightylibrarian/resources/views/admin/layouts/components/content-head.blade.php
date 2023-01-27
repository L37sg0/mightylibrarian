@section('content-head')
<div class="row">
    <div class="col-md-3">
        <h2>{{__("All $labelAll")}}</h2>
    </div>
    <div class="offset-md-7 col-md-2">
        @include("admin.$path.new-or-edit")
    </div>
</div>
@endsection
