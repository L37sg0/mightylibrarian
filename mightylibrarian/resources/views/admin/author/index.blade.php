@php
use App\Models\Author\Author as Model;
@endphp
@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2>{{__('All Authors')}}</h2>
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

                            <button type="button" class="btn btn-link" data-bs-toggle="modal"
                                    data-bs-target="#authorCreateViewEdit{{$author->getAttribute(Model::FIELD_ID)}}">Edit
                            </button>
                            <form action="#" method="post"
                                  class="form-hidden">
                                @csrf
                                <button class="btn btn-link">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <div class="modal fade" id="authorCreateViewEdit{{$author->getAttribute(Model::FIELD_ID)}}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content rounded-4 shadow">
                                <div class="modal-header p-5 pb-4 border-bottom-0">
                                    <h1 class="fw-bold mb-0 fs-2">Edit Author</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <form class="form-hidden" action="{{route('dashboard.authors.update', $author)}}" method="post">
                                    @csrf
                                    <div class="modal-body p-5 pt-0">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-3" id="name"
                                                   value="{{$author->getAttribute(Model::FIELD_NAME)}}">
                                            <label for="name">Author Name</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
</div>
@endsection
