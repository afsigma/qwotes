@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
			<a class="btn-floating btn-large waves-effect waves-light red" href="/new"><i class="mdi-content-add"></i></a>

            <div class="row">
        <div class="col-md-10 col-md-offset-1">

         @foreach($qwotes as $qwote)

          <div class="card">
            
            <div class="card-content">

              <p class="blue-text text-darken-2">{{$qwote->qwote}}</p>
            </div>
            <div class="card-action">
              <span class="grey-text lighten-3">{{$qwote->author}}</span>
              
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

