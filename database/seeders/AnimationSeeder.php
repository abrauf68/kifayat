<?php

namespace Database\Seeders;

use App\Models\AnimationClass;
use App\Models\ChapterContent;
use App\Models\ClassChapter;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AnimationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animationClasses = [
            [
                'name' => 'Class 1',
                'slug' => 'class-1',
            ],
            [
                'name' => 'Class 2',
                'slug' => 'class-2',
            ],
            [
                'name' => 'Class 3',
                'slug' => 'class-3',
            ],
            [
                'name' => 'Class 4',
                'slug' => 'class-4',
            ],
            [
                'name' => 'Class 5',
                'slug' => 'class-5',
            ],
            [
                'name' => 'Class 6',
                'slug' => 'class-6',
            ],
            [
                'name' => 'Class 7',
                'slug' => 'class-7',
            ],
            [
                'name' => 'Class 8',
                'slug' => 'class-8',
            ],
        ];

        foreach ($animationClasses as $class) {
            AnimationClass::create($class);
        }

        $classChapters = [
            //class 1
            [
                'class_id' => 1,
                'name' => 'Chapter 1',
                'slug' => 'class-1-chapter-1',
                'worksheet' => 'assets/worksheets/class1/chapter1.jpg',
            ],
            [
                'class_id' => 1,
                'name' => 'Chapter 2',
                'slug' => 'class-1-chapter-2',
                'worksheet' => 'assets/worksheets/class1/chapter2.jpg',
            ],
            [
                'class_id' => 1,
                'name' => 'Chapter 3',
                'slug' => 'class-1-chapter-3',
                'worksheet' => 'assets/worksheets/class1/chapter3.jpg',
            ],
            [
                'class_id' => 1,
                'name' => 'Chapter 4',
                'slug' => 'class-1-chapter-4',
                'worksheet' => 'assets/worksheets/class1/chapter4.jpg',
            ],
            [
                'class_id' => 1,
                'name' => 'Chapter 5',
                'slug' => 'class-1-chapter-5',
                'worksheet' => 'assets/worksheets/class1/chapter5.jpg',
            ],
            [
                'class_id' => 1,
                'name' => 'Chapter 6',
                'slug' => 'class-1-chapter-6',
                'worksheet' => 'assets/worksheets/class1/chapter6.jpg',
            ],
            [
                'class_id' => 1,
                'name' => 'Chapter 7',
                'slug' => 'class-1-chapter-7',
                'worksheet' => 'assets/worksheets/class1/chapter7.jpg',
            ],
            [
                'class_id' => 1,
                'name' => 'Chapter 8',
                'slug' => 'class-1-chapter-8',
                'worksheet' => 'assets/worksheets/class1/chapter8.jpg',
            ],


            //class 2
            [
                'class_id' => 2,
                'name' => 'Chapter 1',
                'slug' => 'class-2-chapter-1',
                'worksheet' => 'assets/worksheets/class2/chapter1.jpg',
            ],
            [
                'class_id' => 2,
                'name' => 'Chapter 2',
                'slug' => 'class-2-chapter-2',
                'worksheet' => 'assets/worksheets/class2/chapter2.jpg',
            ],
            [
                'class_id' => 2,
                'name' => 'Chapter 3',
                'slug' => 'class-2-chapter-3',
                'worksheet' => 'assets/worksheets/class2/chapter3.jpg',
            ],
            [
                'class_id' => 2,
                'name' => 'Chapter 4',
                'slug' => 'class-2-chapter-4',
                'worksheet' => 'assets/worksheets/class2/chapter4.jpg',
            ],
            [
                'class_id' => 2,
                'name' => 'Chapter 5',
                'slug' => 'class-2-chapter-5',
                'worksheet' => 'assets/worksheets/class2/chapter5.jpg',
            ],
            [
                'class_id' => 2,
                'name' => 'Chapter 6',
                'slug' => 'class-2-chapter-6',
                'worksheet' => 'assets/worksheets/class2/chapter6.jpg',
            ],
            [
                'class_id' => 2,
                'name' => 'Chapter 7',
                'slug' => 'class-2-chapter-7',
                'worksheet' => 'assets/worksheets/class2/chapter7.jpg',
            ],
            [
                'class_id' => 2,
                'name' => 'Chapter 8',
                'slug' => 'class-2-chapter-8',
                'worksheet' => 'assets/worksheets/class2/chapter8.jpg',
            ],
            [
                'class_id' => 2,
                'name' => 'Chapter 9',
                'slug' => 'class-2-chapter-9',
                'worksheet' => 'assets/worksheets/class2/chapter9.jpg',
            ],


            //class 3
            [
                'class_id' => 3,
                'name' => 'Chapter 1',
                'slug' => 'class-3-chapter-1',
                'worksheet' => 'assets/worksheets/class3/chapter1.jpg',
            ],
            [
                'class_id' => 3,
                'name' => 'Chapter 2',
                'slug' => 'class-3-chapter-2',
                'worksheet' => 'assets/worksheets/class3/chapter2.jpg',
            ],
            [
                'class_id' => 3,
                'name' => 'Chapter 3',
                'slug' => 'class-3-chapter-3',
                'worksheet' => 'assets/worksheets/class3/chapter3.jpg',
            ],
            [
                'class_id' => 3,
                'name' => 'Chapter 4',
                'slug' => 'class-3-chapter-4',
                'worksheet' => 'assets/worksheets/class3/chapter4.jpg',
            ],
            [
                'class_id' => 3,
                'name' => 'Chapter 5',
                'slug' => 'class-3-chapter-5',
                'worksheet' => 'assets/worksheets/class3/chapter5.jpg',
            ],
            [
                'class_id' => 3,
                'name' => 'Chapter 6',
                'slug' => 'class-3-chapter-6',
                'worksheet' => 'assets/worksheets/class3/chapter6.jpg',
            ],
            [
                'class_id' => 3,
                'name' => 'Chapter 7',
                'slug' => 'class-3-chapter-7',
                'worksheet' => 'assets/worksheets/class3/chapter7.jpg',
            ],
            [
                'class_id' => 3,
                'name' => 'Chapter 8',
                'slug' => 'class-3-chapter-8',
                'worksheet' => 'assets/worksheets/class3/chapter8.jpg',
            ],
            [
                'class_id' => 3,
                'name' => 'Chapter 9',
                'slug' => 'class-3-chapter-9',
                'worksheet' => 'assets/worksheets/class3/chapter9.jpg',
            ],
            [
                'class_id' => 3,
                'name' => 'Chapter 10',
                'slug' => 'class-3-chapter-10',
                'worksheet' => 'assets/worksheets/class3/chapter10.jpg',
            ],


            //class 4
            [
                'class_id' => 4,
                'name' => 'Chapter 1',
                'slug' => 'class-4-chapter-1',
                'worksheet' => 'assets/worksheets/class4/chapter1.jpg',
            ],
            [
                'class_id' => 4,
                'name' => 'Chapter 2',
                'slug' => 'class-4-chapter-2',
                'worksheet' => 'assets/worksheets/class4/chapter2.jpg',
            ],
            [
                'class_id' => 4,
                'name' => 'Chapter 3',
                'slug' => 'class-4-chapter-3',
                'worksheet' => 'assets/worksheets/class4/chapter3.jpg',
            ],
            [
                'class_id' => 4,
                'name' => 'Chapter 4',
                'slug' => 'class-4-chapter-4',
                'worksheet' => 'assets/worksheets/class4/chapter4.jpg',
            ],
            [
                'class_id' => 4,
                'name' => 'Chapter 5',
                'slug' => 'class-4-chapter-5',
                'worksheet' => 'assets/worksheets/class4/chapter5.jpg',
            ],
            [
                'class_id' => 4,
                'name' => 'Chapter 6',
                'slug' => 'class-4-chapter-6',
                'worksheet' => 'assets/worksheets/class4/chapter6.jpg',
            ],
            [
                'class_id' => 4,
                'name' => 'Chapter 7',
                'slug' => 'class-4-chapter-7',
                'worksheet' => 'assets/worksheets/class4/chapter7.jpg',
            ],
            [
                'class_id' => 4,
                'name' => 'Chapter 8',
                'slug' => 'class-4-chapter-8',
                'worksheet' => 'assets/worksheets/class4/chapter8.jpg',
            ],
            [
                'class_id' => 4,
                'name' => 'Chapter 9',
                'slug' => 'class-4-chapter-9',
                'worksheet' => 'assets/worksheets/class4/chapter9.jpg',
            ],
            [
                'class_id' => 4,
                'name' => 'Chapter 10',
                'slug' => 'class-4-chapter-10',
                'worksheet' => 'assets/worksheets/class4/chapter10.jpg',
            ],

            //class 5
            [
                'class_id' => 5,
                'name' => 'Chapter 1',
                'slug' => 'class-5-chapter-1',
                'worksheet' => 'assets/worksheets/class5/chapter1.jpg',
            ],
            [
                'class_id' => 5,
                'name' => 'Chapter 2',
                'slug' => 'class-5-chapter-2',
                'worksheet' => 'assets/worksheets/class5/chapter2.jpg',
            ],
            [
                'class_id' => 5,
                'name' => 'Chapter 3',
                'slug' => 'class-5-chapter-3',
                'worksheet' => 'assets/worksheets/class5/chapter3.jpg',
            ],
            [
                'class_id' => 5,
                'name' => 'Chapter 4',
                'slug' => 'class-5-chapter-4',
                'worksheet' => 'assets/worksheets/class5/chapter4.jpg',
            ],
            [
                'class_id' => 5,
                'name' => 'Chapter 5',
                'slug' => 'class-5-chapter-5',
                'worksheet' => 'assets/worksheets/class5/chapter5.jpg',
            ],
            [
                'class_id' => 5,
                'name' => 'Chapter 6',
                'slug' => 'class-5-chapter-6',
                'worksheet' => 'assets/worksheets/class5/chapter6.jpg',
            ],
            [
                'class_id' => 5,
                'name' => 'Chapter 7',
                'slug' => 'class-5-chapter-7',
                'worksheet' => 'assets/worksheets/class5/chapter7.jpg',
            ],
            [
                'class_id' => 5,
                'name' => 'Chapter 8',
                'slug' => 'class-5-chapter-8',
                'worksheet' => 'assets/worksheets/class5/chapter8.jpg',
            ],
            [
                'class_id' => 5,
                'name' => 'Chapter 9',
                'slug' => 'class-5-chapter-9',
                'worksheet' => 'assets/worksheets/class5/chapter9.jpg',
            ],
            [
                'class_id' => 5,
                'name' => 'Chapter 10',
                'slug' => 'class-5-chapter-10',
                'worksheet' => 'assets/worksheets/class5/chapter10.jpg',
            ],


            //class 6
            [
                'class_id' => 6,
                'name' => 'Chapter 1',
                'slug' => 'class-6-chapter-1',
                'worksheet' => 'assets/worksheets/class6/chapter1.jpg',
            ],
            [
                'class_id' => 6,
                'name' => 'Chapter 2',
                'slug' => 'class-6-chapter-2',
                'worksheet' => 'assets/worksheets/class6/chapter2.jpg',
            ],
            [
                'class_id' => 6,
                'name' => 'Chapter 3',
                'slug' => 'class-6-chapter-3',
                'worksheet' => 'assets/worksheets/class6/chapter3.jpg',
            ],
            [
                'class_id' => 6,
                'name' => 'Chapter 4',
                'slug' => 'class-6-chapter-4',
                'worksheet' => 'assets/worksheets/class6/chapter4.jpg',
            ],
            [
                'class_id' => 6,
                'name' => 'Chapter 5',
                'slug' => 'class-6-chapter-5',
                'worksheet' => 'assets/worksheets/class6/chapter5.jpg',
            ],
            [
                'class_id' => 6,
                'name' => 'Chapter 6',
                'slug' => 'class-6-chapter-6',
                'worksheet' => 'assets/worksheets/class6/chapter6.jpg',
            ],
            [
                'class_id' => 6,
                'name' => 'Chapter 7',
                'slug' => 'class-6-chapter-7',
                'worksheet' => 'assets/worksheets/class6/chapter7.jpg',
            ],
            [
                'class_id' => 6,
                'name' => 'Chapter 8',
                'slug' => 'class-6-chapter-8',
                'worksheet' => 'assets/worksheets/class6/chapter8.jpg',
            ],
            [
                'class_id' => 6,
                'name' => 'Chapter 9',
                'slug' => 'class-6-chapter-9',
                'worksheet' => 'assets/worksheets/class6/chapter9.jpg',
            ],
            [
                'class_id' => 6,
                'name' => 'Chapter 10',
                'slug' => 'class-6-chapter-10',
                'worksheet' => 'assets/worksheets/class6/chapter10.jpg',
            ],


            //class 7
            [
                'class_id' => 7,
                'name' => 'Chapter 1',
                'slug' => 'class-7-chapter-1',
                'worksheet' => 'assets/worksheets/class7/chapter1.jpg',
            ],
            [
                'class_id' => 7,
                'name' => 'Chapter 2',
                'slug' => 'class-7-chapter-2',
                'worksheet' => 'assets/worksheets/class7/chapter2.jpg',
            ],
            [
                'class_id' => 7,
                'name' => 'Chapter 3',
                'slug' => 'class-7-chapter-3',
                'worksheet' => 'assets/worksheets/class7/chapter3.jpg',
            ],
            [
                'class_id' => 7,
                'name' => 'Chapter 4',
                'slug' => 'class-7-chapter-4',
                'worksheet' => 'assets/worksheets/class7/chapter4.jpg',
            ],
            [
                'class_id' => 7,
                'name' => 'Chapter 5',
                'slug' => 'class-7-chapter-5',
                'worksheet' => 'assets/worksheets/class7/chapter5.jpg',
            ],
            [
                'class_id' => 7,
                'name' => 'Chapter 6',
                'slug' => 'class-7-chapter-6',
                'worksheet' => 'assets/worksheets/class7/chapter6.jpg',
            ],
            [
                'class_id' => 7,
                'name' => 'Chapter 7',
                'slug' => 'class-7-chapter-7',
                'worksheet' => 'assets/worksheets/class7/chapter7.jpg',
            ],
            [
                'class_id' => 7,
                'name' => 'Chapter 8',
                'slug' => 'class-7-chapter-8',
                'worksheet' => 'assets/worksheets/class7/chapter8.jpg',
            ],
            [
                'class_id' => 7,
                'name' => 'Chapter 9',
                'slug' => 'class-7-chapter-9',
                'worksheet' => 'assets/worksheets/class7/chapter9.jpg',
            ],
            [
                'class_id' => 7,
                'name' => 'Chapter 10',
                'slug' => 'class-7-chapter-10',
                'worksheet' => 'assets/worksheets/class7/chapter10.jpg',
            ],
            [
                'class_id' => 7,
                'name' => 'Chapter 11',
                'slug' => 'class-7-chapter-11',
                'worksheet' => 'assets/worksheets/class7/chapter11.jpg',
            ],


            //class 8
            [
                'class_id' => 8,
                'name' => 'Chapter 1',
                'slug' => 'class-8-chapter-1',
                'worksheet' => 'assets/worksheets/class8/chapter1.jpg',
            ],
            [
                'class_id' => 8,
                'name' => 'Chapter 2',
                'slug' => 'class-8-chapter-2',
                'worksheet' => 'assets/worksheets/class8/chapter2.jpg',
            ],
            [
                'class_id' => 8,
                'name' => 'Chapter 3',
                'slug' => 'class-8-chapter-3',
                'worksheet' => 'assets/worksheets/class8/chapter3.jpg',
            ],
            [
                'class_id' => 8,
                'name' => 'Chapter 4',
                'slug' => 'class-8-chapter-4',
                'worksheet' => 'assets/worksheets/class8/chapter4.jpg',
            ],
            [
                'class_id' => 8,
                'name' => 'Chapter 5',
                'slug' => 'class-8-chapter-5',
                'worksheet' => 'assets/worksheets/class8/chapter5.jpg',
            ],
            [
                'class_id' => 8,
                'name' => 'Chapter 6',
                'slug' => 'class-8-chapter-6',
                'worksheet' => 'assets/worksheets/class8/chapter6.jpg',
            ],
            [
                'class_id' => 8,
                'name' => 'Chapter 7',
                'slug' => 'class-8-chapter-7',
                'worksheet' => 'assets/worksheets/class8/chapter7.jpg',
            ],
            [
                'class_id' => 8,
                'name' => 'Chapter 8',
                'slug' => 'class-8-chapter-8',
                'worksheet' => 'assets/worksheets/class8/chapter8.jpg',
            ],
            [
                'class_id' => 8,
                'name' => 'Chapter 9',
                'slug' => 'class-8-chapter-9',
                'worksheet' => 'assets/worksheets/class8/chapter9.jpg',
            ],
            [
                'class_id' => 8,
                'name' => 'Chapter 10',
                'slug' => 'class-8-chapter-10',
                'worksheet' => 'assets/worksheets/class8/chapter10.jpg',
            ],
            [
                'class_id' => 8,
                'name' => 'Chapter 11',
                'slug' => 'class-8-chapter-11',
                'worksheet' => 'assets/worksheets/class8/chapter11.jpg',
            ],

        ];

        foreach ($classChapters as $chapter) {
            ClassChapter::create($chapter);
        }

        $chapterContents = [
            // chapter 1 (4 exercises)
            [
                'chapter_id' => 1,
                'title' => 'Excercise 1.1',
                'content_url' => 'assets/animations/class1/chapter1/Ch_01_LS_01.swf',
            ],
            [
                'chapter_id' => 1,
                'title' => 'Excercise 1.2',
                'content_url' => 'assets/animations/class1/chapter1/Ch_01_LS_02.swf',
            ],
            [
                'chapter_id' => 1,
                'title' => 'Excercise 1.3',
                'content_url' => 'assets/animations/class1/chapter1/Ch_01_LS_03.swf',
            ],
            [
                'chapter_id' => 1,
                'title' => 'Excercise 1.4',
                'content_url' => 'assets/animations/class1/chapter1/Ch_01_LS_04.swf',
            ],

            // chapter 2 (3 exercises)
            [
                'chapter_id' => 2,
                'title' => 'Excercise 2.1',
                'content_url' => 'assets/animations/class1/chapter2/Ch_02_LS_01.swf',
            ],
            [
                'chapter_id' => 2,
                'title' => 'Excercise 2.2',
                'content_url' => 'assets/animations/class1/chapter2/Ch_02_LS_02.swf',
            ],
            [
                'chapter_id' => 2,
                'title' => 'Excercise 2.3',
                'content_url' => 'assets/animations/class1/chapter2/Ch_02_LS_03.swf',
            ],

            // chapter 3 (3 exercises)
            [
                'chapter_id' => 3,
                'title' => 'Excercise 3.1',
                'content_url' => 'assets/animations/class1/chapter3/Ch_03_LS_01.swf',
            ],
            [
                'chapter_id' => 3,
                'title' => 'Excercise 3.2',
                'content_url' => 'assets/animations/class1/chapter3/Ch_03_LS_02.swf',
            ],
            [
                'chapter_id' => 3,
                'title' => 'Excercise 3.3',
                'content_url' => 'assets/animations/class1/chapter3/Ch_03_LS_03.swf',
            ],

            // chapter 4 (3 exercises)
            [
                'chapter_id' => 4,
                'title' => 'Excercise 4.1',
                'content_url' => 'assets/animations/class1/chapter4/Ch_04_LS_01.swf',
            ],
            [
                'chapter_id' => 4,
                'title' => 'Excercise 4.2',
                'content_url' => 'assets/animations/class1/chapter4/Ch_04_LS_02.swf',
            ],
            [
                'chapter_id' => 4,
                'title' => 'Excercise 4.3',
                'content_url' => 'assets/animations/class1/chapter4/Ch_04_LS_03.swf',
            ],

            // chapter 5 (4 exercises)
            [
                'chapter_id' => 5,
                'title' => 'Excercise 5.1',
                'content_url' => 'assets/animations/class1/chapter5/Ch_05_LS_01.swf',
            ],
            [
                'chapter_id' => 5,
                'title' => 'Excercise 5.2',
                'content_url' => 'assets/animations/class1/chapter5/Ch_05_LS_02.swf',
            ],
            [
                'chapter_id' => 5,
                'title' => 'Excercise 5.3',
                'content_url' => 'assets/animations/class1/chapter5/Ch_05_LS_03.swf',
            ],
            [
                'chapter_id' => 5,
                'title' => 'Excercise 5.4',
                'content_url' => 'assets/animations/class1/chapter5/Ch_05_LS_04.swf',
            ],

            // chapter 6 (5 exercises)
            [
                'chapter_id' => 6,
                'title' => 'Excercise 6.1',
                'content_url' => 'assets/animations/class1/chapter6/Ch_06_LS_01.swf',
            ],
            [
                'chapter_id' => 6,
                'title' => 'Excercise 6.2',
                'content_url' => 'assets/animations/class1/chapter6/Ch_06_LS_02.swf',
            ],
            [
                'chapter_id' => 6,
                'title' => 'Excercise 6.3',
                'content_url' => 'assets/animations/class1/chapter6/Ch_06_LS_03.swf',
            ],
            [
                'chapter_id' => 6,
                'title' => 'Excercise 6.4',
                'content_url' => 'assets/animations/class1/chapter6/Ch_06_LS_04.swf',
            ],
            [
                'chapter_id' => 6,
                'title' => 'Excercise 6.5',
                'content_url' => 'assets/animations/class1/chapter6/Ch_06_LS_05.swf',
            ],

            // chapter 7 (7 exercises)
            [
                'chapter_id' => 7,
                'title' => 'Excercise 7.1',
                'content_url' => 'assets/animations/class1/chapter7/Ch_07_LS_01.swf',
            ],
            [
                'chapter_id' => 7,
                'title' => 'Excercise 7.2',
                'content_url' => 'assets/animations/class1/chapter7/Ch_07_LS_02.swf',
            ],
            [
                'chapter_id' => 7,
                'title' => 'Excercise 7.3',
                'content_url' => 'assets/animations/class1/chapter7/Ch_07_LS_03.swf',
            ],
            [
                'chapter_id' => 7,
                'title' => 'Excercise 7.4',
                'content_url' => 'assets/animations/class1/chapter7/Ch_07_LS_04.swf',
            ],
            [
                'chapter_id' => 7,
                'title' => 'Excercise 7.5',
                'content_url' => 'assets/animations/class1/chapter7/Ch_07_LS_05.swf',
            ],
            [
                'chapter_id' => 7,
                'title' => 'Excercise 7.6',
                'content_url' => 'assets/animations/class1/chapter7/Ch_07_LS_06.swf',
            ],
            [
                'chapter_id' => 7,
                'title' => 'Excercise 7.7',
                'content_url' => 'assets/animations/class1/chapter7/Ch_07_LS_07.swf',
            ],

            // chapter 8 (4 exercises)
            [
                'chapter_id' => 8,
                'title' => 'Excercise 8.1',
                'content_url' => 'assets/animations/class1/chapter8/Ch_08_LS_01.swf',
            ],
            [
                'chapter_id' => 8,
                'title' => 'Excercise 8.2',
                'content_url' => 'assets/animations/class1/chapter8/Ch_08_LS_02.swf',
            ],
            [
                'chapter_id' => 8,
                'title' => 'Excercise 8.3',
                'content_url' => 'assets/animations/class1/chapter8/Ch_08_LS_03.swf',
            ],
            [
                'chapter_id' => 8,
                'title' => 'Excercise 8.4',
                'content_url' => 'assets/animations/class1/chapter8/Ch_08_LS_04.swf',
            ],
            // CLASS 2 — CHAPTER 1 (chapter_id = 9) — 4 exercises
            ['chapter_id' => 9, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class2/chapter1/Ch_01_LS_01.swf'],
            ['chapter_id' => 9, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class2/chapter1/Ch_01_LS_02.swf'],
            ['chapter_id' => 9, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class2/chapter1/Ch_01_LS_03.swf'],
            ['chapter_id' => 9, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class2/chapter1/Ch_01_LS_04.swf'],

            // CLASS 2 — CHAPTER 2 (chapter_id = 10) — 3 exercises
            ['chapter_id' => 10, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class2/chapter2/Ch_02_LS_01.swf'],
            ['chapter_id' => 10, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class2/chapter2/Ch_02_LS_02.swf'],
            ['chapter_id' => 10, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class2/chapter2/Ch_02_LS_03.swf'],

            // CLASS 2 — CHAPTER 3 (chapter_id = 11) — 5 exercises
            ['chapter_id' => 11, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class2/chapter3/Ch_03_LS_01.swf'],
            ['chapter_id' => 11, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class2/chapter3/Ch_03_LS_02.swf'],
            ['chapter_id' => 11, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class2/chapter3/Ch_03_LS_03.swf'],
            ['chapter_id' => 11, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class2/chapter3/Ch_03_LS_04.swf'],
            ['chapter_id' => 11, 'title' => 'Excercise 1.5', 'content_url' => 'assets/animations/class2/chapter3/Ch_03_LS_05.swf'],

            // CLASS 2 — CHAPTER 4 (chapter_id = 12) — 5 exercises
            ['chapter_id' => 12, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class2/chapter4/Ch_04_LS_01.swf'],
            ['chapter_id' => 12, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class2/chapter4/Ch_04_LS_02.swf'],
            ['chapter_id' => 12, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class2/chapter4/Ch_04_LS_03.swf'],
            ['chapter_id' => 12, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class2/chapter4/Ch_04_LS_04.swf'],
            ['chapter_id' => 12, 'title' => 'Excercise 1.5', 'content_url' => 'assets/animations/class2/chapter4/Ch_04_LS_05.swf'],

            // CLASS 2 — CHAPTER 5 (chapter_id = 13) — 5 exercises
            ['chapter_id' => 13, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class2/chapter5/Ch_05_LS_01.swf'],
            ['chapter_id' => 13, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class2/chapter5/Ch_05_LS_02.swf'],
            ['chapter_id' => 13, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class2/chapter5/Ch_05_LS_03.swf'],
            ['chapter_id' => 13, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class2/chapter5/Ch_05_LS_04.swf'],
            ['chapter_id' => 13, 'title' => 'Excercise 1.5', 'content_url' => 'assets/animations/class2/chapter5/Ch_05_LS_05.swf'],

            // CLASS 2 — CHAPTER 6 (chapter_id = 14) — 14 exercises
            ['chapter_id' => 14, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_01.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_02.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_03.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_04.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.5', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_05.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.6', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_06.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.7', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_07.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.8', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_08.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.9', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_09.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.10', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_10.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.11', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_11.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.12', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_12.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.13', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_13.swf'],
            ['chapter_id' => 14, 'title' => 'Excercise 1.14', 'content_url' => 'assets/animations/class2/chapter6/Ch_06_LS_14.swf'],

            // CLASS 2 — CHAPTER 7 (chapter_id = 15) — 4 exercises
            ['chapter_id' => 15, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class2/chapter7/Ch_07_LS_01.swf'],
            ['chapter_id' => 15, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class2/chapter7/Ch_07_LS_02.swf'],
            ['chapter_id' => 15, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class2/chapter7/Ch_07_LS_03.swf'],
            ['chapter_id' => 15, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class2/chapter7/Ch_07_LS_04.swf'],

            // CLASS 2 — CHAPTER 8 (chapter_id = 16) — 8 exercises
            ['chapter_id' => 16, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class2/chapter8/Ch_08_LS_01.swf'],
            ['chapter_id' => 16, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class2/chapter8/Ch_08_LS_02.swf'],
            ['chapter_id' => 16, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class2/chapter8/Ch_08_LS_03.swf'],
            ['chapter_id' => 16, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class2/chapter8/Ch_08_LS_04.swf'],
            ['chapter_id' => 16, 'title' => 'Excercise 1.5', 'content_url' => 'assets/animations/class2/chapter8/Ch_08_LS_05.swf'],
            ['chapter_id' => 16, 'title' => 'Excercise 1.6', 'content_url' => 'assets/animations/class2/chapter8/Ch_08_LS_06.swf'],
            ['chapter_id' => 16, 'title' => 'Excercise 1.7', 'content_url' => 'assets/animations/class2/chapter8/Ch_08_LS_07.swf'],
            ['chapter_id' => 16, 'title' => 'Excercise 1.8', 'content_url' => 'assets/animations/class2/chapter8/Ch_08_LS_08.swf'],

            // CLASS 2 — CHAPTER 9 (chapter_id = 17) — 4 exercises
            ['chapter_id' => 17, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class2/chapter9/Ch_09_LS_01.swf'],
            ['chapter_id' => 17, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class2/chapter9/Ch_09_LS_02.swf'],
            ['chapter_id' => 17, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class2/chapter9/Ch_09_LS_03.swf'],
            ['chapter_id' => 17, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class2/chapter9/Ch_09_LS_04.swf'],

            /* ============================
       CLASS 3 — CHAPTER 1
       chapter_id = 18 — 3 exercises
       ============================ */
            ['chapter_id' => 18, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class3/chapter1/Ch_01_LS_01.swf'],
            ['chapter_id' => 18, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class3/chapter1/Ch_01_LS_02.swf'],
            ['chapter_id' => 18, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class3/chapter1/Ch_01_LS_03.swf'],


            /* ============================
       CLASS 3 — CHAPTER 2
       chapter_id = 19 — 4 exercises
       ============================ */
            ['chapter_id' => 19, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class3/chapter2/Ch_02_LS_01.swf'],
            ['chapter_id' => 19, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class3/chapter2/Ch_02_LS_02.swf'],
            ['chapter_id' => 19, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class3/chapter2/Ch_02_LS_03.swf'],
            ['chapter_id' => 19, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class3/chapter2/Ch_02_LS_04.swf'],


            /* ============================
       CLASS 3 — CHAPTER 3
       chapter_id = 20 — 11 exercises
       ============================ */
            ['chapter_id' => 20, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class3/chapter3/Ch_03_LS_01.swf'],
            ['chapter_id' => 20, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class3/chapter3/Ch_03_LS_02.swf'],
            ['chapter_id' => 20, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class3/chapter3/Ch_03_LS_03.swf'],
            ['chapter_id' => 20, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class3/chapter3/Ch_03_LS_04.swf'],
            ['chapter_id' => 20, 'title' => 'Excercise 1.5', 'content_url' => 'assets/animations/class3/chapter3/Ch_03_LS_05.swf'],
            ['chapter_id' => 20, 'title' => 'Excercise 1.6', 'content_url' => 'assets/animations/class3/chapter3/Ch_03_LS_06.swf'],
            ['chapter_id' => 20, 'title' => 'Excercise 1.7', 'content_url' => 'assets/animations/class3/chapter3/Ch_03_LS_07.swf'],
            ['chapter_id' => 20, 'title' => 'Excercise 1.8', 'content_url' => 'assets/animations/class3/chapter3/Ch_03_LS_08.swf'],
            ['chapter_id' => 20, 'title' => 'Excercise 1.9', 'content_url' => 'assets/animations/class3/chapter3/Ch_03_LS_09.swf'],
            ['chapter_id' => 20, 'title' => 'Excercise 1.10', 'content_url' => 'assets/animations/class3/chapter3/Ch_03_LS_10.swf'],
            ['chapter_id' => 20, 'title' => 'Excercise 1.11', 'content_url' => 'assets/animations/class3/chapter3/Ch_03_LS_11.swf'],


            /* ============================
       CLASS 3 — CHAPTER 4
       chapter_id = 21 — 8 exercises
       ============================ */
            ['chapter_id' => 21, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class3/chapter4/Ch_04_LS_01.swf'],
            ['chapter_id' => 21, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class3/chapter4/Ch_04_LS_02.swf'],
            ['chapter_id' => 21, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class3/chapter4/Ch_04_LS_03.swf'],
            ['chapter_id' => 21, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class3/chapter4/Ch_04_LS_04.swf'],
            ['chapter_id' => 21, 'title' => 'Excercise 1.5', 'content_url' => 'assets/animations/class3/chapter4/Ch_04_LS_05.swf'],
            ['chapter_id' => 21, 'title' => 'Excercise 1.6', 'content_url' => 'assets/animations/class3/chapter4/Ch_04_LS_06.swf'],
            ['chapter_id' => 21, 'title' => 'Excercise 1.7', 'content_url' => 'assets/animations/class3/chapter4/Ch_04_LS_07.swf'],
            ['chapter_id' => 21, 'title' => 'Excercise 1.8', 'content_url' => 'assets/animations/class3/chapter4/Ch_04_LS_08.swf'],


            /* ============================
       CLASS 3 — CHAPTER 5
       chapter_id = 22 — 8 exercises
       ============================ */
            ['chapter_id' => 22, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class3/chapter5/Ch_05_LS_01.swf'],
            ['chapter_id' => 22, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class3/chapter5/Ch_05_LS_02.swf'],
            ['chapter_id' => 22, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class3/chapter5/Ch_05_LS_03.swf'],
            ['chapter_id' => 22, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class3/chapter5/Ch_05_LS_04.swf'],
            ['chapter_id' => 22, 'title' => 'Excercise 1.5', 'content_url' => 'assets/animations/class3/chapter5/Ch_05_LS_05.swf'],
            ['chapter_id' => 22, 'title' => 'Excercise 1.6', 'content_url' => 'assets/animations/class3/chapter5/Ch_05_LS_06.swf'],
            ['chapter_id' => 22, 'title' => 'Excercise 1.7', 'content_url' => 'assets/animations/class3/chapter5/Ch_05_LS_07.swf'],
            ['chapter_id' => 22, 'title' => 'Excercise 1.8', 'content_url' => 'assets/animations/class3/chapter5/Ch_05_LS_08.swf'],


            /* ============================
       CLASS 3 — CHAPTER 6
       chapter_id = 23 — 6 exercises
       ============================ */
            ['chapter_id' => 23, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class3/chapter6/Ch_06_LS_01.swf'],
            ['chapter_id' => 23, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class3/chapter6/Ch_06_LS_02.swf'],
            ['chapter_id' => 23, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class3/chapter6/Ch_06_LS_03.swf'],
            ['chapter_id' => 23, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class3/chapter6/Ch_06_LS_04.swf'],
            ['chapter_id' => 23, 'title' => 'Excercise 1.5', 'content_url' => 'assets/animations/class3/chapter6/Ch_06_LS_05.swf'],
            ['chapter_id' => 23, 'title' => 'Excercise 1.6', 'content_url' => 'assets/animations/class3/chapter6/Ch_06_LS_06.swf'],


            /* ============================
       CLASS 3 — CHAPTER 7
       chapter_id = 24 — 5 exercises
       ============================ */
            ['chapter_id' => 24, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class3/chapter7/Ch_07_LS_01.swf'],
            ['chapter_id' => 24, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class3/chapter7/Ch_07_LS_02.swf'],
            ['chapter_id' => 24, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class3/chapter7/Ch_07_LS_03.swf'],
            ['chapter_id' => 24, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class3/chapter7/Ch_07_LS_04.swf'],
            ['chapter_id' => 24, 'title' => 'Excercise 1.5', 'content_url' => 'assets/animations/class3/chapter7/Ch_07_LS_05.swf'],


            /* ============================
       CLASS 3 — CHAPTER 8
       chapter_id = 25 — 11 exercises
       ============================ */
            ['chapter_id' => 25, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class3/chapter8/Ch_08_LS_01.swf'],
            ['chapter_id' => 25, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class3/chapter8/Ch_08_LS_02.swf'],
            ['chapter_id' => 25, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class3/chapter8/Ch_08_LS_03.swf'],
            ['chapter_id' => 25, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class3/chapter8/Ch_08_LS_04.swf'],
            ['chapter_id' => 25, 'title' => 'Excercise 1.5', 'content_url' => 'assets/animations/class3/chapter8/Ch_08_LS_05.swf'],
            ['chapter_id' => 25, 'title' => 'Excercise 1.6', 'content_url' => 'assets/animations/class3/chapter8/Ch_08_LS_06.swf'],
            ['chapter_id' => 25, 'title' => 'Excercise 1.7', 'content_url' => 'assets/animations/class3/chapter8/Ch_08_LS_07.swf'],
            ['chapter_id' => 25, 'title' => 'Excercise 1.8', 'content_url' => 'assets/animations/class3/chapter8/Ch_08_LS_08.swf'],
            ['chapter_id' => 25, 'title' => 'Excercise 1.9', 'content_url' => 'assets/animations/class3/chapter8/Ch_08_LS_09.swf'],
            ['chapter_id' => 25, 'title' => 'Excercise 1.10', 'content_url' => 'assets/animations/class3/chapter8/Ch_08_LS_10.swf'],
            ['chapter_id' => 25, 'title' => 'Excercise 1.11', 'content_url' => 'assets/animations/class3/chapter8/Ch_08_LS_11.swf'],


            /* ============================
       CLASS 3 — CHAPTER 9
       chapter_id = 26 — 4 exercises
       ============================ */
            ['chapter_id' => 26, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class3/chapter9/Ch_09_LS_01.swf'],
            ['chapter_id' => 26, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class3/chapter9/Ch_09_LS_02.swf'],
            ['chapter_id' => 26, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class3/chapter9/Ch_09_LS_03.swf'],
            ['chapter_id' => 26, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class3/chapter9/Ch_09_LS_04.swf'],


            /* ============================
       CLASS 3 — CHAPTER 10
       chapter_id = 27 — 8 exercises
       ============================ */
            ['chapter_id' => 27, 'title' => 'Excercise 1.1', 'content_url' => 'assets/animations/class3/chapter10/Ch_10_LS_01.swf'],
            ['chapter_id' => 27, 'title' => 'Excercise 1.2', 'content_url' => 'assets/animations/class3/chapter10/Ch_10_LS_02.swf'],
            ['chapter_id' => 27, 'title' => 'Excercise 1.3', 'content_url' => 'assets/animations/class3/chapter10/Ch_10_LS_03.swf'],
            ['chapter_id' => 27, 'title' => 'Excercise 1.4', 'content_url' => 'assets/animations/class3/chapter10/Ch_10_LS_04.swf'],
            ['chapter_id' => 27, 'title' => 'Excercise 1.5', 'content_url' => 'assets/animations/class3/chapter10/Ch_10_LS_05.swf'],
            ['chapter_id' => 27, 'title' => 'Excercise 1.6', 'content_url' => 'assets/animations/class3/chapter10/Ch_10_LS_06.swf'],
            ['chapter_id' => 27, 'title' => 'Excercise 1.7', 'content_url' => 'assets/animations/class3/chapter10/Ch_10_LS_07.swf'],
            ['chapter_id' => 27, 'title' => 'Excercise 1.8', 'content_url' => 'assets/animations/class3/chapter10/Ch_10_LS_08.swf'],

            // Class 4 — Chapter 1 (chapter_id = 28) — 3 exercises
            ['chapter_id' => 28, 'title' => 'Exercise 1.1', 'content_url' => 'assets/animations/class4/chapter1/Ch_01_LS_01.swf'],
            ['chapter_id' => 28, 'title' => 'Exercise 1.2', 'content_url' => 'assets/animations/class4/chapter1/Ch_01_LS_02.swf'],
            ['chapter_id' => 28, 'title' => 'Exercise 1.3', 'content_url' => 'assets/animations/class4/chapter1/Ch_01_LS_03.swf'],

            // Chapter 2 (chapter_id = 29) — 3 exercises
            ['chapter_id' => 29, 'title' => 'Exercise 2.1', 'content_url' => 'assets/animations/class4/chapter2/Ch_02_LS_01.swf'],
            ['chapter_id' => 29, 'title' => 'Exercise 2.2', 'content_url' => 'assets/animations/class4/chapter2/Ch_02_LS_02.swf'],
            ['chapter_id' => 29, 'title' => 'Exercise 2.3', 'content_url' => 'assets/animations/class4/chapter2/Ch_02_LS_03.swf'],

            // Chapter 3 (chapter_id = 30) — 11 exercises
            ['chapter_id' => 30, 'title' => 'Exercise 3.1', 'content_url' => 'assets/animations/class4/chapter3/Ch_03_LS_01.swf'],
            ['chapter_id' => 30, 'title' => 'Exercise 3.2', 'content_url' => 'assets/animations/class4/chapter3/Ch_03_LS_02.swf'],
            ['chapter_id' => 30, 'title' => 'Exercise 3.3', 'content_url' => 'assets/animations/class4/chapter3/Ch_03_LS_03.swf'],
            ['chapter_id' => 30, 'title' => 'Exercise 3.4', 'content_url' => 'assets/animations/class4/chapter3/Ch_03_LS_04.swf'],
            ['chapter_id' => 30, 'title' => 'Exercise 3.5', 'content_url' => 'assets/animations/class4/chapter3/Ch_03_LS_05.swf'],
            ['chapter_id' => 30, 'title' => 'Exercise 3.6', 'content_url' => 'assets/animations/class4/chapter3/Ch_03_LS_06.swf'],
            ['chapter_id' => 30, 'title' => 'Exercise 3.7', 'content_url' => 'assets/animations/class4/chapter3/Ch_03_LS_07.swf'],
            ['chapter_id' => 30, 'title' => 'Exercise 3.8', 'content_url' => 'assets/animations/class4/chapter3/Ch_03_LS_08.swf'],
            ['chapter_id' => 30, 'title' => 'Exercise 3.9', 'content_url' => 'assets/animations/class4/chapter3/Ch_03_LS_09.swf'],
            ['chapter_id' => 30, 'title' => 'Exercise 3.10', 'content_url' => 'assets/animations/class4/chapter3/Ch_03_LS_10.swf'],
            ['chapter_id' => 30, 'title' => 'Exercise 3.11', 'content_url' => 'assets/animations/class4/chapter3/Ch_03_LS_11.swf'],

            // Chapter 4 (chapter_id = 31) — 10 exercises
            ['chapter_id' => 31, 'title' => 'Exercise 4.1', 'content_url' => 'assets/animations/class4/chapter4/Ch_04_LS_01.swf'],
            ['chapter_id' => 31, 'title' => 'Exercise 4.2', 'content_url' => 'assets/animations/class4/chapter4/Ch_04_LS_02.swf'],
            ['chapter_id' => 31, 'title' => 'Exercise 4.3', 'content_url' => 'assets/animations/class4/chapter4/Ch_04_LS_03.swf'],
            ['chapter_id' => 31, 'title' => 'Exercise 4.4', 'content_url' => 'assets/animations/class4/chapter4/Ch_04_LS_04.swf'],
            ['chapter_id' => 31, 'title' => 'Exercise 4.5', 'content_url' => 'assets/animations/class4/chapter4/Ch_04_LS_05.swf'],
            ['chapter_id' => 31, 'title' => 'Exercise 4.6', 'content_url' => 'assets/animations/class4/chapter4/Ch_04_LS_06.swf'],
            ['chapter_id' => 31, 'title' => 'Exercise 4.7', 'content_url' => 'assets/animations/class4/chapter4/Ch_04_LS_07.swf'],
            ['chapter_id' => 31, 'title' => 'Exercise 4.8', 'content_url' => 'assets/animations/class4/chapter4/Ch_04_LS_08.swf'],
            ['chapter_id' => 31, 'title' => 'Exercise 4.9', 'content_url' => 'assets/animations/class4/chapter4/Ch_04_LS_09.swf'],
            ['chapter_id' => 31, 'title' => 'Exercise 4.10', 'content_url' => 'assets/animations/class4/chapter4/Ch_04_LS_10.swf'],

            // Chapter 5 (chapter_id = 32) — 6 exercises
            ['chapter_id' => 32, 'title' => 'Exercise 5.1', 'content_url' => 'assets/animations/class4/chapter5/Ch_05_LS_01.swf'],
            ['chapter_id' => 32, 'title' => 'Exercise 5.2', 'content_url' => 'assets/animations/class4/chapter5/Ch_05_LS_02.swf'],
            ['chapter_id' => 32, 'title' => 'Exercise 5.3', 'content_url' => 'assets/animations/class4/chapter5/Ch_05_LS_03.swf'],
            ['chapter_id' => 32, 'title' => 'Exercise 5.4', 'content_url' => 'assets/animations/class4/chapter5/Ch_05_LS_04.swf'],
            ['chapter_id' => 32, 'title' => 'Exercise 5.5', 'content_url' => 'assets/animations/class4/chapter5/Ch_05_LS_05.swf'],
            ['chapter_id' => 32, 'title' => 'Exercise 5.6', 'content_url' => 'assets/animations/class4/chapter5/Ch_05_LS_06.swf'],

            // Chapter 6 (chapter_id = 33) — 3 exercises
            ['chapter_id' => 33, 'title' => 'Exercise 6.1', 'content_url' => 'assets/animations/class4/chapter6/Ch_06_LS_01.swf'],
            ['chapter_id' => 33, 'title' => 'Exercise 6.2', 'content_url' => 'assets/animations/class4/chapter6/Ch_06_LS_02.swf'],
            ['chapter_id' => 33, 'title' => 'Exercise 6.3', 'content_url' => 'assets/animations/class4/chapter6/Ch_06_LS_03.swf'],

            // Chapter 7 (chapter_id = 34) — 5 exercises
            ['chapter_id' => 34, 'title' => 'Exercise 7.1', 'content_url' => 'assets/animations/class4/chapter7/Ch_07_LS_01.swf'],
            ['chapter_id' => 34, 'title' => 'Exercise 7.2', 'content_url' => 'assets/animations/class4/chapter7/Ch_07_LS_02.swf'],
            ['chapter_id' => 34, 'title' => 'Exercise 7.3', 'content_url' => 'assets/animations/class4/chapter7/Ch_07_LS_03.swf'],
            ['chapter_id' => 34, 'title' => 'Exercise 7.4', 'content_url' => 'assets/animations/class4/chapter7/Ch_07_LS_04.swf'],
            ['chapter_id' => 34, 'title' => 'Exercise 7.5', 'content_url' => 'assets/animations/class4/chapter7/Ch_07_LS_05.swf'],

            // Chapter 8 (chapter_id = 35) — 4 exercises
            ['chapter_id' => 35, 'title' => 'Exercise 8.1', 'content_url' => 'assets/animations/class4/chapter8/Ch_08_LS_01.swf'],
            ['chapter_id' => 35, 'title' => 'Exercise 8.2', 'content_url' => 'assets/animations/class4/chapter8/Ch_08_LS_02.swf'],
            ['chapter_id' => 35, 'title' => 'Exercise 8.3', 'content_url' => 'assets/animations/class4/chapter8/Ch_08_LS_03.swf'],
            ['chapter_id' => 35, 'title' => 'Exercise 8.4', 'content_url' => 'assets/animations/class4/chapter8/Ch_08_LS_04.swf'],

            // Chapter 9 (chapter_id = 36) — 3 exercises
            ['chapter_id' => 36, 'title' => 'Exercise 9.1', 'content_url' => 'assets/animations/class4/chapter9/Ch_09_LS_01.swf'],
            ['chapter_id' => 36, 'title' => 'Exercise 9.2', 'content_url' => 'assets/animations/class4/chapter9/Ch_09_LS_02.swf'],
            ['chapter_id' => 36, 'title' => 'Exercise 9.3', 'content_url' => 'assets/animations/class4/chapter9/Ch_09_LS_03.swf'],

            // Chapter 10 (chapter_id = 37) — 6 exercises
            ['chapter_id' => 37, 'title' => 'Exercise 10.1', 'content_url' => 'assets/animations/class4/chapter10/Ch_10_LS_01.swf'],
            ['chapter_id' => 37, 'title' => 'Exercise 10.2', 'content_url' => 'assets/animations/class4/chapter10/Ch_10_LS_02.swf'],
            ['chapter_id' => 37, 'title' => 'Exercise 10.3', 'content_url' => 'assets/animations/class4/chapter10/Ch_10_LS_03.swf'],
            ['chapter_id' => 37, 'title' => 'Exercise 10.4', 'content_url' => 'assets/animations/class4/chapter10/Ch_10_LS_04.swf'],
            ['chapter_id' => 37, 'title' => 'Exercise 10.5', 'content_url' => 'assets/animations/class4/chapter10/Ch_10_LS_05.swf'],
            ['chapter_id' => 37, 'title' => 'Exercise 10.6', 'content_url' => 'assets/animations/class4/chapter10/Ch_10_LS_06.swf'],

            // Class 5 — Chapter 1 (chapter_id = 38) — 1 exercise
            ['chapter_id' => 38, 'title' => 'Exercise 1.1', 'content_url' => 'assets/animations/class5/chapter1/Ch_01_LS_01.swf'],

            // Chapter 2 (chapter_id = 39) — 8 exercises
            ['chapter_id' => 39, 'title' => 'Exercise 2.1', 'content_url' => 'assets/animations/class5/chapter2/Ch_02_LS_01.swf'],
            ['chapter_id' => 39, 'title' => 'Exercise 2.2', 'content_url' => 'assets/animations/class5/chapter2/Ch_02_LS_02.swf'],
            ['chapter_id' => 39, 'title' => 'Exercise 2.3', 'content_url' => 'assets/animations/class5/chapter2/Ch_02_LS_03.swf'],
            ['chapter_id' => 39, 'title' => 'Exercise 2.4', 'content_url' => 'assets/animations/class5/chapter2/Ch_02_LS_04.swf'],
            ['chapter_id' => 39, 'title' => 'Exercise 2.5', 'content_url' => 'assets/animations/class5/chapter2/Ch_02_LS_05.swf'],
            ['chapter_id' => 39, 'title' => 'Exercise 2.6', 'content_url' => 'assets/animations/class5/chapter2/Ch_02_LS_06.swf'],
            ['chapter_id' => 39, 'title' => 'Exercise 2.7', 'content_url' => 'assets/animations/class5/chapter2/Ch_02_LS_07.swf'],
            ['chapter_id' => 39, 'title' => 'Exercise 2.8', 'content_url' => 'assets/animations/class5/chapter2/Ch_02_LS_08.swf'],

            // Chapter 3 (chapter_id = 40) — 5 exercises
            ['chapter_id' => 40, 'title' => 'Exercise 3.1', 'content_url' => 'assets/animations/class5/chapter3/Ch_03_LS_01.swf'],
            ['chapter_id' => 40, 'title' => 'Exercise 3.2', 'content_url' => 'assets/animations/class5/chapter3/Ch_03_LS_02.swf'],
            ['chapter_id' => 40, 'title' => 'Exercise 3.3', 'content_url' => 'assets/animations/class5/chapter3/Ch_03_LS_03.swf'],
            ['chapter_id' => 40, 'title' => 'Exercise 3.4', 'content_url' => 'assets/animations/class5/chapter3/Ch_03_LS_04.swf'],
            ['chapter_id' => 40, 'title' => 'Exercise 3.5', 'content_url' => 'assets/animations/class5/chapter3/Ch_03_LS_05.swf'],

            // Chapter 4 (chapter_id = 41) — 10 exercises
            ['chapter_id' => 41, 'title' => 'Exercise 4.1', 'content_url' => 'assets/animations/class5/chapter4/Ch_04_LS_01.swf'],
            ['chapter_id' => 41, 'title' => 'Exercise 4.2', 'content_url' => 'assets/animations/class5/chapter4/Ch_04_LS_02.swf'],
            ['chapter_id' => 41, 'title' => 'Exercise 4.3', 'content_url' => 'assets/animations/class5/chapter4/Ch_04_LS_03.swf'],
            ['chapter_id' => 41, 'title' => 'Exercise 4.4', 'content_url' => 'assets/animations/class5/chapter4/Ch_04_LS_04.swf'],
            ['chapter_id' => 41, 'title' => 'Exercise 4.5', 'content_url' => 'assets/animations/class5/chapter4/Ch_04_LS_05.swf'],
            ['chapter_id' => 41, 'title' => 'Exercise 4.6', 'content_url' => 'assets/animations/class5/chapter4/Ch_04_LS_06.swf'],
            ['chapter_id' => 41, 'title' => 'Exercise 4.7', 'content_url' => 'assets/animations/class5/chapter4/Ch_04_LS_07.swf'],
            ['chapter_id' => 41, 'title' => 'Exercise 4.8', 'content_url' => 'assets/animations/class5/chapter4/Ch_04_LS_08.swf'],
            ['chapter_id' => 41, 'title' => 'Exercise 4.9', 'content_url' => 'assets/animations/class5/chapter4/Ch_04_LS_09.swf'],
            ['chapter_id' => 41, 'title' => 'Exercise 4.10', 'content_url' => 'assets/animations/class5/chapter4/Ch_04_LS_10.swf'],

            // Chapter 5 (chapter_id = 42) — 8 exercises
            ['chapter_id' => 42, 'title' => 'Exercise 5.1', 'content_url' => 'assets/animations/class5/chapter5/Ch_05_LS_01.swf'],
            ['chapter_id' => 42, 'title' => 'Exercise 5.2', 'content_url' => 'assets/animations/class5/chapter5/Ch_05_LS_02.swf'],
            ['chapter_id' => 42, 'title' => 'Exercise 5.3', 'content_url' => 'assets/animations/class5/chapter5/Ch_05_LS_03.swf'],
            ['chapter_id' => 42, 'title' => 'Exercise 5.4', 'content_url' => 'assets/animations/class5/chapter5/Ch_05_LS_04.swf'],
            ['chapter_id' => 42, 'title' => 'Exercise 5.5', 'content_url' => 'assets/animations/class5/chapter5/Ch_05_LS_05.swf'],
            ['chapter_id' => 42, 'title' => 'Exercise 5.6', 'content_url' => 'assets/animations/class5/chapter5/Ch_05_LS_06.swf'],
            ['chapter_id' => 42, 'title' => 'Exercise 5.7', 'content_url' => 'assets/animations/class5/chapter5/Ch_05_LS_07.swf'],
            ['chapter_id' => 42, 'title' => 'Exercise 5.8', 'content_url' => 'assets/animations/class5/chapter5/Ch_05_LS_08.swf'],

            // Chapter 6 (chapter_id = 43) — 8 exercises
            ['chapter_id' => 43, 'title' => 'Exercise 6.1', 'content_url' => 'assets/animations/class5/chapter6/Ch_06_LS_01.swf'],
            ['chapter_id' => 43, 'title' => 'Exercise 6.2', 'content_url' => 'assets/animations/class5/chapter6/Ch_06_LS_02.swf'],
            ['chapter_id' => 43, 'title' => 'Exercise 6.3', 'content_url' => 'assets/animations/class5/chapter6/Ch_06_LS_03.swf'],
            ['chapter_id' => 43, 'title' => 'Exercise 6.4', 'content_url' => 'assets/animations/class5/chapter6/Ch_06_LS_04.swf'],
            ['chapter_id' => 43, 'title' => 'Exercise 6.5', 'content_url' => 'assets/animations/class5/chapter6/Ch_06_LS_05.swf'],
            ['chapter_id' => 43, 'title' => 'Exercise 6.6', 'content_url' => 'assets/animations/class5/chapter6/Ch_06_LS_06.swf'],
            ['chapter_id' => 43, 'title' => 'Exercise 6.7', 'content_url' => 'assets/animations/class5/chapter6/Ch_06_LS_07.swf'],
            ['chapter_id' => 43, 'title' => 'Exercise 6.8', 'content_url' => 'assets/animations/class5/chapter6/Ch_06_LS_08.swf'],

            // Chapter 7 (chapter_id = 44) — 6 exercises
            ['chapter_id' => 44, 'title' => 'Exercise 7.1', 'content_url' => 'assets/animations/class5/chapter7/Ch_07_LS_01.swf'],
            ['chapter_id' => 44, 'title' => 'Exercise 7.2', 'content_url' => 'assets/animations/class5/chapter7/Ch_07_LS_02.swf'],
            ['chapter_id' => 44, 'title' => 'Exercise 7.3', 'content_url' => 'assets/animations/class5/chapter7/Ch_07_LS_03.swf'],
            ['chapter_id' => 44, 'title' => 'Exercise 7.4', 'content_url' => 'assets/animations/class5/chapter7/Ch_07_LS_04.swf'],
            ['chapter_id' => 44, 'title' => 'Exercise 7.5', 'content_url' => 'assets/animations/class5/chapter7/Ch_07_LS_05.swf'],
            ['chapter_id' => 44, 'title' => 'Exercise 7.6', 'content_url' => 'assets/animations/class5/chapter7/Ch_07_LS_06.swf'],

            // Chapter 8 (chapter_id = 45) — 5 exercises
            ['chapter_id' => 45, 'title' => 'Exercise 8.1', 'content_url' => 'assets/animations/class5/chapter8/Ch_08_LS_01.swf'],
            ['chapter_id' => 45, 'title' => 'Exercise 8.2', 'content_url' => 'assets/animations/class5/chapter8/Ch_08_LS_02.swf'],
            ['chapter_id' => 45, 'title' => 'Exercise 8.3', 'content_url' => 'assets/animations/class5/chapter8/Ch_08_LS_03.swf'],
            ['chapter_id' => 45, 'title' => 'Exercise 8.4', 'content_url' => 'assets/animations/class5/chapter8/Ch_08_LS_04.swf'],
            ['chapter_id' => 45, 'title' => 'Exercise 8.5', 'content_url' => 'assets/animations/class5/chapter8/Ch_08_LS_05.swf'],

            // Chapter 9 (chapter_id = 46) — 7 exercises
            ['chapter_id' => 46, 'title' => 'Exercise 9.1', 'content_url' => 'assets/animations/class5/chapter9/Ch_09_LS_01.swf'],
            ['chapter_id' => 46, 'title' => 'Exercise 9.2', 'content_url' => 'assets/animations/class5/chapter9/Ch_09_LS_02.swf'],
            ['chapter_id' => 46, 'title' => 'Exercise 9.3', 'content_url' => 'assets/animations/class5/chapter9/Ch_09_LS_03.swf'],
            ['chapter_id' => 46, 'title' => 'Exercise 9.4', 'content_url' => 'assets/animations/class5/chapter9/Ch_09_LS_04.swf'],
            ['chapter_id' => 46, 'title' => 'Exercise 9.5', 'content_url' => 'assets/animations/class5/chapter9/Ch_09_LS_05.swf'],
            ['chapter_id' => 46, 'title' => 'Exercise 9.6', 'content_url' => 'assets/animations/class5/chapter9/Ch_09_LS_06.swf'],
            ['chapter_id' => 46, 'title' => 'Exercise 9.7', 'content_url' => 'assets/animations/class5/chapter9/Ch_09_LS_07.swf'],

            // Chapter 10 (chapter_id = 47) — 4 exercises
            ['chapter_id' => 47, 'title' => 'Exercise 10.1', 'content_url' => 'assets/animations/class5/chapter10/Ch_10_LS_01.swf'],
            ['chapter_id' => 47, 'title' => 'Exercise 10.2', 'content_url' => 'assets/animations/class5/chapter10/Ch_10_LS_02.swf'],
            ['chapter_id' => 47, 'title' => 'Exercise 10.3', 'content_url' => 'assets/animations/class5/chapter10/Ch_10_LS_03.swf'],
            ['chapter_id' => 47, 'title' => 'Exercise 10.4', 'content_url' => 'assets/animations/class5/chapter10/Ch_10_LS_04.swf'],

            // Chapter 1 (6 exercises) — chapter_id = 48
            [
                'chapter_id' => 48,
                'title' => 'Excercise 1.1',
                'content_url' => 'assets/animations/class6/chapter1/Ch_01_LS_01.swf',
            ],
            [
                'chapter_id' => 48,
                'title' => 'Excercise 1.2',
                'content_url' => 'assets/animations/class6/chapter1/Ch_01_LS_02.swf',
            ],
            [
                'chapter_id' => 48,
                'title' => 'Excercise 1.3',
                'content_url' => 'assets/animations/class6/chapter1/Ch_01_LS_03.swf',
            ],
            [
                'chapter_id' => 48,
                'title' => 'Excercise 1.4',
                'content_url' => 'assets/animations/class6/chapter1/Ch_01_LS_04.swf',
            ],
            [
                'chapter_id' => 48,
                'title' => 'Excercise 1.5',
                'content_url' => 'assets/animations/class6/chapter1/Ch_01_LS_05.swf',
            ],
            [
                'chapter_id' => 48,
                'title' => 'Excercise 1.6',
                'content_url' => 'assets/animations/class6/chapter1/Ch_01_LS_06.swf',
            ],

            // Chapter 2 (10 exercises) — chapter_id = 49
            [
                'chapter_id' => 49,
                'title' => 'Excercise 2.1',
                'content_url' => 'assets/animations/class6/chapter2/Ch_02_LS_01.swf',
            ],
            [
                'chapter_id' => 49,
                'title' => 'Excercise 2.2',
                'content_url' => 'assets/animations/class6/chapter2/Ch_02_LS_02.swf',
            ],
            [
                'chapter_id' => 49,
                'title' => 'Excercise 2.3',
                'content_url' => 'assets/animations/class6/chapter2/Ch_02_LS_03.swf',
            ],
            [
                'chapter_id' => 49,
                'title' => 'Excercise 2.4',
                'content_url' => 'assets/animations/class6/chapter2/Ch_02_LS_04.swf',
            ],
            [
                'chapter_id' => 49,
                'title' => 'Excercise 2.5',
                'content_url' => 'assets/animations/class6/chapter2/Ch_02_LS_05.swf',
            ],
            [
                'chapter_id' => 49,
                'title' => 'Excercise 2.6',
                'content_url' => 'assets/animations/class6/chapter2/Ch_02_LS_06.swf',
            ],
            [
                'chapter_id' => 49,
                'title' => 'Excercise 2.7',
                'content_url' => 'assets/animations/class6/chapter2/Ch_02_LS_07.swf',
            ],
            [
                'chapter_id' => 49,
                'title' => 'Excercise 2.8',
                'content_url' => 'assets/animations/class6/chapter2/Ch_02_LS_08.swf',
            ],
            [
                'chapter_id' => 49,
                'title' => 'Excercise 2.9',
                'content_url' => 'assets/animations/class6/chapter2/Ch_02_LS_09.swf',
            ],
            [
                'chapter_id' => 49,
                'title' => 'Excercise 2.10',
                'content_url' => 'assets/animations/class6/chapter2/Ch_02_LS_10.swf',
            ],

            // Chapter 3 (10 exercises) — chapter_id = 50
            [
                'chapter_id' => 50,
                'title' => 'Excercise 3.1',
                'content_url' => 'assets/animations/class6/chapter3/Ch_03_LS_01.swf',
            ],
            [
                'chapter_id' => 50,
                'title' => 'Excercise 3.2',
                'content_url' => 'assets/animations/class6/chapter3/Ch_03_LS_02.swf',
            ],
            [
                'chapter_id' => 50,
                'title' => 'Excercise 3.3',
                'content_url' => 'assets/animations/class6/chapter3/Ch_03_LS_03.swf',
            ],
            [
                'chapter_id' => 50,
                'title' => 'Excercise 3.4',
                'content_url' => 'assets/animations/class6/chapter3/Ch_03_LS_04.swf',
            ],
            [
                'chapter_id' => 50,
                'title' => 'Excercise 3.5',
                'content_url' => 'assets/animations/class6/chapter3/Ch_03_LS_05.swf',
            ],
            [
                'chapter_id' => 50,
                'title' => 'Excercise 3.6',
                'content_url' => 'assets/animations/class6/chapter3/Ch_03_LS_06.swf',
            ],
            [
                'chapter_id' => 50,
                'title' => 'Excercise 3.7',
                'content_url' => 'assets/animations/class6/chapter3/Ch_03_LS_07.swf',
            ],
            [
                'chapter_id' => 50,
                'title' => 'Excercise 3.8',
                'content_url' => 'assets/animations/class6/chapter3/Ch_03_LS_08.swf',
            ],
            [
                'chapter_id' => 50,
                'title' => 'Excercise 3.9',
                'content_url' => 'assets/animations/class6/chapter3/Ch_03_LS_09.swf',
            ],
            [
                'chapter_id' => 50,
                'title' => 'Excercise 3.10',
                'content_url' => 'assets/animations/class6/chapter3/Ch_03_LS_10.swf',
            ],

            // Chapter 4 (9 exercises) — chapter_id = 51
            [
                'chapter_id' => 51,
                'title' => 'Excercise 4.1',
                'content_url' => 'assets/animations/class6/chapter4/Ch_04_LS_01.swf',
            ],
            [
                'chapter_id' => 51,
                'title' => 'Excercise 4.2',
                'content_url' => 'assets/animations/class6/chapter4/Ch_04_LS_02.swf',
            ],
            [
                'chapter_id' => 51,
                'title' => 'Excercise 4.3',
                'content_url' => 'assets/animations/class6/chapter4/Ch_04_LS_03.swf',
            ],
            [
                'chapter_id' => 51,
                'title' => 'Excercise 4.4',
                'content_url' => 'assets/animations/class6/chapter4/Ch_04_LS_04.swf',
            ],
            [
                'chapter_id' => 51,
                'title' => 'Excercise 4.5',
                'content_url' => 'assets/animations/class6/chapter4/Ch_04_LS_05.swf',
            ],
            [
                'chapter_id' => 51,
                'title' => 'Excercise 4.6',
                'content_url' => 'assets/animations/class6/chapter4/Ch_04_LS_06.swf',
            ],
            [
                'chapter_id' => 51,
                'title' => 'Excercise 4.7',
                'content_url' => 'assets/animations/class6/chapter4/Ch_04_LS_07.swf',
            ],
            [
                'chapter_id' => 51,
                'title' => 'Excercise 4.8',
                'content_url' => 'assets/animations/class6/chapter4/Ch_04_LS_08.swf',
            ],
            [
                'chapter_id' => 51,
                'title' => 'Excercise 4.9',
                'content_url' => 'assets/animations/class6/chapter4/Ch_04_LS_09.swf',
            ],

            // Chapter 5 (8 exercises) — chapter_id = 52
            [
                'chapter_id' => 52,
                'title' => 'Excercise 5.1',
                'content_url' => 'assets/animations/class6/chapter5/Ch_05_LS_01.swf',
            ],
            [
                'chapter_id' => 52,
                'title' => 'Excercise 5.2',
                'content_url' => 'assets/animations/class6/chapter5/Ch_05_LS_02.swf',
            ],
            [
                'chapter_id' => 52,
                'title' => 'Excercise 5.3',
                'content_url' => 'assets/animations/class6/chapter5/Ch_05_LS_03.swf',
            ],
            [
                'chapter_id' => 52,
                'title' => 'Excercise 5.4',
                'content_url' => 'assets/animations/class6/chapter5/Ch_05_LS_04.swf',
            ],
            [
                'chapter_id' => 52,
                'title' => 'Excercise 5.5',
                'content_url' => 'assets/animations/class6/chapter5/Ch_05_LS_05.swf',
            ],
            [
                'chapter_id' => 52,
                'title' => 'Excercise 5.6',
                'content_url' => 'assets/animations/class6/chapter5/Ch_05_LS_06.swf',
            ],
            [
                'chapter_id' => 52,
                'title' => 'Excercise 5.7',
                'content_url' => 'assets/animations/class6/chapter5/Ch_05_LS_07.swf',
            ],
            [
                'chapter_id' => 52,
                'title' => 'Excercise 5.8',
                'content_url' => 'assets/animations/class6/chapter5/Ch_05_LS_08.swf',
            ],

            // Chapter 6 (9 exercises) — chapter_id = 53
            [
                'chapter_id' => 53,
                'title' => 'Excercise 6.1',
                'content_url' => 'assets/animations/class6/chapter6/Ch_06_LS_01.swf',
            ],
            [
                'chapter_id' => 53,
                'title' => 'Excercise 6.2',
                'content_url' => 'assets/animations/class6/chapter6/Ch_06_LS_02.swf',
            ],
            [
                'chapter_id' => 53,
                'title' => 'Excercise 6.3',
                'content_url' => 'assets/animations/class6/chapter6/Ch_06_LS_03.swf',
            ],
            [
                'chapter_id' => 53,
                'title' => 'Excercise 6.4',
                'content_url' => 'assets/animations/class6/chapter6/Ch_06_LS_04.swf',
            ],
            [
                'chapter_id' => 53,
                'title' => 'Excercise 6.5',
                'content_url' => 'assets/animations/class6/chapter6/Ch_06_LS_05.swf',
            ],
            [
                'chapter_id' => 53,
                'title' => 'Excercise 6.6',
                'content_url' => 'assets/animations/class6/chapter6/Ch_06_LS_06.swf',
            ],
            [
                'chapter_id' => 53,
                'title' => 'Excercise 6.7',
                'content_url' => 'assets/animations/class6/chapter6/Ch_06_LS_07.swf',
            ],
            [
                'chapter_id' => 53,
                'title' => 'Excercise 6.8',
                'content_url' => 'assets/animations/class6/chapter6/Ch_06_LS_08.swf',
            ],
            [
                'chapter_id' => 53,
                'title' => 'Excercise 6.9',
                'content_url' => 'assets/animations/class6/chapter6/Ch_06_LS_09.swf',
            ],

            // Chapter 7 (5 exercises) — chapter_id = 54
            [
                'chapter_id' => 54,
                'title' => 'Excercise 7.1',
                'content_url' => 'assets/animations/class6/chapter7/Ch_07_LS_01.swf',
            ],
            [
                'chapter_id' => 54,
                'title' => 'Excercise 7.2',
                'content_url' => 'assets/animations/class6/chapter7/Ch_07_LS_02.swf',
            ],
            [
                'chapter_id' => 54,
                'title' => 'Excercise 7.3',
                'content_url' => 'assets/animations/class6/chapter7/Ch_07_LS_03.swf',
            ],
            [
                'chapter_id' => 54,
                'title' => 'Excercise 7.4',
                'content_url' => 'assets/animations/class6/chapter7/Ch_07_LS_04.swf',
            ],
            [
                'chapter_id' => 54,
                'title' => 'Excercise 7.5',
                'content_url' => 'assets/animations/class6/chapter7/Ch_07_LS_05.swf',
            ],

            // Chapter 8 (4 exercises) — chapter_id = 55
            [
                'chapter_id' => 55,
                'title' => 'Excercise 8.1',
                'content_url' => 'assets/animations/class6/chapter8/Ch_08_LS_01.swf',
            ],
            [
                'chapter_id' => 55,
                'title' => 'Excercise 8.2',
                'content_url' => 'assets/animations/class6/chapter8/Ch_08_LS_02.swf',
            ],
            [
                'chapter_id' => 55,
                'title' => 'Excercise 8.3',
                'content_url' => 'assets/animations/class6/chapter8/Ch_08_LS_03.swf',
            ],
            [
                'chapter_id' => 55,
                'title' => 'Excercise 8.4',
                'content_url' => 'assets/animations/class6/chapter8/Ch_08_LS_04.swf',
            ],

            // Chapter 9 (11 exercises) — chapter_id = 56
            [
                'chapter_id' => 56,
                'title' => 'Excercise 9.1',
                'content_url' => 'assets/animations/class6/chapter9/Ch_09_LS_01.swf',
            ],
            [
                'chapter_id' => 56,
                'title' => 'Excercise 9.2',
                'content_url' => 'assets/animations/class6/chapter9/Ch_09_LS_02.swf',
            ],
            [
                'chapter_id' => 56,
                'title' => 'Excercise 9.3',
                'content_url' => 'assets/animations/class6/chapter9/Ch_09_LS_03.swf',
            ],
            [
                'chapter_id' => 56,
                'title' => 'Excercise 9.4',
                'content_url' => 'assets/animations/class6/chapter9/Ch_09_LS_04.swf',
            ],
            [
                'chapter_id' => 56,
                'title' => 'Excercise 9.5',
                'content_url' => 'assets/animations/class6/chapter9/Ch_09_LS_05.swf',
            ],
            [
                'chapter_id' => 56,
                'title' => 'Excercise 9.6',
                'content_url' => 'assets/animations/class6/chapter9/Ch_09_LS_06.swf',
            ],
            [
                'chapter_id' => 56,
                'title' => 'Excercise 9.7',
                'content_url' => 'assets/animations/class6/chapter9/Ch_09_LS_07.swf',
            ],
            [
                'chapter_id' => 56,
                'title' => 'Excercise 9.8',
                'content_url' => 'assets/animations/class6/chapter9/Ch_09_LS_08.swf',
            ],
            [
                'chapter_id' => 56,
                'title' => 'Excercise 9.9',
                'content_url' => 'assets/animations/class6/chapter9/Ch_09_LS_09.swf',
            ],
            [
                'chapter_id' => 56,
                'title' => 'Excercise 9.10',
                'content_url' => 'assets/animations/class6/chapter9/Ch_09_LS_10.swf',
            ],
            [
                'chapter_id' => 56,
                'title' => 'Excercise 9.11',
                'content_url' => 'assets/animations/class6/chapter9/Ch_09_LS_11.swf',
            ],

            // Chapter 10 (4 exercises) — chapter_id = 57
            [
                'chapter_id' => 57,
                'title' => 'Excercise 10.1',
                'content_url' => 'assets/animations/class6/chapter10/Ch_10_LS_01.swf',
            ],
            [
                'chapter_id' => 57,
                'title' => 'Excercise 10.2',
                'content_url' => 'assets/animations/class6/chapter10/Ch_10_LS_02.swf',
            ],
            [
                'chapter_id' => 57,
                'title' => 'Excercise 10.3',
                'content_url' => 'assets/animations/class6/chapter10/Ch_10_LS_03.swf',
            ],
            [
                'chapter_id' => 57,
                'title' => 'Excercise 10.4',
                'content_url' => 'assets/animations/class6/chapter10/Ch_10_LS_04.swf',
            ],

            // Chapter 1 (5 exercises) — chapter_id = 58
            [
                'chapter_id' => 58,
                'title' => 'Excercise 1.1',
                'content_url' => 'assets/animations/class7/chapter1/Ch_01_LS_01.swf',
            ],
            [
                'chapter_id' => 58,
                'title' => 'Excercise 1.2',
                'content_url' => 'assets/animations/class7/chapter1/Ch_01_LS_02.swf',
            ],
            [
                'chapter_id' => 58,
                'title' => 'Excercise 1.3',
                'content_url' => 'assets/animations/class7/chapter1/Ch_01_LS_03.swf',
            ],
            [
                'chapter_id' => 58,
                'title' => 'Excercise 1.4',
                'content_url' => 'assets/animations/class7/chapter1/Ch_01_LS_04.swf',
            ],
            [
                'chapter_id' => 58,
                'title' => 'Excercise 1.5',
                'content_url' => 'assets/animations/class7/chapter1/Ch_01_LS_05.swf',
            ],

            // Chapter 2 (4 exercises) — chapter_id = 59
            [
                'chapter_id' => 59,
                'title' => 'Excercise 2.1',
                'content_url' => 'assets/animations/class7/chapter2/Ch_02_LS_01.swf',
            ],
            [
                'chapter_id' => 59,
                'title' => 'Excercise 2.2',
                'content_url' => 'assets/animations/class7/chapter2/Ch_02_LS_02.swf',
            ],
            [
                'chapter_id' => 59,
                'title' => 'Excercise 2.3',
                'content_url' => 'assets/animations/class7/chapter2/Ch_02_LS_03.swf',
            ],
            [
                'chapter_id' => 59,
                'title' => 'Excercise 2.4',
                'content_url' => 'assets/animations/class7/chapter2/Ch_02_LS_04.swf',
            ],

            // Chapter 3 (6 exercises) — chapter_id = 60
            [
                'chapter_id' => 60,
                'title' => 'Excercise 3.1',
                'content_url' => 'assets/animations/class7/chapter3/Ch_03_LS_01.swf',
            ],
            [
                'chapter_id' => 60,
                'title' => 'Excercise 3.2',
                'content_url' => 'assets/animations/class7/chapter3/Ch_03_LS_02.swf',
            ],
            [
                'chapter_id' => 60,
                'title' => 'Excercise 3.3',
                'content_url' => 'assets/animations/class7/chapter3/Ch_03_LS_03.swf',
            ],
            [
                'chapter_id' => 60,
                'title' => 'Excercise 3.4',
                'content_url' => 'assets/animations/class7/chapter3/Ch_03_LS_04.swf',
            ],
            [
                'chapter_id' => 60,
                'title' => 'Excercise 3.5',
                'content_url' => 'assets/animations/class7/chapter3/Ch_03_LS_05.swf',
            ],
            [
                'chapter_id' => 60,
                'title' => 'Excercise 3.6',
                'content_url' => 'assets/animations/class7/chapter3/Ch_03_LS_06.swf',
            ],

            // Chapter 4 (5 exercises) — chapter_id = 61
            [
                'chapter_id' => 61,
                'title' => 'Excercise 4.1',
                'content_url' => 'assets/animations/class7/chapter4/Ch_04_LS_01.swf',
            ],
            [
                'chapter_id' => 61,
                'title' => 'Excercise 4.2',
                'content_url' => 'assets/animations/class7/chapter4/Ch_04_LS_02.swf',
            ],
            [
                'chapter_id' => 61,
                'title' => 'Excercise 4.3',
                'content_url' => 'assets/animations/class7/chapter4/Ch_04_LS_03.swf',
            ],
            [
                'chapter_id' => 61,
                'title' => 'Excercise 4.4',
                'content_url' => 'assets/animations/class7/chapter4/Ch_04_LS_04.swf',
            ],
            [
                'chapter_id' => 61,
                'title' => 'Excercise 4.5',
                'content_url' => 'assets/animations/class7/chapter4/Ch_04_LS_05.swf',
            ],

            // Chapter 5 (6 exercises) — chapter_id = 62
            [
                'chapter_id' => 62,
                'title' => 'Excercise 5.1',
                'content_url' => 'assets/animations/class7/chapter5/Ch_05_LS_01.swf',
            ],
            [
                'chapter_id' => 62,
                'title' => 'Excercise 5.2',
                'content_url' => 'assets/animations/class7/chapter5/Ch_05_LS_02.swf',
            ],
            [
                'chapter_id' => 62,
                'title' => 'Excercise 5.3',
                'content_url' => 'assets/animations/class7/chapter5/Ch_05_LS_03.swf',
            ],
            [
                'chapter_id' => 62,
                'title' => 'Excercise 5.4',
                'content_url' => 'assets/animations/class7/chapter5/Ch_05_LS_04.swf',
            ],
            [
                'chapter_id' => 62,
                'title' => 'Excercise 5.5',
                'content_url' => 'assets/animations/class7/chapter5/Ch_05_LS_05.swf',
            ],
            [
                'chapter_id' => 62,
                'title' => 'Excercise 5.6',
                'content_url' => 'assets/animations/class7/chapter5/Ch_05_LS_06.swf',
            ],

            // Chapter 6 (7 exercises) — chapter_id = 63
            [
                'chapter_id' => 63,
                'title' => 'Excercise 6.1',
                'content_url' => 'assets/animations/class7/chapter6/Ch_06_LS_01.swf',
            ],
            [
                'chapter_id' => 63,
                'title' => 'Excercise 6.2',
                'content_url' => 'assets/animations/class7/chapter6/Ch_06_LS_02.swf',
            ],
            [
                'chapter_id' => 63,
                'title' => 'Excercise 6.3',
                'content_url' => 'assets/animations/class7/chapter6/Ch_06_LS_03.swf',
            ],
            [
                'chapter_id' => 63,
                'title' => 'Excercise 6.4',
                'content_url' => 'assets/animations/class7/chapter6/Ch_06_LS_04.swf',
            ],
            [
                'chapter_id' => 63,
                'title' => 'Excercise 6.5',
                'content_url' => 'assets/animations/class7/chapter6/Ch_06_LS_05.swf',
            ],
            [
                'chapter_id' => 63,
                'title' => 'Excercise 6.6',
                'content_url' => 'assets/animations/class7/chapter6/Ch_06_LS_06.swf',
            ],
            [
                'chapter_id' => 63,
                'title' => 'Excercise 6.7',
                'content_url' => 'assets/animations/class7/chapter6/Ch_06_LS_07.swf',
            ],

            // Chapter 7 (7 exercises) — chapter_id = 64
            [
                'chapter_id' => 64,
                'title' => 'Excercise 7.1',
                'content_url' => 'assets/animations/class7/chapter7/Ch_07_LS_01.swf',
            ],
            [
                'chapter_id' => 64,
                'title' => 'Excercise 7.2',
                'content_url' => 'assets/animations/class7/chapter7/Ch_07_LS_02.swf',
            ],
            [
                'chapter_id' => 64,
                'title' => 'Excercise 7.3',
                'content_url' => 'assets/animations/class7/chapter7/Ch_07_LS_03.swf',
            ],
            [
                'chapter_id' => 64,
                'title' => 'Excercise 7.4',
                'content_url' => 'assets/animations/class7/chapter7/Ch_07_LS_04.swf',
            ],
            [
                'chapter_id' => 64,
                'title' => 'Excercise 7.5',
                'content_url' => 'assets/animations/class7/chapter7/Ch_07_LS_05.swf',
            ],
            [
                'chapter_id' => 64,
                'title' => 'Excercise 7.6',
                'content_url' => 'assets/animations/class7/chapter7/Ch_07_LS_06.swf',
            ],
            [
                'chapter_id' => 64,
                'title' => 'Excercise 7.7',
                'content_url' => 'assets/animations/class7/chapter7/Ch_07_LS_07.swf',
            ],

            // Chapter 8 (3 exercises) — chapter_id = 65
            [
                'chapter_id' => 65,
                'title' => 'Excercise 8.1',
                'content_url' => 'assets/animations/class7/chapter8/Ch_08_LS_01.swf',
            ],
            [
                'chapter_id' => 65,
                'title' => 'Excercise 8.2',
                'content_url' => 'assets/animations/class7/chapter8/Ch_08_LS_02.swf',
            ],
            [
                'chapter_id' => 65,
                'title' => 'Excercise 8.3',
                'content_url' => 'assets/animations/class7/chapter8/Ch_08_LS_03.swf',
            ],

            // Chapter 9 (3 exercises) — chapter_id = 66
            [
                'chapter_id' => 66,
                'title' => 'Excercise 9.1',
                'content_url' => 'assets/animations/class7/chapter9/Ch_09_LS_01.swf',
            ],
            [
                'chapter_id' => 66,
                'title' => 'Excercise 9.2',
                'content_url' => 'assets/animations/class7/chapter9/Ch_09_LS_02.swf',
            ],
            [
                'chapter_id' => 66,
                'title' => 'Excercise 9.3',
                'content_url' => 'assets/animations/class7/chapter9/Ch_09_LS_03.swf',
            ],

            // Chapter 10 (2 exercises) — chapter_id = 67
            [
                'chapter_id' => 67,
                'title' => 'Excercise 10.1',
                'content_url' => 'assets/animations/class7/chapter10/Ch_10_LS_01.swf',
            ],
            [
                'chapter_id' => 67,
                'title' => 'Excercise 10.2',
                'content_url' => 'assets/animations/class7/chapter10/Ch_10_LS_02.swf',
            ],

            // Chapter 11 (3 exercises) — chapter_id = 68
            [
                'chapter_id' => 68,
                'title' => 'Excercise 11.1',
                'content_url' => 'assets/animations/class7/chapter11/Ch_11_LS_01.swf',
            ],
            [
                'chapter_id' => 68,
                'title' => 'Excercise 11.2',
                'content_url' => 'assets/animations/class7/chapter11/Ch_11_LS_02.swf',
            ],
            [
                'chapter_id' => 68,
                'title' => 'Excercise 11.3',
                'content_url' => 'assets/animations/class7/chapter11/Ch_11_LS_03.swf',
            ],

            // Chapter 1 (12 exercises) — chapter_id = 69
            [
                'chapter_id' => 69,
                'title' => 'Excercise 1.1',
                'content_url' => 'assets/animations/class8/chapter1/Ch_01_LS_01.swf',
            ],
            [
                'chapter_id' => 69,
                'title' => 'Excercise 1.2',
                'content_url' => 'assets/animations/class8/chapter1/Ch_01_LS_02.swf',
            ],
            [
                'chapter_id' => 69,
                'title' => 'Excercise 1.3',
                'content_url' => 'assets/animations/class8/chapter1/Ch_01_LS_03.swf',
            ],
            [
                'chapter_id' => 69,
                'title' => 'Excercise 1.4',
                'content_url' => 'assets/animations/class8/chapter1/Ch_01_LS_04.swf',
            ],
            [
                'chapter_id' => 69,
                'title' => 'Excercise 1.5',
                'content_url' => 'assets/animations/class8/chapter1/Ch_01_LS_05.swf',
            ],
            [
                'chapter_id' => 69,
                'title' => 'Excercise 1.6',
                'content_url' => 'assets/animations/class8/chapter1/Ch_01_LS_06.swf',
            ],
            [
                'chapter_id' => 69,
                'title' => 'Excercise 1.7',
                'content_url' => 'assets/animations/class8/chapter1/Ch_01_LS_07.swf',
            ],
            [
                'chapter_id' => 69,
                'title' => 'Excercise 1.8',
                'content_url' => 'assets/animations/class8/chapter1/Ch_01_LS_08.swf',
            ],
            [
                'chapter_id' => 69,
                'title' => 'Excercise 1.9',
                'content_url' => 'assets/animations/class8/chapter1/Ch_01_LS_09.swf',
            ],
            [
                'chapter_id' => 69,
                'title' => 'Excercise 1.10',
                'content_url' => 'assets/animations/class8/chapter1/Ch_01_LS_10.swf',
            ],
            [
                'chapter_id' => 69,
                'title' => 'Excercise 1.11',
                'content_url' => 'assets/animations/class8/chapter1/Ch_01_LS_11.swf',
            ],
            [
                'chapter_id' => 69,
                'title' => 'Excercise 1.12',
                'content_url' => 'assets/animations/class8/chapter1/Ch_01_LS_12.swf',
            ],

            // Chapter 2 (8 exercises) — chapter_id = 70
            [
                'chapter_id' => 70,
                'title' => 'Excercise 2.1',
                'content_url' => 'assets/animations/class8/chapter2/Ch_02_LS_01.swf',
            ],
            [
                'chapter_id' => 70,
                'title' => 'Excercise 2.2',
                'content_url' => 'assets/animations/class8/chapter2/Ch_02_LS_02.swf',
            ],
            [
                'chapter_id' => 70,
                'title' => 'Excercise 2.3',
                'content_url' => 'assets/animations/class8/chapter2/Ch_02_LS_03.swf',
            ],
            [
                'chapter_id' => 70,
                'title' => 'Excercise 2.4',
                'content_url' => 'assets/animations/class8/chapter2/Ch_02_LS_04.swf',
            ],
            [
                'chapter_id' => 70,
                'title' => 'Excercise 2.5',
                'content_url' => 'assets/animations/class8/chapter2/Ch_02_LS_05.swf',
            ],
            [
                'chapter_id' => 70,
                'title' => 'Excercise 2.6',
                'content_url' => 'assets/animations/class8/chapter2/Ch_02_LS_06.swf',
            ],
            [
                'chapter_id' => 70,
                'title' => 'Excercise 2.7',
                'content_url' => 'assets/animations/class8/chapter2/Ch_02_LS_07.swf',
            ],
            [
                'chapter_id' => 70,
                'title' => 'Excercise 2.8',
                'content_url' => 'assets/animations/class8/chapter2/Ch_02_LS_08.swf',
            ],

            // Chapter 3 (9 exercises) — chapter_id = 71
            [
                'chapter_id' => 71,
                'title' => 'Excercise 3.1',
                'content_url' => 'assets/animations/class8/chapter3/Ch_03_LS_01.swf',
            ],
            [
                'chapter_id' => 71,
                'title' => 'Excercise 3.2',
                'content_url' => 'assets/animations/class8/chapter3/Ch_03_LS_02.swf',
            ],
            [
                'chapter_id' => 71,
                'title' => 'Excercise 3.3',
                'content_url' => 'assets/animations/class8/chapter3/Ch_03_LS_03.swf',
            ],
            [
                'chapter_id' => 71,
                'title' => 'Excercise 3.4',
                'content_url' => 'assets/animations/class8/chapter3/Ch_03_LS_04.swf',
            ],
            [
                'chapter_id' => 71,
                'title' => 'Excercise 3.5',
                'content_url' => 'assets/animations/class8/chapter3/Ch_03_LS_05.swf',
            ],
            [
                'chapter_id' => 71,
                'title' => 'Excercise 3.6',
                'content_url' => 'assets/animations/class8/chapter3/Ch_03_LS_06.swf',
            ],
            [
                'chapter_id' => 71,
                'title' => 'Excercise 3.7',
                'content_url' => 'assets/animations/class8/chapter3/Ch_03_LS_07.swf',
            ],
            [
                'chapter_id' => 71,
                'title' => 'Excercise 3.8',
                'content_url' => 'assets/animations/class8/chapter3/Ch_03_LS_08.swf',
            ],
            [
                'chapter_id' => 71,
                'title' => 'Excercise 3.9',
                'content_url' => 'assets/animations/class8/chapter3/Ch_03_LS_09.swf',
            ],

            // Chapter 4 (5 exercises) — chapter_id = 72
            [
                'chapter_id' => 72,
                'title' => 'Excercise 4.1',
                'content_url' => 'assets/animations/class8/chapter4/Ch_04_LS_01.swf',
            ],
            [
                'chapter_id' => 72,
                'title' => 'Excercise 4.2',
                'content_url' => 'assets/animations/class8/chapter4/Ch_04_LS_02.swf',
            ],
            [
                'chapter_id' => 72,
                'title' => 'Excercise 4.3',
                'content_url' => 'assets/animations/class8/chapter4/Ch_04_LS_03.swf',
            ],
            [
                'chapter_id' => 72,
                'title' => 'Excercise 4.4',
                'content_url' => 'assets/animations/class8/chapter4/Ch_04_LS_04.swf',
            ],
            [
                'chapter_id' => 72,
                'title' => 'Excercise 4.5',
                'content_url' => 'assets/animations/class8/chapter4/Ch_04_LS_05.swf',
            ],

            // Chapter 5 (6 exercises) — chapter_id = 73
            [
                'chapter_id' => 73,
                'title' => 'Excercise 5.1',
                'content_url' => 'assets/animations/class8/chapter5/Ch_05_LS_01.swf',
            ],
            [
                'chapter_id' => 73,
                'title' => 'Excercise 5.2',
                'content_url' => 'assets/animations/class8/chapter5/Ch_05_LS_02.swf',
            ],
            [
                'chapter_id' => 73,
                'title' => 'Excercise 5.3',
                'content_url' => 'assets/animations/class8/chapter5/Ch_05_LS_03.swf',
            ],
            [
                'chapter_id' => 73,
                'title' => 'Excercise 5.4',
                'content_url' => 'assets/animations/class8/chapter5/Ch_05_LS_04.swf',
            ],
            [
                'chapter_id' => 73,
                'title' => 'Excercise 5.5',
                'content_url' => 'assets/animations/class8/chapter5/Ch_05_LS_05.swf',
            ],
            [
                'chapter_id' => 73,
                'title' => 'Excercise 5.6',
                'content_url' => 'assets/animations/class8/chapter5/Ch_05_LS_06.swf',
            ],

            // Chapter 6 (3 exercises) — chapter_id = 74
            [
                'chapter_id' => 74,
                'title' => 'Excercise 6.1',
                'content_url' => 'assets/animations/class8/chapter6/Ch_06_LS_01.swf',
            ],
            [
                'chapter_id' => 74,
                'title' => 'Excercise 6.2',
                'content_url' => 'assets/animations/class8/chapter6/Ch_06_LS_02.swf',
            ],
            [
                'chapter_id' => 74,
                'title' => 'Excercise 6.3',
                'content_url' => 'assets/animations/class8/chapter6/Ch_06_LS_03.swf',
            ],

            // Chapter 7 (6 exercises) — chapter_id = 75
            [
                'chapter_id' => 75,
                'title' => 'Excercise 7.1',
                'content_url' => 'assets/animations/class8/chapter7/Ch_07_LS_01.swf',
            ],
            [
                'chapter_id' => 75,
                'title' => 'Excercise 7.2',
                'content_url' => 'assets/animations/class8/chapter7/Ch_07_LS_02.swf',
            ],
            [
                'chapter_id' => 75,
                'title' => 'Excercise 7.3',
                'content_url' => 'assets/animations/class8/chapter7/Ch_07_LS_03.swf',
            ],
            [
                'chapter_id' => 75,
                'title' => 'Excercise 7.4',
                'content_url' => 'assets/animations/class8/chapter7/Ch_07_LS_04.swf',
            ],
            [
                'chapter_id' => 75,
                'title' => 'Excercise 7.5',
                'content_url' => 'assets/animations/class8/chapter7/Ch_07_LS_05.swf',
            ],
            [
                'chapter_id' => 75,
                'title' => 'Excercise 7.6',
                'content_url' => 'assets/animations/class8/chapter7/Ch_07_LS_06.swf',
            ],

            // Chapter 8 (4 exercises) — chapter_id = 76
            [
                'chapter_id' => 76,
                'title' => 'Excercise 8.1',
                'content_url' => 'assets/animations/class8/chapter8/Ch_08_LS_01.swf',
            ],
            [
                'chapter_id' => 76,
                'title' => 'Excercise 8.2',
                'content_url' => 'assets/animations/class8/chapter8/Ch_08_LS_02.swf',
            ],
            [
                'chapter_id' => 76,
                'title' => 'Excercise 8.3',
                'content_url' => 'assets/animations/class8/chapter8/Ch_08_LS_03.swf',
            ],
            [
                'chapter_id' => 76,
                'title' => 'Excercise 8.4',
                'content_url' => 'assets/animations/class8/chapter8/Ch_08_LS_04.swf',
            ],

            // Chapter 9 (9 exercises) — chapter_id = 77
            [
                'chapter_id' => 77,
                'title' => 'Excercise 9.1',
                'content_url' => 'assets/animations/class8/chapter9/Ch_09_LS_01.swf',
            ],
            [
                'chapter_id' => 77,
                'title' => 'Excercise 9.2',
                'content_url' => 'assets/animations/class8/chapter9/Ch_09_LS_02.swf',
            ],
            [
                'chapter_id' => 77,
                'title' => 'Excercise 9.3',
                'content_url' => 'assets/animations/class8/chapter9/Ch_09_LS_03.swf',
            ],
            [
                'chapter_id' => 77,
                'title' => 'Excercise 9.4',
                'content_url' => 'assets/animations/class8/chapter9/Ch_09_LS_04.swf',
            ],
            [
                'chapter_id' => 77,
                'title' => 'Excercise 9.5',
                'content_url' => 'assets/animations/class8/chapter9/Ch_09_LS_05.swf',
            ],
            [
                'chapter_id' => 77,
                'title' => 'Excercise 9.6',
                'content_url' => 'assets/animations/class8/chapter9/Ch_09_LS_06.swf',
            ],
            [
                'chapter_id' => 77,
                'title' => 'Excercise 9.7',
                'content_url' => 'assets/animations/class8/chapter9/Ch_09_LS_07.swf',
            ],
            [
                'chapter_id' => 77,
                'title' => 'Excercise 9.8',
                'content_url' => 'assets/animations/class8/chapter9/Ch_09_LS_08.swf',
            ],
            [
                'chapter_id' => 77,
                'title' => 'Excercise 9.9',
                'content_url' => 'assets/animations/class8/chapter9/Ch_09_LS_09.swf',
            ],

            // Chapter 10 (4 exercises) — chapter_id = 78
            [
                'chapter_id' => 78,
                'title' => 'Excercise 10.1',
                'content_url' => 'assets/animations/class8/chapter10/Ch_10_LS_01.swf',
            ],
            [
                'chapter_id' => 78,
                'title' => 'Excercise 10.2',
                'content_url' => 'assets/animations/class8/chapter10/Ch_10_LS_02.swf',
            ],
            [
                'chapter_id' => 78,
                'title' => 'Excercise 10.3',
                'content_url' => 'assets/animations/class8/chapter10/Ch_10_LS_03.swf',
            ],
            [
                'chapter_id' => 78,
                'title' => 'Excercise 10.4',
                'content_url' => 'assets/animations/class8/chapter10/Ch_10_LS_04.swf',
            ],

            // Chapter 11 (10 exercises) — chapter_id = 79
            [
                'chapter_id' => 79,
                'title' => 'Excercise 11.1',
                'content_url' => 'assets/animations/class8/chapter11/Ch_11_LS_01.swf',
            ],
            [
                'chapter_id' => 79,
                'title' => 'Excercise 11.2',
                'content_url' => 'assets/animations/class8/chapter11/Ch_11_LS_02.swf',
            ],
            [
                'chapter_id' => 79,
                'title' => 'Excercise 11.3',
                'content_url' => 'assets/animations/class8/chapter11/Ch_11_LS_03.swf',
            ],
            [
                'chapter_id' => 79,
                'title' => 'Excercise 11.4',
                'content_url' => 'assets/animations/class8/chapter11/Ch_11_LS_04.swf',
            ],
            [
                'chapter_id' => 79,
                'title' => 'Excercise 11.5',
                'content_url' => 'assets/animations/class8/chapter11/Ch_11_LS_05.swf',
            ],
            [
                'chapter_id' => 79,
                'title' => 'Excercise 11.6',
                'content_url' => 'assets/animations/class8/chapter11/Ch_11_LS_06.swf',
            ],
            [
                'chapter_id' => 79,
                'title' => 'Excercise 11.7',
                'content_url' => 'assets/animations/class8/chapter11/Ch_11_LS_07.swf',
            ],
            [
                'chapter_id' => 79,
                'title' => 'Excercise 11.8',
                'content_url' => 'assets/animations/class8/chapter11/Ch_11_LS_08.swf',
            ],
            [
                'chapter_id' => 79,
                'title' => 'Excercise 11.9',
                'content_url' => 'assets/animations/class8/chapter11/Ch_11_LS_09.swf',
            ],
            [
                'chapter_id' => 79,
                'title' => 'Excercise 11.10',
                'content_url' => 'assets/animations/class8/chapter11/Ch_11_LS_10.swf',
            ],

        ];


        foreach ($chapterContents as $content) {
            ChapterContent::create($content);
        }

        $user = new User();
        $user->name = 'Admin';
        $user->role = 2;
        $user->email = 'rauf@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
    }
}
