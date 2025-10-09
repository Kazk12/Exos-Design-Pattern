<?php

namespace App\Quiz\Interface;

use App\Models\Question;

interface QuestionRepositoryInterface
{
    public function createAndSync(array $question, array $answer): array;
}