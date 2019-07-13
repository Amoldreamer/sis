<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'students';
    protected $fillable = ['studentName','rollNo','gender','course','year','semester','department','email','fatherName','motherName','faPhNum','stPhNum','stDOB','city','state','stAddress','stPinCode','imgName'];
}
