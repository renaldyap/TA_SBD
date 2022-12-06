<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Unit extends Model
{
    use SoftDeletes;

    protected $table = 'product_units';
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
