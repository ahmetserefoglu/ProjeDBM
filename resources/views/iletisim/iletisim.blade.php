@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
    	<i class="fa fa-phone">
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
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-phone">
       </i>
         İletişim
     </div>

     <div class="panel-body">
      
     </div>
   </div>
 </div>
</div>
@stop