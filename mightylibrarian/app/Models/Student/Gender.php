<?php

namespace App\Models\Student;

enum Gender: int
{
    case Male   = 1;
    case Female = 2;
    case None   = 0;
}
