@extends('app')

@section('content')
<div class="container home">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			

                 
                  <form method="POST" action="{{ url('/password/email') }}">
				  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
							
							<div class="input-field col s12">
							<h5 class="flow-text">Reset Password</h5>
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
								
							{!! Form::text('email', null, ['class'=>'materialize-text']) !!}
							<label for="email" class="blue-text text-darken-2">Email</label>
							</div>
						</div>

					

						<div class="row">
							<div class="input-field col s12">

							{!! Form::submit('Send Password Reset Link', ['class'=>'btn btn-primary blue lighten-1']) !!}
								
							</div>
						</div>


						
				 </form>
			
		</div>
	</div>
</div>
@endsection
