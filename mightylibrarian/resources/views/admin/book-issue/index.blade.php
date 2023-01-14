@php
use App\Models\Book\Book;
use App\Models\Book\BookIssue as Model;
use App\Models\Student\Student;
@endphp
@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h2>{{__('All Book Issues')}}</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{__('Student')}}</th>
                            <th scope="col">{{__('Book')}}</th>
                            <th scope="col">{{__('Issue Date')}}</th>
                            <th scope="col">{{__('Return Date')}}</th>
                            <th scope="col">{{__('Status')}}</th>
                            <th scope="col">{{__('Day of Return')}}</th>
                            <th scope="col">{{__('Actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($bookIssues as $bookIssue)
                            <tr>
                                <td>{{$bookIssue->getAttribute(Model::FIELD_ID)}}</td>
                                <td>{{$bookIssue->getAttribute(Model::REL_STUDENT)->getAttribute(Student::FIELD_NAME)}}</td>
                                <td>{{$bookIssue->getAttribute(Model::REL_BOOK)->getAttribute(Book::FIELD_NAME)}}</td>
                                <td>{{$bookIssue->getAttribute(Model::FIELD_ISSUE_DATE)}}</td>
                                <td>{{$bookIssue->getAttribute(Model::FIELD_RETURN_DATE)}}</td>
                                @php
                                    $status = $bookIssue->getAttribute(Model::FIELD_ISSUE_STATUS)->name;
                                    $color  = ($bookIssue->getAttribute(Model::FIELD_ISSUE_STATUS)->value) ? 'success' : 'danger';
                                @endphp
                                <td><span class="badge bg-{{$color}}">{{$status}}</span></td>
                                <td>{{$bookIssue->getAttribute(Model::FIELD_RETURN_DAY)}}</td>
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
                                <td colspan="3" class="text-center">{{__('No Book Issues Found')}}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
