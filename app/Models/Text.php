<?php

namespace App\Models;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;
    protected  $table = 'texts';
    protected  $guarded = [
        'id',
        'self_url'
    ];
    protected  $with = [

    ];

    public function textable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }

}
