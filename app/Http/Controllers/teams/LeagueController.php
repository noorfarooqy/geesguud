<?php

namespace App\Http\Controllers\teams;

use App\Http\Controllers\Controller;
use App\models\teams\TeamCategoryModel;
use App\models\teams\LeaguesModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LeagueController extends Controller
{
    //
    protected $leaguelang;
    protected $categoryLang;
    public function __construct()
    {
        $this->admin_page = "admin.teams.";
        $this->leaguelang = 'errors.league.';
    }
    public function OpenLeaguesPage(Request $request)
    {
        $user = $request->user();

        $leagues = LeaguesModel::all();
        foreach ($leagues as $key => $league) {
            # code...
            $leagues[$key]->is_active = Carbon::now()->gt($league->ends_at);
        }
        $categories = TeamCategoryModel::where('is_active', true)->get();
        return view($this->admin_page . 'leagues_page', compact('leagues', 'categories'));
    }

    public function CreateNewLeague(Request $request)
    {
        $user = $request->user();

        $rules = [
            "leagueName" => "required|string|min:3|max:255|unique:leagues,league_name",
            "leagueNumberOfTeams" => "required|integer|min:1|max:999",
            "leagueStartsAt" => "required|date",
            "leagueEndsAt" => "nullable|date|after:leagueStartsAt",
            "leagueDescription" => "nullable|string|max:255|min:3",
            "leagueCategory" => "required|integer|exists:team_categories,id"
        ];

        $data = $request->validate($rules);

        $leagueModel = new LeaguesModel();

        $new_league = $leagueModel->CreateNewLeague($data, $user->id);

        if (!$new_league) {
            return $this->RedirectError($leagueModel->getError());
        }
        return $this->RedirectSuccess(__($this->leaguelang . 'add_success'));
    }

    public function ViewLeagueTeams(Request $request, $league_id)
    {
        $user = $request->user();

        $league = LeaguesModel::where('id', $league_id)->get();
        abort_if($league == null || $league->count() <= 0, 404);
        $league = $league[0];
        return view($this->admin_page . 'league_teams', compact('league'));
    }


    public function RedirectError($error, $name = 'error')
    {
        return Redirect::back()->withErrors([$name => $error]);
    }
    public function RedirectSuccess($message = 'successfully completed request')
    {
        return Redirect::back()->with('success', $message);
    }
}
