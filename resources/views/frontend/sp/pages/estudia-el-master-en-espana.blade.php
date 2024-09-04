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
                                        Los estudios de máster en España ofrecen excelentes
                                        oportunidades a los estudiantes marroquíes titulares de
                                        una licenciatura que desean continuar sus estudios en
                                        este país. España es conocida por la calidad de su
                                        sistema educativo, sus universidades de renombre y su
                                        ambiente multicultural. Para tener éxito en la
                                        realización de un máster en España, es importante seguir
                                        tres etapas clave: la admisión, la preparación de la
                                        documentación y la obtención del visado, así como la
                                        llegada a España.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-paragraph">
                                    <div class="p-number">
                                        <ul>
                                            <li>
                                                ¿Cuáles son los pasos a seguir para solicitar la
                                                admisión en las universidades españolas con el fin
                                                de estudiar un máster?
                                            </li>
                                            <p>
                                                <span>El primer paso consiste en solicitar la
                                                    admisión</span>
                                                en las universidades españolas. Los candidatos deben
                                                buscar los programas de máster que se ajusten a sus
                                                intereses y habilidades, y luego presentar su
                                                solicitud siguiendo los procedimientos de
                                                <span>admisión específicos de cada universidad</span>. Es importante
                                                <span>informarse sobre</span> los
                                                requisitos lingüísticos,
                                                <span>los plazos de solicitud y los documentos
                                                    necesarios.</span>
                                            </p>
                                            <li>
                                                ¿Cuáles son los documentos necesarios que se deben
                                                preparar para estudiar en España después de recibir
                                                una confirmación de admisión en un programa de
                                                máster?
                                            </li>
                                            <p>
                                                <span>Una vez confirmada la admisión</span>, el
                                                segundo paso consiste en preparar el expediente
                                                necesario para estudiar en España. Esto implica
                                                recopilar documentos como expedientes académicos,
                                                títulos, certificados de idioma,
                                                <span>cartas de recomendación y posibles pruebas de
                                                    financiamiento</span>. Es esencial asegurarse de que todos
                                                <span>los documentos</span> estén autenticados y
                                                <span>traducidos al idioma requerido</span>.
                                            </p>
                                            <li>
                                                ¿Cuáles son los trámites a seguir para obtener una
                                                visa de estudiante en España como estudiante
                                                marroquí después de recibir una confirmación de
                                                admisión en un programa de máster?
                                            </li>
                                            <p>
                                                <span>El tercer paso importante es obtener la visa de
                                                    estudiante para España</span>. Los estudiantes marroquíes deben
                                                programar una
                                                cita en el consulado español de su país y presentar
                                                su expediente completo, incluyendo la aceptación de
                                                la universidad,
                                                <span>pruebas financieras y seguro médico</span>. Se
                                                recomienda comenzar
                                                <span>los trámites de visa tan pronto</span> como se
                                                confirme la admisión,
                                                <span>ya que esto puede llevar tiempo</span>.
                                            </p>
                                            <li>
                                                ¿Cuáles son las recomendaciones clave que los
                                                estudiantes marroquíes deben seguir para aumentar
                                                sus posibilidades de éxito en su proyecto de
                                                estudiar un máster en España?
                                            </li>
                                            <p>
                                                <span>Al seguir estos tres pasos esenciales</span>,
                                                los estudiantes marroquíes pueden aumentar
                                                <span>sus posibilidades de éxito</span> al estudiar
                                                un máster en España. Es importante mantenerse
                                                organizado, cumplir con los plazos y buscar
                                                información con
                                                <span>las autoridades competentes</span> para
                                                facilitar el proceso de admisión,
                                                <span>obtención del visado y llegada a España</span>.
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
                                <label for="first">Qué tipos de programas de máster están disponibles para
                                    los estudiantes marroquíes en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Hay una amplia variedad de
                                        programas de máster disponibles, que van desde ciencias
                                        hasta humanidades y negocios.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">¿Cuáles son los requisitos principales para la admisión
                                    en programas de máster en universidades españolas para
                                    estudiantes marroquíes?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Los requisitos comunes incluyen
                                        tener una licenciatura o su equivalente, presentar
                                        resultados de exámenes de competencia en español como el
                                        DELE, y cumplir con los requisitos específicos del
                                        programa.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">¿Cuáles son algunos beneficios de estudiar un máster en
                                    España para estudiantes marroquíes?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Los beneficios incluyen una
                                        educación de alta calidad, la oportunidad de aprender un
                                        nuevo idioma y cultura, y mejores perspectivas
                                        profesionales a nivel nacional e internacional.
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
