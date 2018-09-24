@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>
 <i class="fa fa-university">
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
        <button class="btn btn-warning btn-xs pull-right" ng-click="initTask()">Okul Ekle</button>
        <i class="fa fa-university">
         Okul Yönetimi 
       </i>
     </div>
     <div class="panel-body">
      <div class="col-md-2">
        <!-- Profile Image -->
        <div class="box box-warning">
          <div class="box-body box-profile">
            <a href="okullar/edit/1">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('/bower_components/admin-lte/dist/img/user4-128x128.jpg') }}" alt="User profile picture">
            </a>
            <h3 class="profile-username text-center">Okul1</h3>
            <p class="text-muted text-center">Özel</p>
            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Öğrenci Sayısı</b> <a class="pull-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Öğretmen Sayısı</b> <a class="pull-right">543</a>
              </li>
              <li class="list-group-item">
                <b>Friends</b> <a class="pull-right">13,287</a>
              </li>
            </ul>
            <div class="col-md-7">
              <a href="okullar/edit/1" class="btn btn-warning btn-block"><b>Düzenle</b></a>
            </div>
            <div class="col-md-5">
              <a href="#" class="btn btn-warning btn-block"><b>Sil</b></a>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <div class="col-md-2">
        <!-- Profile Image -->
        <div class="box box-warning">
          <div class="box-body box-profile">
            <a href="okullar/edit/1">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('/bower_components/admin-lte/dist/img/user3-128x128.jpg') }}" alt="User profile picture">
            </a>
            <h3 class="profile-username text-center">Okul2</h3>
            <p class="text-muted text-center">Özel</p>
            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Öğrenci Sayısı</b> <a class="pull-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Öğretmen Sayısı</b> <a class="pull-right">543</a>
              </li>
              <li class="list-group-item">
                <b>Friends</b> <a class="pull-right">13,287</a>
              </li>
            </ul>
            <div class="col-md-7">
              <a href="okullar/edit/1" class="btn btn-warning btn-block"><b>Düzenle</b></a>
            </div>
            <div class="col-md-5">
              <a href="#" class="btn btn-warning btn-block"><b>Sil</b></a>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <div class="col-md-2">
        <!-- Profile Image -->
        <div class="box box-warning">
          <div class="box-body box-profile">
            <a href="okullar/edit/1">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('/bower_components/admin-lte/dist/img/user7-128x128.jpg') }}" alt="User profile picture">
            </a>
            <h3 class="profile-username text-center">Okul3</h3>
            <p class="text-muted text-center">Özel</p>
            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Öğrenci Sayısı</b> <a class="pull-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Öğretmen Sayısı</b> <a class="pull-right">543</a>
              </li>
              <li class="list-group-item">
                <b>Friends</b> <a class="pull-right">13,287</a>
              </li>
            </ul>
            <div class="col-md-7">
              <a href="okullar/edit/1" class="btn btn-warning btn-block"><b>Düzenle</b></a>
            </div>
            <div class="col-md-5">
              <a href="#" class="btn btn-warning btn-block"><b>Sil</b></a>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <div class="col-md-2">
        <!-- Profile Image -->
        <div class="box box-warning">
          <div class="box-body box-profile">
            <a href="okullar/edit/1">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('/bower_components/admin-lte/dist/img/user1-128x128.jpg') }}" alt="User profile picture">
            </a>
            <h3 class="profile-username text-center">Okul4</h3>
            <p class="text-muted text-center">Özel</p>
            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Öğrenci Sayısı</b> <a class="pull-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Öğretmen Sayısı</b> <a class="pull-right">543</a>
              </li>
              <li class="list-group-item">
                <b>Friends</b> <a class="pull-right">13,287</a>
              </li>
            </ul>
            <div class="col-md-7">
              <a href="okullar/edit/1" class="btn btn-warning btn-block"><b>Düzenle</b></a>
            </div>
            <div class="col-md-5">
              <a href="#" class="btn btn-warning btn-block"><b>Sil</b></a>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
  </div>
  <!-- /.box -->
</div>
@stop