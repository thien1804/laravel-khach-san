@extends('layouts.admin')
@section('content')
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Sliders</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <button type="button" class="btn btn-primary btn-lg mb-3" data-toggle="modal" data-target="#createModal">Create</button>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Level</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sliders as $slider)
                <tr>
                    <td><img src="{{asset('storage/slider_images/'.$slider->image)}}" class="rounded" alt="" width="150 rem"></td>
                    <td>{{$slider->level}}</td>
                    <td>{{$slider->description}}</td>
                    <td>
                        <a href="{{route('admin.slider.edit',['id' => $slider->id])}}" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger" onclick=" deleteSlider({{$slider->id}})">
                            Delete
                            <form id="delete-form-{{$slider->id}}" action="{{ route('admin.slider.destroy',['id' => $slider->id]) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </button>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $sliders->links() }}
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="createModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" role="form" enctype="multipart/form-data" id="create-form" action="{{route('admin.slider.store')}}">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create slider</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                        @csrf
                        <div class="form-group row">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-plaintext" id="image" name="image" onchange="readURL(this);">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="level" class="col-sm-2 col-form-label">Level</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="level" placeholder="1, 2, 3, ..." name="level">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="btn-submit">Create</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function () {

            $("form :input").change(function () {
                $(this).closest('form').data('changed', true);
            });
            $('#btn-submit').click(function () {
                if ($(this).closest('form').data('changed')) {
                    $("#create-form").submit();
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: 'You don\'t change anything !',
                        type: 'error',
                        confirmButtonText: 'Cancel'
                    })
                }
            });

            $('.btn-delete').click(function () {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                });

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        // swalWithBootstrapButtons.fire(
                        //     'Deleted!',
                        //     'Your file has been deleted.',
                        //     'success'
                        // )
                        $("#delete-form").submit();
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
                })
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
                    $('#image')
                        .attr('src', e.target.result)
                    //.width("200 rem")
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function deleteSlider(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    // swalWithBootstrapButtons.fire(
                    //     'Deleted!',
                    //     'Your file has been deleted.',
                    //     'success'
                    // )
                    $("#delete-form-"+id).submit();
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            });
        }
    </script>
@endsection
