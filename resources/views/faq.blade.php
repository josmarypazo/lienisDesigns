@extends('base')

@section('customStyles')
  <link rel="stylesheet" href="/css/stylespreguntas.css">
@endsection

@section('pageTitle', 'Preguntas Frecuentes')

@section('mainContent')
{{-- <div class="panel-group" id="accordion1"> --}}
    <h3>Preguntas Frecuentes</h3>
            <div class="panel-heading">
          <h4 class="panel-title" > <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">¿Cómo hago para comprar on line?</a> </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body"><p>Para comprar en nuestra tienda online debes ingresar a la sección Tienda Online y, registrarte como usuario.
          Una vez dentro de la sección Tienda Online debes seguir los siguientes pasos: 
          <br>- Seleccioná los productos que quieras comprar  
          <br>- Hacé click en el botón COMPRAR. Se abrirá una ventana en la que se te ofrecerá seguir comprando o finalizar la compra.
          <br>- Una vez que los productos deseados estén cargados en el Carrito de Compras debés seleccionar el botón CARRITO DE COMPRAS.
          <br>- Para finalizar tu compra, seleccioná la forma de pago y completá tus datos.
          <br>- Una vez finalizada la compra, recibirás un correo en tu email con la confirmación y los detalles de tu compra.</p></div>
        </div>
        <div class="panel-heading">
          <h4 class="panel-title" ><a data-toggle="collapse" data-parent="#accordion" href="#collapse2">¿Necesito estar registrado para comprar en la Tienda Online?</a>
          </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
          <div class="panel-body"> <p>Si, es necesario estar registrado para comprar en la Tienda Online. Pero una vez que guardás tus datos se agilizará el proceso en tus próximas compras.</p></div>
        </div>
        <div class="panel-heading">
          <h4 class="panel-title" ><a data-toggle="collapse" data-parent="#accordion" href="#collapse3">¿Cómo recupero mi contraseña?</a>
          </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body"> <p>En el apartado de “Accede a tu cuenta” en la web, existe la opción de “olvidé mi contraseña”. Clicando aquí se te pedirán las credenciales oportunas y se te enviará una nueva contraseña a tu mail y se te dará la opción de cambiarla por la que tú desees.</p></div>
        </div>
          <div class="panel-heading">
            <h4 class="panel-title" >
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">¿Puedo cambiar mi dirección de email?</a>
            </h4>
          </div>
          <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body"> <p>Puedes cambiar tu dirección de mail las veces que quieras. Para ello deberás acceder a la tienda online y en el apartado “Mis Datos” podrás realizar el cambio de mail.</p></div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title" >
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">¿Cómo puedo pagar mis compras?</a>
            </h4>
          </div>
          <div id="collapse5" class="panel-collapse collapse">
            <div class="panel-body"> <p>Podrás realizar tu compra a través de MercadoPago con los siguientes medios de pago: Visa, Mastercard, Mastercard Banco Patagonia..... Cajero automático: sucursales de Banelco o Red Link adheridas.  La acreditación es de 1 a 3 días hábiles desde el momento en que se realizó el pago.  El pedido comenzará a gestionarse una vez acreditado el pago.</p> </div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title" >
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">¿Tiene algún costo adicional la financiación con las tarjetas?</a>
            </h4>
          </div>
          <div id="collapse6" class="panel-collapse collapse">
            <div class="panel-body"> <p>El costo de financiación de las tarjetas es el que establece MercadoPago, podrás averiguarlo al momento de elegir el plan de cuotas. Tendrás la posibilidad de elegir el plan que mejor se ajuste a tus necesidades.</p></div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title" >
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">¿Es seguro pagar por MercadoPago?</a>
            </h4>
          </div>
          <div id="collapse7" class="panel-collapse collapse">
            <div class="panel-body"><p>MercadoPago protege tu información encriptando los datos a través del sistema secure socket layer (SSL). Así cumplen con los estándares más altos de seguridad on line. Para más información, podes visitar la página de MercadoPago.</p></div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title" >
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">¿Dónde puedo recibir el producto?</a>
            </h4>
          </div>
          <div id="collapse8" class="panel-collapse collapse">
            <div class="panel-body"><p>OCA ofrece la modalidad de envío puerta a puerta. Podrás recibir tu pedido en tu casa o en la dirección que te quede más cómoda. Los productos serán entregados por la empresa OCA a través de un empleado debidamente identificado.  La entrega se realizará los días hábiles de 9:00 a 18:00hs.</p></div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title" >
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">¿Cuánto tarda en llegar el pedido?</a>
            </h4>
          </div>
          <div id="collapse9" class="panel-collapse collapse">
            <div class="panel-body"> <p>En general la demora se encuentra entre 3 y 15 días hábiles luego de acreditado el pago.</p></div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title" >
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">¿Cuál es el plazo para realizar un cambio?</a>
            </h4>
          </div>
          <div id="collapse10" class="panel-collapse collapse">
            <div class="panel-body"> <p>Tenés hasta 15 días consecutivos, a partir de la fecha de recepción de tu compra para solicitar un cambio, independientemente de si el producto se encuentra con algún defecto, o en condiciones óptimas.</p></div>
          </div>
        </div>

@endsection
