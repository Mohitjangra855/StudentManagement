@extends('layouts.app')
@section('content')

<div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="text-center">
        <h1 class="display-3 mb-4 text-success">Welcome to Student Management System</h1>
        <p class="lead mb-5 text-secondary">
            Manage students, teachers, courses, enrollments, and payments easily.<br>
            Use the sidebar to navigate through the application.
        </p>
        <a href="{{ url('/student') }}" class="btn btn-primary btn-lg me-2">
            <i class="fa-solid fa-users"></i> Manage Students
        </a>
        <a href="{{ url('/teacher') }}" class="btn btn-outline-success btn-lg">
            <i class="fa-solid fa-chalkboard-teacher"></i> Manage Teachers
        </a>
    </div>
</div>
@endsection