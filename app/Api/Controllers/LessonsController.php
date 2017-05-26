<?php
/**
 * Created by PhpStorm.
 * User: 81574
 * Date: 2017/5/24
 * Time: 17:45
 */

namespace App\Api\Controllers;


use App\Api\Transformers\LessonTransformer;
use App\Lesson;

class LessonsController extends BaseController
{
    public function index()
    {
        $lessons = Lesson::all();

        return $this->collection($lessons, new LessonTransformer());
    }

    public function show($id)
    {
        $lesson = Lesson::find($id);
        if (! $lesson) {
            return $this->response->errorNotFound('Lesson not found');
        }

        return $this->item($lesson, new LessonTransformer());
    }
}