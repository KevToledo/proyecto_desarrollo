@extends('frontend.main_master')
@section('content')

<div class="body-content">
	<div class="container">
		<div class="row">
			 @include('frontend.common.user_sidebar')

      <div class="col-md-5">
        <div class="card">
          <div class="card-header"><h4>Detalles del envio</h4></div>
         <hr>
         <div class="card-body" style="background: #E9EBEC;">
           <table class="table">
            <tr>
              <th> Nombre del envio : </th>
               <th> {{ $order->name }} </th>
            </tr>

             <tr>
              <th> Telefono del envio : </th>
               <th> {{ $order->phone }} </th>
            </tr>

             <tr>
              <th> Correo del envio : </th>
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
              <th> Zona : </th>
               <th>{{ $order->state->state_name }} </th>
            </tr>

            <tr>
              <th> Codigo Postal : </th>
               <th> {{ $order->post_code }} </th>
            </tr>

            <tr>
              <th> Fecha del envio : </th>
               <th> {{ $order->order_date }} </th>
            </tr>
             
           </table>


         </div> 
          
        </div>
        
      </div> <!-- // end col md -5 -->



<div class="col-md-5">
        <div class="card">
          <div class="card-header"><h4>Detalles de la orden</h4></div>
<span class="text-danger"> Factura : {{ $order->invoice_no }}</span></h4>
          </div>
         <hr>
         <div class="card-body" style="background: #E9EBEC;">
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
              <th> Forma de Pago : </th>
               <th> {{ $order->payment_method }} </th>
            </tr>

             <tr>
              <th> ID : </th>
               <th> {{ $order->transaction_id }} </th>
            </tr>

             <tr>
              <th> Factura  : </th>
               <th class="text-danger"> {{ $order->invoice_no }} </th>
            </tr>

             <tr>
              <th> Total de Orden : </th>
               <th>{{ $order->amount }} </th>
            </tr>

            <tr>
              <th> Orden : </th>
               <th>   
                <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{ $order->status }} </span> </th>
            </tr>

           
             
           </table>


         </div> 
          
        </div>
        
      </div> <!-- // 2ND end col md -5 -->


      <div class="row">



<div class="col-md-12">

        <div class="table-responsive">
          <table class="table">
            <tbody>
  
              <tr style="background: #e2e2e2;">
                <td class="col-md-1">
                  <label for=""> Imagen</label>
                </td>

                <td class="col-md-3">
                  <label for=""> Nombre del Producto </label>
                </td>

                <td class="col-md-3">
                  <label for=""> Codigo del producto</label>
                </td>


                <td class="col-md-2">
                  <label for=""> Color </label>
                </td>

                 <td class="col-md-2">
                  <label for=""> Presentancion </label>
                </td>

                 <td class="col-md-1">
                  <label for=""> QTY</label>
                </td>

                <td class="col-md-1">
                  <label for=""> Precio </label>
                </td>
                
              </tr>


              @foreach($orderItem as $item)
       <tr>
                <td class="col-md-1">
                  <label for=""><img src="{{ asset($item->product->product_thambnail) }}" height="50px;" width="50px;"> </label>
                </td>

                <td class="col-md-3">
                  <label for=""> {{ $item->product->product_name_en }}</label>
                </td>


                 <td class="col-md-3">
                  <label for=""> {{ $item->product->product_code }}</label>
                </td>

                <td class="col-md-2">
                  <label for=""> {{ $item->color }}</label>
                </td>

                <td class="col-md-2">
                  <label for=""> {{ $item->size }}</label>
                </td>

                 <td class="col-md-2">
                  <label for=""> {{ $item->qty }}</label>
                </td>

          <td class="col-md-2">
                  <label for=""> Q{{ $item->price }}  ( $ {{ $item->price * $item->qty}} ) </label>
                </td>
                
              </tr>
              @endforeach





            </tbody>
            
          </table>
          
        </div>
 
         
       </div> <!-- / end col md 8 --> 
        
      </div> <!-- // END ORDER ITEM ROW -->

      @if($order->status !== "delivered")
      
      @else

      @php 
      $order = App\Models\Order::where('id',$order->id)->where('return_reason','=',NULL)->first();
      @endphp


      @if($order)
      <form action="{{ route('return.order',$order->id) }}" method="post">
        @csrf

  <div class="form-group">
    <label for="label"> Motivo de la devolucion:</label>
    <textarea name="return_reason" id="" class="form-control" cols="30" rows="05">Motivo de la devolucion</textarea>    
  </div>

  <button type="submit" class="btn btn-danger">Devolucion de orden</button>

</form>
   @else

   <span class="badge badge-pill badge-warning" style="background: red">Has enviado una peticion para la devolucion y retorno de la orden </span>
   
   @endif 



  @endif
<br><br>


		 
			
		</div> <!-- // end row -->
		
	</div>
	
</div>
 

@endsection