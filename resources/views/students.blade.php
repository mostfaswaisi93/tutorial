<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All Students <br> <a href="#" class="btn btn-primary" data-toggle="modal"
                                data-target="#studentModal">Add New Student</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="studentTable">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr id="sid{{$student->id}}">
                                        <td>{{$student->firstname}}</td>
                                        <td>{{$student->lastname}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="editStudent({{$student->id}})"
                                                class="btn btn-info"> Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Insert Modal -->
    <div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="studentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="studentModalLabel">Add New Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="studentForm">
                        @csrf
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="studentEditModal" tabindex="-1" role="dialog" aria-labelledby="studentEditModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="studentEditModalLabel">Add New Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="studentEditForm">
                        @csrf
                        <input type="hidden" id="id" name="id">
                        <div class="form-group">
                            <label for="firstname2">First Name</label>
                            <input type="text" class="form-control" id="firstname2">
                        </div>
                        <div class="form-group">
                            <label for="lastname2">Last Name</label>
                            <input type="text" class="form-control" id="lastname2">
                        </div>
                        <div class="form-group">
                            <label for="email2">Email</label>
                            <input type="email" class="form-control" id="email2">
                        </div>
                        <div class="form-group">
                            <label for="phone2">Phone</label>
                            <input type="text" class="form-control" id="phone2">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script>
        $("#studentForm").submit(function(e){
            e.preventDefault();
            
            let firstname = $("#firstname").val();
            let lastname = $("#lastname").val();
            let email = $("#email").val();
            let phone = $("#phone").val();
            let _token = $("input[name=_token]").val();

            $.ajax({
                url: "{{ route('student.add') }}",
                type: "POST",
                data: {
                    firstname:firstname,
                    lastname:lastname,
                    email:email,
                    phone:phone,
                    _token: _token
                },
                success: function(response){
                    if(response){
                        $("#studenTabel tbody").prepend('<tr><td>'+response.firstname+'</td><td>'+response.lastname+'</td><td>'+response.email+'</td><td>'+response.phone+'</td></tr>');
                        $("#studentForm")[0].reset();
                        $("#studentModal").modal('hide');
                    }
                }
            });
        });
    </script>

    <script>
        function editStudent(id){
            $.get('/students/'+id, function(student){
                $("#id").val(student.id);
                $("#firstname2").val(student.firstname);
                $("#lastname2").val(student.lastname);
                $("#email2").val(student.email);
                $("#phone2").val(student.phone);
                $("#studentEditModal").modal('show');
            });
        }

        $("#studentEditForm").submit(function(e){
            e.preventDefault();
            
            let id = $("#id").val();
            let firstname = $("#firstname2").val();
            let lastname = $("#lastname2").val();
            let email = $("#email2").val();
            let phone = $("#phone2").val();
            let _token = $("input[name=_token]").val();

            $.ajax({
                url: "{{ route('student.update') }}",
                type: "PUT",
                data: {
                    id:id,
                    firstname:firstname,
                    lastname:lastname,
                    email:email,
                    phone:phone,
                    _token: _token
                },
                success: function(response){
                    $('#sid' +response.id+' td:nth-child(1)').text(response.firstname);
                    $('#sid' +response.id+' td:nth-child(2)').text(response.lastname);
                    $('#sid' +response.id+' td:nth-child(3)').text(response.email);
                    $('#sid' +response.id+' td:nth-child(4)').text(response.phone);
                    $("#studentEditModal").modal('toggle');
                    $("#studentEditForm")[0].reset();
                }
            });
        });
    </script>
</body>

</html>