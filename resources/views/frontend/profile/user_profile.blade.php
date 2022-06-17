@extends('frontend.main_master')
@section('content')

<div class="body-content">
	<div class="container">
		<div class="row">
      
			 @include('frontend.common.user_sidebar')

			<div class="col-md-2">
				
			</div> <!-- // end col md 2 -->


			<div class="col-md-6">
  <div class="card">
  	<h3 class="text-center"><span class="text-danger">Hola!....</span><strong>{{ Auth::user()->name }}</strong> Actualiza tu perfil  </h3>

  	<div class="card-body">
  		


  		<form method="post" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
  			@csrf


         <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Nombre <span> </span></label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Correo <span> </span></label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
        </div>


        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Telefono <span> </span></label>
            <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
        </div>

         <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Imagen de Usuario <span> </span></label>
            <input type="file" name="profile_photo_path" class="form-control">
        </div>

         <div class="form-group">            
           <button type="submit" class="btn btn-danger">Actualizar</button>
        </div>         
 

  			
  		</form>  		
  	</div>

 
  	
  </div>
				
			</div> <!-- // end col md 6 -->
			
		</div> <!-- // end row -->
		
	</div>
	
</div>
 

@endsection