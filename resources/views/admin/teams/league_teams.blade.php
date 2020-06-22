@extends('layouts.mainlayout')

@section('body-content')

<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3 class="title">{{__('team.title')}} <span>/ {{__('team.subtitle')}}</span></h3>
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
                <h4 class="title">{{$league->league_name}}</h4>
            </div>
            <div class="box-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('team.team_name')}}</th>
                            <th>{{__('team.team_couch')}}</th>
                            <th>{{__('team.team_squad_number')}}</th>
                            <th>{{__('team.is_local')}}</th>
                            <th>{{__('team.table_action')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $teams = $league->Teams == null ? [] : $league->Teams;
                        @endphp
                        @foreach ($teams as $key => $team)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$team->team_name}}</td>
                            <td>{{$team->team_couch}}</td>
                            <td>0</td>
                            <td>
                                @if ($team->is_local)
                                <i class="fa fa-check-circle" style="color: green"></i>local
                                @else
                                <i class="fa fa-times-circle" style="color: red"></i>global

                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="button button-primary dropdown-toggle"
                                        data-toggle="dropdown">{{__('category.choose_action')}}</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/admin/teams/{{$team->id}}">{{__('team.view_teams')}}</a>
                                        <a class="dropdown-item" href="/admin/teams/{{$team->id}}">{{__('team.add_players')}}</a>
                                        <a class="dropdown-item" href="#">{{__('team.deactivate_team')}}</a>
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
                {{__('team.add_team')}}
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="teamName" class="label">{{__('team.team_name')}}</label>
                        <input type="text" name="teamName" class="form-control"
                            placeholder="{{__('team.team_name')}}" value="{{old('teamName')}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="teamLogo" class="label">{{__('team.team_name')}}</label>
                        <input type="file" name="teamLogo" class="form-control"
                            placeholder="{{__('team.team_name')}}" value="{{old('teamLogo')}}">
                    </div>

                    <div class="form-group mt-2">
                        <label for="teamCoachName" class="label">{{__('team.coach_name')}}</label>
                        <input type="text" name="teamCoachName" class="form-control" min="3"
                            placeholder="{{__('team.coach_name')}}" value="{{old('teamNumberOfTeams')}}">
                    </div>

                    <div class="form-group mt-4">
                        <label class="adomx-checkbox primary">
                            <input type="checkbox" checked="" name="is_local"> <i class="icon"></i> {{__('team.is_local')}}
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary  mt-4">{{__('league.save_league')}}</button>
                </form>
            </div>
        </div>

    </div>

</div>

@endsection
