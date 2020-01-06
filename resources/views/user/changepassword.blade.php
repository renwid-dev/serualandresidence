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