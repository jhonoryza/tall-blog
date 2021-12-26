<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'title',
        'desc',
        'body',
        'slug',
        'published_at',
        'category_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'published_at'
    ];

    protected static function booted()
    {
        parent::booted();
        static::created(function ($post) {
            if ($post->read_time == null) {
                $post->update([
                    'read_time' => Post::getReadTime($post->body)
                ]);
            }
        });
    }

    protected static function getReadTime($html)
    {
        $html = strip_tags($html);
        $word = html_entity_decode($html);
        $word = preg_replace('/[\r\n]+/', '', $word);
        $readTime = (int) (str_word_count($word) / 200); //@phpstan-ignore-line

        return $readTime == 0 ? '1 min' : $readTime . ' min';
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getPublishedForHuman(): string
    {
        return $this->published_at instanceof Carbon ? $this->published_at->diffForHumans() : '';
    }
}
