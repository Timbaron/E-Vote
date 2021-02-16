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
                                                        <h4>Visibility</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area text-center">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                                        <input type="radio" name="visibility" value="0" id="visibility" selected>
                                                        <label>Public</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                                        <input type="radio" name="visibility" value="1">
                                                        <label>Private</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                        <div class="statbox widget box box-shadow">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Do you want to recieve notifications?</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area text-center">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                                        <input type="radio" name="notify_me" value="0" selected>
                                                        <label>No</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                                        <input type="radio" name="notify_me" value="1">
                                                        <label>Yes</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                                        <div class="statbox widget box box-shadow">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>If visibility is Private, Enter emails of allowed voters <span style="color: red">(Select checkbox if invite link should be sent.)</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-6 col-sm-6 col-12 layout-spacing">
                                                    <div class="statbox widget box box-shadow">

                                                        <div class="widget-content widget-content-area">
                                                            <div class="input-group mb-4">
                                                                <textarea name="allowed_voters" id="" cols="90" rows="5" placeholder="E.g abc@def.com , xyz@kpk.com"></textarea>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <label class="switch s-secondary mt-2">
                                                                            <input type="checkbox" name="send_invite">
                                                                            <span class="slider"></span><br>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                        <div class="statbox widget box box-shadow">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Start Date - End Date</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area text-center">
                                                <div class="row justify-content-between">
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                                        <input type="date" name="start_date">
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                                        <input type="date" name="end_date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                        <div class="statbox widget box box-shadow">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Start Time - End Time</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area text-center">
                                                <div class="row justify-content-between">
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                                        <input type="time" name="start_time">
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                                        <input type="time" name="end_time">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-button-7 mb-4 mt-3">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
