@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
       <i class="fa fa-lock">
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
<div class="row" ng-app="iletisimRecords" ng-controller="iletisimController">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-lock">
       </i>
         Ödevler
     </div>

     <div class="panel-body">
      
     </div>
   </div>
 </div>
</div>
@stop