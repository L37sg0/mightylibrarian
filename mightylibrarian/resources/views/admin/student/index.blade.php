@php
use App\Models\Student\Student as Model;

$model = null;
@endphp
@extends('admin.layouts.app')

@include('admin.layouts.components.content-head')
@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{__('Student Name')}}</th>
                <th scope="col">{{__('Age')}}</th>
                <th scope="col">{{__('Gender')}}</th>
                <th scope="col">{{__('Email')}}</th>
                <th scope="col">{{__('Phone')}}</th>
                <th scope="col">{{__('Class')}}</th>
                <th scope="col">{{__('Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @forelse($models as $model)
            <tr>
                <td>{{$model->getAttribute(Model::FIELD_ID)}}</td>
                <td>{{$model->getAttribute(Model::FIELD_NAME)}}</td>
                @php
                    $date1 = new DateTime($model->getAttribute(Model::FIELD_DATE_OF_BIRTH));
                    $date2 = new DateTime(date('Y-m-d'));
                    $age = ($date1->diff($date2))->y . __(' y');
                @endphp
                <td>{{$age}}</td>
                <td>{{$model->getAttribute(Model::FIELD_GENDER)->name}}</td>
                <td>{{$model->getAttribute(Model::FIELD_EMAIL)}}</td>
                <td>{{$model->getAttribute(Model::FIELD_PHONE)}}</td>
                <td>{{$model->getAttribute(Model::FIELD_CLASS)}}</td>
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
@include('admin.layouts.components.content-pagination')
