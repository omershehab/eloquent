<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =['title','body'];
    // (opposite to fillable) for fillable second code not recommended (leave empty to all) (if you include paramenter mean it will not passed/allowed)
    protected $guarded =[];
}
