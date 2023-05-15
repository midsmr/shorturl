<?php

namespace App\Enums;

enum UserStatus: int
{
    case Active = 1;

    case Banned = 0;
}
