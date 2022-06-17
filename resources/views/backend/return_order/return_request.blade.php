@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Listado de ordenes de devolucion o retorno -->
		<section class="content">
		  <div class="row">
			   
		 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Listado de ordenes de devolucion</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Factura </th>
								<th>Factura </th>
								<th>Monto </th>
								<th>Forma de pago </th>
								<th>Estatus </th>
								<th>Accion</th>
								 
							</tr>
						</thead>
						<tbody>
	 @foreach($orders as $item)
	 <tr>
		<td> {{ $item->order_date }}  </td>
		<td> {{ $item->invoice_no }}  </td>
		<td> ${{ $item->amount }}  </td>

		<td> {{ $item->payment_method }}  </td>
		<td>
		@if($item->return_order == 1)
      <span class="badge badge-pill badge-primary">Pendiente </span>
       @elseif($item->return_order == 2)
       <span class="badge badge-pill badge-success">Exitosa </span>
		@endif

		  </td>

		<td width="25%">
  <a href="{{ route('return.approve',$item->id) }}" class="btn btn-danger">Aprovado </a>
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