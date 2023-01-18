@php
use App\Models\Author\Author as Model;

$author = null;
@endphp
@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
            <div class="row">
                <div class="col-md-3">
                    <h2>{{__('All Authors')}}</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    @include('admin.author.new-or-edit')
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('Author Name')}}</th>
                        <th scope="col">{{__('Actions')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($authors as $author)
                    <tr>
                        <td>{{$author->getAttribute(Model::FIELD_ID)}}</td>
                        <td>{{$author->getAttribute(Model::FIELD_NAME)}}</td>
                        <td>
                            @include('admin.author.new-or-edit')
                            <form action="{{route('dashboard.authors.delete',$author)}}" method="post"
                                  class="form-hidden">
                                @csrf
                                <button class="btn btn-link">{{__('Delete')}}</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">{{__('No Authors Found')}}</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <div class="text-center justify-content-between">
        {{ $authors->appends(request()->input())->links('admin.layouts.components.pagination') }}
    </div>

</div>
@endsection
