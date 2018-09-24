@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
{{ $page_title or "Page Title" }}
<small>{{ $page_description or null }}</small>
@stop

@section('content')

<div class="row" ng-app="TaskCrud" ng-controller="TaskController">
  <!-- left column -->
  <div class="col-md-12">
    <!-- Profile Image -->
    <div class="box box-warning">
       <div class="modal" tabindex="-1" role="dialog" id="add_new_task">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add Task</h4>
                    </div>
                    <div class="modal-body">

                        <div class="alert alert-danger" ng-if="errors.length > 0">
                            <ul>
                                <li ng-repeat="error in errors">@{{ error }}</li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" ng-model="task.name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" rows="5" class="form-control"
                            ng-model="task.description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" ng-click="addTask()">Submit</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="modal" tabindex="-1" role="dialog" id="edit_task">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Update Task</h4>
                        </div>
                        <div class="modal-body">

                            <div class="alert alert-danger" ng-if="errors.length > 0">
                                <ul>
                                    <li ng-repeat="error in errors">@{{ error }}</li>
                                </ul>
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" ng-model="edit_task.name">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" rows="5" class="form-control"
                                ng-model="edit_task.description"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" ng-click="updateTask()">Submit</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button class="btn btn-primary btn-xs pull-right" ng-click="initTask()">Add Task</button>
                            Task
                        </div>

                        <div class="panel-body">

                         
                            <div class="alert alert-danger none" ng-show="error"><p></p></div>
                            <div class="alert alert-success none" ng-show="success"><p></p></div>
                        <!--<div class="alert alert-success alert-dismissible" ng-show="success" >
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                @{{successMessage}}
                            </div>-->


                            <table class="table table-bordered table-striped" ng-if="tasks.length > 0">
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                <tr dir-paginate="(index, task) in tasks|itemsPerPage:satirSayisi">
                                    <td>
                                        @{{ index + 1 }}
                                    </td>
                                    <td>@{{ task.name }}</td>
                                    <td>@{{ task.description }}</td>
                                    <td>
                                        <button class="btn btn-success btn-xs" ng-click="initEdit(index)">Edit</button>
                                        <button class="btn btn-danger btn-xs" ng-click="deleteTask(index)" >Delete</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div align="center">
                           <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true">
                           </dir-pagination-controls>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- /.box-header -->

   </div>

   <!-- /.box -->
</div>
@stop