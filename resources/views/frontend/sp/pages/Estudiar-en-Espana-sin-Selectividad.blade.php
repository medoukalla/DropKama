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

                        <!-- Presentation paragraph -->
                        <div class="presentation-wrapper mt-4">
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Presentación</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        En España, hay varias opciones para estudiar sin
                                        necesidad de aprobar la Selectividad. Una de ellas es la
                                        fase de estudiantes extranjeros de Andalucía, que se
                                        realiza anualmente del 6 al 24 de marzo y requiere tener
                                        el bachillerato de los últimos dos años, así como la
                                        homologación del bachillerato marroquí al español. Otra
                                        alternativa es cursar un máster con un nivel B1 o B2 de
                                        español, o bien venir a España para estudiar el idioma
                                        antes de aplicar. Finalmente, se puede optar por seguir
                                        una formación profesional de dos años denominada "grado
                                        superior", donde solo se necesita la homologación del
                                        bachillerato.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Exigencias:</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Para acceder a la fase de estudiantes extranjeros de
                                        Andalucía, es necesario tener el bachillerato obtenido
                                        en los últimos dos años y contar con la homologación del
                                        bachillerato marroquí al español. En cuanto a estudiar
                                        un máster en España, se requiere tener un nivel B1 o B2
                                        de español, o bien realizar estudios de idioma en el
                                        país antes de aplicar al máster. Por último, para seguir
                                        un grado superior en España, únicamente se necesita la
                                        homologación del bachillerato marroquí al español. Es
                                        crucial verificar y cumplir con los requisitos
                                        específicos de cada opción antes de iniciar el proceso
                                        de solicitud.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Procedimiento:</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        El proceso para estudiar en España varía según la opción
                                        elegida. Para participar en la fase de estudiantes
                                        extranjeros de Andalucía, se debe presentar la solicitud
                                        dentro del período establecido, adjuntando la
                                        documentación requerida y verificando la homologación
                                        del bachillerato marroquí al español. En el caso de
                                        estudiar un máster, se puede aplicar directamente a las
                                        universidades españolas una vez se cumplan los
                                        requisitos de idioma, ya sea con un nivel B1 o B2 de
                                        español o tras completar estudios de idioma en España.
                                        Para los programas de formación profesional de grado
                                        superior, se debe solicitar la homologación del
                                        bachillerato marroquí al español y, una vez obtenida,
                                        buscar y aplicar a los programas de grado superior según
                                        los procedimientos establecidos por las instituciones
                                        educativas. Es crucial seguir las indicaciones
                                        proporcionadas por las autoridades correspondientes y
                                        cumplir con los plazos establecidos para cada proceso de
                                        solicitud.
                                    </p>
                                </div>
                            </div>

                            <!-- Outro -->
                            <div class="outro">
                                <div class="p-title mb-2">
                                    <h3>¿Por qué elegir immiworld?</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Immiworld es su aliado de confianza para todos sus
                                        trámites de inmigración en España. Nuestra firma de
                                        abogados especializada en inmigración está dedicada a
                                        ayudar a nuestros clientes a navegar eficazmente a
                                        través de los complejos procesos relacionados con
                                        visados, renovación de tarjetas de residencia y
                                        obtención de nacionalidad. Con nuestra experiencia y
                                        compromiso con nuestros clientes, ofrecemos la
                                        tranquilidad necesaria para que sus proyectos de
                                        inmigración se lleven a cabo sin complicaciones.
                                    </p>
                                </div>
                            </div>
                            <!-- Experience -->
                            <div class="experience-list">
                                <!-- Experient first list -->
                                <div class="exp-list">
                                    <img src="{{ asset('img/exp-icon-time.svg') }}" alt="24 hours for file process" />
                                    <div class="exp-text">
                                        Expediente procesado en menos de <span>24 horas</span>.
                                    </div>
                                </div>
                                <!-- Experient second list -->
                                <div class="exp-list">
                                    <img src="{{ asset('img/exp-icon-years.svg') }}" alt="24 hours for file process" />
                                    <div class="exp-text">
                                        Más de <span>5 años</span> de experiencia en derecho de Extranjería.
                                    </div>
                                </div>
                                <!-- Experient third list -->
                                <div class="exp-list">
                                    <img src="{{ asset('img/exp-icon-cas.svg') }}" alt="24 hours for file process" />
                                    <div class="exp-text">
                                        Más de <span>200 casos</span> complejos resueltos con éxito gracias a Immiworld.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion list MOST FAMOUS QUESTIONS -->
                        <ul class="accordion mt-4">
                            <!-- First Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="first" checked />
                                <label for="first">¿Cuáles son las opciones para estudiar en España sin
                                    pasar por la Selectividad?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Las opciones incluyen participar
                                        en la fase de estudiantes extranjeros de Andalucía,
                                        cursar un máster en España o seguir un programa de
                                        formación profesional de grado superior.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">¿Cuáles son los requisitos para acceder a la fase de
                                    estudiantes extranjeros de Andalucía?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Los requisitos son tener el
                                        bachillerato obtenido en los últimos dos años y contar
                                        con la homologación del bachillerato marroquí al
                                        español.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">¿Qué nivel de español se requiere para estudiar un máster
                                    en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Se necesita tener un nivel B1 o
                                        B2 de español, o bien realizar estudios de idioma en
                                        España antes de aplicar, dependiendo de los requisitos
                                        de admisión de cada universidad.
                                    </p>
                                </div>
                            </li>
                        </ul>

                        {{-- STATIC CODE END  --}}

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
