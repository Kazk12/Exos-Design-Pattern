<?php


namespace App\Quiz\Interface;

interface AnswerRepositoryInterface
{
    public function create($data):array;
}