@extends('frontend.main_master')
@section('content')

<div class="body-content">
	<div class="container">
		<div class="row">
			 @include('frontend.common.user_sidebar')

       <div class="col-md-2">
       </div>

       <div class="col-md-8">

        <div class="table-responsive">
          <table class="table">
            <tbody>
  
              <tr style="background: #e2e2e2;">
                <td class="col-md-1">
                  <label for=""> Fecha</label>
                </td>

                <td class="col-md-3">
                  <label for=""> Total</label>
                </td>

                <td class="col-md-3">
                  <label for=""> Forma de pago</label>
                </td>


                <td class="col-md-2">
                  <label for=""> Factura</label>
                </td>

                 <td class="col-md-2">
                  <label for=""> Orden</label>
                </td>

                 <td class="col-md-1">
                  <label for=""> Accion </label>
                </td>
                
              </tr>


              @foreach($orders as $order)
       <tr>
                <td class="col-md-1">
                  <label for=""> {{ $order->order_date }}</label>
                </td>

                <td class="col-md-3">
                  <label for=""> Q{{ $order->amount }}</label>
                </td>


                 <td class="col-md-3">
                  <label for=""> {{ $order->payment_method }}</label>
                </td>

                <td class="col-md-2">
                  <label for=""> {{ $order->invoice_no }}</label>
                </td>

         <td class="col-md-2">
          <label for=""> 

    @if($order->status == 'pending')        
        <span class="badge badge-pill badge-warning" style="background: #800080;"> Pendientes </span>
        @elseif($order->status == 'confirm')
         <span class="badge badge-pill badge-warning" style="background: #0000FF;"> Confirmadas </span>

          @elseif($order->status == 'processing')
         <span class="badge badge-pill badge-warning" style="background: #FFA500;"> Procesando </span>

          @elseif($order->status == 'picked')
         <span class="badge badge-pill badge-warning" style="background: #808000;"> Tomadas </span>

          @elseif($order->status == 'shipped')
         <span class="badge badge-pill badge-warning" style="background: #808080;"> En envio </span>

          @elseif($order->status == 'delivered')
         <span class="badge badge-pill badge-warning" style="background: #008000;"> Entregadas </span>

          @if($order->return_order == 1) 
           <span class="badge badge-pill badge-warning" style="background:red;">Peticiones de Devolucion </span>

          @endif

         @else
  <span class="badge badge-pill badge-warning" style="background: #FF0000;"> Cancelar </span>

      @endif
            </label>
        </td>

         <td class="col-md-1">
          <a href="{{ url('user/order_details/'.$order->id ) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Ver</a>

           <a target="_blank" href="{{ url('user/invoice_download/'.$order->id ) }}" class="btn btn-sm btn-danger" style="margin-top: 5px;"><i class="fa fa-download" style="color: white;"></i> Factura </a>
          
        </td>
                
              </tr>
              @endforeach





            </tbody>
            
          </table>
          
        </div>




         
       </div> <!-- / end col md 8 -->

		 

		 
			
		</div> <!-- // end row -->
		
	</div>
	
</div>
 

@endsection