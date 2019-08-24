@extends('layouts.admin')
@section('content')
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
                              action="{{route('admin.update.info')}}" id="update-info-form">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <img id="img-avatar" class="img-profile rounded-circle" width="200 rem"
                                             src=
                                        @if(Auth::user()->avatar == null)
                                            {{asset('images/default-avatar.png')}}
                                            @else
                                            {{asset(Auth::user()->avatar)}}
                                            @endif
                                        >
                                        <h6>Upload a different photo...</h6>
                                        <input type="file" class="form-control" name="avatar" id="avatar" onchange="readURL(this);">
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
                                        <label class="col-lg-3 control-label">User name:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{Auth::user()->username}}"
                                                   name="username" readonly>
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
                window.location.href = "/admin/dashboard"
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

        function readURL(input) { //display img after choose file
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $('#img-avatar')
                        .attr('src', e.target.result)
                        //.width("200 rem")
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
