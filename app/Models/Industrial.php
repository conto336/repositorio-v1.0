<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Document;

class Industrial extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];
    
    public function document()
    {
        return $this->belongsTo('App\Models\Document', 'document_id');
    }

/*     public function scopeName($query, $name)
    {
        if (trim($name) != '') {
            $query->where("name", "LIKE", "%$name%");
        }
    } */
}
