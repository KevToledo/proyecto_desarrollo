@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Resñas pendientes de aprovacion -->
		<section class="content">
		  <div class="row">
			   
		 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Todas las reseñas pendientes </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Resumen   </th>
								<th>Comentario </th>
								<th>Usuario </th>
								<th>Producto  </th>
								<th>Estatus </th>
								<th>Accion</th>
								 
							</tr>
						</thead>
						<tbody>
	 @foreach($review as $item)
	 <tr>
		<td> {{ $item->summary }}  </td>
		<td> {{ $item->comment }}  </td>
		<td>  {{ $item->user->name }}  </td>

		<td> {{ $item->product->product_name_en }}  </td>
		<td>
		@if($item->status == 0)
      <span class="badge badge-pill badge-primary">Pendiente </span>
       @elseif($item->status == 1)
       <span class="badge badge-pill badge-success">Publicada </span>
		@endif

		  </td>

		<td width="25%">
  <a href="{{ route('review.approve',$item->id) }}" class="btn btn-danger">Aprovado </a>
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
			<!-- /.col -->

 

 


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection