@extends('frontland.layouts.appBooking')
	    <!-- Header -->
		@include('frontland/userDashboard/partials/header')
		<!-- End Header -->
    @section('content')

    <!-- Booking frontend -->
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
			                            	<div class="title"><h3>Basic Info</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Property Title</label>
			                                        <input type="text" name="text" placeholder="Property Title" disabled>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Property Type</label>
			                                        <input type="text" name="text" placeholder="House" disabled>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Price</label>
			                                        <input type="text" name="text" placeholder="Rp 40.0000.000" disabled>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Bank Account</label>
			                                        <select name="bank_id" class="custom-select-box">
			                                            <option value="1">BCA</option>
			                                            <option value="2">MANDIRI</option>
			                                        </select>
			                                    </div>

			                                </div>

			                                <div class="title"><h3>Upload KTP</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div class="dropzone dropzone-design">
														<input class="dz-default dz-message" type="file" name="id_card_image" required>
				                                    </div>
			                                    </div>
                                            </div>
                                            
                                            <div class="title"><h3>Upload NPWP</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div class="dropzone dropzone-design">
				                                        <input class="dz-default dz-message" type="file" name="npwp_card_image">
				                                    </div>
			                                    </div>
                                            </div>
                                            
                                            <div class="title"><h3>Upload KARTU KELUARGA</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div class="dropzone dropzone-design">
				                                       <input class="dz-default dz-message" type="file" name="family_card_image">
				                                    </div>
			                                    </div>
                                            </div>
                                            
                                            <div class="title"><h3>Upload AKTE NIKAH</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div class="dropzone dropzone-design">
				                                        <input class="dz-default dz-message" type="file" name="married_card_image">
				                                    </div>
			                                    </div>
			                                </div>

			                                <div class="title"><h3>Detail Address</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                    	<textarea name="address" placeholder="Detail Address" required></textarea>
			                                    </div>
			                                </div>

			                                <div class="title"><h3>Contact Info</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Name</label>
			                                        <input type="text" name="full_name" placeholder="Name" required>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Email</label>
			                                        <input type="email" name="email" placeholder="Email" required>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Phone</label>
			                                        <input type="text" name="phone_number" placeholder="Phone" required>
			                                    </div>

			                                    <!-- Form Group -->
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
    <!-- End booking frontend -->

@endsection