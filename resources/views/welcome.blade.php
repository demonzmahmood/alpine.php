<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div x-data="{ current: 0 }" x-init="setInterval(() => { current = (current + 1) % 4; }, 10000)">
        <h2 x-show="current === 0">Courses:</h2>
        <ul x-show="current === 0">
            @foreach ($courses as $course)
            <li>{{ $course->id }} - {{ $course->title }} - Teacher ID: {{ $course->teacher_id }}</li>
            @endforeach
        </ul>

        <h2 x-show="current === 1">Students:</h2>
        <ul x-show="current === 1">
            @foreach($students as $student)
            <li>{{ $student->id }} - {{ $student->name }}</li>
            @endforeach
        </ul>

        <h2 x-show="current === 2">Teachers:</h2>
        <ul x-show="current === 2">
            @foreach($teachers as $teacher)
            <li>{{ $teacher->id }} - {{ $teacher->name }}</li>
            @endforeach
        </ul>

        <h2 x-show="current === 3">Enrollments:</h2>
        <ul x-show="current === 3">
            @foreach($enrollments as $enrollment)
            <li>{{ $enrollment->id }} - Student ID: {{ $enrollment->student_id }} - Course ID: {{ $enrollment->course_id
                }} - Location ID: {{ $enrollment->location_id }}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>
