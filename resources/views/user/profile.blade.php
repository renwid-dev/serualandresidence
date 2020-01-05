@extends('frontland.layouts.appBooking')

@section('content')

<!-- Dasboard Profile -->
<div class="dashboard">
    <div class="container-fluid">
        <div class="content-area">
            <div class="dashboard-content">
                <div class="dashboard-header clearfix">
                    <div class="row">
                        <div class="col-md-6 col-sm-12"><h4>Hi , {{ $profile->name }}</h4></div>
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
                                        <form method="post" action="{{route('user.profile.update')}}" enctype="multipart/form-data">
                                            @csrf
                                            <!-- Edit profile photo -->
                                            <div class="edit-profile-photo">
                                                <img src="{{ asset('frontland/admin/images/resource/avatar.jpg') }}" alt="profile-photo">
                                                <div class="change-photo-btn">
                                                    <div class="photoUpload">
                                                        <span><i class="la la-cloud-upload"></i></span>
                                                        <input type="file" name="image" class="upload">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            
                                                <div class="row">
                                                    <!-- Form Group -->
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                        <label>Your Name</label>
                                                        <input type="text" name="name" placeholder="{{ $profile->name }}" required>
                                                    </div>

                                                    <!-- Form Group -->
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                        <label>Your Full Name</label>
                                                        <input type="text" name="username" placeholder="{{ $profile->username }}" required>
                                                    </div>

                                                    <!-- Form Group -->
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                        <label>Phone Number</label>
                                                        <input type="text" name="phone" placeholder="Phone" required>
                                                    </div>

                                                    <!-- Form Group -->
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                        <label>Your Email</label>
                                                        <input type="email" name="email" placeholder="{{ $profile->email }}"  disabled>
                                                    </div>

                                                    <!-- Form Group -->
                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                        <label>About You</label>
                                                        <textarea name="about-you" placeholder="Personal Info">{{ $profile->about or null }}</textarea>
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

                    <div class="column col-lg-12 col-md-12">
                        <div class="properties-box">
                            <div class="inner-container">
                                <div class="title"><h3>Change Password</h3></div>
                                <div class="profile-form">
                                    <form method="post" action="{{route('user.changepassword.update')}}">
                                        @csrf
                                        <div class="row">
                                            <!-- Form Group -->
                                            <div class="form-group col-lg-12">
                                                <label>Current Password</label>
                                                <input type="text" name="currentpassword" placeholder="Current Password" required>
                                            </div>

                                            <!-- Form Group -->
                                            <div class="form-group col-lg-12">
                                                <label>New Password</label>
                                                <input type="text" name="newpassword" placeholder="New Password" required>
                                            </div>

                                            <!-- Form Group -->
                                            <div class="form-group col-lg-12">
                                                <label>Confirm New Password</label>
                                                <input type="text" name="newpassword_confirmation" placeholder="Confirm New Password" required>
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
                    
                </div>
            </div>
            <p class="copyright-text">© 2019 <a href="#">surualandresidence.com</a> All right reserved.</p>
        </div>
    </div>
</div>
<!-- End Dasboard Profile -->

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('textarea#about').characterCounter();
    });

</script>
@endsection