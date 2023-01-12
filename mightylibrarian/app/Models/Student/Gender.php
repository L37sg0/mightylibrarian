<?php

namespace App\Models\Student;

enum Gender: string
{
    case Male   = 'M';
    case Female = 'F';
    case None   = 'NA';
}
