@php
use App\Models\Publisher\Publisher as Model;

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
                <th scope="col">{{__('Publisher Name')}}</th>
                <th scope="col">{{__('Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @forelse($models as $model)
            <tr>
                <td>{{$model->getAttribute(Model::FIELD_ID)}}</td>
                <td>{{$model->getAttribute(Model::FIELD_NAME)}}</td>
                <td>
                    @include("admin.$path.new-or-edit")
                    @include("admin.layouts.components.actions-delete")
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">{{__('No Publishers Found')}}</td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
@include('admin.layouts.components.content-pagination')

