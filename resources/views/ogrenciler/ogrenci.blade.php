@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>
 <i class="fa fa-users">
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
<div class="row" ng-app="ogrenciRecords" ng-controller="ogrenciController">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <button class="btn btn-warning btn-xs pull-right" ng-click="initTask()">Öğrenci Ekle</button>
        <i class="fa fa-users">
         Öğrenci Yönetimi 
       </i>
     </div>

     <div class="panel-body">

      <div class="col-md-2">
        <!-- Profile Image -->
        <div class="box box-warning">
          <div class="box-body box-profile">
            <a href="ogrenciler/edit/1">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('/bower_components/admin-lte/dist/img/user6-128x128.jpg') }}" alt="User profile picture">
            </a>

            <h3 class="profile-username text-center">Nina Mcintire</h3>

            <p class="text-muted text-center">Software Engineer</p>

             <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Sınıflar</b> <a class="pull-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Dersler</b> <a class="pull-right">543</a>
              </li>
            </ul>

            <div class="col-md-7">
              <a href="ogrenciler/edit/1" class="btn btn-warning btn-block"><b><i class="fa fa-edit"></i></b></a>
            </div>
            <div class="col-md-5">
              <a href="#" class="btn btn-warning btn-block"><b><i class="fa fa-trash"></i></b></a>
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
            <a href="ogrenciler/edit/1">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('/bower_components/admin-lte/dist/img/user7-128x128.jpg') }}" alt="User profile picture">
            </a>

            <h3 class="profile-username text-center">Nina Mcintire</h3>

            <p class="text-muted text-center">Software Engineer</p>

             <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Sınıflar</b> <a class="pull-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Dersler</b> <a class="pull-right">543</a>
              </li>
            </ul>

            <div class="col-md-7">
              <a href="ogrenciler/edit/1" class="btn btn-warning btn-block"><b><i class="fa fa-edit"></i></b></a>
            </div>
            <div class="col-md-5">
              <a href="ogrenciler/edit/1" class="btn btn-warning btn-block"><b><i class="fa fa-trash"></i></b></a>
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
            <a href="ogrenciler/edit/1">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('/bower_components/admin-lte/dist/img/user4-128x128.jpg') }}" alt="User profile picture">
            </a>

            <h3 class="profile-username text-center">Nina Mcintire</h3>

            <p class="text-muted text-center">Software Engineer</p>

             <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Sınıflar</b> <a class="pull-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Dersler</b> <a class="pull-right">543</a>
              </li>
            </ul>

            <div class="col-md-7">
              <a href="#" class="btn btn-warning btn-block"><b><i class="fa fa-edit"></i></b></a>
            </div>
            <div class="col-md-5">
              <a href="ogrenciler/edit/1" class="btn btn-warning btn-block"><b><i class="fa fa-trash"></i></b></a>
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
            <a href="ogrenciler/edit/1">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('/bower_components/admin-lte/dist/img/user8-128x128.jpg') }}" alt="User profile picture">
            </a>

            <h3 class="profile-username text-center">Nina Mcintire</h3>

            <p class="text-muted text-center">Software Engineer</p>

             <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Sınıflar</b> <a class="pull-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Dersler</b> <a class="pull-right">543</a>
              </li>
            </ul>

            <div class="col-md-7">
              <a href="#" class="btn btn-warning btn-block"><b><i class="fa fa-edit"></i></b></a>
            </div>
            <div class="col-md-5">
              <a href="ogrenciler/edit/1" class="btn btn-warning btn-block"><b><i class="fa fa-trash"></i></b></a>
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
            <a href="ogrenciler/edit/1">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('/bower_components/admin-lte/dist/img/user3-128x128.jpg') }}" alt="User profile picture">
            </a>

            <h3 class="profile-username text-center">Nina Mcintire</h3>

            <p class="text-muted text-center">Software Engineer</p>

             <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Sınıflar</b> <a class="pull-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Dersler</b> <a class="pull-right">543</a>
              </li>
            </ul>

            <div class="col-md-7">
              <a href="#" class="btn btn-warning btn-block"><b><i class="fa fa-edit"></i></b></a>
            </div>
            <div class="col-md-5">
              <a href="ogrenciler/edit/1" class="btn btn-warning btn-block"><b><i class="fa fa-trash"></i></b></a>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
    </div>
  </div>
</div>
</div>
@stop