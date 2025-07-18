<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .btn-edit {
            background-color: #ffc107;
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 8px;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .success-message {
            text-align: center;
            color: green;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .action-buttons {
            display: flex;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h2>All Registered Students</h2>

    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->department }}</td>
            <td>
                <div class="action-buttons">
                    <a href="{{ route('student.edit', $student->id) }}">
                        <button type="button" class="btn-edit">Edit</button>
                    </a>

                    <form action="{{ route('student.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>

    <a href="{{ url()->previous() }}" class="back-link">⬅ Back</a>

</body>
</html>
