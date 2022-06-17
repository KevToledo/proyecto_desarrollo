@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
		 

	 


<!--   ------------ Vista de Reporteria -------- -->


          <div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Buscar por Fecha </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="{{ route('search-by-date') }}">
	 	@csrf
					   

	 <div class="form-group">
		<h5>Seleccione Fecha <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="date" name="date" class="form-control" > 
	 @error('date') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	</div>
	</div>
 	 

			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">					 
						</div>
					</form>
 
					  
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>




   <div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Buscar por Mes </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="{{ route('search-by-month') }}">
	 	@csrf
					   

	 <div class="form-group">
		<h5>Seleccione Mes  <span class="text-danger">*</span></h5>
		<div class="controls">
	
		<select name="month" class="form-control">
			<option label="Choose One"></option>
			<option value="January">Enero</option>
			<option value="February">Febrero</option>
			<option value="March">Marzo</option>
			<option value="April">Abril</option>
			<option value="May">Mayo</option>
			<option value="Jun">Junio</option>
			<option value="July">Julio</option>
			<option value="August">Augosto</option>
			<option value="September">Septiembre</option>
			<option value="October">Octubrr</option>
			<option value="November">Noviembre</option>
			<option value="December">Diciembre</option>


		</select> 

	 @error('month') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	</div>
	</div> 


 <div class="form-group">
		<h5>Seleccione Año  <span class="text-danger">*</span></h5>
		<div class="controls">
	
		<select name="year_name" class="form-control">
			<option label="Choose One"></option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
			<option value="2026">2026</option> 
		</select> 

	 @error('year_name') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	</div>
	</div>  

			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">					 
						</div>
					</form>
 
					  
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>





			   <div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Seleccione Año </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="{{ route('search-by-year') }}" >
	 	@csrf
					   
<div class="form-group">
		<h5>Seleccione año <span class="text-danger">*</span></h5>
		<div class="controls">
	
		<select name="year" class="form-control">
			<option label="Choose One"></option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
			<option value="2026">2026</option> 
		</select> 

	 @error('year') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	</div>
	</div>   

			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">					 
						</div>
					</form>
 
					  
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>








 <!--   ------------ Final Reporteria -------- -->


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection