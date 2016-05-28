@extends('app')

@section('content')
<div class="container home">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

    <div class="row">
              
              <div class="input-field col s12">
              <h5 class="flow-text">All Users</h5>
              </div>
            </div>
		

            <div class="row">
        <div class="col-md-10 col-md-offset-1">

        <table class="hoverable bordered">

        

            
            
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Email</th>
              <th data-field="price">Joined Date</th>
               
          </tr>
        </thead>

        <tbody>

         @foreach($users as $user)

         
          <tr>
            <td class="ellipse blue-text text-darken-2">
            {{ $user->name }}
            
            </td>
            <td class="ellipse blue-text text-darken-2">
            {{ $user->email }}
            
            </td>
            <td class="ellipse blue-text text-darken-2">
            {{ date("d F Y",strtotime($user->created_at)) }}
            
            </td>

             





          </tr>
            
          @endforeach
        </tbody>
     
         </table>
        
         <?php echo $users->render(); ?>

        </div>
      </div>     
                  
			
		</div>
  


	</div>

</div>
@endsection