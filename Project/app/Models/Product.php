<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //___________________ connect  database table with Model _______________
    // The table associated with the model
    protected $table = 'product';

    // The primary key column name
    protected $primaryKey = 'id';

    //_______ Category Relation ________
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
