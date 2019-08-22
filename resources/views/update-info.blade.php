@extends('layouts.page')
@section('content')

{{--    <form action="">--}}
{{--        <div class="container justify-content-center">--}}
{{--            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.jpg" alt="avatar" class="rounded-circle img-responsive">--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <h1>Edit information</h1>--}}
{{--            <hr>--}}
{{--            <label for="email"><b>Email</b></label>--}}
{{--            <input type="text" placeholder="Enter Email" name="email" required>--}}

{{--            <label for="psw"><b>Password</b></label>--}}
{{--            <input type="password" placeholder="Enter Password" name="psw" required>--}}

{{--            <label for="psw-repeat"><b>Repeat Password</b></label>--}}
{{--            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>--}}
{{--            <hr>--}}
{{--            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>--}}

{{--            <button type="submit" class="registerbtn">Edit</button>--}}
{{--        </div>--}}
{{--    </form>--}}

{{--    <div class="container">--}}
{{--        <h1>Edit Profile</h1>--}}
{{--        <hr>--}}
{{--        <div class="row">--}}
{{--            <!-- left column -->--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="text-center">--}}
{{--                    <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">--}}
{{--                    <h6>Upload a different photo...</h6>--}}

{{--                    <input type="file" class="form-control">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- edit form column -->--}}
{{--            <div class="col-md-9 personal-info">--}}
{{--                <div class="alert alert-info alert-dismissable">--}}
{{--                    <a class="panel-close close" data-dismiss="alert">×</a>--}}
{{--                    <i class="fa fa-coffee"></i>--}}
{{--                    This is an <strong>.alert</strong>. Use this to show important messages to the user.--}}
{{--                </div>--}}
{{--                <h3>Personal info</h3>--}}

{{--                <form class="form-horizontal" role="form">--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="col-lg-3 control-label">First name:</label>--}}
{{--                        <div class="col-lg-8">--}}
{{--                            <input class="form-control" type="text" value="Jane">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="col-lg-3 control-label">Last name:</label>--}}
{{--                        <div class="col-lg-8">--}}
{{--                            <input class="form-control" type="text" value="Bishop">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="col-lg-3 control-label">Company:</label>--}}
{{--                        <div class="col-lg-8">--}}
{{--                            <input class="form-control" type="text" value="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="col-lg-3 control-label">Email:</label>--}}
{{--                        <div class="col-lg-8">--}}
{{--                            <input class="form-control" type="text" value="janesemail@gmail.com">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="col-lg-3 control-label">Time Zone:</label>--}}
{{--                        <div class="col-lg-8">--}}
{{--                            <div class="ui-select">--}}
{{--                                <select id="user_time_zone" class="form-control">--}}
{{--                                    <option value="Hawaii">(GMT-10:00) Hawaii</option>--}}
{{--                                    <option value="Alaska">(GMT-09:00) Alaska</option>--}}
{{--                                    <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>--}}
{{--                                    <option value="Arizona">(GMT-07:00) Arizona</option>--}}
{{--                                    <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>--}}
{{--                                    <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>--}}
{{--                                    <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>--}}
{{--                                    <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label">Username:</label>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <input class="form-control" type="text" value="janeuser">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label">Password:</label>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <input class="form-control" type="password" value="11111122333">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label">Confirm password:</label>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <input class="form-control" type="password" value="11111122333">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label"></label>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <input type="button" class="btn btn-primary" value="Save Changes">--}}
{{--                            <span></span>--}}
{{--                            <input type="reset" class="btn btn-default" value="Cancel">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <hr>--}}

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{asset('cozy/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-end">
                <div class="col-md-10 col-sm-12 ftco-animate mb-4">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>Edit information</span></p>
                    <h1 class="mb-3">Editing</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 ftco-animate makereservation p-5 bg-light">
                <div class="container">
                    <h1>Edit Profile</h1>
                    <hr>
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-3">
                            <div class="text-center">
                                <img class="img-profile rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.jpg">
                                <h6>Upload a different photo...</h6>

                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <!-- edit form column -->
                        <div class="col-md-9 personal-info">
{{--                            <div class="alert alert-info alert-dismissable">--}}
{{--                                <a class="panel-close close" data-dismiss="alert">×</a>--}}
{{--                                <i class="fa fa-coffee"></i>--}}
{{--                                This is an <strong>.alert</strong>. Use this to show important messages to the user.--}}
{{--                            </div>--}}
                            <h3>Personal info</h3>

                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Name:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Bird day</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="date" value="{{Auth::user()->bird_day}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Address:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="{{Auth::user()->address}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Time Zone:</label>
                                    <div class="col-lg-8">
                                        <div class="ui-select">
                                            <select id="user_time_zone" class="form-control">
                                                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                                <option value="Alaska">(GMT-09:00) Alaska</option>
                                                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                                <option value="Arizona">(GMT-07:00) Arizona</option>
                                                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                                <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Username:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" value="janeuser">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="password" value="11111122333">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Confirm password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="password" value="11111122333">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input type="button" class="btn btn-primary" value="Save Changes">
                                        <span></span>
                                        <input type="reset" class="btn btn-default" value="Cancel">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</section>

@endsection
