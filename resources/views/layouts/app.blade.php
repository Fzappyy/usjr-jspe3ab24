<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>University Management System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <header>
            <h1>University Management System</h1>
            <nav>
                <ul>
                    <li><a href="{{ url('/show/students/all') }}">All Students</a></li>
                    <li><a href="{{ url('/show/colleges') }}">All Colleges</a></li>
                    <li><a href="{{ url('/show/departments') }}">All Departments</a></li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>&copy; 2024 University Management System</p>
        </footer>
    </div>
</body>

</html>