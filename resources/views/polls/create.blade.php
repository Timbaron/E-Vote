@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.sidebar')
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Poll create</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="{{route('polls')}}">Poll</a></li>
                        <li class="active"><a href="#">Create</a> </li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Poll create</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Position</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="E.g President">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Candidates</label>
                                        <input type="text" class="form-control" id="inputPassword4" placeholder="E.g samuel kofi,timothy akiode" multiple>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                        <div class="statbox widget box box-shadow">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Default</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area text-center">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                                        <label class="switch s-secondary  mb-4 mr-2">
                                                            <input type="radio" name="visibility">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                                        <label class="switch s-secondary  mb-4 mr-2">
                                                            <input type="radio" name="visibility">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="form-group mb-4">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check pl-0">
                                        <div class="custom-control custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="gridCheck">
                                            <label class="custom-control-label" for="gridCheck">Check me out</label>
                                        </div>
                                    </div>
                                </div>
                            <button type="submit" class="btn btn-button-7 mb-4 mt-3">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
