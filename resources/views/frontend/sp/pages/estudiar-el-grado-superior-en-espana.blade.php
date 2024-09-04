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
                            <!-- Number -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Presentación</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-number">
                                        <p>
                                            Las formaciones profesionales (grado superior) en
                                            España son una opción popular para los estudiantes
                                            magrebíes que buscan continuar sus estudios
                                            superiores. A diferencia de los programas
                                            universitarios tradicionales, las formaciones
                                            profesionales se centran en habilidades prácticas y
                                            preparan a los estudiantes para ingresar al mercado
                                            laboral tan pronto como obtengan su diploma.
                                        </p>
                                        <ul>
                                            <li>
                                                ¿Cuáles son los campos cubiertos por las formaciones
                                                profesionales en España y cuál es su duración?
                                            </li>
                                            <p>
                                                Las formaciones profesionales en España abarcan una
                                                variedad de áreas como administración de empresas,
                                                diseño, tecnología de la información y turismo, y
                                                pueden durar de dos a tres años
                                            </p>
                                            <li>
                                                ¿Cuáles son los requisitos para que los estudiantes
                                                marroquíes puedan estudiar una formación profesional
                                                en España?
                                            </li>
                                            <p>
                                                Los estudiantes marroquíes que deseen estudiar una
                                                formación profesional en España deben haber
                                                completado con éxito su diploma de educación
                                                secundaria y poder demostrar su nivel de competencia
                                                en español.
                                            </p>
                                            <li>
                                                ¿Por qué las formaciones profesionales (grado
                                                superior) en España son una opción popular entre los
                                                estudiantes magrebíes que desean continuar sus
                                                estudios superiores?
                                            </li>
                                            <p>
                                                Las formaciones profesionales suelen ser menos
                                                costosas que los programas universitarios
                                                tradicionales, lo que las hace accesibles a un mayor
                                                número de estudiantes marroquíes. Además, muchas
                                                formaciones profesionales ofrecen prácticas o
                                                proyectos prácticos para que los estudiantes se
                                                familiaricen con el mundo laboral y establezcan
                                                contactos en su campo de estudio.
                                            </p>
                                            <li>
                                                En última instancia, las formaciones profesionales
                                                en España pueden ser una excelente opción para los
                                                estudiantes magrebíes que buscan adquirir
                                                habilidades prácticas y prepararse para una carrera
                                                exitosa. Estos programas ofrecen una formación de
                                                calidad en una amplia gama de áreas y son una
                                                alternativa viable a los estudios universitarios
                                                tradicionales.
                                            </li>
                                        </ul>
                                    </div>
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
                                <label for="first">¿Qué es un grado superior en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Un grado superior es un programa
                                        de formación profesional de dos años que proporciona
                                        habilidades específicas en áreas como la tecnología, la
                                        salud, la administración y la industria.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" name="accordion" id="second" />
                                <label for="second">¿Cuáles son los requisitos típicos para ingresar a un
                                    grado superior en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Los requisitos suelen incluir
                                        tener el título de bachillerato o su equivalente.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" name="accordion" id="third" />
                                <label for="third">¿Cuáles son los beneficios de estudiar un grado superior
                                    en España para estudiantes marroquíes?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Los beneficios incluyen la
                                        adquisición de habilidades prácticas y especializadas,
                                        la mejora de las perspectivas laborales y la posibilidad
                                        de obtener experiencia laboral a través de prácticas
                                        profesionales
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
