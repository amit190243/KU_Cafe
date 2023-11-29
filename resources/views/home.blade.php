@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0">
                                    100 Employees</h3>
                                <a href="#" class="text-muted m-b-0">View Employee</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-info"><i class="ti-user"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0">
                                    10 Leaves
                                </h3>
                                <a href="#" class="text-muted m-b-0">View Leave</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-danger"><i class="ti-calendar"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0">
                                    15 Projects
                                </h3>
                                <a href="#" class="text-muted m-b-0">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-success"><i class="ti-settings"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0">
                                    12 Loan
                                </h3>
                                <a href="#" class="text-muted m-b-0">View Loan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- Row -->

        <div class="row ">
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-info">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">
                            11
                        </h1>
                        <h6 class="text-white">Ex-employees</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-success card-inverse">
                    <div class="box text-center">
                        <h1 class="font-light text-white">
                            8
                        </h1>
                        <h6 class="text-white">Leave Application</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-danger">
                    <div class="box text-center">
                        <h1 class="font-light text-white">
                            7
                        </h1>
                        <h6 class="text-white">Upcomming Project</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-dark">
                    <div class="box text-center">
                        <h1 class="font-light text-white">
                            3
                        </h1>
                        <h6 class="text-white">Loan Application</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
    </div>
    <div class="container-fluid">

            <!-- Row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Notice Board</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive slimScrollDiv" style="height:600px;overflow-y:scroll">
                                <table class="table table-hover earning-box ">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>File</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr class="scrollbar" style="vertical-align:top">
                                        <td>title goes hare</td>
                                        <td><mark><a href="#" target="_blank">file url</a></mark>
                                        </td>
                                        <td style="width:100px">4/5/22</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">To Do list</h4>
                            <h6 class="card-subtitle">List of your next task to complete</h6>
                            <div class="to-do-widget m-t-20" style="height:550px;overflow-y:scroll">
                                <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">

                                    <li class="list-group-item" data-role="task">

                                        <div class="checkbox checkbox-info">
                                            <input class="to-do" data-id="12" data-value="0" type="checkbox" id="12" >
                                            <label for=12"><span>test</span></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="new-todo">
                                <form method="post" action="add_todo" enctype="multipart/form-data" id="add_todo" >
                                    <div class="input-group">
                                        <input type="text" name="todo_data" class="form-control" style="border: 1px solid #fff !IMPORTANT;" placeholder="Add new task">
                                        <span class="input-group-btn">
                                        <button type="submit" class="btn btn-success todo-submit"><i class="fa fa-plus"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Running Project</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="height:600px;overflow-y:scroll">
                                <table class="table table-hover earning-box">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr style="vertical-align:top;background-color:#e3f0f7">
                                        <td><a href="#">title goes hare</a></td>
                                        <td>10/2/22</td>
                                        <td>10/2/22</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Holidays
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="height:600px;overflow-y:scroll">
                                <table class="table table-hover earning-box">
                                    <thead>
                                    <tr>
                                        <th>Holiday Name</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr style="background-color:#e3f0f7">
                                        <td>National holiday</td>
                                        <td>16/12/2022</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
