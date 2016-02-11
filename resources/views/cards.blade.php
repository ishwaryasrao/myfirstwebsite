
@extends('layouts.app')

@section('content')
<div class="container">
<form class="col s12" role="form" method="POST" action="{{ url('/home') }}">
 <div class="col-md-6 col-md-offset-4">
         <button type="submit" class="btn btn-large waves-effect waves-light">                         
                                    Cards screen
                                </button>
</div>
                    


 <div class="row">
				@foreach($userdata as $cards)  
				                 
                  
       					 <div class="col s12 m5">

          					<div class="card small">
            				<div class="card-image">
            					  <img src={{$cards->url}}>
            					  <span class="card-title">Card Title</span>
            				</div>
            				<div class="card-content">
             				 <p>I am a very simple card. I am good at containing small bits of information.
            					  I am convenient because I require little markup to use effectively.</p>
            				</div>
            
          					</div>
       					 </div>
      				
                 
                 @endforeach
                          
  </div>

</form>
</div>
@endsection