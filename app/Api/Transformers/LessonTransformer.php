<?php
/**
 * Created by PhpStorm.
 * User: 81574
 * Date: 2017/5/24
 * Time: 17:49
 */

namespace App\Api\Transformers;


use App\Lesson;
use League\Fractal\TransformerAbstract;

class LessonTransformer extends TransformerAbstract
{
    public function transform(Lesson $lesson)
    {
        return [
            'title' => $lesson['title'],
            'content' => $lesson['body'],
            'is_free' => (boolean) $lesson['free']
        ];
    }
}