@extends('backend.layouts.app')
@section('title', 'Booking Detail')
@push('styles')
    <style media="screen">
        .center{
            width: 50%;
            position: relative;
            margin-left: 20%;
        }
    </style>
@endpush
@section('content')
    <div class="block-header"></div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2>{{ $title }}</h2>
                </div>
                <div class="body">
                    <div class="center">
                        <div class="form-group">
                                <label class="form-label">Booking Code :</label>
                                <small>{{ $data['booking_code'] }}</small>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Booking Date :</label>
                            <small>{{ $data['booking_date'] }}</small>
                        </div>
                    </div>
                    <center>
                        <div class="form-line">
                            <button type="button" onclick="alert('saved')" class="btn btn-sm btn-primary waves-effect">Save</button>
                            <button type="button" onclick="window.location.replace('{{url('/admin/booking')}}')" class="btn btn-sm btn-danger waves-effect">Back</button>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
