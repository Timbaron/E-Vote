@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.sidebar')
{{-- Custon Css Begin --}}
<link href="{{asset('plugins/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/charts/chartist/chartist.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('css/modules/modules-table-and-event.css')}}">
{{-- Custon Css End --}}
<<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Cast your vote</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="/"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="/polls">polls</a></li>
                        <li class="active"><a href="#">cast</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-xl-9 col-12 layout-spacing">
                <div class="widget-content widget-content-area p-0 br-4">
                    <div class="news-feeds">
                        <div class="news-feeds-header">
                            <div class="row">
                                <div class="col-md-7 col-sm-7 col-7 mb-4 mb-sm-0">
                                    <h6 class="mb-0">{{$poll->position}}</h6>
                                </div>
                            </div>
                        </div>

                        <div class="news-feeds-body">
                            <form action="/cast" method="GET">
                                @csrf
                                <div class="table-responsive  mt-3">
                                    <table class="table">
                                        <tbody>
                                            <input type="hidden" name="poll_id" value="{{$poll->poll_id}}">
                                            @foreach ($poll->candidates as $poll->candidate)
                                            <tr>
                                                <td>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-danger mb-0">
                                                            <input type="radio" name="candidate" value="{{$poll->candidate}}" class="new-control-input">
                                                            <span class="new-control-indicator  mt-2"></span>
                                                            <span class="d-flex justify-content-center ml-2">
                                                                <span class="news-feeds-item ml-3">
                                                                    <span class="media d-sm-flex d-block">
                                                                        <span class="media-body">
                                                                            <span class="news-feeds-text">{{$poll->candidate}}</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="row justify-content-center" style="padding: 10px">
                                        <button class="btn btn-outline-success btn-lg br-left-30  br-right-30" type="submit" >
                                            Vote Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
