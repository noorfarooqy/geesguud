@extends('layouts.mainlayout')

@section('body-content')

<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3 class="title">{{__('team.position.position_title')}} </h3>
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
                            <th>{{__('team.position.position_name')}}</th>
                            <th>{{__('team.position.position_description')}}</th>
                            <th>{{__('team.position.position_status')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($positions as $key => $position)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$position->position_name}}</td>
                            <td>{{$position->position_description}}</td>
                            <td>
                                @if ($position->active_position)
                                    <i class="fa fa-check-circle text-success"></i>
                                    <span class="ml-2">Active</span>
                                @else
                                    <i class="fa fa-times-circle text-danger"></i>
                                    <span class="ml-2">Inactive</span>
                                @endif
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
                        <label for="positionName" class="label">{{__('team.position.position_name')}}</label>
                        <input type="text" name="positionName" class="form-control"
                            placeholder="{{__('team.position.position_name')}}" value="{{old('positionName')}}">
                    </div>

                    <div class="formg-group mt-3">
                        <label for="positionDescription" class="label">{{__('team.position.position_description')}}</label>
                        <textarea type="text" name="positionDescription" class="form-control"
                            placeholder="{{__('team.position.position_description')}}">{{old('positionDescription')}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary  mt-4">{{__('team.position.position_add')}}</button>
                </form>
            </div>
        </div>

    </div>

</div>

@endsection
