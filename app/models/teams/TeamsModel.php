<?php

namespace App\models\teams;

use Exception;
use Illuminate\Database\Eloquent\Model;

class TeamsModel extends Model
{
    //
    protected $table = "teams";
    protected $fillable = [
        "team_name",
        "team_couch",
        'league_id',
        'team_logo',
        "is_local"
    ];

    protected $error_message = null;


    public function addTeam($data, $creator)
    {
        try {
            return $this->create([
                "team_name" => $data["teamName"],
                "team_couch" => $data["teamCoachName"],
                "league_id" => $data["league_id"],
                "team_logo" => $data["teamLogo"],
                "is_local" => isset($data["is_local"])
            ]);
        } catch (Exception $th) {
            $this->error_message = $th->getMessage();
            return false;
        }
    }

    public function getError()
    {
        return $this->error_message;
    }
}
