<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 */
class Page extends Model
{
    use HasFactory;
    protected  $table = 'pages';
    protected  $guarded = ['id', 'self_url'];
    protected  $with = [
        'heads',
        'sections',
    ];

    public function heads(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Head::class);
    }
    public function sections(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Section::class);
    }
}
