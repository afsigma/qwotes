@extends('app')

@section('content')
<div class="container home">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

    <div class="row">
              
              <div class="input-field col s12">
              <h5 class="flow-text">All Qwotes</h5>
              </div>
            </div>
		

            <div class="row">
        <div class="col-md-10 col-md-offset-1">

        <table class="hoverable bordered">

        

            
            
        <thead>
          <tr>
              <th data-field="id">Qwotes</th>
              <th data-field="name">Public</th>
              <th data-field="price">Vetted</th>
               <th data-field="price"></th>
          </tr>
        </thead>

        <tbody>

         @foreach($qwotes as $qwote)

         
          <tr>
            <td class="ellipse">
            {{ $qwote->qwote }}
            <br>
            <small class="light-blue-text lighten-2">{{ $qwote->author }}</small>

            </td>

             {!! Form::model($qwote, array('method' => 'put', 'route' => array('admin/qwick_update', $qwote->id))) !!}
            <td>
            {!! Form::checkbox('public', true, null, ['id' => $qwote->id]) !!}
            <label for="{{$qwote->id}}"></label>
            </td>
            
            <td>
            {!! Form::checkbox('vetted', true, null, ['id' => $qwote->qwote]) !!}
            <label for="{{$qwote->qwote}}"></label>
            </td>


            <td>
            <span class="btn-floating  light-blue lighten-2">
            <button type="submit"  class="btn-floating  light-blue lighten-2"><i class="mdi-action-done"></i></button>
            </span>
           <a class="btn-floating  light-blue lighten-2" href="{{ URL::route('admin/edit', $qwote->id) }}"><i class="mdi-action-done-all"></i></a>
            
            </td>

            {!! Form::close() !!}





          </tr>
            
          @endforeach
        </tbody>
     
         </table>
        
         <?php echo $qwotes->render(); ?>

        </div>
      </div>     
                  
			
		</div>
  


	</div>

</div>
@endsection