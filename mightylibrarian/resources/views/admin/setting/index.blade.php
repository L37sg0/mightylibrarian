@php
use App\Models\Setting\Setting as Model;
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
                <th scope="col">{{__('Return Days')}}</th>
                <th scope="col">{{__('Allowed Late Days')}}</th>
                <th scope="col">{{__('Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @forelse($models as $model)
            <tr>
                <td>{{$model->getAttribute(Model::FIELD_ID)}}</td>
                <td>{{$model->getAttribute(Model::FIELD_RETURN_DAYS)}}</td>
                <td>{{$model->getAttribute(Model::FIELD_FINE)}}</td>
                <td>
                    @include("admin.$path.new-or-edit")
                    @include("admin.layouts.components.actions-delete")
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">{{__("No $labelAll Found")}}</td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
@include('admin.layouts.components.content-pagination')
