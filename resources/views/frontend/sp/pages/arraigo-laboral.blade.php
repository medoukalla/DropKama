<x-sp.head title="{{ setting('site.title') . ' - ' . $page->title }}" />


<div class="wrapper bg-dark">

    <x-sp.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Arraigo-laboral
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
                                        Arraigo laboral es una autorización de
                                        <span>residencia temporal por circunstancias
                                            excepcionales</span>
                                        que se podrá conceder a ciudadanos extranjeros que se
                                        hallen irregularmente en España y hayan tenido
                                        relaciones laborales durante un mínimo de seis meses
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Requisitos :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-list">
                                        <ul>
                                            <li>
                                                <span>No ser ciudadano de un Estado de la Unión
                                                    Europea</span>, del Espacio Económico Europeo o de Suiza, o
                                                familiar de ciudadanos de estos países a los que les
                                                sea de aplicación el régimen de ciudadano de la
                                                Unión.
                                            </li>
                                            <li>
                                                <span>Carecer de antecedentes penales en España</span>
                                                y en sus países anteriores de residencia, durante
                                                los últimos cinco años, por delitos existentes en el
                                                ordenamiento español.
                                            </li>
                                            <li>
                                                <span>No tener prohibida la entrada en España</span>
                                                y no figurar como rechazable en el espacio
                                                territorial de países con los que España tenga
                                                firmado un convenio en tal sentido.
                                            </li>
                                            <li>
                                                <span>No encontrarse</span>, en su caso, dentro del
                                                plazo de
                                                <span>compromiso de no retorno a España</span> que
                                                el extranjero haya asumido al retornar
                                                voluntariamente a su país de origen.
                                            </li>
                                            <li>
                                                <span>Haber permanecido con carácter continuado en
                                                    España durante un periodo mínimo de dos años</span>. Se entiende
                                                permanencia continuada si las
                                                ausencias no han superado los 90 días en los dos
                                                últimos años.
                                            </li>
                                            <li>
                                                Poder
                                                <span>demostrar la existencia de relaciones
                                                    laborales</span>
                                                cuya duración no sea inferior a seis meses.
                                            </li>
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
                                <label for="first">¿Cuál es el requisito principal para solicitar el arraigo
                                    laboral en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> El requisito principal es haber
                                        cotizado un mínimo de 6 meses a la seguridad social
                                        española mediante un contrato de trabajo formal y
                                        continuado.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">¿Qué documentos se necesitan para demostrar el arraigo
                                    laboral en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Se pueden requerir documentos
                                        como el contrato de trabajo, nóminas, certificados de
                                        cotización a la seguridad social y cualquier otro
                                        documento que demuestre la relación laboral y la
                                        cotización mínima exigida.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">¿Cuál es la finalidad del arraigo laboral en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> La finalidad es regularizar la
                                        situación migratoria de trabajadores extranjeros que ya
                                        están contribuyendo al mercado laboral español,
                                        garantizando la protección de sus derechos laborales y
                                        promoviendo la integración social y económica en el
                                        país.
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
