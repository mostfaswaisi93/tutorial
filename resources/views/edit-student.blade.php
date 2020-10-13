<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Edit Student
                        </div>
                        <div class="card-body">
                            @if (Session::has('student_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('student_updated')}}
                            </div>
                            @endif
                            <form method="POST" action="{{ route('student.update') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$student->id}}">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{$student->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="file">Choose Profile Image</label>
                                    <input type="file" class="form-control" id="file" name="file"
                                        onchange="previewFile(this)">
                                    <img id="previewImg" src="{{asset('images')}}/{{$student->profileimage}}"
                                        style="max-width: 130px; margin-top: 20px;">
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script>
        function previewFile(input){
                var file = $("input[type=file]").get(0).files[0];
                if(file){
                    var reader = new FileReader();
                    reader.onload = function(){
                        $('#previewImg').attr("src", reader.result);
                    }
                    reader.readAsDataURL(file);
                }
            }
    </script>
</body>

</html>