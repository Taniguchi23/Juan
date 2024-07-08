@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column align-items-center" id="content-wrapper">
        <div id="content">
            <div class="container-fluid">

                <div class="mb-3">
                    <br>
                    <div class="container-pago text-center">
                        <h2 class="titulo-pago">Pago con Visa</h2>
                        <hr>

                        <div class="info-pago">
                            <h4 class="titulo-info">Información del pago</h4>
                            <div class="info-pago-item">
                                <span class="info-pago-label">Importe a pagar:</span>
                                <span class="info-pago-value">S/. {{ $producto->price }}</span>
                            </div>
                            <div class="info-pago-item">
                                <span class="info-pago-label">Número de pedido:</span>
                                <span class="info-pago-value">{{ $purchaseNumber }}</span>
                            </div>
                            <div class="info-pago-item">
                                <span class="info-pago-label">Concepto:</span>
                                <span class="info-pago-value">Detalle de pago</span>
                            </div>
                            <div class="info-pago-item">
                                <span class="info-pago-label">Fecha:</span>
                                <span class="info-pago-value">{{ date("d/m/Y") }}</span>
                            </div>
                        </div>

                        <hr>

                        <div class="checkbox-label text-center">
                            <input type="checkbox" name="ckbTerms" id="ckbTerms" onclick="visaNetEc3()" style="margin-bottom: 20px;">
                            <label for="ckbTerms">Acepto los <a href="#" target="_blank">Términos y condiciones</a></label>

                            <form id="frmVisaNet" method="post" action="/finalizar?amount={{ $producto->price }}&purchaseNumber={{ $purchaseNumber }}&plan={{ $producto->id }}">
                                <input type="hidden" name="token" value="{{ $session }}">
                                <script src="{{ \App\Helpers\VisaHelper::VISA_URL_JS }}"
                                        data-sessiontoken="{{ $session }}"
                                        data-channel="web"
                                        data-merchantid="{{ \App\Helpers\VisaHelper::VISA_MERCHANT_ID }}"
                                        data-merchantlogo="https://imagenes.utp-sistemas.com/autonoma/logo.jpg"
                                        data-purchasenumber="{{ $purchaseNumber }}"
                                        data-amount="{{ $producto->price }}"
                                        data-expirationminutes="5"
                                        data-timeouturl="/"
                                ></script>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="/assets/js/visa.js"></script>
@endsection
