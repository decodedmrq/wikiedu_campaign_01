<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    // public function test($query) {
    // 	return $query->where('id', 1);
    // }

    public function scopetest($query) {
    	return $query->where('id', 1);
    }

    
}
