<?php

namespace App\Models\Book;

enum IssueStatus: int
{
    case Returned       = 1;
    case Not_Returned   = 0;
}
