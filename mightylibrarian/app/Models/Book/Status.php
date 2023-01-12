<?php

namespace App\Models\Book;

enum Status: string
{
    case New = 'New';
    case Used = 'Used';
}
