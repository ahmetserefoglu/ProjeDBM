@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
      <i class="fa fa-user-circle">
        {{ $page_title or "Page Title" }}
        <small>{{ $page_description or null }}</small>
       </i>
    	
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
    <li class="active">{{ $page_title or "Page Title" }}</li>
</ol>
@stop

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <button class="btn btn-warning btn-xs pull-right" ng-click="initTask()">Sınıf Ekle</button>
        <i class="fa fa-user-circle">
         Sınıf Yönetimi 
       </i>
     </div>


 
    <!-- general form elements -->
    <div class="panel-body">
            <div class="box-header">
              <h3></h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  <td>
                    <button class="btn btn-warning btn-xs" ng-click="initTask()">Düzenle</button>
                    <button class="btn btn-warning btn-xs" ng-click="initTask()">Sil</button>
                  </td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  <td>
                    <button class="btn btn-warning btn-xs" ng-click="initTask()">Düzenle</button>
                    <button class="btn btn-warning btn-xs" ng-click="initTask()">Sil</button>
                  </td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  <td>
                    <button class="btn btn-warning btn-xs" ng-click="initTask()">Düzenle</button>
                    <button class="btn btn-warning btn-xs" ng-click="initTask()">Sil</button>
                  </td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  <td>
                    <button class="btn btn-warning btn-xs" ng-click="initTask()">Düzenle</button>
                    <button class="btn btn-warning btn-xs" ng-click="initTask()">Sil</button>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
    <!-- /.box -->
  </div>
     </div>
@stop