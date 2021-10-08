<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['title','description','content','image_path','category_id','status','features','user_id'];

    const STATUS_DRAFT  = 'draft';
    const STATUS_PUBLISHED  = 'published';

    protected $appends = [
        'image_url',

    ];
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = Str::title($value);
        $this->attributes['slug'] = Str::slug($value);
    }




    public function getImageUrlAttribute()
    {

        if (stripos($this->image_path, 'http') === 0) {
            return  asset('uploads/' . $this->image_path);
        }
        return   asset('storage/'.$this->image_path);

    }
    public function scopeActive($builder)
    {
        $builder->where('status', '=', 'published');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');

    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')
            ->withDefault();
    }

    public function hasTag($tagId) {
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }





    public function typeClass():string
    {
        return [
                'published' => 'text-success',
                'draft' => 'text-yellow',
            ][$this->status] ?? 'text-green';
    }


}
