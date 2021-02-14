@extends('layouts.app')
@section('content')
 <!--  BEGIN CONTENT PART  -->
 <div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>All Polls </h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="#">Tables</a></li>
                        <li><a href="#">DataTables</a> </li>
                        <li class="active"><a href="#">Custom</a> </li>
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
                                <h4>Style 1</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4 style-1">
                            <table id="customer-info-detail-1" class="table style-1  table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column"> Record no. </th>
                                        <th>Name</th>
                                        <th>Customers</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th class="">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td class="customer-name-1">Sean Freeman</td>
                                        <td class="">
                                            <a class="product-list-img" href="javascript: void(0);">
                                                <img src="assets/img/profile-3.jpg" alt="product">
                                            </a>
                                        </td>
                                        <td>seanfreeman@admin.com</td>
                                        <td>555-555-5555</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                <span class="label label-success">Approved</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 2 </td>
                                        <td class="customer-name-2">Donna Rogers</td>
                                        <td class="">
                                            <a class="product-list-img" href="javascript: void(0);">
                                                <img src="assets/img/profile-2.jpg" alt="product">
                                            </a>
                                        </td>
                                        <td>donnarogers@user.com</td>
                                        <td>555-555-6666</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class=" align-self-center d-m-warning  mr-1 data-marker"></div>
                                                <span class="label label-warning">Suspended</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="flaticon-dot-three"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 3 </td>
                                        <td class="customer-name-3">Irene Collins</td>
                                        <td class="">
                                            <a class="product-list-img" href="javascript: void(0);">
                                                <img src="assets/img/profile-4.jpg" alt="product">
                                            </a>
                                        </td>
                                        <td>irene@superadmin.com</td>
                                        <td>777-555-5555</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class=" align-self-center d-m-danger  mr-1 data-marker"></div>
                                                <span class="label label-danger">Closed</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="flaticon-dot-three"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 4 </td>
                                        <td class="customer-name-4">Vincent Carpenter</td>
                                        <td class="">
                                            <a class="product-list-img" href="javascript: void(0);">
                                                <img src="assets/img/profile-5.jpg" alt="product">
                                            </a>
                                        </td>
                                        <td>vincentC@admin.com</td>
                                        <td>555-666-5555</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                <span class="label label-success">Approved</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="flaticon-dot-three"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink4">
                                                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 5 </td>
                                        <td class="customer-name-5">Susan Phillips</td>
                                        <td class="">
                                            <a class="product-list-img" href="javascript: void(0);">
                                                <img src="assets/img/profile-6.jpg" alt="product">
                                            </a>
                                        </td>
                                        <td>susan@yahoo.com</td>
                                        <td>444-444-4444</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class=" align-self-center d-m-warning  mr-1 data-marker"></div>
                                                <span class="label label-warning">Suspended</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="flaticon-dot-three"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink5">
                                                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 6 </td>
                                        <td class="customer-name-6">Alexander Gray</td>
                                        <td class="">
                                            <a class="product-list-img" href="javascript: void(0);">
                                                <img src="assets/img/profile-7.jpg" alt="product">
                                            </a>
                                        </td>
                                        <td>alexander@gmail.com</td>
                                        <td>111-111-1111</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class=" align-self-center d-m-danger  mr-1 data-marker"></div>
                                                <span class="label label-danger">Closed</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="flaticon-dot-three"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink6">
                                                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 7 </td>
                                        <td class="customer-name-7">Judy Holmes</td>
                                        <td class="">
                                            <a class="product-list-img" href="javascript: void(0);">
                                                <img src="assets/img/profile-8.jpg" alt="product">
                                            </a>
                                        </td>
                                        <td>judy@customer.com</td>
                                        <td>111-666-1111</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                <span class="label label-success">Approved</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="flaticon-dot-three"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink7">
                                                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Style 2</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="customer-info-detail-2" class="table style-2 table-bordered  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column"> Record Id </th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Mobile No.</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td>Jane</td>
                                        <td>Lamb</td>
                                        <td>johndoe@yahoo.com</td>
                                        <td>555-555-5555</td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-9.jpg" class="img-thumbnail rounded-circle" alt="profile"></span>
                                        </td>
                                        <td class="align-center"><span class="shadow-none badge badge-success">Approved</span></td>
                                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-close-fill fs-20"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 2 </td>
                                       <td>Linda</td>
                                        <td>Nelson</td>
                                        <td>linda@gmail.com</td>
                                        <td>555-555-6666</td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-11.jpg" class="img-thumbnail rounded-circle" alt="profile"></span>
                                        </td>
                                        <td class="align-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-close-fill fs-20"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 3 </td>
                                        <td>Kelly</td>
                                        <td>Young</td>
                                        <td>kelly@live.com</td>
                                        <td>777-555-5555</td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-12.jpg" class="img-thumbnail rounded-circle" alt="profile"></span>
                                        </td>
                                        <td class="align-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-close-fill fs-20"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 4 </td>
                                        <td>Vincent</td>
                                        <td>Carpenter</td>
                                        <td>vinnyc@outlook.com</td>
                                        <td>555-666-5555</td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-13.jpg" class="img-thumbnail rounded-circle" alt="profile"></span>
                                        </td>
                                        <td class="align-center"><span class="shadow-none badge badge-success">Approved</span></td>
                                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-close-fill fs-20"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 5 </td>
                                        <td>Lila</td>
                                        <td>Perry</td>
                                        <td>lila@adobe.com</td>
                                        <td>444-444-4444</td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-14.jpg" class="img-thumbnail rounded-circle" alt="profile"></span>
                                        </td>
                                        <td class="align-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-close-fill fs-20"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 6 </td>
                                        <td>Traci</td>
                                        <td>Lopez</td>
                                        <td>traci@gmail.com</td>
                                        <td>111-111-1111</td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-15.jpg" class="img-thumbnail rounded-circle" alt="profile"></span>
                                        </td>
                                        <td class="align-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-close-fill fs-20"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 7 </td>
                                        <td>Nia</td>
                                        <td>Hillyer</td>
                                        <td>niaHill@yahoo.com</td>
                                        <td>111-666-1111</td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-16.jpg" class="img-thumbnail rounded-circle" alt="profile"></span>
                                        </td>
                                        <td class="align-center"><span class="shadow-none badge badge-success">Approved</span></td>
                                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-close-fill fs-20"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Style 3</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="customer-info-detail-3" class="table style-3 table-bordered  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> Record Id </th>
                                        <th class="align-center">Image</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Mobile No.</th>
                                        <th class="align-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="checkbox-column text-center"> 1 </td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-17.jpg" class="" alt="profile"></span>
                                        </td>
                                        <td>Donna</td>
                                        <td>Rogers</td>
                                        <td>donna@yahoo.com</td>
                                        <td>555-555-5555</td>
                                        <td class="align-center"><span class="shadow-none badge badge-success">Approved</span></td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="flaticon-edit  p-1 br-6 mb-1"></i></a></li>
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-delete  p-1 br-6 mb-1"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column text-center"> 2 </td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-19.jpg" class="" alt="profile"></span>
                                        </td>
                                       <td>Andy</td>
                                        <td>King</td>
                                        <td>andyking@gmail.com</td>
                                        <td>555-555-6666</td>
                                        <td class="align-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="flaticon-edit  p-1 br-6 mb-1"></i></a></li>
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-delete  p-1 br-6 mb-1"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column text-center"> 3 </td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-20.jpg" class="" alt="profile"></span>
                                        </td>
                                        <td>Alma</td>
                                        <td>Clarke</td>
                                        <td>Alma@live.com</td>
                                        <td>777-555-5555</td>
                                        <td class="align-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="flaticon-edit  p-1 br-6 mb-1"></i></a></li>
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-delete  p-1 br-6 mb-1"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column text-center"> 4 </td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-21.jpg" class="" alt="profile"></span>
                                        </td>
                                        <td>Vincent</td>
                                        <td>Carpenter</td>
                                        <td>vinnyc@outlook.com</td>
                                        <td>555-666-5555</td>
                                        <td class="align-center"><span class="shadow-none badge badge-success">Approved</span></td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="flaticon-edit  p-1 br-6 mb-1"></i></a></li>
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-delete  p-1 br-6 mb-1"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column text-center"> 5 </td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-22.jpg" class="" alt="profile"></span>
                                        </td>
                                        <td>Kristen</td>
                                        <td>Beck</td>
                                        <td>kristen@adobe.com</td>
                                        <td>444-444-4444</td>
                                        <td class="align-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="flaticon-edit  p-1 br-6 mb-1"></i></a></li>
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-delete  p-1 br-6 mb-1"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column text-center"> 6 </td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-23.jpg" class="" alt="profile"></span>
                                        </td>
                                        <td>Oscar</td>
                                        <td>Garner</td>
                                        <td>oscar@gmail.com</td>
                                        <td>111-111-1111</td>
                                        <td class="align-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="flaticon-edit  p-1 br-6 mb-1"></i></a></li>
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-delete  p-1 br-6 mb-1"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column text-center"> 7 </td>
                                        <td class="align-center">
                                            <span><img src="assets/img/profile-24.jpg" class="" alt="profile"></span>
                                        </td>
                                        <td>Nia</td>
                                        <td>Hillyer</td>
                                        <td>niaHill@yahoo.com</td>
                                        <td>111-666-1111</td>
                                        <td class="align-center"><span class="shadow-none badge badge-success">Approved</span></td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="flaticon-edit  p-1 br-6 mb-1"></i></a></li>
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-delete  p-1 br-6 mb-1"></i></a></li>
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
