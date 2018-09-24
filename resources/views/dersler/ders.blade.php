@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
      <i class="fa fa-book">
       </i>
    	{{ $page_title or "Page Title" }}
      <small>{{ $page_description or null }}</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
    <li class="active">{{ $page_title or "Page Title" }}</li>
</ol>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-book">
       </i>
         Dersler
          <div class="box-tools pull-right">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
     </div>

     <div class="panel-body">
       <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
     </div>
   </div>
 </div>
</div>
@stop