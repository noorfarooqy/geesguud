<?php

namespace App\models\teams;

use Illuminate\Database\Eloquent\Model;

class LeaguesModel extends Model
{
    //
    protected $table = 'leagues';
    protected $fillable = [
        'league_name',
        'league_description',
        'league_category',
        'begins_at',
        'ends_at',
        'number_of_teams',
        'created_by',
    ];

    protected $error_message = null;

    public function CreateNewLeague($data, $creator)
    {
        try {
            return $this->create([
                'league_name' => $data["leagueName"],
                'league_description' => $data["leagueDescription"],
                'league_category' => $data["leagueCategory"],
                'begins_at' => $data["leagueStartsAt"],
                'ends_at' => $data["leagueEndsAt"],
                'number_of_teams' => $data["leagueNumberOfTeams"],
                'created_by' => $creator,

            ]);
        } catch (\Throwable $th) {
            $this->error_messsage = $th->getMessage();
        }
    }

    public function Category()
    {
        return $this->belongsTo(TeamCategoryModel::class, 'league_category', 'id');
    }

    public function Teams()
    {
        return $this->hasMany(TeamsModel::class, 'league_id', 'id');
    }

    public function getError()
    {
        return $this->error_message;
    }
}
