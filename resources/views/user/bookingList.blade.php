@extends('frontland.layouts.appBooking')
		<!-- End Header -->
    @section('content')

    <div class="dashboard">
	    <div class="container-fluid">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
	                        <div class="col-md-6 col-sm-12"><h4>My Booking</h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                    <li><a href="{{url('/')}}">Index</a></li>
	                                    <li class="active">Invoices</li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
					</div>

	                <div class="row">
	                    <div class="column col-lg-12">
	                    	<div class="my-invoices">
	                    		<div class="title"><h3>Invoice</h3></div>
	                    		<div class="inner-container clearfix">
	                				<div class="logo"><a href="#"><img src="{{asset('frontland/images/logo-1.png')}}" alt=""></a></div>
	                				<div class="order-num">Booking ID : {{$booking->booking_code}}</div>
	                    			<div class="invoice-box">
	                    				<div class="row">
	                    					<div  class="column col-lg-3 col-md-6 col-sm-12">
                    							<h3>Booking by:</h3>
                    							<ul class="invoice-info">
                    								<li>{{$profile->name}}</li>
                    								<li>{{$booking->address}}</li>
                    								<li><a href="#">{{$profile->email}}</a></li>
                    							</ul>
                    						</div>
	                    					<div  class="column col-lg-3 col-md-6 col-sm-12">
                    							<h3>Billed To:</h3>
                    							<ul class="invoice-info">
                    								<li>Juanda</li>
                    								<li>Harvest St, North Subract 360</li>
                    								<li>London. United States Of Amrica.</li>
                    								<li>Springfield, ST 35436</li>
                    								<li><a href="#">info@serualandresidence.com</a></li>
                    							</ul>
                    						</div>
	                    					<div  class="column col-lg-3 col-md-6 col-sm-12">
                    							<h3>Payment Method</h3>
                    							<ul class="invoice-info">
                    								<li>Mandiri</li>
                    								<li>534 343 144</li>
													<li>Bank Central Asia</li>
                    								<li>534 343 344</li>
                    							</ul>
                    						</div>
                    						<div  class="column col-lg-3 col-md-6 col-sm-12">
                    							<h3>Booking Expired:</h3>
                    							<ul class="invoice-info">
                    								<li id="count-down"></li>
                    							</ul>
                    						</div>
	                    				</div>

            							<div class="table-responsive ">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <td><strong>#</strong></td>
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
                                                <tr>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
													<td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line text-center"><strong>Total</strong></td>
                                                    <td class="no-line text-right">Rp. 40.0000.000</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
	                    			</div>
	                    		</div>
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
			                                <div class="title"><h3>Upload Recipt Payment</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div class="dropzone dropzone-design">
														<input class="dz-default dz-message" type="file" name="receipt_image" required>
				                                    </div>
			                                    </div>
                                            </div>
										<!-- Form Group -->
										<div class="form-group text-right col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="theme-btn btn-style-one" disabled>Submit Payment</button>
										</div>
			                            </form>
			                        </div>
	                    		</div>
	                    	</div>
	                    </div>
	                </div>

	            </div>
				<p class="copyright-text">© 2020 <a href="#">surualandresidence.com</a> All right reserved.</p>
	        </div>
	    </div>
	</div>

    <script>
    var currentTime = new Date();
    var countDownDate = currentTime.setTime(currentTime.getTime() + 2000 * 60);
    var x = setInterval(function() {
        var now = new Date();
        var distance = countDownDate - now;
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById("count-down").innerHTML = minutes + "m " + seconds + "s ";
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("count-down").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
@endsection
