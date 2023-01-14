@php
use App\Models\Student\Student as Model;
@endphp
@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2>{{__('All Students')}}</h2>
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
                    @forelse($students as $student)
                    <tr>
                        <td>{{$student->getAttribute(Model::FIELD_ID)}}</td>
                        <td>{{$student->getAttribute(Model::FIELD_NAME)}}</td>
                        @php
                            $date1 = new DateTime($student->getAttribute(Model::FIELD_DATE_OF_BIRTH));
                            $date2 = new DateTime(date('Y-m-d'));
                            $age = ($date1->diff($date2))->y . __(' y');
                        @endphp
                        <td>{{$age}}</td>
                        <td>{{$student->getAttribute(Model::FIELD_GENDER)->name}}</td>
                        <td>{{$student->getAttribute(Model::FIELD_EMAIL)}}</td>
                        <td>{{$student->getAttribute(Model::FIELD_PHONE)}}</td>
                        <td>{{$student->getAttribute(Model::FIELD_CLASS)}}</td>
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
                            <td colspan="8" class="text-center">{{__('No Students Found')}}</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection
