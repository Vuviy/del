<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentLessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lesson_id' => Lesson::query()->inRandomOrder()->value('id'),
            'student_id' => Student::query()->inRandomOrder()->value('id')
        ];
    }
}
