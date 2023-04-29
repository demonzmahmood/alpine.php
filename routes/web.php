<?php

use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Location;
use App\Models\Enrollment;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $courses = Course::all();
    $students = Student::all();
    $teachers = Teacher::all();
    $locations = Location::all();
    $enrollments = Enrollment::all();

    return view('welcome', compact(
        'courses',
        'students',
        'teachers',
        'locations',
        'enrollments',
        )
    );
});
