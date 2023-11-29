@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
            {{--    <?php if (isset($editdepartment)) { ?>
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Edit Department</h4>
                    </div>

                    <?php echo validation_errors(); ?>
                    <?php echo $this->upload->display_errors(); ?>
                    <?php echo $this->session->flashdata('feedback'); ?>


                    <div class="card-body">
                        <form method="post" action="<?php echo base_url();?>organization/Update_dep" enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Department Name</label>
                                            <input type="text" name="department" id="firstName" value="<?php  echo $editdepartment->dep_name;?>" class="form-control" placeholder="">
                                            <input type="hidden" name="id" value="<?php  echo $editdepartment->id;?>">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-info">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php } else { ?>--}}

                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Add Department</h4>
                    </div>

                    <div class="card-body">
                        <form id="departmentForm">
                            <div class="form-body">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Department Name</label>
                                            <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" placeholder="" minlength="2" required>
                                            <span class="text-danger" id="nameErrorMsg"></span>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-info">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
<!--                --><?php //}?>
            </div>

            <div class="col-7">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Department List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table id="" class="display  table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Department Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Department Name</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>

                                <tbody>
                                @forelse($departments as $department)
                                <tr id="department-row-{{ $department->id }}">
                                    <td>{{$department->name}}</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="#" title="Edit" class="btn btn-sm btn-info waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <button onclick="return confirm('Are you sure to delete this data?')" data-id="{{ $department->id }}" title="Delete" class="btn btn-sm btn-info waves-effect waves-light deleteRecord"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">No Data found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $('#departmentForm').on('submit',function(e) {
            e.preventDefault();
            let name = $('#name').val();

            $.ajax({
                url: "{{route('department.store')}}",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    name:name,
                },
                success:function(response){
                    toastr.success(response.success);
                    $('#nameErrorMsg').text('');
                    $('#name').val('');
                    var markup = "<tr><td>" + name + "</td><td><input type='checkbox' name='record'></td></tr>";
                    $("table tbody").append(markup);
                },
                error: function(response) {
                    $('#nameErrorMsg').text(response.responseJSON.errors.name[0]);
                },
            });
        });
        $(".deleteRecord").click(function(){
            var id = $(this).data("id");
            $.ajax(
                {
                    url: "department/"+id,
                    type: 'DELETE',
                    data: {
                        "id": id,
                        "_token": "{{ csrf_token() }}",
                    },
                    success:function(response){
                        toastr.success(response.success);
                        $("#department-row-"+id).remove();
                    },
                    error: function(response) {
                        toastr.error(response.error);
                    },
                });
        });
    </script>
@endsection
