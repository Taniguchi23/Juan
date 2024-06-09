@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <div class="container-fluid">

                <div class="mb-3">
                    <br>
                    <div class="container-pago">
                        <h1 class="titulo-pago">Pago con Visa</h1>
                        <hr>

                        <div class="info-pago">
                            <h3 class="titulo-info">Información del pago</h3>
                            <div class="info-pago-item">
                                <span class="info-pago-label">Importe a pagar:</span>
                                <span class="info-pago-value">S/. <?php echo $producto->price; ?></span>
                            </div>
                            <div class="info-pago-item">
                                <span class="info-pago-label">Número de pedido:</span>
                                <span class="info-pago-value"><?php echo $purchaseNumber; ?></span>
                            </div>
                            <div class="info-pago-item">
                                <span class="info-pago-label">Concepto:</span>
                                <span class="info-pago-value"><?php echo 'Detalle de pago'; ?></span>
                            </div>
                            <div class="info-pago-item">
                                <span class="info-pago-label">Fecha:</span>
                                <span class="info-pago-value"><?php echo date("d/m/Y"); ?></span>
                            </div>
                        </div>

                        <hr>

                        <div class="checkbox-label">
                            <input type="checkbox" name="ckbTerms" id="ckbTerms" onclick="visaNetEc3()" style="margin-bottom: 20px;">
                            <label for="ckbTerms">Acepto los <a href="#" target="_blank">Términos y condiciones</a></label>


                            <form id="frmVisaNet" method="post" action="/finalizar?amount=<?php echo $producto->price;?>&purchaseNumber=<?php echo $purchaseNumber?>&plan=<?php echo $producto->id?>">
                                <input type="hidden" name="token" value="<?php echo $session;?>">
                                <script src="<?php echo \App\Helpers\VisaHelper::VISA_URL_JS?>"
                                        data-sessiontoken="<?php echo $session;?>"
                                        data-channel="web"
                                        data-merchantid="<?php echo \App\Helpers\VisaHelper::VISA_MERCHANT_ID?>"
                                        data-merchantlogo="https://imagenes.utp-sistemas.com/autonoma/logo.jpg"
                                        data-purchasenumber="<?php echo $purchaseNumber;?>"
                                        data-amount="<?php echo $producto->price; ?>"
                                        data-expirationminutes="5"
                                        data-timeouturl="/"
                                ></script>
                            </form>
                        </div>
                    </div>

                </div>


            </div>

        </div>



        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
            </div>
        </footer>

    </div>
    <script src="/assets/js/visa.js"></script>
@endsection
