<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public static function generateSlug($str){
        $slug = Str::slug($str, '-');
        $original_slug = $slug;
        $slug_exist = Technology::where('slug',$slug)->first();
        $c = 1;
        while($slug_exist){
            $slug = $original_slug . '-' . $c;
            $slug_exist = Technology::where('slug',$slug)->first();
            $c++;

        };

        return $slug;
    }

    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
