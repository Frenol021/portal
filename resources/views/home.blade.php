@extends('master')
@section('content')
<nav class="navbar navbar-default ">
  <div class="container-fluid nav-header">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home">shiftech</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li><a href="https://shiftechafrica.com/">About </a></li>
       <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">courses<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="#">mobile</a></li>
            <li><a href="#">web dev</a></li>
            <li><a href="#">graphic design</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">software development</a></li>
            <li role="separator" class="divider"></li>
            
          </ul> -->
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
       
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">curriculum</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">logout</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- units to be enrolled -->

<div class="uni" >

  <!--<table>
  <tr>
    <th>name</th>
    <th>image</th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{$user->unit}}</td>
    <td>{{$user->image}}</td>
  </tr>
  @endforeach
  </table>-->

@foreach($users as $user)
  
  <img class="image" src="{{$user->image}}" alt="">
  
  <h3 class="unit">{{$user->unit}}</h3>
  
  <a href="{{enroll/['id]}}" class=" btn btn-success button">enroll</a>
 @endforeach

 <div>
  
 </div>
</div>


@endsection