<?php

namespace App\models\players;

use Exception;
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
        'player_email',
        'created_by'
    ];

    protected $error_message = null;

    public function SaveNewPlayer($data, $team, $creator)
    {
        if ($this->JerseyNumberTaken($data["playerNumber"], $team)) {
            $this->error_message = "The player number is already assigned to another player in the same team";
            return false;
        }
        try {
            return $this->create([
                'player_name' => $data["playerName"],
                'player_image' => $data["playerImage"],
                'player_number' => $data["playerNumber"],
                'player_address' => $data["playerAddress"],
                'player_phone' => $data["playerPhone"],
                'player_position' => $data["playerPosition"],
                'player_team' => $team,
                'player_email' => $data["playerEmail"],
                'created_by' => $creator

            ]);
        } catch (Exception $th) {
            $this->error_message = $th->getMessage();
            return false;
        }
    }

    protected function JerseyNumberTaken($number, $team)
    {
        return $this->where([
            ['player_number', $number],
            ['player_team', $team]
        ])->exists();
    }

    public function getError()
    {
        return $this->error_message;
    }
}
