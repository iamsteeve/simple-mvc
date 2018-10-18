<?php

namespace App\DTO;
use App\Entities\Task;

defined("APP_PATH") OR die("Acceso denegado");


class TaskDTO
{
    public function __construct(Task $task)
    {

    }
}