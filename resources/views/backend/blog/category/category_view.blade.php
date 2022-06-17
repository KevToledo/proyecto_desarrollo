@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
		 

			<div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Lista de categorias para Blog <span class="badge badge-pill badge-danger"> {{ count($blogcategory) }} </span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								 
								<th>Categoria Blog Español</th>
								<th>Categoria Blog Ingles </th>
								<th>Accion</th>
								 
							</tr>
						</thead>
						<tbody>
	 @foreach($blogcategory as $item)
	 <tr>
		 
		<td>{{ $item->blog_category_name_en }}</td>
		 <td>{{ $item->blog_category_name_hin }}</td>
		<td>
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


<!--   ------------ Agregar una entrada al Blog -------- -->


          <div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Agregar categoria para blog </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="{{ route('blogcategory.store') }}" >
	 	@csrf
					   

	 <div class="form-group">
		<h5>Blog Categoria en Español <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="blog_category_name_en" class="form-control" > 
	 @error('blog_category_name_en') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	</div>
	</div>


	<div class="form-group">
		<h5>Blog Categoria en Ingles <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="blog_category_name_hin" class="form-control" >
     @error('blog_category_name_hin') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	  </div>
	</div>

 	 

			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Agregar nueva">					 
						</div>
					</form>




					  
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>

 


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection