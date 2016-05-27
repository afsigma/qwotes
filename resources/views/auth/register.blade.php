@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			

                 
                  <form method="POST" action="{{ url('/auth/register') }}">
				  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        
                        <div class="row">
							
							<div class="input-field col s12">
							<h5 class="flow-text">Register</h5>
							</div>
						</div>

						@if ($errors->any())
                           @foreach ($errors->all() as $error)
                          <blockquote>
                             <span class="red-text lighten-3">{{ $error }}</span>
                          </blockquote>
                            @endforeach 

				        @endif


						<div class="row">
							
							<div class="input-field col s12">
							<input type="text" class="materialize-text" name="name" value="{{ old('name') }}">	
							<label for="name" class="blue-text text-darken-2">Name</label>
							</div>
						</div>

						<div class="row">	
							<div class="input-field col s12">
							<input type="email" class="materialize-text" name="email" value="{{ old('email') }}">
								<label for="email" class="blue-text text-darken-2">Email</label>
							</div>
						</div>

						<div class="row">	
							<div class="input-field col s12">
							<input type="password" class="materialize-text" name="password">
							<label for="password" class="blue-text text-darken-2">Password</label>
							</div>
						</div>

						<div class="row">	
							<div class="input-field col s12">
							<input type="password" class="materialize-text" name="password_confirmation">
							<label for="password_confirmation" class="blue-text text-darken-2">Password Confirmation</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s12">

							{!! Form::submit('Register', ['class'=>'btn btn-primary blue lighten-1']) !!}
								
							</div>
						</div>


						
				 </form>
			
		</div>
	</div>
</div>
@endsection
