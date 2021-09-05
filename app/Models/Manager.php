<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'company_id' => 'required',
        'email' => 'email',
        'password' => 'required',
        'leave_flg' => 'required',
    );

    public function getData()
    {
        return $this->id .':'. $this->name .'(' .$this->company_id.')';
    }
}
