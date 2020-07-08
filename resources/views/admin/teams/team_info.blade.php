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
                <h4 class="title">{{$teamInfo->team_name}}</h4>
            </div>
            <div class="box-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('team.player.player_number')}}</th>
                            <th>{{__('team.player.player_name')}}</th>
                            <th>{{__('team.player.player_dob')}}</th>
                            <th>{{__('team.player.player_email')}}</th>
                            <th>{{__('team.player.player_phone')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        // $teams = $league->Teams == null ? [] : $league->Teams;
                        @endphp
                        @foreach ($players as $key => $player)
                        <tr>
                            {{-- <th>{{$key+1}}</th>
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
                                        <a class="dropdown-item" href="/admin/teams/{{$team->id}}">{{__('team.view_players')}}</a>
                                        <a class="dropdown-item" href="#">{{__('team.deactivate_team')}}</a>
                                    </div>
                                </div>
                            </td> --}}
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
                        <label for="playerName" class="label">{{__('team.player.player_name')}}</label>
                        <input type="text" name="playerName" class="form-control"
                            placeholder="{{__('team.player.player_name')}}" value="{{old('playerName')}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="playerImage" class="label">{{__('team.player.player_image')}}</label>
                        <input type="file" name="playerImage" class="form-control"
                            placeholder="{{__('team.player.player_image')}}" value="{{old('playerImage')}}">
                    </div>

                    <div class="form-group mt-2">
                        <label for="playerNumber" class="label">{{__('team.player.player_number')}}</label>
                        <input type="number"  name="playerNumber" class="form-control" min="0" max="9999"
                            placeholder="{{__('team.player.player_number')}}" value="{{old('playerNumber')}}">
                    </div>

                    <div class="form-group mt-2">
                        <label for="playerEmail" class="label">{{__('team.player.player_email')}}</label>
                        <input type="number"  name="playerEmail" class="form-control" min="0" max="9999"
                            placeholder="{{__('team.player.player_email')}}" value="{{old('playerEmail')}}">
                    </div>

                    <div class="form-group mt-2">
                        <label for="playerPhone" class="label">{{__('team.player.player_phone')}}</label>
                        <input type="number"  name="playerPhone" class="form-control" min="0" max="9999"
                            placeholder="{{__('team.player.player_phone')}}" value="{{old('playerPhone')}}">
                    </div>

                    <div class="form-group mt-2">
                        <label for="playerPosition" class="label">{{__('team.player.player_position')}}</label>
                        <select type="number"  name="playerPosition" class="form-control">
                            <option value="-1">Select position</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary  mt-4">{{__('team.player.player_add')}}</button>
                </form>
            </div>
        </div>

    </div>

</div>

@endsection