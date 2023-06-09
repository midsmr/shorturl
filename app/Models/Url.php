<?php

namespace App\Models;

use App\Enums\UrlStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'status' => UrlStatus::class
    ];

    public function app(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(App::class);
    }
}
