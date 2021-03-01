@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.sidebar')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{asset('plugins/charts/cssplot/cssplot.full.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN CUSTOM STYLE FILE -->
<link href="{{asset('plugins/charts/cssplot/custom_cssplot.css')}}" rel="stylesheet" type="text/css" />
<!-- END CUSTOM STYLE FILE -->
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Poll Result</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="/poll">Poll</a></li>
                        <li class="active"><a href="#">Result</a></li>
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
                                <h4></h4>
                            </div>
                        </div>
                    </div>
                    <?php
                        $vote_count;
                    ?>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="bar-chart custom-bar-chart">
                                    <ul class="plot-container">
                                        @foreach ($all_candidates as $candidate)
                                        <?php
                                            $votes = 0;
                                            $total_votes = count($voted_candidates);
                                            foreach ($voted_candidates as $voted_candidate) {
                                                if ($candidate == $voted_candidate) {
                                                    $votes += 1;
                                                }
                                            }
                                        ?>

                                        <li data-cp-size="{{$votes/$total_votes*100}}">{{$votes/$total_votes*100}}% {{$candidate}}</li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
