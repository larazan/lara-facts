<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class Fact extends Model
{
    use HasFactory;
    use HasUuids;

    const TABLE = 'facts';

    protected $table = self::TABLE;

    protected $fillable = [
		'title',
		'slug',
		'description',
		'author_id',
		'category_id',
		'tags',
		'bgColor',
		'color',
        'original',
        'medium',
        'small',
        'status',
	];

    protected $guarded = [];

    public const UPLOAD_DIR = 'uploads/facts';

    public const SMALL = '135x141';
	public const MEDIUM = '312x400';

    public static function boot() {
        parent::boot();
        // Auto generate UUID when creating data User
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

     /**
     * Kita override getIncrementing method
     *
     * Menonaktifkan auto increment
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * Kita override getKeyType method
     *
     * Memberi tahu laravel bahwa model ini menggunakan primary key bertipe string
     */
    public function getKeyType()
    {
        return 'string';
    }

    public function id(): int
    {
        return $this->id;
    }
    
    public function title(): string
    {
        return $this->title;
    }

    public function description(): string
    {
        return $this->description;
    }
}
