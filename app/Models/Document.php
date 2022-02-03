<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    public function electronica()
    {
        return $this->hasOne(Electronic::class);
    }

    public function geologia()
    {
        return $this->hasOne(Geology::class);
    }

    public function industrial()
    {
        return $this->hasOne(Industrial::class);
    }

    public function scopeName($query, $name)
    {
        if (trim($name) != '') {
            $query->where("name", "LIKE", "%$name%");
        }
    }
}
