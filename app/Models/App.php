<?php

namespace App\Models;

use App\Enums\AppStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'status' => AppStatus::class
    ];
}
