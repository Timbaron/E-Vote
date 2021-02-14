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
                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td class="customer-name-1">BV25532</td>
                                        <td class="">Class Govenor</td>
                                        <td>Private</td>
                                        <td>14/02/2021</td>
                                        <td>18/02/2021</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                <span class="label label-success" style="color: green">Approved</span>
                                            </div>
                                        </td>
                                        {{-- <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="flaticon-dot-three"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td> --}}
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="flaticon-edit  p-1 br-6 mb-1"></i></a></li>
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-delete  p-1 br-6 mb-1"></i></a></li>
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Result"><i class="flaticon-delete  p-1 br-6 mb-1"></i></a></li>
                                            </ul>
                                        </td>

                                    </tr>

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
