<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table='Pizza';
    protected  $guarded= ['id'];

    public function authorName()
    {
        return $this->hasOne(User::class, 'id','author_id');
    }
    use HasFactory;
}
