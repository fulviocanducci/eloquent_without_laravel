<?php namespace Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class People extends Eloquent
{
    protected $table = 'people';
    protected $fillable = ['name'];
    protected $primaryKey = 'id';
    protected $dates = ['created_at', 'updated_at'];
}