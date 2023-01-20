@php
use App\Models\Author\Author;
use App\Models\Book\Book as Model;
use App\Models\Category\Category;
use App\Models\Publisher\Publisher;

$model = null;
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
                <div class="row">
                    <div class="col-md-3">
                        <h2>{{__('All Books')}}</h2>
                    </div>
                    <div class="offset-md-7 col-md-2">
                        @include("admin.$path.new-or-edit")
                    </div>
                </div>
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
                                    <form action="{{route("dashboard.$path.delete",$model)}}" method="post"
                                          class="form-hidden">
                                        @csrf
                                        <button class="btn btn-link">{{__('Delete')}}</button>
                                    </form>
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
            </main>
        </div>
        <div class="text-center justify-content-between">
            {{ $models->appends(request()->input())->links('admin.layouts.components.pagination') }}
        </div>

    </div>
@endsection

