<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dedura extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $fillable = [
        'user_id',
        'genba_id',
        'date',
        'shift',
    ];

    public static $rules = array(
        'user_id' => 'required',
        'genba_id' => 'required',
        'date' => 'required',
        'shift' => 'required',
    );


}
