<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    public function products()
    {
        return $this -> belongsTo('App\product');
        # code...
    }
}
