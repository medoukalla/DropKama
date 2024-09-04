<x-sp.head title="{{ setting('site.title') . ' - ' . $page->title }}" />


<div class="wrapper bg-dark">

    <x-sp.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Arraigo-social
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
                                        Es una autorización de <span>residencia temporal por circunstancias
                                            excepcionales</span> que se podrá conceder a ciudadanos extranjeros que se
                                        hallen en España durante un periodo mínimo de tres años y cuenten con contrato o
                                        contratos de trabajo y, o bien tengan vínculos familiares en España o estén
                                        integrados socialmente.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Requisitos
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                    <div class="p-list">
                                        <ul>
                                            <li><span>No ser ciudadano de un Estado miembro de la Unión Europa,</span>
                                                del Espacio Económico Europeo o de Suiza, o familiar de ciudadanos de
                                                estos países a los que les sea de aplicación el régimen de ciudadano de
                                                la UE.</li>
                                            <li><span>No ser ciudadano de un Estado de la Unión Europea</span>, del
                                                Espacio Económico Europeo o de Suiza, o familiar de ciudadanos de estos
                                                países a los que les sea de aplicación el régimen de ciudadano de la
                                                Unión.</li>
                                            <li><span>Carecer de antecedentes penales en España y en sus países
                                                    anteriores</span> de residencia durante los últimos cinco años por
                                                delitos existentes en el ordenamiento español.</li>
                                            <li><span>No tener prohibida la entrada en España y no figurar como
                                                    rechazable</span> en el espacio territorial de países con los que
                                                España tenga firmado un convenio en tal sentido.</li>
                                            <li><span>No encontrarse, en su caso, dentro del plazo de compromiso de no
                                                    retorno a España</span> que el extranjero haya asumido al retornar
                                                voluntariamente a su país de origen.</li>
                                            <li><span>Haber permanecido con carácter continuado en España durante un
                                                    periodo mínimo de tres años</span>. Para que este requisito se
                                                cumpla, las ausencias de España durante este período no pueden superar
                                                los 120 días.</li>
                                            <li><span>Tener vínculos familiares con otros extranjeros residentes</span>
                                                (cónyuge o pareja de hecho registrada, ascendientes o descendientes en
                                                primer grado y línea directa) o bien, presentar un informe de arraigo
                                                que acredite su integración social emitido por la Comunidad Autónoma
                                                (<span>o el Ayuntamiento si la Comunidad Autónoma lo ha
                                                    autorizado</span>), en cuyo territorio tenga su domicilio habitual.
                                            </li>
                                        </ul>
                                    </div>
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
                                        Immiworld es su aliado de confianza para todos sus trámites de inmigración en
                                        España. Nuestra firma de abogados especializada en inmigración está dedicada a
                                        ayudar a nuestros clientes a navegar eficazmente a través de los complejos
                                        procesos relacionados con visados, renovación de tarjetas de residencia y
                                        obtención de nacionalidad. Con nuestra experiencia y compromiso con nuestros
                                        clientes, ofrecemos la tranquilidad necesaria para que sus proyectos de
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
                                <label for="first">¿Qué es el arraigo social en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> El arraigo social en España es un mecanismo legal que
                                        permite a personas que residen de manera irregular en el país regularizar su
                                        situación migratoria si pueden demostrar una integración significativa en la
                                        sociedad española.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">¿Qué criterios se consideran para solicitar el arraigo social?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Los criterios pueden incluir la residencia continuada en
                                        España, la participación activa en la comunidad, la existencia de vínculos
                                        familiares o laborales, entre otros aspectos que demuestren una integración
                                        efectiva en la sociedad.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">¿Cuál es el objetivo del arraigo social en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> El objetivo principal es promover la inclusión social y
                                        la cohesión, reconociendo el aporte positivo que personas en situación irregular
                                        pueden hacer a la sociedad española mediante su integración y participación
                                        activa en la comunidad.
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
