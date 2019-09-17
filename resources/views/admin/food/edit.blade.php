@extends('layouts.admin')
@section('content')
    <div class="container">
        <form action="{{route('admin.food.update',['id' => $food->id])}}" role="form" method="POST" enctype="multipart/form-data" id="edit-form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="food-type">Food type</label>
                <select class="form-control" id="food-type" name="food-type">
                    @foreach($food_types as $food_type)
                        <option value="{{$food_type->id}}"  @if($food_type->id == $food->food_type_id) selected @endif>
                            {{$food_type->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$food->name}}">
            </div>
            <div class="form-group">
                <label for="image">Image</label> <br>
                <img src="{{asset('storage/food_images/'.$food->image)}}" alt="" class="rounded mb-2" height="300 rem" width="400 rem">
                <input type="file" class="form-control" id="image" name="image" onchange="readURL(this);">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" >{{$food->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input type="text" class="form-control" id="level" name="level" value="{{$food->level}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$food->price}}">
            </div>
            <button type="button" class="btn btn-primary" id="btn-submit">Edit</button>
            <button type="button" class="btn btn-danger" id="btn-cancel">Cancel</button>
        </form>
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
                    $("#edit-form").submit();
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
                window.location.href = "/admin/food"
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
    </script>
@endsection
