<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-body text-center p-4">
                
                <!-- Profile Initial using Bootstrap utilities -->
                <div class="d-flex justify-content-center align-items-center bg-primary rounded-circle mb-3 mx-auto" style="width: 120px; height: 120px; font-size: 50px; color: #fff; font-weight: bold;">
                    {{ strtoupper(substr($student->name, 0, 1)) }}
                </div>

                <h3 class="mb-4">Student Detail</h3>

                <!-- Student Info -->
                <ul class="list-group list-group-flush text-start mb-4">
                    <li class="list-group-item">
                        <strong>Name:</strong> {{ $student->name }}
                    </li>
                    <li class="list-group-item">
                        <strong>Email:</strong> {{ $student->email }}
                    </li>
                    <li class="list-group-item">
                        <strong>Department:</strong> {{ $student->department }}
                    </li>
                </ul>

                <!-- Back Button -->
                <a href="{{ route('student.index') }}" class="btn btn-primary">
                    ⬅ Back to Student List
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>