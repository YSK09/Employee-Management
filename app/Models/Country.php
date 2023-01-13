<?php

namespace App\Models;

use App\Http\Controllers\Backend\StateController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
       'country_code',
       'name',
    ];
    public function states()
    {
        return $this->hasMany(StateController::class);
    }
}
