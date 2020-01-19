@extends('frontland.layouts.appBooking')
@section('content')
<style media="screen">
	.cursor{
		cursor: pointer;
	}
</style>
    <div class="dashboard">
	    <div class="container-fluid-boxed">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
	                        <div class="form-group col-sm-12"><h4><center>Booking Now</center></h4></div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="column col-lg-12">
	                    	<div class="properties-box">
	                    		<div class="inner-container">
	                    			<div class="property-submit-form">
										<form method="POST" action="{{ route('booking') }}" enctype="multipart/form-data">
										@csrf
			                                <div class="title"><h3>Upload KTP</h3></div>
			                                <div class="row">
			                                    <div class="form-group col-lg-12">
			                                        <div class="dropzone dropzone-design">
														<input class="dz-default dz-message cursor" type="file" name="id_card_image" required>
				                                    </div>
			                                    </div>
                                            </div>
                                            <div class="title"><h3>Upload NPWP</h3></div>
			                                <div class="row">
			                                    <div class="form-group col-lg-12">
			                                        <div class="dropzone dropzone-design">
				                                        <input class="dz-default dz-message cursor" type="file" name="npwp_card_image">
				                                    </div>
			                                    </div>
                                            </div>
                                            <div class="title"><h3>Upload KARTU KELUARGA</h3></div>
			                                <div class="row">
			                                    <div class="form-group col-lg-12">
			                                        <div class="dropzone dropzone-design">
				                                       <input class="dz-default dz-message cursor" type="file" name="family_card_image">
				                                    </div>
			                                    </div>
                                            </div>
                                            <div class="title"><h3>Upload AKTE NIKAH</h3></div>
			                                <div class="row">
			                                    <div class="form-group col-lg-12">
			                                        <div class="dropzone dropzone-design">
				                                        <input class="dz-default dz-message cursor" type="file" name="married_card_image">
				                                    </div>
			                                    </div>
			                                </div>
			                                <div class="title"><h3>Detail Address</h3></div>
			                                <div class="row">
			                                    <div class="form-group col-lg-6">
			                                    	<textarea name="address" placeholder="Detail Address" required></textarea>
			                                    </div>
												<div class="form-group col-lg-6">
			                                    	<textarea name="" placeholder="Replace for Google Map / Open Street Map" required></textarea>
			                                    </div>
			                                </div>
			                                <div class="title"><h3>Contact Info</h3></div>
			                                <div class="row">
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Name</label>
			                                        <input type="text" value="{{$profile->name}}" name="full_name" placeholder="Name" required>
			                                    </div>
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Email</label>
			                                        <input type="email" value="{{$profile->email}}" name="email" placeholder="Email" required>
			                                    </div>
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Phone</label>
			                                        <input type="text" name="phone_number" value="{{$profile->phone}}" placeholder="Phone" required>
			                                    </div>
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                    	<button type="submit" class="theme-btn btn-style-one"> Submit Property</button>
			                                    </div>
			                                </div>
			                            </form>
			                        </div>
	                    		</div>
	                    	</div>
	                    </div>
	                </div>
	            </div>
	            <p class="copyright-text">© 2019 <a href="{{url('/')}}">surualandresidence.com</a> All right reserved.</p>
	        </div>
	    </div>
	</div>
@endsection
