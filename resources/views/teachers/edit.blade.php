@extends('layouts.app')
@section('content')

<div class="card mt-2">
  <div class="card-header">Edit Page:</div>
  <div class="card-body">
    <form action="{{ url('/teacher/' .$teachers->id) }}" method="post">
      @csrf
      @method("PATCH")
      <input type="hidden" name="id" value="{{$teachers->id}}" id="id" />
      <label>Name:</label></br>
      <input type="text" name="name" id="name" value="{{$teachers->name}}" class="form-control"></br>
      <label>Email:</label></br>
      <input type="email" name="email" id="email" value="{{$teachers->email}}" class="form-control"></br>
      <label>Address:</label></br>
      <input type="text" name="address" id="address" value="{{$teachers->address}}" class="form-control"></br>
      <label>Mobile:</label></br>
      <input type="text" name="phone" id="phone" value="{{$teachers->phone}}" class="form-control"></br>
      <div class="d-flex justify-content-between mt-3">
        <a href="{{ url('/teacher') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
           <button type="submit" class="btn btn-success">
          <i class="fas fa-save"></i> Update
        </button>
      </div>
    </form>
  </div>
</div>
@endsection