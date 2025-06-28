@extends('layouts.app')
@section('content')


<div class="d-flex flex-row justify-content-between px-2">
    <h1>Teachers and their Students</h1>
    <a href="teacher/create"><button class="btn btn-success"><i class="fas fa-plus-circle"></i> Create new</button> </a>
</div>

@foreach($teachers as $teacher)
<div class="card mb-3">
    <div class="card-header">
        <h3>{{ $teacher->name }}</h3>
        <p>Email: {{ $teacher->email }} | Phone: {{ $teacher->phone }}</p>
        <p>Address: {{ $teacher->address }}</p>
    </div>
    <div class="d-flex flex-row justify-content-between ">
        <div class="card-body">
            <h5>Students:</h5>
            @if($teacher->students->count() > 0)
            <ul>
                @foreach($teacher->students as $student)
                <li>{{ $student->name }} - {{ $student->email }} - {{ $student->phone }}</li>
                @endforeach
            </ul>
            @else
            <p>No students assigned.</p>
            @endif
        </div>
        <div class="card-body d-flex flex-column  align-items-end justify-content-end gap-2">
            <a href="{{url('/teacher/'.$teacher->id.'/edit')}}"> <button class="btn btn-success text-center " style="width: 100px;"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Edit</button></a>
            <form action="{{url('/teacher'.$teacher->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger text-center    " style="width: 100px" onclick="return confirm('Confirm delete?')"><i class="fa-solid fa-trash" aria-hidden="true"></i> Delete</button>
            </form>

        </div>

    </div>
</div>
@endforeach




@endsection