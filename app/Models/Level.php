<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    protected $table = 'levels';

    public function coach(){
        return $this -> BelongsTo('App\Models\Coach');
    }
}
