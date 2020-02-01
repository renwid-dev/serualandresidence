@extends('frontland.layouts.appBooking')

@section('content')
<div class="dashboard">
    <div class="container-fluid">
        <div class="content-area">
            <div class="dashboard-content">
                <div class="dashboard-header clearfix">
                    <div class="row">
                        <div class="col-md-6 col-sm-12"><h4>Hi , {{ auth()->user()->name }}</h4></div>
                        <div class="col-md-6 col-sm-12">
                            <div class="breadcrumb-nav">
                                <ul>
                                    <li><a href="{{url('/')}}">Index</a></li>
                                    <li class="active">Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>Your Booking</strong> HAS BEEN APPROVED!
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="ui-item bg-success">
                            <div class="left">
                                <h4>242</h4>
                                <p>Booking</p>
                            </div>
                            <div class="right">
                                <i class="la la-eye"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="ui-item bg-warning">
                            <div class="left">
                                <h4>1</h4>
                                <p>Booking List</p>
                            </div>
                            <div class="right">
                                <i class="la la-archive"></i>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="ui-item bg-active">
                            <div class="left">
                                <h4>1233</h4>
                                <p>Message</p>
                            </div>
                            <div class="right">
                                <i class="la la-comments-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="ui-item bg-dark">
                            <div class="left">
                                <h4>42</h4>
                                <p>Likes</p>
                            </div>
                            <div class="right">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="row">
                    <div class="column col-lg-12">
                        <div class="my-invoices">
                            <div class="title"><h3>Booking List</h3></div>
                            <div class="inner-container clearfix">
                                <div class="invoice-box">

                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <td><strong>No</strong></td>
                                                <td><strong>Item</strong></td>
                                                <td class="text-center"><strong>Price</strong></td>
                                                <td class="text-center"><strong>Quantity</strong></td>
                                                <td class="text-center"><strong>status</strong></td>
                                                <td class="text-right"><strong>Totals</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><strong>1</strong></td>
                                                <td>The Maja Residence</td>
                                                <td class="text-center">Rp. 20.0000.000</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">No Payment</td>
                                                <td class="text-right">Rp. 40.0000.000</td>
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
            <p class="copyright-text">© 2020 <a href="{{url('/')}}">serualandresidence.com</a> All right reserved.</p>
        </div>
    </div>
</div>

@endsection
