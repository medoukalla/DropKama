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
                                        La renovación de la tarjeta de residencia en España es
                                        un paso fundamental para los extranjeros que residen
                                        legalmente en el país. Ya sea que poseas una tarjeta de
                                        residencia temporal, una tarjeta de residencia de larga
                                        duración, una tarjeta de residencia para trabajadores u
                                        otro tipo de permiso de residencia, es importante
                                        conocer las condiciones y los trámites necesarios para
                                        renovar tu tarjeta
                                    </p>
                                </div>
                            </div>

                            <!-- Paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>⁠Reunir la documentación necesaria:</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-list">
                                        <ul>
                                            <li>
                                                Pasaporte completo en vigor o título de viaje
                                                reconocido como válido en España.
                                            </li>
                                            <li>
                                                Formulario de solicitud de Tarjeta de Identidad de
                                                Extranjero (TIE) (Formulario EX17).
                                            </li>
                                            <li>
                                                ⁠Otros documentos que puedan ser requeridos según tu
                                                situación específica.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>⁠Presentar la solicitud:</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-list">
                                        <ul>
                                            <li>
                                                ⁠La solicitud junto con la documentación requerida
                                                debe ser presentada en cualquier Oficina de
                                                Extranjería o Comisaría de Policía correspondiente.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>⁠Esperar la resolución:</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-list">
                                        <ul>
                                            <li>
                                                Una vez presentada la solicitud, deberás esperar a
                                                que se resuelva favorablemente.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Solicitar la Tarjeta de Identidad de Extranjero (TIE):
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-list">
                                        <ul>
                                            <li>
                                                Después de recibir la resolución favorable, deberás
                                                solicitar la Tarjeta de Identidad de Extranjero.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p>
                                    Es importante tener en cuenta que los extranjeros que sean
                                    titulares de una autorización de residencia de larga
                                    duración o de residencia de larga duración-UE deberán
                                    renovar la Tarjeta de Identidad de Extranjero cada cinco
                                    años.
                                </p>
                                <p>
                                    Recuerda que estos son los pasos generales, y pueden
                                    variar dependiendo de tu situación específica. Si tienes
                                    dudas, puedes llamar por teléfono a la comisaría de
                                    policía nacional más cercana o a la oficina de extranjería
                                    de tu localidad.
                                </p>
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
                                <label for="first">¿Cuáles son los documentos necesarios para renovar la
                                    tarjeta de residencia (NIE) en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Los documentos requeridos
                                        incluyen un pasaporte válido o un título de viaje
                                        reconocido como válido en España, el formulario de
                                        solicitud de Tarjeta de Identidad de Extranjero (TIE).
                                        <br />
                                        (Formulario EX17) y otros documentos que puedan ser
                                        requeridos según tu situación específica.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" name="accordion" id="second" />
                                <label for="second">¿Dónde se debe presentar la solicitud de renovación de la
                                    tarjeta de residencia en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> La solicitud, junto con la
                                        documentación necesaria, debe presentarse en cualquier
                                        Oficina de Extranjería o Comisaría de Policía
                                        correspondiente.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" name="accordion" id="third" />
                                <label for="third">¿Cuánto tiempo se debe esperar para recibir una respuesta
                                    después de presentar la solicitud de renovación de la
                                    tarjeta de residencia en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Una vez presentada la solicitud,
                                        se debe esperar la resolución favorable.
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
