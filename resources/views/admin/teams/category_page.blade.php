@extends('layouts.mainlayout')

@section('body-content')

<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3 class="title">{{__('category.title')}} <span>/ {{__('category.subtitle')}}</span></h3>
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
                <h4 class="title">{{__('category.title')}}</h4>
            </div>
            <div class="box-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('category.category_name')}}</th>
                            <th>{{__('category.category_description')}}</th>
                            <th>{{__('category.category_status')}}</th>
                            <th>{{__('category.table_action')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key => $category)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->category_description}}</td>

                            <td>
                                @if ($category->is_active)
                                <i class="fa fa-check-circle" style="color: green"></i>Active
                                @else
                                <i class="fa fa-times-circle" style="color: red"></i>Inactive

                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="button button-primary dropdown-toggle"
                                        data-toggle="dropdown">{{__('category.choose_action')}}</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">{{__('category.view_teams')}}</a>
                                        <a class="dropdown-item" href="#">{{__('category.deactivate_category')}}</a>
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
                {{__('category.add_category')}}
            </div>
            <div class="card-body">

                <form action="" method="post">
                    @csrf
                    <div class="formg-group mt-2">
                        <label for="categoryName" class="label">{{__('category.category_name')}}</label>
                        <input type="text" name="categoryName" class="form-control"
                            placeholder="{{__('category.category_name')}}" value="{{old('categoryName')}}">
                    </div>
                    <div class="formg-group mt-3">
                        <label for="categoryDescription" class="label">{{__('category.category_description')}}</label>
                        <textarea type="text" name="categoryDescription" class="form-control"
                            placeholder="{{__('category.category_description')}}">{{old('categoryDescription')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary  mt-4">{{__('category.save_category')}}</button>
                </form>
            </div>
        </div>

    </div>

</div>

@endsection
