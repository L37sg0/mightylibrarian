@php
use App\Models\Category\Category as Model;
@endphp
@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2>{{__('All Categories')}}</h2>
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
                    @forelse($categories as $category)
                    <tr>
                        <td>{{$category->getAttribute(Model::FIELD_ID)}}</td>
                        <td>{{$category->getAttribute(Model::FIELD_NAME)}}</td>
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
                            <td colspan="3" class="text-center">{{__('No Categories Found')}}</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection
