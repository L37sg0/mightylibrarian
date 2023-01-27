@extends('admin.layouts.app')

@section('content-head')
    <div class="row">
        <div class="col-md-3">
            <h2>{{__("Dashboard")}}</h2>
        </div>
    </div>
@endsection

@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-5">
        @foreach($report as $key => $value)
        <div class="col">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><h5>{{__(ucfirst($key))}}</h5></div>
                <div class="card-body">
                <h1 class="card-title">{{$value}}</h1>
            </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
