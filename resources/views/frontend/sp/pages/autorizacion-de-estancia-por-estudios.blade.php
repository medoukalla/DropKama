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
                                        El <span>visado de estudiante</span> es la autorización
                                        de residencia que permite a los ciudadanos
                                        extracomunitarios permanecer en España mientras cursan
                                        estudios en centros educativos públicos o privados,
                                        realizan investigaciones en el país o participan en
                                        algún tipo de formación. De manera más precisa, todos
                                        aquellos que deseen inscribirse en cualquier curso de
                                        formación profesional, máster, posgrado, doctorado o
                                        licenciatura en España deben solicitar un visado por
                                        estudios.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        ¿Realmente necesitas un visado de estudios para estudiar
                                        en España?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Depende. Si no eres un ciudadano de la UE, la respuesta
                                        es simple: sí. Si vas a estudiar o realizar tareas de
                                        investigación en el país deberás
                                        <span>solicitar la autorización de residencia para estudiar
                                            en el país</span>. Sin embargo,
                                        <span>no puedes obtener un visado de estudiante si eres de
                                            la Unión Europea</span>. Básicamente ya que no necesitas uno. Según el
                                        artículo <span>44 del Real Decreto 557/2011</span>, todos los estudiantes
                                        procedentes de la UE, el EEE o
                                        Suiza pueden
                                        <span>
                                            permanecer en España mientras estudian sin visado </span>. Esto también se
                                        aplica a los familiares que traen
                                        consigo tras una solicitud conjunta.
                                        <!-- <div class="p-list">
                                            <div class="p-min-title">
                                            Requisitos :
                                            </div>
                                            <p>
                                            Antes de empezar con el procedimiento de solicitud propiamente dicho, será crucial comprender todos los requisitos que cualquier extranjero debe cumplir para obtener el visado de estudios. De lo contrario, la obtención de este permiso no será posible:
                                            </p>
                                            <ul>
                                            <li>Como ya hemos visto, no puedes ser ciudadano de la Unión Europea.</li>
                                            <li>Debes encontrarte en estado legal en España y no tener la entrada prohibida al país.</li>
                                            <li>Poseer fondos económicos suficientes para mantenerte en España durante 1 o 2 años (dependiendo de la duración de la estancia) será necesario. Eso se valorará con un 100% mensual del IPREM, que equivale a unos 600€ al mes.</li>
                                            <li>Tener un seguro médico privado con cobertura total en España.</li>
                                            <li>Deberás ser admitido en el curso/universidad en el que planea estudiar. Esto significa que antes de empezar la solicitud deberás haber recibido la <span>carta de aceptación emitida por el centro educativo</span></li>
                                            <li>Tener antecedentes penales libres de cargos.</li>
                                            <li><span>homologación o convalidación de tu título universitario</span></li>
                                            </ul>
                                        </div> -->

                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Requisitos :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                    <div class="p-list">
                                        <p>
                                            Antes de empezar con el procedimiento de solicitud propiamente dicho, será
                                            crucial comprender todos los <span>requisitos que cualquier extranjero debe
                                                cumplir para obtener el visado de estudios</span>. De lo contrario, la
                                            obtención de este permiso no será posible:
                                        </p>
                                        <ul>
                                            <li>Como ya hemos visto, no puedes ser ciudadano de la Unión Europea.</li>
                                            <li>Debes encontrarte en estado legal en España y no tener la entrada
                                                prohibida al país.</li>
                                            <li>Poseer fondos económicos suficientes para mantenerte en España durante 1
                                                o 2 años (dependiendo de la duración de la estancia) será necesario. Eso
                                                se valorará con un 100% mensual del IPREM, que equivale a unos 600€ al
                                                mes.</li>
                                            <li>Tener un seguro médico privado con cobertura total en España.</li>
                                            <li>Deberás ser admitido en el curso/universidad en el que planea estudiar.
                                                Esto significa que antes de empezar la solicitud deberás haber recibido
                                                la <span>carta de aceptación emitida por el centro educativo</span></li>
                                            <li>Tener antecedentes penales libres de cargos.</li>
                                            <li><span>homologación o convalidación de tu título universitario</span>
                                            </li>
                                        </ul>
                                    </div>

                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        ¿Se puede trabajar con tu visado de estudiante en España?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Sí, <span>es totalmente posible trabajar en España con tu visado por
                                            estudios</span>. <br>
                                        Si tu visado por estudios fue expedida después del 16 de agosto de 2022,
                                        <span>puedes trabajar automáticamente con este visado durante un máximo de 30
                                            horas semanales</span>, sin tener que realizar ningún trámite extra (la
                                        propia tarjeta ya te autoriza trabajar).
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
                                <label for="first">¿Los ciudadanos de la UE necesitan un visado de estudios para
                                    estudiar en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Respuesta: No, los ciudadanos de la UE no necesitan una visa de estudios para
                                        estudiar en España.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">¿Cuáles son los requisitos básicos para obtener un visado de
                                    estudios en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Respuesta: Algunos requisitos incluyen estar en estado legal en España, poseer
                                        fondos económicos suficientes, tener seguro médico privado y ser admitido en un
                                        curso/universidad.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">¿Puedo trabajar mientras tengo un visado de estudiante en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Respuesta: Sí, es posible trabajar en España con un visado de estudiante, con
                                        ciertas restricciones y condiciones según la fecha de expedición de el visado.
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
