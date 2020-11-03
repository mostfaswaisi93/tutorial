<div>
    @include('livewire.create')
    @include('livewire.update')
    <section>
        <style>
            nav svg {
                max-height: 20px;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>All Students</h3>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#addStudentModal">
                                        Add New Student
                                    </button>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Search.."
                                        wire:model="searchTerm">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (Session::has('message'))
                            <div class="alert alert-success">{{session('message')}}</div>
                            @endif
                            <table class="table table-striped">
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
                                    <tr>
                                        <td>{{$student->firstname}}</td>
                                        <td>{{$student->lastname}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#updateStudentModal"
                                                wire:click.prevent="edit({{$student->id}})">Edit</button>
                                            <button type="button" class="btn btn-danger"
                                                wire:click.prevent="delete({{$student->id}})">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$students->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>