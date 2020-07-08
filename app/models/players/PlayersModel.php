<?php

namespace App\models\players;

use Illuminate\Database\Eloquent\Model;

class PlayersModel extends Model
{
    //
    protected $table = "players";

    protected $fillable = [
        'player_name',
        'player_image',
        'player_number',
        'player_address',
        'player_phone',
        'player_position',
        'player_team',
        'player_email'
    ];
}
