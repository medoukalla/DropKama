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
                                        La selectividad en España, también conocida como
                                        Evaluación de Bachillerato para el Acceso a la
                                        Universidad (EBAU o EvAU), es una prueba escrita que se
                                        realiza a los estudiantes que desean acceder a estudios
                                        universitarios en universidades públicas y privadas de
                                        España. Esta prueba evalúa los conocimientos y
                                        capacidades adquiridos durante el Bachillerato o
                                        estudios equivalentes en Marruecos y se estructura en
                                        dos fases: la fase obligatoria (inglés, matemáticas…) y
                                        la fase voluntaria (biología, química…). La selectividad
                                        se lleva a cabo en diferentes fechas, generalmente en
                                        junio, y la nota obtenida en esta prueba es determinante
                                        para el acceso a la universidad y la elección de
                                        carrera. La nota de selectividad no caduca (la parte
                                        voluntaria caduca a los 2 años, mientras que la
                                        obligatoria no caduca), por lo que en caso de necesitar
                                        mejorarla, los estudiantes pueden volver a presentarse
                                        en nuevas convocatorias de la prueba.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-paragraph">
                                    <div class="p-number">
                                        <ul>
                                            <li>
                                                ¿Cuáles son los requisitos para que los estudiantes
                                                marroquíes puedan postular a las universidades
                                                españolas?
                                            </li>
                                            <p>
                                                Los estudiantes marroquíes deben obtener una
                                                calificación mínima para poder postular a las
                                                universidades españolas. Esta calificación mínima
                                                varía según la universidad y el programa de estudios
                                                elegido. Los estudiantes también deben haber
                                                completado con éxito su último año de estudios
                                                secundarios.
                                            </p>
                                            <li>
                                                ¿Cuál es la importancia de la Selectividad para los
                                                estudiantes marroquíes que desean estudiar en
                                                España?
                                            </li>
                                            <p>
                                                La Selectividad puede ser un desafío para los
                                                estudiantes marroquíes, pero es esencial para poder
                                                postular a una universidad española. Al aprobar este
                                                examen, los estudiantes pueden acceder a una amplia
                                                gama de programas universitarios en áreas como
                                                ciencias, ciencias sociales, artes y humanidades.
                                            </p>
                                            <li>
                                                ¿Qué papel desempeña la Selectividad en el acceso de
                                                los estudiantes marroquíes a diferentes programas
                                                universitarios en España?
                                            </li>
                                            <p>
                                                La Selectividad es un paso crucial para los
                                                estudiantes marroquíes que buscan estudiar en la
                                                universidad en España. Este examen les permite
                                                acceder a una variedad de programas universitarios y
                                                formarse en diversas áreas académicas y
                                                profesionales.
                                            </p>
                                        </ul>
                                    </div>
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
                                <label for="first">¿Cuáles son los requisitos para postular a las
                                    universidades españolas?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Los requisitos incluyen obtener una calificación mínima
                                        y completar con éxito el último año de estudios
                                        secundarios.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">¿Por qué es importante la Selectividad para los
                                    estudiantes marroquíes que desean estudiar en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        La Selectividad es esencial para acceder a universidades
                                        españolas y a una amplia gama de programas
                                        universitarios.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">¿Cuál es el papel de la Selectividad en el acceso a
                                    diferentes programas universitarios en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        La Selectividad es crucial para acceder a programas
                                        universitarios y formarse en diversas áreas académicas y
                                        profesionales.
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
