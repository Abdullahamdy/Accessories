<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
class Product extends Model
{
    use Favoriteable;
    protected $guarded = [];

    public function Clients(){
        return $this->belongsToMany('App\Models\Client','client_product','product_id','client_id')
        ->withPivot('is_favourite','count','total_price','status');
    }
    public function categories(){
        return $this->belongsTo('App\Models\Category','category_id');
    }

    public function image()
            {
                return $this->morphMany('App\Models\Image', 'imagable');
            }

            public function ratings()
            {
                return $this->hasMany('App\Models\Rating');
            }

}
