<?php

namespace App\models\players;

use Exception;
use Illuminate\Database\Eloquent\Model;

class PlayersPositionModel extends Model
{
    //

    protected $table = "player_positions";
    protected $fillable = [
        "position_name",
        "position_description",
        "active_position",
        "created_by"
    ];
    protected $error_message = null;
    public function SavePosition($data, $user)
    {
        try {
            return $this->create([
                "position_name" => $data["positionName"],
                "position_description" => $data["positionDescription"],
                "created_by" => $user
            ]);
        } catch (Exception $th) {
            //throw $th;
            $this->error_message = $th->getMessage();
            return false;
        }
    }

    public function getError()
    {
        return $this->error_message;
    }
}
