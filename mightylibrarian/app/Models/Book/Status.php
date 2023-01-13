<?php

namespace App\Models\Book;

enum Status: int
{
    case Available  = 1;
    case Issued     = 0;
}
