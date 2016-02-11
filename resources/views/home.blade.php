
@extends('layouts.app')

@section('content')
<div class="container">
<form class="col s12" role="form" method="POST" action="{{ url('/home') }}">
 <div class="col-md-6 col-md-offset-4">
         <button type="submit" class="btn btn-large waves-effect waves-light">                         
                                    Populate Cards
                                </button>                                                  
                          
  </div>
       <div class="row">
        <div class="col s12 m7">

          <div class="card large">
            <div class="card-image">
              <img src="http://blog.onlineprasad.com/wp-content/uploads/2015/08/lord-krishna-wallpaper2.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            
          </div>
        </div>
      </div>
        <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="http://media1.santabanta.com/full1/Hinduism/Lord%20Krishna/lord-krishna-110a.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
             
               <a href="#">
               <img src="http://iconizer.net/files/Duesseldorf/orig/heart.png">
              </a>
              <a href="#">fav</a>
            </div>
          </div>
        </div>


      </div>
    </form>
    <!-- <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
