<?php

namespace App\Models;

use App\Concerns\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    use HasSlug;

    protected $table = 'tags';

    protected $fillable = [
        'name',
        'slug',
        'status',
    ];

    public $timestamps = false;
    public const ACTIVE = 'active';

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::ACTIVE);
    }
}
