<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(Item::class, 'menu_id');
    }

    public function getStatusAttribute()
    {
        return $this->attributes['status'] = $this->attributes['status'] == 1 ? 'Active' : 'Inactive';
    }
}
