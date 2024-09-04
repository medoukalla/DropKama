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
                                        Para los estudiantes marroquíes, estudiar una
                                        licenciatura en España ofrece una oportunidad única de
                                        adquirir una educación superior de calidad en un entorno
                                        internacionalmente reconocido. Con una amplia gama de
                                        programas académicos y universidades prestigiosas,
                                        España es un destino atractivo para aquellos que buscan
                                        ampliar sus horizontes académicos y culturales. Las
                                        universidades españolas ofrecen programas de
                                        licenciatura en diversas áreas de estudio, desde
                                        humanidades y ciencias sociales hasta ingeniería y
                                        ciencias naturales, brindando a los estudiantes
                                        marroquíes la oportunidad de especializarse en su campo
                                        de interés. Además de la excelencia académica, España
                                        ofrece un rico patrimonio cultural, un clima agradable y
                                        una alta calidad de vida, lo que convierte a este país
                                        en un destino ideal para los estudiantes marroquíes que
                                        desean enriquecer su experiencia universitaria y
                                        prepararse para una carrera exitosa en un entorno
                                        globalizado.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        ¿Qué condiciones deben cumplir los estudiantes
                                        marroquíes para acceder a un grado en España?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        <span>Para acceder a un grado en España</span>, los
                                        estudiantes marroquíes deben cumplir ciertas
                                        condiciones.
                                        <span>En primer lugar, deben ser titulares del
                                            bachillerato</span>. Luego, para algunas universidades y programas, los
                                        estudiantes
                                        <span>pueden necesitar aprobar la Selectividad</span>,
                                        un examen nacional que evalúa los conocimientos
                                        adquiridos
                                        <span>al final de la educación</span> secundaria y que
                                        es necesario para acceder a los estudios universitarios.
                                        Sin embargo,
                                        <span>algunas universidades españolas ofrecen la
                                            posibilidad de inscribirse directamente</span>
                                        sin pasar por la Selectividad, a través de
                                        <span>la Fase Extrajeros en Andalucía</span> o mediante
                                        <span>la homologación del bachillerato marroquí.</span>
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        ¿Cuáles son las ventajas de estudiar un grado en España
                                        para los estudiantes marroquíes?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        <span>Una vez cumplidas estas condiciones</span>, los
                                        estudiantes marroquíes pueden acceder a una amplia
                                        variedad de programas
                                        <span>de grado en las universidades españolas</span>,
                                        con la posibilidad de elegir entre disciplinas como
                                        <span>ciencias, tecnología, humanidades, idiomas y mucho
                                            más</span>. Las ventajas de estudiar
                                        <span>un grado en España</span> son numerosas,
                                        incluyendo <span>la calidad de la enseñanza</span>, las
                                        modernas infraestructuras y los sólidos programas de
                                        formación que
                                        <span>garantizan una educación completa</span> y una
                                        preparación adecuada
                                        <span>para el mercado laboral</span>. Además, los
                                        estudiantes tienen la oportunidad de descubrir una nueva
                                        cultura, aprender
                                        <span>un nuevo idioma y conocer personas</span> de todo
                                        el mundo, lo que enriquece su experiencia personal y les
                                        abre <span>oportunidades internacionales</span>.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
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
                                        través de los complejos procesos relacionados con visas,
                                        renovación de tarjetas de residencia y obtención de
                                        nacionalidad. Con nuestra experiencia y compromiso con
                                        nuestros clientes, ofrecemos la tranquilidad necesaria
                                        para que sus proyectos de inmigración se lleven a cabo
                                        sin complicaciones.
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
                                <label for="first">Qué tipos de programas de licenciatura están disponibles
                                    para los estudiantes marroquíes en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Respuesta: Hay una amplia gama de programas disponibles,
                                        incluyendo ingeniería, ciencias, humanidades y negocios.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">¿Cuáles son los principales requisitos para la admisión
                                    en universidades españolas para estudiantes marroquíes?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Respuesta: Los requisitos incluyen la presentación del
                                        diploma de bachillerato marroquí o su equivalente, la
                                        homologación de estudios secundarios, y la prueba de
                                        competencia en español.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">¿Cuáles son algunos beneficios de estudiar una
                                    licenciatura en España para estudiantes marroquíes?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Respuesta: Los beneficios incluyen una educación de alta
                                        calidad en un entorno internacional, la oportunidad de
                                        aprender un nuevo idioma y cultura, y mejores
                                        perspectivas laborales a nivel nacional e internacional.
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
