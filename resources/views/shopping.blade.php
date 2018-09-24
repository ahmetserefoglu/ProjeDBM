@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    {{ $page_title or "Page Title" }}
                <small>{{ $page_description or null }}</small>
@stop

@section('content')
 <div ng-app="myShoppingList" ng-cloak ng-controller="myCtrl" class="w3-card-2 w3-margin" style="max-width:1200px;">
  <header class="w3-container w3-light-grey w3-padding-16">
    <h3>My Shopping List</h3>
  </header>
  <ul class="w3-ul">
    <li ng-repeat="x in products" class="w3-padding-16">@{{x}}<span ng-click="removeItem($index)" style="cursor:pointer;" class="w3-right w3-margin-right">×</span></li>
  </ul>
  <div class="w3-container w3-light-grey w3-padding-16">
    <div class="w3-row w3-margin-top">
      <div class="w3-col s10">
        <input placeholder="Add shopping items here" ng-model="addMe" class="w3-input w3-border w3-padding">
      </div>
      <div class="w3-col s2">
        <button ng-click="addItem()" class="w3-btn w3-padding w3-green">Add</button>
      </div>
    </div>
    <p class="w3-text-red">@{{errortext}}</p>
  </div>
</div>
@stop