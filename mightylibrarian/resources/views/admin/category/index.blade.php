@php
use App\Models\Category\Category as Model;
$model = null;
@endphp
@extends('admin.layouts.app')

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

@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{__('Category Name')}}</th>
                <th scope="col">{{__('Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @forelse($models as $model)
            <tr>
                <td>{{$model->getAttribute(Model::FIELD_ID)}}</td>
                <td>{{$model->getAttribute(Model::FIELD_NAME)}}</td>
                <td>
                    @include("admin.$path.new-or-edit")
                    @include("admin.layouts.components.actions-delete")
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">{{__("No $labelAll Found")}}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection

@section('content-pagination')
    {{ $models->appends(request()->input())->links('admin.layouts.components.pagination') }}
@endsection
