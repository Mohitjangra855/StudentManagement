@extends('layouts.app')
@section('content')

<div class="card mt-2">
    <div class="card-header">Add New Student Page:</div>
    <div class="card-body">

        <form action="{{ url('/student') }}" method="post">
        @csrf
            <label>Name:</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Address:</label></br>
            <input type="text" name="address" id="address" class="form-control"></br>
            <label>Mobile:</label></br>
            <input type="text" name="mobile" id="mobile" class="form-control"></br>
            <label for="teacher_id">Select Teacher:</label>
            <select name="teacher_id" class="form-control" required>
                <option value="" >-- Select Teacher --</option>
                @foreach($teachers as $teacher)
                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select><br><br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop