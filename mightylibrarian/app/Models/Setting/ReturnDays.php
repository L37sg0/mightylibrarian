<?php

namespace App\Models\Setting;

enum ReturnDays: int
{
    case Week           = 7;
    case Two_Weeks      = 14;
    case Three_Weeks    = 21;
    case Month          = 30;
}
