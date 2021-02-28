@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.sidebar')
 <!--  BEGIN CONTENT PART  -->
 <div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>All Polls </h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="/"><i class="flaticon-home-fill"></i></a></li>
                        <li class="active"><a href="#">Polls</a> </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>All polls</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4 style-1">
                            <table id="customer-info-detail-1" class="table style-1  table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column"> S/N</th>
                                        <th>Poll ID</th>
                                        <th>Poll Title</th>
                                        <th>Visibility</th>
                                        <th>Start date</th>
                                        <th>End date</th>
                                        <th class="">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial_number = 0
                                    @endphp
                                    @foreach ($polls as $poll)
                                    <tr>
                                        <td class="checkbox-column"> {{$serial_number += 1}}</td>
                                        <td class="customer-name-1">{{$poll->poll_id}}</td>
                                        <td class="">{{$poll->position}}</td>
                                        <td>
                                            @if ($poll->visibility == false)
                                                <span style="color: greenyellow">Public</span>
                                            @else
                                                <span style="color: green">Private</span>
                                            @endif
                                        </td>
                                        <td>{{$poll->start_date}}</td>
                                        <td>{{$poll->end_date}}</td>
                                        <td>
                                            <div class="d-flex">
                                                @include('inc.check_poll_status')
                                                <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                    <?php
                                                    if($poll->status == 'pending'){ ?>
                                                        <span style="color: yellow">{{$poll->status}}</span>
                                                    <?php }
                                                    elseif ($poll->status == 'running') { ?>
                                                        <span style="color: green">{{$poll->status}}</span>
                                                  <?php }
                                                    elseif ($poll->status == 'ended') { ?>
                                                        <span style="color: red">{{$poll->status}}</span>
                                                <?php  }
                                                else { ?>
                                                   <span style="color: powderblue">Checking...</span>
                                               <?php }
                                                    ?>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="{{route('poll.edit',$poll->poll_id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="flaticon-edit  p-1 br-6 mb-1"></i></a></li>
                                                <li><a href="{{route('poll.destroy',$poll->poll_id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-delete  p-1 br-6 mb-1"></i></a></li>
                                                <li><a href="{{route('poll.result',$poll->id)}};" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Result"><i class="flaticon-three-line-menu  p-1 br-6 mb-1"></i></a></li>
                                            </ul>
                                        </td>


                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--  END CONTENT PART  -->
@endsection
