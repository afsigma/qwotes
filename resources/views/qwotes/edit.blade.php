@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
                  @foreach ($qwotes as $qwote)

                  {!! Form::model($qwote, array('method' => 'put', 'route' => array('update', $qwote->id))) !!}
                 
                  
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
							
							<div class="input-field col s12">
							<h5 class="flow-text">Edit Qwote</h5>
							</div>
						</div>


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

						
                      
                            {!! Form::select('type', ['General' => 'general', 'Driver' => 'driver', 'Expressive' => 'expressive', 'Amiable'=>'amiable', 'Analytical'=>'analytical'], $qwote->type) !!}
                       
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

							{!! Form::submit('Update', ['class'=>'btn btn-primary blue lighten-1']) !!}
								
							</div>
						</div>
				  {!! Form::close() !!}
				  @endforeach 
			
		</div>
	</div>
</div>
@endsection