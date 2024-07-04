@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, Ujang!</h2>
            <p class="section-lead">
                Change information about yourself and reset password on this page.
            </p>

            <div class="row">
                <!-- Edit Profile Card -->
                <div class="col-12 col-md-6 col-lg-7">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate="" action="#">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-11 col-12">
                                        <label>Name</label>
                                        <input type="text" class="form-control" value="Ujang" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-11 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="ujang@maman.com" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the email
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Reset Password Card -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate="" action="#">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h4>Reset password</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-11 col-12">
                                        <label>Password</label>
                                        <input type="text" class="form-control" value="" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the Password
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-11 col-12">
                                        <label>Confirm Password</label>
                                        <input type="email" class="form-control" value="" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the Confirm Password
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
