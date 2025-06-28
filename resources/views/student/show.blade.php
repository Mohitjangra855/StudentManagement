@extends('layouts.app')
@section('content')

<div class="card mt-2">
    <div class="card-header">Students Page:</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $students->name }}</h5>
            <p class="card-text">Address : {{ $students->address }}</p>
            <p class="card-text">Mobile : {{ $students->mobile }}</p>
            <p class="card-text">Teacher : {{ $students->teacher->name }}</p>
            <p class="card-text">Teacher ID : {{ $students->teacher_id }}</p>
            <p class="card-text">Created at : {{ $students->created_at }}</p>
            <p class="card-text">Updated at : {{ $students->updated_at }}</p>
            <a href="{{ url('student') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
        </div>

        </hr>

    </div>
</div>
@endsection