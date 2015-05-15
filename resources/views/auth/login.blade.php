@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			

                 
                  <form method="POST" action="{{ url('/auth/login') }}">
				  <input type="hidden" name="_token" value="{{ csrf_token() }}">




						<div class="row">
							
							<div class="input-field col s12">
								
							{!! Form::text('email', null, ['class'=>'materialize-text']) !!}
							<label for="email" class="blue-text text-darken-2">Email</label>
							</div>
						</div>

						<div class="row">	
							<div class="input-field col s12">
								{!! Form::password('password', null, ['class'=>'materialize-text']) !!}
								<label for="author" class="blue-text text-darken-2">Password</label>
							</div>
						</div>

						

						<div class="row">
							<div class="input-field col s12">

							{!! Form::submit('Login', ['class'=>'btn btn-primary blue lighten-1']) !!}
								
							</div>
						</div>


						<a href="{{ url('/password/email') }}">Forgot Your Password?</a>
				 </form>
			
		</div>
	</div>
</div>
@endsection
