@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Students Information') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                        This is the table for the students
                    </div>

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    
                                 {{-- @foreach($student) --}}
                                        <tr>
                                            <th> First Name </th>
                                            <th> Middle Name </th>
                                            <th> Last Name </th>
                                            <th> Address </th>
                                            <th> Date of Birth </th>
                                        </tr>
                                </thead>

                                <tbody>
                                        @foreach ($students as $student)
                                    <tr>
                                        <td> {{ $student->fname }} </td>
                                        <td> {{ $student->mname }} </td>
                                        <td> {{ $student->lname }} </td>
                                        <td> {{ $student->add }} </td>
                                        <td> {{ $student->dobirth }} </td>
                                    </tr>

                                    
                                </tbody>                               
                                        @endforeach
                                
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>

                <div class="container-fluid">
                    <a href="{{ route('student.create') }}" class="btn btn-info">Add New Student</a>
                    <div class="row"></div>

                    <div class="card-footer">
                    
                </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection