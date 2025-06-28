@extends('layouts.app')
@section('content')


<div class="card mt-2">
    <div class="card-header">
        <h2>Student Application</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
            <i class="fas fa-plus-circle"></i>  Add New Student
        </a>
        <br />
        <br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobile }}</td>

                        <td>
                            <a href="{{ url('/student/' . $item->id) }}" class="btn btn-info btn-sm" title="View Student">
                                <i class="fa-solid fa-eye" aria-hidden="true"></i> View
                            </a>
                            <a href="{{ url('/student/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm" title="Edit Student">
                                <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Edit
                            </a>
                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')">
                                    <i class="fa-solid fa-trash" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection