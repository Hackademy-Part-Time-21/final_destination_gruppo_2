<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ads extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','picture','category_id','user_id','price'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function category(){
        return $this->belongsTo(Categories::class,'category_id');
    }
}
