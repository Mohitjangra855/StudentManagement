@extends('layouts.app')
@section('content')
<div class="card mt-2">
    <div class="card-header">Add New teacher :</div>
    <div class="card-body">

        <form action="{{ url('/teacher') }}" method="post">
        @csrf
            <label>Name:</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Email:</label></br>
            <input type="email" name="email" id="email" class="form-control"></br>
            <label>Address:</label></br>
            <input type="text" name="address" id="address" class="form-control"></br>
            <label>Mobile:</label></br>
            <input type="text" name="phone" id="phone" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@endsection