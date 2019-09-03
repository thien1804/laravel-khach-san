@extends('layouts.page')
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{asset('cozy/images/bg_1.jpg')}});"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-end">
                    <div class="col-md-10 col-sm-12 ftco-animate mb-4">
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>Edit information</span>
                        </p>
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
{{--                        @if ($message = Session::get('success'))--}}
{{--                            <div class="alert alert-success alert-block">--}}
{{--                                <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--                                <strong>{{ $message }}</strong>--}}
{{--                            </div>--}}
{{--                            <img src="images/{{ Session::get('image') }}">--}}
{{--                        @endif--}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <hr>
                        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data"
                              action="{{route('user.update')}}" id="update-info-form">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <img class="img-profile rounded-circle" width="200 rem"
                                             src=
                                        @if(Auth::user()->avatar == null)
                                            {{asset('storage/default_images/default-avatar.png')}}
                                            @else
                                            {{asset('storage/avatar_user_images/'.Auth::user()->avatar)}}
                                            @endif
                                        >
                                        <h6>Upload a different photo...</h6>
                                        <input type="file" class="form-control" name="avatar">
                                    </div>
                                </div>

                                <!-- edit form column -->
                                <div class="col-md-9 personal-info">
                                    <h3>Personal info</h3>


                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Name:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{Auth::user()->name}}"
                                                   name="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Email:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{Auth::user()->email}}"
                                                   readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Phone number:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text"
                                                   value="{{Auth::user()->phone_number}}" name="phone_number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Birth day</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="date" value="{{Auth::user()->birth_day}}"
                                                   name="birth_day">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Address:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{Auth::user()->address}}"
                                                   name="address">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label"></label>
                                        <div class="col-md-8">
                                            <input type="button" class="btn btn-primary" value="Save Changes"
                                                   id="btn-submit">
                                            <span></span>
                                            <input type="reset" class="btn btn-default" value="Cancel" id="btn-cancel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(function () {

            $("form :input").change(function () {
                $(this).closest('form').data('changed', true);
            });
            $('#btn-submit').click(function () {
                if ($(this).closest('form').data('changed')) {
                    $("#update-info-form").submit();
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: 'You don\'t change anything !',
                        type: 'error',
                        confirmButtonText: 'Cancel'
                    })
                }
            });

            $("#btn-cancel").click(function () {
                window.location.href = "/"
            });
        });
        function showSuccessAlert (message) {
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: message,
                showConfirmButton: false,
                timer: 1500
            })
        }
    </script>
@endsection
