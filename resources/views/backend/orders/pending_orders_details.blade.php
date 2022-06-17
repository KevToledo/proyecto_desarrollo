@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- DETALLE DE ORDENES PENDIENTES -->
		 

<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Detalle de la orden</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Detalle de la orden</li>
								 
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>



		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
		 
<div class="col-md-6 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Detalle de Envio</strong> </h4>
				  </div>
				  

<table class="table">
            <tr>
              <th> Nombre del envio : </th>
               <th> {{ $order->name }} </th>
            </tr>

             <tr>
              <th> Telefono del Envio : </th>
               <th> {{ $order->phone }} </th>
            </tr>

             <tr>
              <th> Email del Envio : </th>
               <th> {{ $order->email }} </th>
            </tr>

             <tr>
              <th> Departamento : </th>
               <th> {{ $order->division->division_name }} </th>
            </tr>

             <tr>
              <th> Municipio : </th>
               <th> {{ $order->district->district_name }} </th>
            </tr>

             <tr>
              <th> Direccion : </th>
               <th>{{ $order->state->state_name }} </th>
            </tr>

            <tr>
              <th> Codigo Postal : </th>
               <th> {{ $order->post_code }} </th>
            </tr>

            <tr>
              <th> Fecha de la orden : </th>
               <th> {{ $order->order_date }} </th>
            </tr>
             
           </table>
 


				</div>
			  </div> <!--  // cod md -6 -->


<div class="col-md-6 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Detalles de la orden</strong><span class="text-danger"> Factura : {{ $order->invoice_no }}</span></h4>
				  </div>
				   

<table class="table">
            <tr>
              <th>  Nombre : </th>
               <th> {{ $order->user->name }} </th>
            </tr>

             <tr>
              <th>  Telefono : </th>
               <th> {{ $order->user->phone }} </th>
            </tr>

             <tr>
              <th> Forma de pago : </th>
               <th> {{ $order->payment_method }} </th>
            </tr>

             <tr>
              <th> Tranx ID : </th>
               <th> {{ $order->transaction_id }} </th>
            </tr>

             <tr>
              <th> Factura  : </th>
               <th class="text-danger"> {{ $order->invoice_no }} </th>
            </tr>

             <tr>
              <th> Total de Orden : </th>
               <th>${{ $order->amount }} </th>
            </tr>

            <tr>
              <th> Orden : </th>
               <th>   
                <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{ $order->status }} </span> </th>
            </tr>


            <tr>
              <th>  </th>
               <th> 
               	@if($order->status == 'pending')
               	<a href="{{ route('pending-confirm',$order->id) }}" class="btn btn-block btn-success" id="confirm">Confirm Order</a>

               	@elseif($order->status == 'confirm')
               	<a href="{{ route('confirm.processing',$order->id) }}" class="btn btn-block btn-success" id="processing">Processing Order</a>

               	@elseif($order->status == 'processing')
               	<a href="{{ route('processing.picked',$order->id) }}" class="btn btn-block btn-success" id="picked">Picked Order</a>

               	@elseif($order->status == 'picked')
               	<a href="{{ route('picked.shipped',$order->id) }}" class="btn btn-block btn-success" id="shipped">Shipped Order</a>

               	@elseif($order->status == 'shipped')
                <a href="{{ route('shipped.delivered',$order->id) }}" class="btn btn-block btn-success" id="delivered">Delivered Order</a>

               	@endif

                 </th>
            </tr>

           
             
           </table>
 


				</div>
			  </div> <!--  // cod md -6 -->





<div class="col-md-12 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					 
				  </div>



 <table class="table">
            <tbody>
  
              <tr>
                <td width="10%">
                  <label for=""> Imagen</label>
                </td>

                 <td width="20%">
                  <label for=""> Nombre Producto </label>
                </td>

             <td width="10%">
                  <label for=""> Codigo Producto</label>
                </td>


               <td width="10%">
                  <label for=""> Color</label>
                </td>

                <td width="10%">
                  <label for=""> Tamaño </label>
                </td>

                  <td width="10%">
                  <label for=""> Quantidad </label>
                </td>

               <td width="10%">
                  <label for=""> Precio </label>
                </td>
                
              </tr>


              @foreach($orderItem as $item)
       <tr>
               <td width="10%">
                  <label for=""><img src="{{ asset($item->product->product_thambnail) }}" height="50px;" width="50px;"> </label>
                </td>

               <td width="20%">
                  <label for=""> {{ $item->product->product_name_en }}</label>
                </td>


                <td width="10%">
                  <label for=""> {{ $item->product->product_code }}</label>
                </td>

               <td width="10%">
                  <label for=""> {{ $item->color }}</label>
                </td>

               <td width="10%">
                  <label for=""> {{ $item->size }}</label>
                </td>

                <td width="10%">
                  <label for=""> {{ $item->qty }}</label>
                </td>

         <td width="10%">
                  <label for=""> ${{ $item->price }}  ( $ {{ $item->price * $item->qty}} ) </label>
                </td>
                
              </tr>
              @endforeach





            </tbody>
            
          </table>










				  
				</div>
			  </div>  <!--  // cod md -12 -->









 

 

 


		  </div>
		  <!-- /. end row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection