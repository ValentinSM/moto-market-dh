@extends('layouts.frontLayout.front_design')
@section('content')

  <!-- Productos -->
  <div class="cart">
    <div>
      <h2 class="cart-article-title">Articulos en tu carrito</h2>

      @if(Session::has('flash_message_error'))
          <div class="alert alert-error alert-block">
                <strong>{!! session('flash_message_error') !!}</strong>
          </div>
      @endif

      @if(Session::has('flash_message_success'))
          <div class="alert alert-success alert-block">
                <strong>{!! session('flash_message_success') !!}</strong>
          </div>
      @endif

        <hr class="cart-hr"/>
        <ul class="cart-article-list">
          @foreach ($userCart as $cart)

            <li>{{ $cart->product_name }}........................................................................................................${{ $cart->price }}
              <button id="x"><a style="text-decoration: none;"href="{{ url('/cart/delete-product/' . $cart->id) }}" >X</a></button></li>

          @endforeach


        </ul>
        <hr>

          <p class="cart-total">Total.........................................@foreach ($userCart as $cart)
            {{ $cart->price }}
            @endforeach
          </p>
    </div>


      <input id="cartPay" type="submit" name="submit" value="Proceder a Pagar" style="display:block">


      <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>

      <form id="pay" action="" method="post" id="pay" name="pay" style="display:none">
        <fieldset>
            <ul>
                <li>
                    <label for="email">Email</label>
                    <input id="email" name="email" value="{{ $cart->user_email }}" type="email" placeholder="your email"/>
                </li><br>
                <li>
                    <label for="cardNumber">Numero de la Tarjeta:</label>
                    <input type="text" id="cardNumber" data-checkout="cardNumber" placeholder="4509 9535 6623 3704" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
                </li><br>
                <li>
                    <label for="securityCode">Codigo de Seguridad:</label>
                    <input type="text" id="securityCode" data-checkout="securityCode" placeholder="123" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
                </li><br>
                <li>
                    <label for="cardExpirationMonth">Mes de Vencimiento:</label>
                    <input type="text" id="cardExpirationMonth" data-checkout="cardExpirationMonth" placeholder="12" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
                </li><br>
                <li>
                    <label for="cardExpirationYear">Año de Vencimiento:</label>
                    <input type="text" id="cardExpirationYear" data-checkout="cardExpirationYear" placeholder="2015" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
                </li><br>
                <li>
                    <label for="cardholderName">Nombre del Titular:</label>
                    <input type="text" id="cardholderName" data-checkout="cardholderName" placeholder="APRO" />
                </li><br>
                <li>
                    <label for="docType">Tipo de Documento:</label>
                    <select id="docType" data-checkout="docType"></select>
                </li><br>
                <li>
                    <label for="docNumber">Numero de Documento:</label>
                    <input type="text" id="docNumber" data-checkout="docNumber" placeholder="12345678" />
                </li><br>
            </ul>
            <input type="hidden" name="paymentMethodId" />
            <input id="mlSubmit" type="submit" value="Pagar!" />
        </fieldset>
</form>

  </div>

@endsection
