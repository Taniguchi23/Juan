@extends('layouts.app')
@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image: url(/assets/images/background/SOBRE-NOSOTROS.png)">
        <div class="auto-container">
			<h2>NOSOTROS</h2>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Network Section / Style Two -->
	<section class="network-section style-two" style="background-image: url(/assets/images/background/2.jpg)">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Image Column -->
					<div class="images-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="/assets/images/resource/n1.jpg" alt="" />
							</div>
							<div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="/assets/images/resource/n2.jpg" alt="" />
							</div>
							<div class="image-three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="/assets/images/resource/n3.jpg" alt="" />
							</div>
						</div>
					</div>
					
					<!-- Content Column -->
					<div class="content-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="separator"></div>
								<h4>SOMOS INNOVATECH SERVICES.</h4>
								<div class="text">Dedicados a proporcionar soluciones tecnologicas innovadoras para ayudar a tu empresa.</div>
							</div>
							<!-- Network List -->
							<ul class="network-list">
								<li>
									<span class="icon flaticon-tick-1"></span>
									<strong>COLABORADORES CONTENTOS Y CERTIFICADOS</strong>
								</li>
								<li>
									<span class="icon flaticon-tick-1"></span>
									<strong>TRATO PERSONALIZADO Y EXPERIENCIA DE CLIENTE</strong>
								</li>
								<li>
									<span class="icon flaticon-tick-1"></span>
									<strong>SOLUCIONES DE INNOVACIÓN</strong>
								</li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Network Section / Style Two -->
	
	<!-- Appointment Section -->
	<section class="appointment-section" style="background-image: url(/assets/images/background/pattern-1.png)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3>Realiza una Cotización</h3>
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="appointment-form">
							<form method="get" action="{{ route('contacto') }}">
								<div class="form-group">
									<button type="submit" class="theme-btn btn-style-five"><span
											class="txt">¡Cotiza aquí!</span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Appointment Section -->
	
	<!-- Services Section Three -->
	<section class="services-section-three" style="background-image: url(/assets/images/background/pattern-6.png)">
		<div class="auto-container">
			<div class="sec-title clearfix">
				<div class="pull-left">
					<div class="separator"></div>
					<h2>Nuestros pilares</h2>
				</div>
				<div class="pull-right">
					<a href="{{ route('servicios') }}" class="theme-btn btn-style-four"><span class="txt">Ver servicios <i class="lnr lnr-arrow-right"></i></span></a>
				</div>
			</div>
			<div class="row clearfix">
				
				<!-- Facility Block -->
				<div class="facility-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="pattern-layer"
                            style="background-image: url(/assets/images/background/pattern-14.png)">
                        </div>
                        <div class="icon-box"><img src="/assets/images/icons/Confianza.png" alt="" /></div>
                        <h5><a href="#">Confianza</a></h5>
                        <div class="text">Generar confianza en nuestros clientes a través de un servicio con los mayores estándares de calidad.</div>
                    </div>
				</div>
				
				<!-- Facility Block -->
				<div class="facility-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="pattern-layer"
                            style="background-image: url(/assets/images/background/pattern-14.png)">
                        </div>
                        <div class="icon-box"><img src="/assets/images/icons/Compromiso.png" alt="" /></div>
                        <h5><a href="#">Compromiso</a></h5>
                        <div class="text">Comprometernos en la creación permanente de soluciones de máxima 
                            calidad para las necesidades de nuestros clientes.</div>
                    </div>
				</div>
				
				<!-- Facility Block -->
				<div class="facility-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="pattern-layer"
                            style="background-image: url(/assets/images/background/pattern-14.png)">
                        </div>
                        <div class="icon-box"><img src="/assets/images/icons/Largo_Plazo.png" alt="" /></div>
                        <h5><a href="#">Proyección a Largo Plazo</a></h5>
                        <div class="text">Definimos nuestros<br> compromisos y planes de trabajo con visión de<br> largo plazo.</div>
                    </div>
				</div>
				
				<!-- Facility Block -->
				<div class="facility-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="pattern-layer"
                            style="background-image: url(/assets/images/background/pattern-14.png)">
                        </div>
                        <div class="icon-box"><img src="/assets/images/icons/Eficiencia.png" alt="" /></div>
                        <h5><a href="#">Eficiencia</a></h5>
                        <div class="text">Nuestro trabajo se concentra en realizar eficientemente cada tarea que nos 
                            recomiendan y lograr la plena satisfacción de nuestros clientes.</div>
                    </div>
				</div>

			</div>
			
		</div>
	</section>
	<!-- End Services Section Three -->
    <!-- Team Section -->
	<section class="team-section" style="background-image: url(/assets/images/background/pattern-25.png)">
		<div class="auto-container">
		
			<!-- Sec Title -->
			<div class="sec-title centered light">
				<div class="separator"></div>
				<h2>MISION, VISION Y </h2>
				<h2>VALORES</h2>
			</div>
			<!-- End Sec Title -->
			
			<div class="three-item-carousel owl-carousel owl-theme">				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="/assets/images/gurkas/servicios_gurkas/mision.png" alt="" />
							<div class="overlay-box">
								<h6>MISION</h6>
							</div>
							<div class="overlay-box-two">
								<h6>MISION</h6>
								<div class="text">Nuestra misión es proporcionar soluciones tecnológicas innovadoras y personalizadas 
									que permitan a las empresas optimizar sus operaciones, mejorar su eficiencia y alcanzar sus objetivos 
									de manera más efectiva. Nos comprometemos a ofrecer un servicio de alta calidad, adaptado a las necesidades 
									específicas de cada cliente, y a mantenernos a la vanguardia de las tecnologías emergentes.</div>
								<!-- Social Box -->
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="/assets/images/gurkas/servicios_gurkas/vision.png" alt="" />
							<div class="overlay-box">
								<h6>VISION</h6>								
							</div>
							<div class="overlay-box-two">
								<h6>VISION</h6>
								<div class="text">Nuestra visión es ser un líder reconocido en la industria de servicios tecnológicos, conocido 
									por nuestra excelencia, innovación y compromiso con el éxito de nuestros clientes. Aspiramos a crear un impacto 
									positivo en la forma en que las empresas operan y se desarrollan, contribuyendo al crecimiento y la transformación 
									digital del sector empresarial.</div>
								<!-- Social Box -->
							</div>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="/assets/images/gurkas/servicios_gurkas/valores.png" alt="" />
							<div class="overlay-box">
								<h6>VALORES</h6>								
							</div>
							<div class="overlay-box-two">
								<h6>VALORES</h6>
								<div class="text">Nuestro principal valor es la RESPONSABILIDAD  ya que cumplimos nuestros compromisos y asuminos la responsabilidad
									de las acciones, tambien, la INNOVACION ya que fomentamos la creatividad y buscamos constantemente nuevas formas de mejorar.
								</div>
								<!-- Social Box -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Section -->

@endsection

