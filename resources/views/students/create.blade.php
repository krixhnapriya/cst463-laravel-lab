
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

    <h1>Add New Student</h1>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        Roll Number:
        <input type="text" name="roll_no" value="{{ old('roll_no') }}" required>
        <br><br>

        Name:
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br><br>

        Email:
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br><br>

        Department:
        <input type="text" name="department" value="{{ old('department', 'CSE') }}" required>
        <br><br>

        Semester:
        <input type="number" name="semester" value="{{ old('semester', 7) }}" required>
        <br><br>

        CGPA:
        <input type="number" step="0.01" name="cgpa" value="{{ old('cgpa') }}">
        <br><br>

        <button type="submit">Save Student</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to Students</a>

</body>
</html>
