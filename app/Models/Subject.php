<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public function formcontacts(){
        return $this->hasMany(Formcontact::class, "subject_id");
    }
}
