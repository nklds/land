<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anchor extends Model
{
    use HasFactory;
    protected $table = 'anchors';
    protected $guarded = ['id', 'self_url'];

    public function anchorable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }
}
