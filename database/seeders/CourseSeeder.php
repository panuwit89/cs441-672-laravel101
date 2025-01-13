<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->courseCreate(Storage::json(path: '2560.json'), '2560');
        $this->courseCreate(Storage::json(path: '2565.json'), '2565');
    }

    private function courseCreate(array $courses, string $curriculumNumber): void
    {
        foreach ($courses as $course) {
            $engName = preg_replace('/^\(|\)$/', '', $course['eng_name']);
            $course['curriculum_number'] = $curriculumNumber;
            $course['eng_name'] = $engName;
            $course['lecture_hours'] = $course['lecture_hours'] ?? 0;
            $course['practice_hours'] = $course['practice_hours'] ?? 0;
            $course['self_study_hours'] = $course['self_study_hours'] ?? 0;
            Course::create($course);
        }
    }
}
