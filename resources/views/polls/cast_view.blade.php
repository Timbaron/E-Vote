@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.sidebar')

<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Search Poll</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="/polls">Poll</a></li>
                        <li class="active"><a href="#">Search</a> </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row layout-spacing">

            <div class="col-lg-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Enter Poll Code</h4>
                            </div>
                        </div>
                    </div>

                    <form  method="GET" action="{{route('poll.cast')}}">
                        @csrf
                        @if (session()->has('poll_not_found_error'))
                            <span style="color: red"><b><i>Poll not found</i></b></span>
                        @endif
                    <div class="widget-content widget-content-area">
                        <div class="input-group mb-4">
                            {{-- <button class="btn btn-outline-primary" type="button">Button</button> --}}
                            <input type="text" class="form-control-rounded-left form-control" placeholder="E.g BV23904" name="poll_code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary form-control-rounded-right" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
