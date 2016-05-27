@extends('app')

@section('content')
<div class="container home">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

    <div class="row">
              
              <div class="input-field col s12">
              <h5 class="flow-text">My Qwotes</h5>
              </div>
            </div>
			<a class="btn-floating btn-large waves-effect blue darken-1" href="/new"><i class="mdi-content-add"></i></a>

            <div class="row">
        <div class="col-md-10 col-md-offset-1">

         @foreach($qwotes as $qwote)


          <div class="card">
            
            <div class="card-content">

              <p class="blue-text text-darken-2 flow-text">{{$qwote->qwote}}</p>

               <span class="grey-text lighten-3 author">&#8212 {{$qwote->author}}</span>
            </div>
            <div class="card-action">


             
              <a class="btn-floating light-blue lighten-2" href="{{ URL::route('edit', $qwote->id) }}"><i class="mdi-content-create"></i></a>



              
            <span class="btn-floating light-blue lighten-2">
          {!! Form::open(array('route' => array('delete', $qwote->id), 'method' => 'delete')) !!}
            <button type="submit"  class="btn-floating light-blue lighten-2" onclick="if(!confirm('Are you sure to delete this item?')){return false;};"><i class="mdi-content-clear"></i></button>
           {!! Form::close() !!}
             </span> 

            </div>
          </div>
         @endforeach
         
        <?php echo $qwotes->render(); ?>

        </div>
      </div>     
                  
			
		</div>
  


	</div>

</div>
@endsection

