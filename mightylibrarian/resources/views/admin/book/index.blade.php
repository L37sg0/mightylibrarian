@php
use App\Models\Author\Author;
use App\Models\Book\Book as Model;
use App\Models\Category\Category;
use App\Models\Publisher\Publisher;

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
                <th scope="col">{{__('Book Name')}}</th>
                <th scope="col">{{__('Category')}}</th>
                <th scope="col">{{__('Author')}}</th>
                <th scope="col">{{__('Publisher')}}</th>
                <th scope="col">{{__('Status')}}</th>
                <th scope="col">{{__('Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @forelse($models as $model)
                <tr>
                    <td>{{$model->getAttribute(Model::FIELD_ID)}}</td>
                    <td>{{$model->getAttribute(Model::FIELD_NAME)}}</td>
                    <td>{{$model->getAttribute(Model::REL_CATEGORY)->getAttribute(Category::FIELD_NAME)}}</td>
                    <td>{{$model->getAttribute(Model::REL_AUTHOR)->getAttribute(Author::FIELD_NAME)}}</td>
                    <td>{{$model->getAttribute(Model::REL_PUBLISHER)->getAttribute(Publisher::FIELD_NAME)}}</td>
                    @php
                        $status = $model->getAttribute(Model::FIELD_STATUS)->name;
                        $color  = ($model->getAttribute(Model::FIELD_STATUS)->value) ? 'success' : 'danger';
                    @endphp
                    <td><span class="badge bg-{{$color}}">{{$status}}</span></td>
                    <td>
                        @include("admin.$path.new-or-edit")
                        @include("admin.layouts.components.actions-delete")
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">{{__('No Books Found')}}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection

@section('content-pagination')
    {{ $models->appends(request()->input())->links('admin.layouts.components.pagination') }}
@endsection
