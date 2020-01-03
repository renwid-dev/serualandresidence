@extends('frontland.layouts.appBooking')

    @section('content')

    <!-- Bo   <div class="row">oking frontend -->
    
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
			                            <form method="post" action="#">
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
			                                        <select class="custom-select-box">
		                                                <option>Property Type</option>
		                                                <option>Residential</option>
		                                                <option>Commercial</option>
		                                                <option>Industrial</option>
		                                                <option>Apartments</option>
		                                            </select>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>country</label>
			                                        <select class="custom-select-box">
			                                            <option>Country</option>
			                                            <option>California</option>
			                                            <option>Florida</option>
			                                            <option>Georgia</option>
			                                            <option>New York</option>
			                                            <option>Texas</option>
			                                        </select>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Status</label>
			                                        <select class="custom-select-box">
			                                            <option>Rent</option>
			                                            <option>Sale</option>
			                                        </select>
			                                    </div>

			                                </div>

			                                <div class="title"><h3>Upload KTP</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div id="myDropZone" class="dropzone dropzone-design">
				                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
				                                    </div>
			                                    </div>
                                            </div>
                                            
                                            <div class="title"><h3>Upload NPWP</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div id="myDropZone" class="dropzone dropzone-design">
				                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
				                                    </div>
			                                    </div>
                                            </div>
                                            
                                            <div class="title"><h3>Upload KK</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div id="myDropZone" class="dropzone dropzone-design">
				                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
				                                    </div>
			                                    </div>
                                            </div>
                                            
                                            <div class="title"><h3>Upload AKTE NIKAH</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div id="myDropZone" class="dropzone dropzone-design">
				                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
				                                    </div>
			                                    </div>
			                                </div>

			                                <div class="title"><h3>Detail Address</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                    	<textarea name="detail" placeholder="Detail Address" required></textarea>
			                                    </div>
			                                </div>

			                                <div class="title"><h3>Contact Info</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Name</label>
			                                        <input type="text" name="name" placeholder="Name" required>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Email</label>
			                                        <input type="email" name="email" placeholder="Email" required>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Phone</label>
			                                        <input type="text" name="phone" placeholder="Phone" required>
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
	            <p class="copyright-text">© 2019 <a href="#">surualandresidence.com</a> All right reserved.</p>
	        </div>
	    </div>
	</div>

	          
    <!-- End booking frontend -->

@endsection