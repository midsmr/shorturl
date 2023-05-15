<?php

namespace App\Enums;

enum AppStatus: int
{
    case Active = 1;

    case Waiting = 2;

    case Banned = 0;
}
