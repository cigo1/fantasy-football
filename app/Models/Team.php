<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function updateValue()
    {
        $value = $this->players()->sum('value');
        $this->update(['value' => $value]);
    }
    public function players()
    {
        return $this->hasMany(Player::class);
    }
}