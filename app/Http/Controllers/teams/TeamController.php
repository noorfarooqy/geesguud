<?php

namespace App\Http\Controllers\teams;

use App\Http\Controllers\Controller;
use App\models\teams\LeaguesModel;
use App\models\teams\TeamCategoryModel;
use App\models\teams\TeamsModel;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    //
    protected $admin_page;
    protected $teamLang;
    public function __construct()
    {
        $this->admin_page = "admin.teams.";
        $this->teamLang = 'errors.team.';
    }

    public function OpenCategoryPage(Request $request)
    {
        $user = $request->user();

        $categories = TeamCategoryModel::all();
        return view($this->admin_page . 'category_page', compact('categories'));
    }

    public function SaveNewCategory(Request $request)
    {
        $user = $request->user();
        $rules = [
            "categoryName" => "required|string|min:3|max:255|unique:team_categories,category_name",
            "categoryDescription" => "nullable|string|min:3|max:255"
        ];

        $data = $request->validate($rules);

        $CategoryModel = new TeamCategoryModel();

        $new_category = $CategoryModel->createCategory($data, $user->id);

        if (!$new_category)
            return $this->RedirectError($CategoryModel->getError(), 'category');
        return $this->RedirectSuccess(__($this->teamLang . 'add_success'));
    }

    public function AddNewTeam(Request $request, $league_id)
    {
        $user = $request->user();

        $league = LeaguesModel::where('id', $league_id)->get();
        abort_if($league == null || $league->count() <= 0, 404);
        $league = $league[0];

        $rules = [
            "teamName" => "required|string|max:255|min:3",
            'teamLogo' => "required|file|mimes:jpg,png,jpeg",
            "teamCoachName" => "required|string|max:255|min:3",
            "is_local" => "nullable|string|in:on"
        ];

        $data = $request->validate($rules);

        $TeamModel = new TeamsModel();
        $data["league_id"] = $league->id;
        $path = "uploads/teams/" . hash('md5', $user->id);
        try {
            $teamLogo = $request->file('teamLogo')->store($path, 'public');
        } catch (Exception $th) {
            return $this->RedirectError($th->getMessage());
        }
        $data["teamLogo"] = "/storage/" . $teamLogo;
        // return $data;
        $new_team = $TeamModel->addTeam($data, $user->id);
        if (!$new_team) {
            return $this->RedirectError($TeamModel->getError());
        }

        return $this->RedirectSuccess(__($this->teamLang . 'add_success'));
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
