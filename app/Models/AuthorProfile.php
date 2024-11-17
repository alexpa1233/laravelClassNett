<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorProfile extends Model
{
    use HasFactory;

    protected $fillable = ['author_id','biograpy'];

    protected $hidden = ['id','created_at','updated_at'];

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
