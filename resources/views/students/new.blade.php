<html>
<head>
    <title>New Student</title>
</head>
<body>
    <h1>Create New Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
        </div>
        <div>
            <label for="grade">Grade:</label>
            <input type="text" id="grade" name="grade" required>
        </div>
        <div>
            <button type="submit">Create Student</button>
        </div>
    </form>
    <a href="{{ route('students.index') }}">Back to Students List</a>
</body>
</html>
