<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 40px;
        }

        .form-container {
            background-color: #fff;
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        label {
            font-weight: bold;
        }

        .btn-submit {
            background-color: #28a745;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #218838;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Edit Student</h2>

        <form action="{{ route('student.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $student->name }}" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ $student->email }}" required>

            <label for="department">Department:</label>
            <input type="text" name="department" value="{{ $student->department }}" required>

            <button type="submit" class="btn-submit">Update</button>
        </form>

        <a href="{{ route('student.index') }}">⬅ Back to list</a>
    </div>

</body>
</html>
