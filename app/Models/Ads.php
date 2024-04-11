<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Ads extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['title','description','picture','price','category_id','user_id'];

    public function toSearchableArray()
    {
        $category = $this->category->name;
        $array = [
            'id' => $this->id,
            'title'=> $this->title,
            'description'=> $this->description,
            'category' => $category
        ];
        return $array;
    }


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function category(){
        return $this->belongsTo(Categories::class,'category_id');
    }

}
