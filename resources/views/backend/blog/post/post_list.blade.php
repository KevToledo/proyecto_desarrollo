@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Listado  de Publicaciones del BLOG -->
		<section class="content">
		  <div class="row">
			   
		 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Listado de publicaciones del Blog <span class="badge badge-pill badge-danger"> {{ count($blogpost) }} </span></h3>
<a href="{{ route('add.post') }}" class="btn btn-success" style="float: right;">Agregar publicacion</a>				  
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								 
								<th>Categoria de publicacion  </th>
								<th>Imagen de publicacion </th>
								<th>Titulo de publicacion Español </th>
								<th>Titulo de publicacion Ingles </th>
								<th>Accion</th>
								 
							</tr>
						</thead>
						<tbody>
	 @foreach($blogpost as $item)
	 <tr>
		 
		 <td>{{ $item->category->blog_category_name_en }}</td>
		 <td> <img src="{{ asset($item->post_image) }}" style="width: 60px; height: 60px;"> </td>
		<td>{{ $item->post_title_en }}</td>
		 <td>{{ $item->post_title_hin }}</td>
		<td width="20%">
 <a href="{{ route('blog.category.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
 <a href="{{ route('category.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
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
			<!-- /.col -->

 

 


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection