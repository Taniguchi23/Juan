@extends('layouts.app')
@section('content')

<!-- Page Title -->
    <section class="page-title" style="background-image: url(/assets/images/background/CONTACTO.png)">
        <div class="auto-container">
			<h2>Contacto</h2>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Contact Page Section -->
    <section class="contact-page-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<h4>Detalles de Contacto</h4>
						</div>
						<div class="lower-box">
							<ul class="info-list">
								<li>
									<span class="icon flaticon-map"></span>
                                    Calle Guyana N° 183, Comas 15311, <br>Lima - Perú
								</li>
								<li>
									<span class="icon flaticon-call"></span>
									<a>940 750 259</a><br>
									<a>986 653 199</a><br>
									<a>997 448 453</a><br>
								</li>
								<li>
									<span class="icon flaticon-email-1"></span>
									<a href="mailto:comercialtech@gmail.com">comercialtech@gmail.com</a><br>
									<a href="mailto:gerenciatech@gmail.com">gerenciatech@gmail.com</a><br>
								</li>
							</ul>
							<div class="timing">Horas Laborales 08:00 - 18:00</div>						
						</div>
					</div>
				</div>
				
				<!-- Map Column -->
				<div class="map-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<!--Map Outer-->
						<div class="map-outer">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.18338204716!2d-77.06154741346835!3d-11.961801981051902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce2d33d9f569%3A0x907d7f92f94cb0d4!2sInnova%20Tech%20%7C%20Managed%20IT%20Services!5e0!3m2!1ses-419!2sus!4v1716161833929!5m2!1ses-419!2sus" allowfullscreen=""></iframe>
						</div>
					</div>
				</div>				
            </div>
        
			<!-- Contact Form Box -->
			<div class="contact-form-box">
				<!-- Form Title Box -->
				<div class="form-title-box">
					<h3>Asesoría Personalizada</h3>
				</div>
				
				<!-- Contact Form -->
				<div class="contact-form">
					<form method="post" action="#" role="form" id="contact-form">
						<div class="row clearfix">
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="name" id="name" placeholder="Nombres y Apellidos" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="email" name="correo" id="correo" placeholder="Correo" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="servicio" id="servicio" placeholder="servicio" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="empresa" id="empresa" placeholder="Empresa" required>
							</div>
							
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="ruc" id="ruc" placeholder="RUC" required>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea class="darma" name="message" id="message" placeholder="Redacte el mensaje..."></textarea>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
								<button class="theme-btn btn-style-four btnEnviar" type="button" name="submit-form"><span class="txt">Enviar</span></button>
							</div>
						</div>
					</form>
				</div>				
			</div>
			<!-- End Contact Form Box -->			
		</div>
    </section>
    <!-- End Contact Page Section -->

@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('.btnEnviar').click(function() {
            if (validar()) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                });
                let nombre = $('#name').val();
                let correo = $('#correo').val();
                let servicio = $('#servicio').val();
                let empresa = $('#empresa').val();
                let ruc = $('#ruc').val();
                let mensaje = $('#message').val();
                $.post({
                    data: {
                        nombre: nombre,
                        correo: correo,
                        servicio: servicio,
                        empresa: empresa,
                        ruc: ruc,
                        mensaje: mensaje
                    },
                    url: '/enviar-email',
                    type: 'post',
                    beforeSend: function() {
                        $('.btnEnviar').css('opacity', 0.6).prop('disabled', true).html(
                            'Enviando...');
                    },
                    success: function(response) {
                        $('.btnEnviar').css('opacity', 1).prop('disabled', false).html(
                            'Enviar');
                        if (response === 'ok') {
                            toastr.success('Su mensaje ha sido enviado',
                            'Mensaje enviado', {
                                "progressBar": true
                            });
                        } else {
                            toastr.warning('Mensaje no enviado', 'Error', {
                                "progressBar": true
                            })
                        }
                        $('#contact-form').trigger('reset');
                    }
                }).fail(function() {
                    toastr.error('Ocurrio un error en nuestro sistema', 'Error', {
                        "progressBar": true
                    })
                    $('.btnEnviar').css('opacity', 1).prop('disabled', false).html('Enviar');
                });
            } else {
                toastr.warning('No se llenaron campos obligatorios', 'Error', {
                    "progressBar": true
                })
            }
        });
    });

    function validar() {
        let estado = true;
        $('.msjNombre').html('');
        let nombre = $('#name').val();
        let correo = $('#correo').val();
        let servicio = $('#servicio').val();
        let empresa = $('#empresa').val();
        let ruc = $('#ruc').val();
        let mensaje = $('#message').val();
        if (nombre.length < 1) {
            $('.msjNombre').html('Falta rellenar este campo*');
            estado = false;
        }
        if (!estado) {
            return false;
        }
        return true;
    }
</script>
@endsection