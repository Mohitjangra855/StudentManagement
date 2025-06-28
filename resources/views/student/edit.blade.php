@extends('layouts.app')
@section('content')

<div class="card mt-2">
  <div class="card-header">Edit Page:</div>
  <div class="card-body">
    <form action="{{ url('student/' .$students->id) }}" method="post">
      @csrf
      @method("PUT")
      <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
      <label>Name:</label></br>
      <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
      <label>Address:</label></br>
      <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
      <label>Mobile:</label></br>
      <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
      <label for="teacher_id">Select Teacher:</label>
      <select name="teacher_id" class="form-control" required>
        @foreach($teachers as $teacher)
        @if($teacher->id == $students->teacher_id)
        <option value="{{ $teacher->id }}" selected>{{ $teacher->name }}</option>
        @else
        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
        @endif
        @endforeach
      </select><br><br>
      <div class="d-flex justify-content-between">
        <a href="{{ url('/student') }}" class="btn btn-primary "><i class="fas fa-arrow-left"></i> Back</a>
        <button type="submit" class="btn btn-success">
          <i class="fas fa-save"></i> Update
        </button>
      </div>
    </form>

  </div>
</div>

@stop