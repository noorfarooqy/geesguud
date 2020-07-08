@extends('layouts.mainlayout')

@section('body-content')

<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3 class="title">{{__('league.title')}} <span>/ {{__('league.subtitle')}}</span></h3>
        </div>
    </div><!-- Page Heading End -->

</div><!-- Page Headings End -->

<div class="row">


    <!--Hoverable Rows Light Start-->
    <div class="col-lg-8 col-8 mb-30">
        @if ($errors->any())
        <div class="alert alert-solid-danger">
            <i class="fa fa-times-circle ml-2"></i>{{$errors->first()}}
        </div>
        @endif

        @if(Session::has('success'))
        <div class="alert alert-solid-success">
            <i class="fa fa-check-circle ml-2"></i>{{Session::get('success')}}
        </div>
        @endif


        <div class="box">
            <div class="box-head">
                <h4 class="title">{{__('league.title')}}</h4>
            </div>
            <div class="box-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('league.league_name')}}</th>
                            <th>{{__('league.league_teams_count')}}</th>
                            <th>{{__('league.league_category')}}</th>
                            <th>{{__('league.league_status')}}</th>
                            <th>{{__('league.table_action')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leagues as $key => $league)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$league->league_name}}</td>
                            <td>{{$league->number_of_teams}}</td>
                            <td>{{$league->Category->category_name}}</td>

                            <td>
                                @if ($league->is_active)
                                <i class="fa fa-check-circle" style="color: green"></i>
                                <span class="ml-1">Active</span>
                                @else
                                <i class="fa fa-times-circle" style="color: red"></i>
                                <span class="ml-1">Inactive</span>

                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="button button-primary dropdown-toggle"
                                        data-toggle="dropdown">{{__('category.choose_action')}}</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/admin/teams/leagues/{{$league->id}}">{{__('league.view_teams')}}</a>
                                        <a class="dropdown-item" href="/admin/teams/leagues/{{$league->id}}">{{__('league.add_team')}}</a>
                                        <a class="dropdown-item" href="#">{{__('league.deactivate_league')}}</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Hoverable Rows Light End-->

    <div class="col-md-4 col-lg-4">
        <div class="card">
            <div class="card-header">
                {{__('league.add_league')}}
            </div>
            <div class="card-body">

                <form action="" method="post">
                    @csrf
                    <div class="formg-group mt-2">
                        <label for="leagueName" class="label">{{__('league.league_name')}}</label>
                        <input type="text" name="leagueName" class="form-control"
                            placeholder="{{__('league.league_name')}}" value="{{old('leagueName')}}">
                    </div>

                    <div class="formg-group mt-2">
                        <label for="leagueNumberOfTeams" class="label">{{__('league.league_teams_count')}}</label>
                        <input type="number" name="leagueNumberOfTeams" class="form-control" min="3"
                            placeholder="{{__('league.league_teams_count')}}" value="{{old('leagueNumberOfTeams')}}">
                    </div>
                    <div class="formg-group mt-2">
                        <label for="leagueStartsAt" class="label">{{__('league.league_starts_at')}}</label>
                        <input type="date" name="leagueStartsAt" class="form-control"
                            placeholder="{{__('league.league_starts_at')}}" value="{{old('leagueStartsAt')}}">
                    </div>

                    <div class="formg-group mt-2">
                        <label for="leagueEndsAt" class="label">{{__('league.league_ends_at')}}</label>
                        <input type="date" name="leagueEndsAt" class="form-control"
                            placeholder="{{__('league.league_ends_at')}}" value="{{old('leagueEndsAt')}}">
                    </div>
                    <div class="formg-group mt-2">
                        <label for="leagueEndsAt" class="label">{{__('league.league_category')}}</label>
                        
                        <select name="leagueCategory" class="form-control">
                            <option value="-1">Select category</option>
                            @foreach ($categories as $category)
                                @if (old('leagueCategory') == $category->id)
                                <option selected value="{{$category->id}}">{{$category->category_name}}</option>
                                @else
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endif
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="formg-group mt-3">
                        <label for="leagueDescription" class="label">{{__('league.league_description')}}</label>
                        <textarea type="text" name="leagueDescription" class="form-control"
                            placeholder="{{__('league.league_description')}}">{{old('leagueDescription')}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary  mt-4">{{__('league.save_league')}}</button>
                </form>
            </div>
        </div>

    </div>

</div>

@endsection
