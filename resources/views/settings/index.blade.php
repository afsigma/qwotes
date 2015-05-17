@extends('app')

@section('content')
<div class="container home">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			

                 
                  

                  {!! Form::model($settings, array('method' => 'put', 'route' => array('settings_update', $settings->id))) !!}

						<input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
							
							<div class="input-field col s12">
							<h5 class="flow-text">Update Settings</h5>
							</div>
						</div>


						<div class="row">	
						<div class="input-field col s12">

						
                      
                            {!! Form::select('type', ['General' => 'general', 'Driver' => 'driver', 'Expressive' => 'expressive', 'Amiable'=>'amiable', 'Analytical'=>'analytical'], $settings->type) !!}
                       
                          <label for="type" class="blue-text text-darken-2">Personality Type</label>

                        </div>
                        </div>


						<div class="row">
							
							<div class="input-field col s12">
								
							{!! Form::checkbox('subscribe_to_public_qwotes', true, null, ['id' => 'public']) !!}
                          <label for="public">Subscribe To Public Qwotes</label>
							</div>
						</div>

						<div class="row">
							
							<div class="input-field col s12">
								
							{!! Form::checkbox('subscribe_to_my_qwotes', true, null, ['id' => 'my']) !!}
                          <label for="my">Subscribe To My Qwotes</label>
							</div>
						</div>


						<div class="row">
							<div class="input-field col s12">

							{!! Form::submit('Update', ['class'=>'btn btn-primary blue lighten-1']) !!}
								
							</div>
						</div>

						<div class="row">
        
                         <p>By selecting the above settings you will recieve daily inspirational Qwotes</p>
            
                          </div>

				  {!! Form::close() !!}

	
		</div>
	</div>
</div>
@endsection
