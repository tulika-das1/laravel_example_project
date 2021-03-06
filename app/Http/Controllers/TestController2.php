<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController2 extends Controller
{
    const DATA = [
        [
            'question' => [
                'title' => 'Lorem Ipsum 1',
            ],
    
            'answers' => [
                [
                    'title' => 'Lorem Ipsum Answer 1 option A',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 1 option B',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 1 option C',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 1 option D',
                ],
            ],
        ],
    
        [
            'question' => [
                'title' => 'Lorem Ipsum 2',
            ],
    
            'answers' => [
                [
                    'title' => 'Lorem Ipsum Answer 2 option A',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 2 option B',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 2 option C',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 2 option D',
                ],
            ],
        ],
    
        [
            'question' => [
                'title' => 'Lorem Ipsum 3',
            ],
    
            'answers' => [
                [
                    'title' => 'Lorem Ipsum Answer 3 option A',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 3 option B',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 3 option C',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 3 option D',
                ],
            ],
        ],
    
        [
            'question' => [
                'title' => 'Lorem Ipsum 4',
            ],
    
            'answers' => [
                [
                    'title' => 'Lorem Ipsum Answer 4 option A',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 4 option B',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 4 option C',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 4 option D',
                ],
            ],
        ],
    
        [
            'question' => [
                'title' => 'Lorem Ipsum 5',
            ],
    
            'answers' => [
                [
                    'title' => 'Lorem Ipsum Answer 5 option A',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 5 option B',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 5 option C',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 5 option D',
                ],
            ],
        ],
    
        [
            'question' => [
                'title' => 'Lorem Ipsum 6',
            ],
    
            'answers' => [
                [
                    'title' => 'Lorem Ipsum Answer 6 option A',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 6 option B',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 6 option C',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 6 option D',
                ],
            ],
        ],
    
        [
            'question' => [
                'title' => 'Lorem Ipsum 7',
            ],
    
            'answers' => [
                [
                    'title' => 'Lorem Ipsum Answer 7 option A',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 7 option B',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 7 option C',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 7 option D',
                ],
            ],
        ],
    
        [
            'question' => [
                'title' => 'Lorem Ipsum 8',
            ],
    
            'answers' => [
                [
                    'title' => 'Lorem Ipsum Answer 8 option A',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 8 option B',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 8 option C',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 8 option D',
                ],
            ],
        ],
    
        [
            'question' => [
                'title' => 'Lorem Ipsum 9',
            ],
    
            'answers' => [
                [
                    'title' => 'Lorem Ipsum Answer 9 option A',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 9 option B',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 9 option C',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 9 option D',
                ],
            ],
        ],
        
        [
            'question' => [
                'title' => 'Lorem Ipsum 10',
            ],
    
            'answers' => [
                [
                    'title' => 'Lorem Ipsum Answer 10 option A',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 10 option B',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 10 option C',
                ],
                [
                    'title' => 'Lorem Ipsum Answer 10 option D',
                ],
            ],
        ],
    ];

    // public function __invoke()
    // {
    //     $questions = collect();
    //     $answers = collect();

    //     $ques = collect(self::DATA)->map(function ($ques){
    //         return $ques['question'];
    //     });
        

    //     $anss = collect(self::DATA)->map(function ($anss) {
    //         return $anss['answers'];
    //     });
        
    //     foreach($anss as $answer) {
    //         foreach($answer as $ans) { // O(n^2)
    //             $answers->push($ans);
    //         }
    //     }
    //     $question_answer = [
    //         'questions' => $ques->all(),
    //         'answers' => $answers->all(),
    //     ];

    //     dd($question_answer);
    // } 
    
    public function __invoke() 
    {
        $q_data = collect(self::DATA);
        $quesion_numbs = collect()->range(1, $q_data->count());

        $q_data = $q_data->map(function ($data, $index) use ($quesion_numbs) {
            $id = $quesion_numbs->get($index);

            // $data['qustion']['id'] = $id;
            // $answers = collect($data['answers'])->map(fn ($an) => $an['question_id'] = $id);

            data_set($data, 'question.id', $id);
            data_set($data, 'answers.*.question_id', $id);

            return $data;
        });

        $questions = $q_data->pluck('question')->all();
        $answers = $q_data->pluck('answers')->flatten(1)->all();

        $data = compact('questions', 'answers');

        dd($data);
    }
}

