@extends('layouts.app')
@section('content')

    <!-- Main Section -->
    <section class="main-slider">

        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background-image: url(/assets/images/main-slider/s1.png)">
                <div class="pattern-layer" style="background-image: url(/assets/images/main-slider/pattern-layer.png)">
                </div>
                <div class="auto-container">
                    <!-- Content Boxed -->
                    <div class="content-boxed">
                        <div class="inner-box">
                            <div class="title">SOLUCIONES AL INSTANTE</div>
                            <h1>TU ELECCIÓN ES SIMPLE</h1>
                            <div class="btns-box">
                                <a href="{{ route('nosotros') }}" class="theme-btn btn-style-two"><span class="txt">Leer
                                        más <i class="lnr lnr-arrow-right"></i></span></a>
                                <a href="{{ route('contacto') }}" class="theme-btn btn-style-three"><span
                                        class="txt">Contactanos<i class="lnr lnr-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image: url(/assets/images/main-slider/s2.png)">
                <div class="pattern-layer" style="background-image: url(/assets/images/main-slider/pattern-layer.png)">
                </div>
                    <!-- Content Boxed -->
                    <div class="content-boxed">
                        <div class="inner-box">
                            <div class="title">Contamos con más de</div>
                            <h1>10 años de experiencia</h1>
                            <div class="btns-box">
                                <a href="{{ route('nosotros') }}" class="theme-btn btn-style-two"><span class="txt">Leer
                                        más <i class="lnr lnr-arrow-right"></i></span></a>
                                <a href="{{ route('contacto') }}" class="theme-btn btn-style-three"><span
                                        class="txt">Contactanos <i class="lnr lnr-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Section -->

    <!-- Appointment Section -->
    <section class="appointment-section" style="background-image: url(/assets/images/background/pattern-1.png)">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>NUESTROS SERVICIOS</h3>
                    </div>
                </div>
        </div>
    </section>
    <!-- End Appointment Section -->

    <!-- Services Section -->
    <section class="services-section" style="background-image: url(/assets/images/background/pattern-2.png)">
        <div class="auto-container">

            <!-- Upper Section -->
            <div class="upper-section">
                <div class="row clearfix">
                    <!-- Service block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <span class="border-one"></span>
                            <span class="border-two"></span>
                            <h4><a href="">Consultoria Tecnologica</a></h4>
                            <div class="text">Brindamos el asesoramiento a empresas y organizaciones sobre como utilizar las tecnologias
                                de la informacion y la comunicacion para alcanzar sus objetivos comerciales.</div>
                            <div class="icon"><img src="/assets/images/icons/Vigilancia_Privada.png" alt="" />
                            </div>
                            <!-- a class="services" href="{{ route('servicios') }}"> MOSTRAR MÁS <span
                                    class="arrow lnr lnr-arrow-right"></span></a -->
                        </div>
                    </div>

                    <!-- Service block -->
                    <div class="service-block active col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <span class="border-one"></span>
                            <span class="border-two"></span>
                            <h4><a href="">Auditorias de Seguridad</a></h4>
                            <div class="text">Brindamos este servicio para proteger su infraestructura digital y asegurar la confidencialidad,
                                integridad y disponibilidad de su informacion de su empresa.</div>
                            <div class="icon"><img src="/assets/images/icons/Resguardo.png" alt="" />
                            </div>
                            <!-- a class="services" href="{{ route('servicios') }}"> MOSTRAR MÁS<span
                                    class="arrow lnr lnr-arrow-right"></span></a -->
                        </div>
                    </div>

                    <!-- Service block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <span class="border-one"></span>
                            <span class="border-two"></span>
                            <h4><a href="">Migracion a la Nube</a></h4>
                            <div class="text">Brindamos un servicio completo de migracion a la nube diseñado para ayudar a su organizacion a 
                                aprovechar al maximo las ventajas de las soluciones tecnologicas.
                            </div>
                            <div class="icon"><img src="/assets/images/icons/Seguridad_Electronica.png"
                                    alt="" />
                            </div>
                            <!-- a class="services" href="{{ route('servicios') }}"> MOSTRAR MÁS <span
                                    class="arrow lnr lnr-arrow-right"></span></a -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Upper Section -->

            <!-- Lower Section -->
            <div class="lower-section">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column titlt" data-tilt data-tilt-max="3">
                            <div class="color-layer"></div>
                            <div class="border-layer"></div>
                            <div class="image">
                                <img src="/assets/images/resource/gurkas_1.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title">QUIENES SOMOS</div>
                                <h2>Somos InnovaTech Services, una compañia dedicada a proporcionar soluciones tecnologicas
                                    para ayudar a tu empresa a alcazar sus objetivos.</h2>
                            </div>
                            <a href="{{ route('nosotros') }}" class="theme-btn btn-style-four"><span class="txt">Leer
                                    Más
                                    <i class="lnr lnr-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Lower Section -->
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Services Section Two -->
    <section class="services-section-two" style="background-image: url(/assets/images/background/gurkas_fondo.jpg)">
        <div class="pattern-layer-one" style="background-image: url(/assets/images/background/pattern-17.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(/assets/images/background/pattern-18.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <div class="separator"></div>
                <h2>Explora Nuestros Servicios</h2>
            </div>

            <div class="four-item-carousel owl-carousel owl-theme">

                <!-- Service Block Two -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="color-layer"></div>
                        <div class="icon-layer-one"
                            style="background-image: url(/assets/images/background/pattern-19.png)"></div>
                        <div class="icon-layer-two"
                            style="background-image: url(/assets/images/background/pattern-20.png)"></div>
                        <div class="icon"><img src="/assets/images/icons/Vigilancia_Privada_2.png" alt="" />
                        </div>
                        <h4><a href="">CONSULTORIA TECNOLOGICA</a></h4>
                        <div class="text">Brindamos servicio el servicio diseñado para ayudar a su organizacion a utilizar las tecnologias 
                            de la informacion y la comunicacion.</div>
                        <!-- a class="learn-more" href="">Leer Más</a -->
                    </div>
                </div>

                <!-- Service Block Two -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="color-layer"></div>
                        <div class="icon-layer-one"
                            style="background-image: url(/assets/images/background/pattern-19.png)"></div>
                        <div class="icon-layer-two"
                            style="background-image: url(/assets/images/background/pattern-20.png)"></div>
                        <div class="icon"><img src="/assets/images/icons/Resguardo_2.png" alt="" /></div>
                        <h4><a href="">MIGRACION A LA NUBE</a></h4>
                        <div class="text">Brindamos el servicio completo de migracion para ayudar a su organizacion
                            a beneficiarse de la eficiencia de las soluciones en la nube.</div>
                        <!-- a class="learn-more" href="">Leer Más</a -->
                    </div>
                </div>

                <!-- Service Block Two -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="color-layer"></div>
                        <div class="icon-layer-one"
                            style="background-image: url(/assets/images/background/pattern-19.png)"></div>
                        <div class="icon-layer-two"
                            style="background-image: url(/assets/images/background/pattern-20.png)"></div>
                        <div class="icon"><img src="/assets/images/icons/prevencion_riesgo_2.png" alt="" />
                        </div>
                        <h4><a href="">AUDITORIAS DE SEGURIDAD</a></h4>
                        <div class="text">Ofrecemos servicios especializados de auditoria de seguridad para proteger
                            sus sistemas y datos contra amenazas ciberneticas.</div>
                        <!-- a class="learn-more" href="">Leer Más</a -->
                    </div>
                </div>

                <!-- Service Block Two -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="color-layer"></div>
                        <div class="icon-layer-one"
                            style="background-image: url(/assets/images/background/pattern-19.png)"></div>
                        <div class="icon-layer-two"
                            style="background-image: url(/assets/images/background/pattern-20.png)"></div>
                        <div class="icon"><img src="/assets/images/icons/asesoria_seguridad_integral_2.png"
                                alt="" /></div>
                        <h4><a href="">SOPORTE TECNICO REMOTO</a></h4>
                        <div class="text">Brindamos el servicio de soporte tecnico remoto para garantizar que sus sistemas
                            operativos y equipos funcionen sin problemas.</div>
                        <!-- a class="learn-more" href="">Leer Más</a -->
                    </div>
                </div>

                <!-- Service Block Two -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="color-layer"></div>
                        <div class="icon-layer-one"
                            style="background-image: url(/assets/images/background/pattern-19.png)"></div>
                        <div class="icon-layer-two"
                            style="background-image: url(/assets/images/background/pattern-20.png)"></div>
                        <div class="icon"><img src="/assets/images/icons/Seguridad_Electronica_2.png" alt="" />
                        </div>
                        <h4><a href="">DESARROLLO DE APLICACIONES</a></h4>
                        <div class="text">Ofrecemos servicios de desarrollo de aplicaciones a medida para satisfacer las necesidades
                            especificas de su negocio.</div>
                        <!-- a class="learn-more" href="">Leer Más</a -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section Two -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="image-layer" style="background-image: url(/assets/images/background/pattern-7.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Nuestro equipo de</div>
                <h2>DESARROLLO</h2>
            </div>
            <!-- End Sec Title -->

            <div class="testimonial-carousel owl-carousel owl-theme">
                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="text">Estudiante de la carrera ingeniería de sistemas, soy proactivo, tengo capacidad 
                                para liderar proyectos, con los estudios 
                                universitarios, me ayudan a mejorar en la carrera.</div>
                        </div>
                        <div class="lower-box">
                            <div class="color-layer"></div>
                            <div class="pattern-layer"
                                style="background-image: url(/assets/images/background/pattern-8.png)"></div>
                            <div class="author-image-outer">
                                <span class="quote-icon fa fa-quote-left"></span>
                                <div class="author-image">
                                    <img src="/assets/images/resource/german.jpeg" alt="" />
                                </div>
                            </div>
                            <div class="author-name">German Alejandro</div>
                            <div class="designation">Maco Melgarejo</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="text">Estudiante de la carrera de Ingenieria de Sistemas con multiples
                                conocimientos en desarrollo web.</div>
                        </div>
                        <div class="lower-box">
                            <div class="color-layer"></div>
                            <div class="pattern-layer"
                                style="background-image: url(/assets/images/background/pattern-8.png)"></div>
                            <div class="author-image-outer">
                                <span class="quote-icon fa fa-quote-left"></span>
                                <div class="author-image">
                                    <img src="/assets/images/resource/betza.jpeg" alt="" />
                                </div>
                            </div>
                            <div class="author-name">Betzabhe</div>
                            <div class="designation">Vega Aliaga</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="text">Estudiante de la carrera de Ingenieria de Sistemas, poseo buena comunicacion, trabajo
								en equipo y responsabilidad.</div>
                        </div>
                        <div class="lower-box">
                            <div class="color-layer"></div>
                            <div class="pattern-layer"
                                style="background-image: url(/assets/images/background/pattern-8.png)"></div>
                            <div class="author-image-outer">
                                <span class="quote-icon fa fa-quote-left"></span>
                                <div class="author-image">
                                    <img src="/assets/images/resource/ciriaco.jpeg" alt="" />
                                </div>
                            </div>
                            <div class="author-name">Angel Alexis</div>
                            <div class="designation">Ciriaco Atahua</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="text">Estudiante de la carrera de Ingenieria de Sistemas, poseo gran sentido de 
                                responsabilidad, trabajo en equipo y comunicacion asertiva.</div>
                        </div>
                        <div class="lower-box">
                            <div class="color-layer"></div>
                            <div class="pattern-layer"
                                style="background-image: url(/assets/images/background/pattern-8.png)"></div>
                            <div class="author-image-outer">
                                <span class="quote-icon fa fa-quote-left"></span>
                                <div class="author-image">
                                    <img src="/assets/images/resource/hans.jpeg" alt="" />
                                </div>
                            </div>
                            <div class="author-name">Hans Maccer</div>
                            <div class="designation">Palacios Salvatierra</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="text">Estudiante de la carrera Ingenieria de Sistemas, poseo buena comunicacion para
                                llevar a cabo un buen ambiente de trabajo y responsabilidad.</div>
                        </div>
                        <div class="lower-box">
                            <div class="color-layer"></div>
                            <div class="pattern-layer"
                                style="background-image: url(/assets/images/background/pattern-8.png)"></div>
                            <div class="author-image-outer">
                                <span class="quote-icon fa fa-quote-left"></span>
                                <div class="author-image">
                                    <img src="/assets/images/resource/juan.jpeg" alt="" />
                                </div>
                            </div>
                            <div class="author-name">Juan Manuel</div>
                            <div class="designation">Ubillus Rivera</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="auto-container">
            <div class="inner-container" style="background-image: url(/assets/images/background/pattern-11.png)">
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
                            <div class="newsletter-form">
                                <a href="{{ route('contacto') }}">
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-five">
                                            <span class="txt">¡Cotiza aquí
                                            </span>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA Section -->
@endsection

