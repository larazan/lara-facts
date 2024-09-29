<?php

namespace App\Models;

use App\Concerns\HasAuthor;
use App\Concerns\HasLikes;
use App\Concerns\HasSlug;
use App\Concerns\HasTags;
use App\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Fact extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasAuthor;
    use HasSlug;
    // use HasLikes;
    use HasTimestamps;
    use HasTags;
    use HasUuids;

    const TABLE = 'facts';

    protected $table = self::TABLE;

    public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';

    public const STATUSES = [
        self::ACTIVE => 'active',
        self::INACTIVE => 'inactive',
    ];

    protected $fillable = [
        'parent_id',
        'rand_id',
		'title',
		'slug',
		'description',
		'author_id',
		'category_id',
		'tags',
		'bgColor',
		'color',
        'history_time',
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

    public function excerpt(int $limit = 200): string
    {
        return Str::limit(strip_tags($this->title()), $limit);
    }

    public function wordsCount()
    {
        return str_word_count($this->title());
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::ACTIVE);
    }

    public function category($categoryId)
	{
		$category = Category::where('id', $categoryId)->first();
		return $category->name;
	}
}
