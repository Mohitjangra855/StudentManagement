<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Centered Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
            background-color: #f9f9f9;
            height: 100vh;
            overflow: hidden;
        }

        /* Centered container */
        .wrapper {
            max-width: 1200px;
            margin: 0 auto;
            height: 100vh;
            position: relative;
        }

        nav.navbar {
            position: fixed;
            top: 0;
            width: 100%;
            height: 60px;
            z-index: 1000;
            background-color: #f2f2f2;
        }

        .sidebar {
            position: fixed;
            top: 60px;
            width: 200px;
            height: calc(100vh - 60px);
            background-color: #f1f1f1;
            overflow-y: auto;
        }

        /* Sidebar inside wrapper */
        .wrapper .sidebar {
            left: calc(50% - 600px);
            /* 50% - half of max-width */
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        .main-content {
            margin-top: 60px;
            margin-left: 200px;
            padding: 20px;
            height: calc(100vh - 60px);
            overflow-y: auto;
            background-color: #fff;
        }

        /* Center main content inside wrapper */
        .wrapper .main-content {
            margin-left: calc(200px + (50% - 600px));
        }

        @media screen and (max-width: 1240px) {
            .wrapper {
                max-width: 100%;
            }

            .wrapper .sidebar,
            .wrapper .main-content {
                left: 0;
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h4>Student Management Project</h4>
                </a>
            </div>
        </nav>


        <!-- Sidebar -->
        <div class="sidebar">
            <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/student') }}" class="{{ Request::is('student*') ? 'active' : '' }}">Student</a>
            <a href="{{ url('/teacher') }}" class="{{ Request::is('teacher*') ? 'active' : '' }}">Teacher</a>
            <a href="#">Courses</a>
            <a href="#">Enrollment</a>
            <a href="#">Payment</a>
        </div>

        <!-- Main Content -->
        <main>
            <div class="main-content">
                @yield('content')
            </div>

        </main>
    </div>

</body>

</html>