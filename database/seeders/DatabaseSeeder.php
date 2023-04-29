<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Location;
use App\Models\Enrollment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $student1 = Student::create(['name' => 'Mahmood Ali']);
        $student2 = Student::create(['name' => 'Abdulla Majeed']);
        $student3 = Student::create(['name' => 'Mohammed Ebrahim']);

        $teacher1 = Teacher::create(['name' => 'Danish Naseem']);
        $teacher2 = Teacher::create(['name' => 'Usman Iftikhar']);
        $teacher3 = Teacher::create(['name' => 'Divanoli Mydeen']);

        $course1 = Course::create(['title' => 'Laravel', 'teacher_id' => $teacher1->id]);
        $course2 = Course::create(['title' => 'Livewire', 'teacher_id' => $teacher2->id]);
        $course3 = Course::create(['title' => 'ReactJs', 'teacher_id' => $teacher3->id]);

        $location1 = Location::create(['name' => 'Room 100']);
        $location2 = Location::create(['name' => 'Room 101']);
        $location3 = Location::create(['name' => 'Room 102']);

        $enrollment1 = Enrollment::create(['student_id' => $student1->id, 'course_id' => $course1->id, 'location_id' => $location1->id]);
        $enrollment2 = Enrollment::create(['student_id' => $student2->id, 'course_id' => $course2->id, 'location_id' => $location2->id]);
        $enrollment3 = Enrollment::create(['student_id' => $student3->id, 'course_id' => $course3->id, 'location_id' => $location3->id]);
    }
}
