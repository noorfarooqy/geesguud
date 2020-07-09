<?php

namespace App\Http\Controllers\players;

use App\Http\Controllers\Controller;
use App\models\players\PlayersModel;
use App\models\players\PlayersPositionModel;
use App\models\teams\TeamsModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PlayerController extends Controller
{
    //

    public function ViewPlayerPosition(Request $request)
    {
        $user = $request->user();
        $positions = PlayersPositionModel::where('active_position', true)->get();
        return view('admin.teams.player_positions', compact('positions'));
    }

    public function AddPlayerPosition(Request $request)
    {
        $user = $request->user();

        $rules = [
            "positionName" => "required|string|unique:player_positions,position_name",
            "positionDescription" => "required|string|max:250|min:5",
        ];

        $data = $request->validate($rules);

        $PositionModel = new PlayersPositionModel();
        $new_position = $PositionModel->SavePosition($data, $user->id);

        if (!$new_position)
            return Redirect::back()->withErrors(['position' => $PositionModel->getError()]);
        return Redirect::back()->with('success', 'Successfully created new position');
    }

    public function AddTeamPlayer(Request $request, $team_id)
    {
        $user = $request->user();
        $team = TeamsModel::where('id', $team_id)->get();
        if ($team == null || $team->count() <= 0) {
            return Redirect::back()->withErrors(['team' => 'Could not find the team to verify for player addition']);
        }

        $rules = [
            "playerName" => "required|string|max:250,min:3",
            "playerImage" => "required|file|mimes:jpg,jpeg,png",
            "playerNumber" => "required|integer|min:0|max:9999",
            "playerAddress" => "required|string|max:250",
            "playerPhone" => "required|string|max:20",
            "playerEmail" => "required|email|max:20",
            "playerPosition" => "required|integer|exists:player_positions,id",
        ];

        $data = $request->validate($rules);

        $path = "uploads/teams/" . hash('md5', $team[0]->id);
        try {
            $playerImage = $request->file('playerImage')->store($path, 'public');
        } catch (Exception $th) {
            return $this->RedirectError($th->getMessage());
        }
        $data["playerImage"] = "/storage/" . $playerImage;

        $PlayerModel = new PlayersModel();
        $new_player = $PlayerModel->SaveNewPlayer($data, $team_id, $user->id);
        if (!$new_player) {
            return Redirect::back()->withErrors(['error' => $PlayerModel->getError()]);
        }
        return Redirect::back()->with('success', 'successfully added new player');
    }
}
