<x-sp.head title="{{ setting('site.title') . ' - ' . $page->title }}" />


<div class="wrapper bg-dark">

    <x-sp.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">{{ $page->slug }}
                </a>

            </p>
            <h2 class="text-center">{{ $page->title }}</h2>
        </div>
    </div>
    <!-- Qui sommes end -->
</div>
<!-- wrapper end  -->

<!-- main start  -->
<main>
    <div class="Besoin">
        <div class="container">
            <!-- .row start  -->
            <div class="row">
                <!-- single item start  -->
                <div class="col-lg-7">
                    <div class="itemLeft">

                        <!-- Image wrapper -->
                        <div class="img-wrapper">
                            <div class="main-title">{{ $page->title }}</div>
                            <div class="main-img">
                                <img src="{{ asset('immigration' . '/' . $page->image) }}" alt="{{ $page->title }}" />
                            </div>
                        </div>



                        {{-- STATIC CODE START  --}}
                        <div class="presentation-wrapper mt-4">
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Presentación</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Immiworld ofrece un servicio personalizado de preparación de expedientes de visa
                                        para estudiantes marroquíes que desean estudiar en España. Estamos apasionados
                                        por nuestra misión de ayudar a los estudiantes a realizar su sueño de estudiar
                                        en el extranjero y hacemos todo lo posible para acompañarlo en todo el proceso
                                        de solicitud de visa de estudiante.

                                        Nuestro equipo de expertos tiene un profundo conocimiento de los requisitos y
                                        garantías necesarias para la solicitud de visa de estudiante para España, y
                                        siempre estamos dispuestos a ayudarlo a redactar una carta de motivación que
                                        destaque su perfil y aspiraciones. Estamos aquí para guiarlo paso a paso en la
                                        preparación de su expediente, para que pueda presentar una solicitud sólida y
                                        profesional.

                                        En Immiworld, creemos que cada estudiante merece la oportunidad de realizar sus
                                        sueños, por eso le ofrecemos un servicio personalizado y de calidad superior,
                                        con amor y dedicación. Estamos disponibles para responder sus preguntas y
                                        apoyarlo en cada etapa de su solicitud de visa de estudiante, y hacemos todo lo
                                        posible para que su experiencia con nosotros sea lo más positiva y exitosa
                                        posible.

                                        Confíe en Immiworld para ayudarlo a obtener su visa de estudiante para España, y
                                        únase a miles de estudiantes que han realizado su sueño de estudiar en el
                                        extranjero gracias a nuestra asistencia profesional y personalizada.
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- STATIC CODE END  --}}
                        <hr class="what-is-hr">
                        <!-- C’est quoi start  -->
                        <div class="CestQuoi">
                            <div class="row"><!-- single item start  -->
                                <div class="col-lg-6">
                                    <div class="CestQuoiText">
                                        <h2>Cual es <br>el procedimiento</h2>
                                    </div>
                                    <!-- singel item start  -->
                                    <div class="CestQuoiItem ItemActive">
                                        <h3>2.</h3>
                                        <h4>Asistencia personalizada</h4>
                                        <p>Immiworld ofrece servicios y apoyo personalizados durante todo el proceso de
                                            solicitud de visa.</p>
                                        <p>Nuestro equipo de expertos lo guiará a través del proceso y se asegurará de
                                            que tenga una solicitud sólida.</p>
                                    </div>
                                    <!-- singel item end --> <!-- singel item start  -->
                                    <div class="CestQuoiItem ">
                                        <h3>4.</h3>
                                        <h4>Carta de motivación</h4>
                                        <p>Immiworld puede ayudarlo a escribir una carta de presentación convincente que
                                            destaque sus logros académicos, antecedentes personales y aspiraciones
                                            futuras.</p>
                                        <p>Esta carta ayudará a demostrar a las autoridades españolas que eres un
                                            candidato sólido para un visa de estudiante.</p>
                                    </div>
                                    <!-- singel item end --> <!-- singel item start  -->
                                    <div class="CestQuoiItem ItemActive">
                                        <h3>6.</h3>
                                        <h4>¡Éxito!</h4>
                                        <p>Una vez que tu solicitud sea aprobada, Immiworld te proporcionará toda la
                                            información que necesitas para preparar tu traslado a España y comenzar tus
                                            estudios.</p>
                                        <p>¡Felicidades, has obtenido con éxito tu visa de estudiante española con la
                                            ayuda de Immiworld!</p>
                                    </div>
                                    <!-- singel item end -->
                                </div>
                                <!-- single item end  --> <!-- single item start  -->
                                <div class="col-lg-6"><!-- single item start  -->
                                    <div class="CestQuoiItem">
                                        <h3>1.</h3>
                                        <h4>Consulta inicial</h4>
                                        <p>Póngase en contacto con Immiworld para programar una consulta inicial y
                                            discutir sus objetivos de estudios en el extranjero y los requisitos para
                                            obtener una visa de estudiante en España.</p>
                                    </div>
                                    <!-- single item start  --> <!-- single item start  -->
                                    <div class="CestQuoiItem ItemActive">
                                        <h3>3.</h3>
                                        <h4>Preparación de la documentación</h4>
                                        <p>Immiworld ayuda en la preparación de todos los documentos y papeles
                                            necesarios para su solicitud de visa de estudiante.</p>
                                        <p>Nos aseguraremos de que su solicitud cumpla con todos los requisitos y se
                                            presente correctamente.</p>
                                    </div>
                                    <!-- single item start  --> <!-- single item start  -->
                                    <div class="CestQuoiItem">
                                        <h3>5.</h3>
                                        <h4>Presentación y seguimiento</h4>
                                        <p>Immiworld presentará tu solicitud completa y realizará un seguimiento con las
                                            autoridades españolas durante todo el proceso.</p>
                                        <p>Se asegurarán de que se proporcione cualquier información o documentación
                                            adicional rápidamente y de que tu solicitud se procese lo más rápido
                                            posible.</p>
                                    </div>
                                    <!-- single item start  -->
                                </div>
                                <!-- single item end  -->
                            </div>
                        </div>
                        <!-- C’est quoi end -->

                    </div>
                </div>
                <!-- single item end -->

                <!-- single item start  -->
                <div class="col-lg-5">
                    <div class="itemRight sticky-top">
                        <h2>¿Necesidad de ayuda?</h2>
                        <h4>Contacto</h4>
                        <p><strong>Chat en Línea:</strong> El tiempo de espera promedio es de 3 minutos.</p>
                        <p><strong>Solicitud de llamada:</strong> Disponible solo con cita previa.</p>
                        <p><strong>Redes sociales:</strong> El tiempo de espera promedio es de 15 minutos.</p>

                        <x-links_sp_area />

                    </div>

                </div>
                <!-- single item end -->

            </div>
            <!-- .row end -->
        </div>
    </div>
</main>
<!-- main end -->


<x-sp.footer />
