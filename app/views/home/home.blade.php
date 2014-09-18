@extends('layouts.layout_base')
 
@section('title')
    Home
@stop

@section('content')

<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">My app</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav col-sm-8 col-md-8">
            <li class="active"><a href="{{URL::to('myapp')}}">Inicio</a></li>
            <li><a href="{{URL::to('users')}}">Users</a></li>
            <li class="pull-right"><a href="{{URL::to('logout')}}">Logout</a></li>           
          </ul>          
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div>
@stop