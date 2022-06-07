<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    const DATA = [
        'questions' => [
            [
                'id' => 1,
                'title' => 'Lorem Ipsum 1'
            ],
            [
                'id' => 2,
                'title' => 'Lorem Ipsum 2'
            ],
            [
                'id' => 3,
                'title' => 'Lorem Ipsum 3'
            ],
            [
                'id' => 4,
                'title' => 'Lorem Ipsum 4'
            ],
            [
                'id' => 5,
                'title' => 'Lorem Ipsum 5'
            ],
            [
                'id' => 6,
                'title' => 'Lorem Ipsum 6'
            ],
            [
                'id' => 7,
                'title' => 'Lorem Ipsum 7'
            ],
            [
                'id' => 8,
                'title' => 'Lorem Ipsum 8'
            ],
            [
                'id' => 9,
                'title' => 'Lorem Ipsum 9'
            ],
            [
                'id' => 10,
                'title' => 'Lorem Ipsum 10'
            ],
        ],
    
        'answers' => [
            [
                'title' => 'Lorem Ipsum Answer 1 option A',
                'question_id' => 1,
            ],
            [
                'title' => 'Lorem Ipsum Answer 1 option B',
                'question_id' => 1,
            ],
            [
                'title' => 'Lorem Ipsum Answer 1 option C',
                'question_id' => 1,
            ],
            [
                'title' => 'Lorem Ipsum Answer 1 option D',
                'question_id' => 1,
            ],
            [
                'title' => 'Lorem Ipsum Answer 2 option A',
                'question_id' => 2,
            ],
            [
                'title' => 'Lorem Ipsum Answer 2 option B',
                'question_id' => 2,
            ],
            [
                'title' => 'Lorem Ipsum Answer 2 option C',
                'question_id' => 2,
            ],
            [
                'title' => 'Lorem Ipsum Answer 2 option D',
                'question_id' => 2,
            ],
            [
                'title' => 'Lorem Ipsum Answer 3 option A',
                'question_id' => 3,
            ],
            [
                'title' => 'Lorem Ipsum Answer 3 option B',
                'question_id' => 3,
            ],
            [
                'title' => 'Lorem Ipsum Answer 3 option C',
                'question_id' => 3,
            ],
            [
                'title' => 'Lorem Ipsum Answer 3 option D',
                'question_id' => 3,
            ],
    
            [
                'title' => 'Lorem Ipsum Answer 4 option A',
                'question_id' => 4,
            ],
            [
                'title' => 'Lorem Ipsum Answer 4 option B',
                'question_id' => 4,
            ],
            [
                'title' => 'Lorem Ipsum Answer 4 option C',
                'question_id' => 4,
            ],
            [
                'title' => 'Lorem Ipsum Answer 4 option D',
                'question_id' => 4,
            ],
    
            [
                'title' => 'Lorem Ipsum Answer 5 option A',
                'question_id' => 5,
            ],
            [
                'title' => 'Lorem Ipsum Answer 5 option B',
                'question_id' => 5,
            ],
            [
                'title' => 'Lorem Ipsum Answer 5 option C',
                'question_id' => 5,
            ],
            [
                'title' => 'Lorem Ipsum Answer 5 option D',
                'question_id' => 5,
            ],
    
            [
                'title' => 'Lorem Ipsum Answer 6 option A',
                'question_id' => 6,
            ],
            [
                'title' => 'Lorem Ipsum Answer 6 option B',
                'question_id' => 6,
            ],
            [
                'title' => 'Lorem Ipsum Answer 6 option C',
                'question_id' => 6,
            ],
            [
                'title' => 'Lorem Ipsum Answer 6 option D',
                'question_id' => 6,
            ],
    
            [
                'title' => 'Lorem Ipsum Answer 7 option A',
                'question_id' => 7,
            ],
            [
                'title' => 'Lorem Ipsum Answer 7 option B',
                'question_id' => 7,
            ],
            [
                'title' => 'Lorem Ipsum Answer 7 option C',
                'question_id' => 7,
            ],
            [
                'title' => 'Lorem Ipsum Answer 7 option D',
                'question_id' => 7,
            ],
    
            [
                'title' => 'Lorem Ipsum Answer 8 option A',
                'question_id' => 8,
            ],
            [
                'title' => 'Lorem Ipsum Answer 8 option B',
                'question_id' => 8,
            ],
            [
                'title' => 'Lorem Ipsum Answer 8 option C',
                'question_id' => 8,
            ],
            [
                'title' => 'Lorem Ipsum Answer 8 option D',
                'question_id' => 8,
            ],
    
            [
                'title' => 'Lorem Ipsum Answer 9 option A',
                'question_id' => 9,
            ],
            [
                'title' => 'Lorem Ipsum Answer 9 option B',
                'question_id' => 9,
            ],
            [
                'title' => 'Lorem Ipsum Answer 9 option C',
                'question_id' => 9,
            ],
            [
                'title' => 'Lorem Ipsum Answer 9 option D',
                'question_id' => 9,
            ],
    
            [
                'title' => 'Lorem Ipsum Answer 10 option A',
                'question_id' => 10,
            ],
            [
                'title' => 'Lorem Ipsum Answer 10 option B',
                'question_id' => 10,
            ],
            [
                'title' => 'Lorem Ipsum Answer 10 option C',
                'question_id' => 10,
            ],
            [
                'title' => 'Lorem Ipsum Answer 10 option D',
                'question_id' => 10,
            ],
    
        ],
    ];

    public function __invoke()
    {
    //    $collections = collect([
    //         'questions' => self::DATA['questions'],
    //         'answers' => self::DATA['answers'],
    //    ]);



    }
}
