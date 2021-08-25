<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genba extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $fillable = [
        'company_id',
        'name',
        'address',
        'startDate',
        'endDate',
    ];

    public static $rules = array(
        'company_id' => 'required',
        'gname' => 'required',
        'address' => 'required',
        'startDate' => 'required',
        'endDate' => 'required',
    );

}