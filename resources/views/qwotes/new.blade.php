@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			

                 
                  {!! Form::open(['role'=>'form', 'class'=>'form-horizontal', 'action'=>'QwoteController@store']) !!}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
							
							<div class="input-field col s12">
							<h5 class="flow-text">Add Qwote</h5>
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
								
							{!! Form::textarea('qwote', null, ['class'=>'materialize-textarea', 'value' => 'old("qwote")']) !!}
							<label for="qwote" class="blue-text text-darken-2">Qwote</label>
							</div>
						</div>

						<div class="row">	
							<div class="input-field col s12">
								{!! Form::text('author', null, ['class'=>'materialize-text', 'value' => 'old("author")']) !!}
								<label for="author" class="blue-text text-darken-2">Author</label>
							</div>
						</div>


                        <div class="row">	
						<div class="input-field col s12">
                      
                            {!! Form::select('type', ['General' => 'general', 'Driver' => 'driver', 'Expressive' => 'expressive', 'Amiable'=>'amiable', 'Analytical'=>'analytical'], 'General') !!}
                       
                          <label for="type" class="blue-text text-darken-2">Personality Type</label>

                        </div>
                        </div>

                          <div class="row">	
						<div class="input-field col s12">
                          
                          {!! Form::checkbox('public', true, null, ['id' => 'public']) !!}
                          <label for="public">Make Public</label>
                            

                        </div>
                        </div>
						

						<div class="row">
							<div class="input-field col s12">

							{!! Form::submit('Create', ['class'=>'btn btn-primary blue lighten-1']) !!}
								
							</div>
						</div>
				  {!! Form::close() !!}

				   
			
		</div>
	</div>
</div>
@endsection

