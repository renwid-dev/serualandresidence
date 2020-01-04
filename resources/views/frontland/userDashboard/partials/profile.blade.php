@extends('frontland.layouts.appBooking')
		<!-- End Header -->
    @section('content')

<!-- Dasboard Profile -->
<div class="dashboard">
    <div class="container-fluid">
        <div class="content-area">
            <div class="dashboard-content">
                <div class="dashboard-header clearfix">
                    <div class="row">
                        <div class="col-md-6 col-sm-12"><h4>Submit Property</h4></div>
                        <div class="col-md-6 col-sm-12">
                            <div class="breadcrumb-nav">
                                <ul>
                                    <li><a href="{{url('/')}}">Index</a></li>
                                    <li class="active">My Profile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="column col-lg-12">
                        <div class="properties-box">
                            <div class="inner-container">
                                <div class="title"><h3>Profile Details</h3></div>
                                <div class="profile-form">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <!-- Edit profile photo -->
                                            <div class="edit-profile-photo">
                                                <img src="{{ asset('frontland/admin/images/resource/avatar.jpg') }}" alt="profile-photo">
                                                <div class="change-photo-btn">
                                                    <div class="photoUpload">
                                                        <span><i class="la la-cloud-upload"></i></span>
                                                        <input type="file" class="upload">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            <form method="post" action="https://expert-themes.com/html/ourland/admin/index.html">
                                                <div class="row">
                                                    <!-- Form Group -->
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                        <label>Your Name</label>
                                                        <input type="text" name="name" placeholder="John Doe" required>
                                                    </div>

                                                    <!-- Form Group -->
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                        <label>Your Title</label>
                                                        <input type="text" name="title" placeholder="Your Title" required>
                                                    </div>

                                                    <!-- Form Group -->
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                        <label>Phone #</label>
                                                        <input type="text" name="phone" placeholder="Phone" required>
                                                    </div>

                                                    <!-- Form Group -->
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                        <label>Your Email</label>
                                                        <input type="email" name="email" placeholder="Your Email" required>
                                                    </div>

                                                    <!-- Form Group -->
                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                        <label>About You</label>
                                                        <textarea name="about-you" placeholder="Personal Info"></textarea>
                                                    </div>

                                                    <!-- Form Group -->
                                                    <div class="form-group text-right col-lg-12 col-md-12 col-sm-12">
                                                        <button type="submit" class="theme-btn btn-style-one">Update Profile</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column col-lg-6 col-md-12">
                        <div class="properties-box">
                            <div class="inner-container">
                                <div class="title"><h3>Change Password</h3></div>
                                <div class="profile-form">
                                    <form method="post" action="https://expert-themes.com/html/ourland/admin/index.html">
                                        <div class="row">
                                            <!-- Form Group -->
                                            <div class="form-group col-lg-12">
                                                <label>Current Password</label>
                                                <input type="text" name="name" placeholder="Current Password" required>
                                            </div>

                                            <!-- Form Group -->
                                            <div class="form-group col-lg-12">
                                                <label>New Password</label>
                                                <input type="text" name="title" placeholder="New Password" required>
                                            </div>

                                            <!-- Form Group -->
                                            <div class="form-group col-lg-12">
                                                <label>Confirm New Password</label>
                                                <input type="text" name="phone" placeholder="Confirm New Password" required>
                                            </div>

                                            <!-- Form Group -->
                                            <div class="form-group col-lg-12">
                                                <button type="submit" class="theme-btn btn-style-one">Update Password</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column col-lg-6 col-md-12">
                        <div class="properties-box">
                            <div class="inner-container">
                                <div class="title"><h3>Socials Links</h3></div>
                                <div class="profile-form">
                                    <form method="post" action="https://expert-themes.com/html/ourland/admin/index.html">
                                        <div class="row">
                                            <!-- Form Group -->
                                            <div class="form-group col-lg-12">
                                                <label><i class="la la-facebook"></i>Facebook</label>
                                                <input type="text" name="name" placeholder="Facebook" required>
                                            </div>

                                            <!-- Form Group -->
                                            <div class="form-group col-lg-12">
                                                <label><i class="la la-twitter"></i>Twitter</label>
                                                <input type="text" name="name" placeholder="Twitter" required>
                                            </div>

                                            <!-- Form Group -->
                                            <div class="form-group col-lg-12">
                                                <label><i class="la la-instagram"></i>Instagram</label>
                                                <input type="text" name="name" placeholder="Instagram" required>
                                            </div>

                                            <!-- Form Group -->
                                            <div class="form-group col-lg-12">
                                                <button type="submit" class="theme-btn btn-style-one">Save Changes</button>
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
<!-- End Dasboard Profile -->

@endsection