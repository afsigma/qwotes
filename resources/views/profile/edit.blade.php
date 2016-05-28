@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
                

                  {!! Form::model($user, array('method' => 'put', 'route' => array('profile_update', $user->id))) !!}
                 
                  
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
							
							<div class="input-field col s12">
							<h5 class="flow-text">Edit Profile</h5>
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
								
							{!! Form::text('name', null, ['class'=>'materialize-text', 'value' => 'old("name")']) !!}
							<label for="name" class="blue-text text-darken-2">Name</label>
							</div>
						</div>

						<div class="row">	
							<div class="input-field col s12">
								{!! Form::text('email', null, ['class'=>'materialize-text', 'value' => 'old("email")']) !!}
								<label for="email" class="blue-text text-darken-2">Email</label>
							</div>
						</div>


                        

                         
						

						<div class="row">
							<div class="input-field col s12">

							{!! Form::submit('Update', ['class'=>'btn btn-primary blue lighten-1']) !!}
								
							</div>
						</div>

						<div class="row">
							

						</div>
						<div class="row">
							

						</div>
						<div class="row">
							

						</div>
						<div class="row">
							

						</div>
						<div class="row">
							

						</div>
						<div class="row">
							

						</div>


				  {!! Form::close() !!}
			
			
		</div>
	</div>
</div>
@endsection