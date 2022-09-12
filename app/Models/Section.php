<?php

namespace App\Models;

use App\Models\Text;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'sections';
    protected $guarded = [
        'id',
        'self_url'
    ];
    protected $with = [
        'texts',
        'anchors',
        'images'
    ];

    public function texts(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Text::class, 'textable', 'textable_type', 'textable_id');
    }

    public function anchors(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Anchor::class, 'anchorable');
    }

    public function images(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(Image::class, 'imageable');
    }

    public function page(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

}
