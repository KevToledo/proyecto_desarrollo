<!doctype html>
<html lang="en">
  <head>

  <!-- DETALLE DE LA ORDEN DE COMPRA / FACTURA -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Factura</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
          <!-- {{-- <img src="" alt="" width="150"/> --}} -->
          <h2 style="color: green; font-size: 26px;"><strong>Conglomo</strong></h2>
        </td>
        <td align="right">
            <pre class="font" >
               TRANSPORT 
               Email:support@transport.com <br>
               Mob: 7777777 <br>
               Guatemala, Guatemala#1 <br>
              
            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;""></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
           <strong>Nombre:</strong> {{ $order->name }}<br>
           <strong>Email:</strong> {{ $order->email }} <br>
           <strong>Correo:</strong> {{ $order->phone }} <br>

           @php
            $div = $order->division->division_name;
            $dis = $order->district->district_name;
            $state = $order->state->state_name;
           @endphp
            
           <strong>Direccion:</strong> {{ $div }},{{ $dis }}.{{ $state }} <br>
           <strong>Codigo Postal:</strong> {{ $order->post_code }}
         </p>
        </td>
        <td>
          <p class="font">
            <h3><span style="color: green;">Factura:</span> #{{ $order->invoice_no}}</h3>
            Fecha de Orden: {{ $order->order_date }} <br>
             Fecha Entrega: {{ $order->delivered_date }} <br>
            Forma de pago : {{ $order->payment_method }} </span>
         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>Productos</h3>


  <table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
      <tr class="font">
        <th>Imagen</th>
        <th>Nombre de Producto</th>
        <th>Tamaño</th>
        <th>Color</th>
        <th>Codigo</th>
        <th>Quantidad</th>
        <th>Precio unitario </th>
        <th>Total </th>
      </tr>
    </thead>
    <tbody>

     @foreach($orderItem as $item)
      <tr class="font">
        <td align="center">
            <img src="{{ public_path($item->product->product_thambnail)  }}" height="60px;" width="60px;" alt="">
        </td>
        <td align="center"> {{ $item->product->product_name_en }}</td>
        <td align="center">

          @if($item->size == NULL)
           ----
          @else
            {{ $item->size }}
          @endif
            
        </td>
        <td align="center">{{ $item->color }}</td>
        <td align="center">{{ $item->product->product_code }}</td>
        <td align="center">{{ $item->qty }}</td>
        <td align="center">${{ $item->price }}</td>
        <td align="center">${{ $item->price * $item->qty }} </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
            <h2><span style="color: green;">Subtotal:</span>${{ $order->amount }}</h2>
            <h2><span style="color: green;">Total:</span> ${{ $order->amount }}</h2>
            {{-- <h2><span style="color: green;">Full Payment PAID</h2> --}}
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>Gracias por comprar con nosotros !</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Firma de autoridad:</h5>
    </div>
</body>
</html>