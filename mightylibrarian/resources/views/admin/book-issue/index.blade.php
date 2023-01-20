@php
use App\Models\Book\Book;
use App\Models\Book\BookIssue as Model;
use App\Models\Student\Student;

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
            @forelse($models as $model)
                <tr>
                    <td>{{$model->getAttribute(Model::FIELD_ID)}}</td>
                    <td>{{$model->getAttribute(Model::REL_STUDENT)->getAttribute(Student::FIELD_NAME)}}</td>
                    <td>{{$model->getAttribute(Model::REL_BOOK)->getAttribute(Book::FIELD_NAME)}}</td>
                    <td>{{$model->getAttribute(Model::FIELD_ISSUE_DATE)}}</td>
                    <td>{{$model->getAttribute(Model::FIELD_RETURN_DATE)}}</td>
                    @php
                        $status = $model->getAttribute(Model::FIELD_ISSUE_STATUS)->name;
                        $color  = ($model->getAttribute(Model::FIELD_ISSUE_STATUS)->value) ? 'success' : 'danger';
                    @endphp
                    <td><span class="badge bg-{{$color}}">{{$status}}</span></td>
                    <td>{{$model->getAttribute(Model::FIELD_RETURN_DAY)}}</td>
                    <td>
                        @include("admin.$path.new-or-edit")
                        @include("admin.layouts.components.actions-delete")
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">{{__("No $labelAll Found")}}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection

@section('content-pagination')
    {{ $models->appends(request()->input())->links('admin.layouts.components.pagination') }}
@endsection
