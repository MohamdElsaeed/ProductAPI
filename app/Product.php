<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const AVAILABLE_PRODUCT='available';
    const UNAVAILABLE_PRODUCT='unavailable';

    protected $fillable=[
    'name',
    'description',
    'quantity',
    'image',
    'status',
    'seler_id'  ];

    public function isAvailable(){
         return $this->status == Product::AVAILABLE_PRODUCT;
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
     }

     public function seller(){
         return $this->belongsTo(Seller::class);
     }
     
     public function transactions(){
         return $this->hasMany(Transaction::class);
     }

}
