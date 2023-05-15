<?php

namespace App\Enums;

enum UrlStatus: int
{
    case Active = 1;

    case Banned = 0;
}
