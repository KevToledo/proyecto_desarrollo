@extends('admin.admin_master')
@section('admin')


  <!-- Listado de Usuarios -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
		 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Total Usuarios <span class="badge badge-pill badge-danger"> {{ count($users) }} </span> </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Imagen </th>
								<th>Nombre </th>
								<th>Email</th>
								<th>Telefono</th>
								<th>Estatus</th>
								<th>Accion</th>
								 
							</tr>
						</thead>
						<tbody>
	 @foreach($users as $user)
	 <tr>
	 	<td><img src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" style="width: 50px; height: 50px;"> </td>
		<td>{{ $user->name }}</td>
		<td>{{ $user->email }}</td>
		<td>{{ $user->phone }}</td>
 
		<td> 
	    @if($user->UserOnline())
         <span class="badge badge-pill badge-success">Activo Ahora</span>
		@else
            <span class="badge badge-pill badge-danger">{{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</span>
		@endif 
		</td>
		
		<td>
 <a href=" " class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
 <a href=" " class="btn btn-danger" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>
		</td>
							 
	 </tr>
	  @endforeach
						</tbody>
						 
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			          
			</div>
			<!-- /.end col-12 -->


 

 


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection