@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Add New Student') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <div class="row">

                  @if (session('status'))
                      <div class="alert alert-success">{{session('status')}}</div>
                  @endif

                <div class="col-6 m-auto">
                  <div class="card card-secondary">
                   <div class="card-header">
                     <h3 class="card-title">Add new student</h3>
                   </div>

                     <form  action="{{ route('student.store') }}" method="POST">
                      @csrf
                       <div class="row card-body col-12">
                         <div class="form-group col-12">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control g-2" id="fname" name="fname" placeholder="Enter First Name" required>
                         </div>
                         @error('fname') <span class="text-danger">{{$message}}</span> @enderror
                  
                        <div class="form-group col-12">
                          <label for="lname">Last Name</label>
                          <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required>
                        </div>
                        @error('lname') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-12">
                           <label for="mname">Middle Name</label>
                           <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter Middle Name" required>
                        </div>
                        @error('mname') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-12">
                          <label for="add">Address</label>
                          <input type="text" class="form-control" id="add" name="add" placeholder="Enter Address" required>
                        </div>
                        @error('add') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-12">
                          <label for="dob">Date of Birth</label>
                          <input type="date" class="form-control" id="dobirth" name="dob" required>
                        </div>
                        @error('dob') <span class="text-danger">{{$message}}</span> @enderror
              
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success col-12">Submit</button>
                </div>
                     </form>
                  </div>
                </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
