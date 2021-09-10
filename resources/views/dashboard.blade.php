@extends('layouts.app')
@section('content')
@include('inc.header')
@include('inc.sidebar')
<!-- Cards -->
<!-- Create card to display total polls-->
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Dashborad</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="/"><i class="flaticon-home-fill"></i></a></li>
                        <li class="active"><a href="#">Dear {{auth()->user()->username}}👊</a> </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row layout-spacing ">

            <div class="col-xl-6 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-sales-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-center-menu"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Polls</p>
                                <p class="widget-numeric-value">{{$polls->count()}}</p>
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2"></p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-order-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-line"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Results</p>
                                <p class="widget-numeric-value">{{$result->count()}}</p>
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2">Poll you've participated in</p>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-sm-0 mb-4">
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-customer-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-user-11"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Customers</p>
                                <p class="widget-numeric-value">92,251</p>
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2">390 New Customers</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-income-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-money"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Income</p>
                                <p class="widget-numeric-value">9.5 M</p>
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2">$2.1 M This Week</p>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>


                


@endsection
