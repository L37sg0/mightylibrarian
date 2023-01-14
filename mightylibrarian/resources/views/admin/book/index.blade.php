@php
use App\Models\Author\Author;
use App\Models\Book\Book as Model;
use App\Models\Category\Category;
use App\Models\Publisher\Publisher;
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h2>{{__('All Books')}}</h2>
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
                        @forelse($books as $book)
                            <tr>
                                <td>{{$book->getAttribute(Model::FIELD_ID)}}</td>
                                <td>{{$book->getAttribute(Model::FIELD_NAME)}}</td>
                                <td>{{$book->getAttribute(Model::REL_CATEGORY)->getAttribute(Category::FIELD_NAME)}}</td>
                                <td>{{$book->getAttribute(Model::REL_AUTHOR)->getAttribute(Author::FIELD_NAME)}}</td>
                                <td>{{$book->getAttribute(Model::REL_PUBLISHER)->getAttribute(Publisher::FIELD_NAME)}}</td>
                                @php
                                    $status = $book->getAttribute(Model::FIELD_STATUS)->name;
                                    $color  = ($book->getAttribute(Model::FIELD_STATUS)->value) ? 'success' : 'danger';
                                @endphp
                                <td><span class="badge bg-{{$color}}">{{$status}}</span></td>
                                <td>
                                    <a href="#">Edit</a>
                                    <a href="#">View</a>
                                    <form action="#" method="post"
                                          class="form-hidden">
                                        <button class="btn btn-link">Delete</button>
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">{{__('No Books Found')}}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
