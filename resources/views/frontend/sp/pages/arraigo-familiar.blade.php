<x-sp.head title="{{ setting('site.title') . ' - ' . $page->title }}" />


<div class="wrapper bg-dark">

    <x-sp.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Arraigo-familiar
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
                                        Si alguna vez te has preguntado qué es el arraigo
                                        familiar o cómo conseguirlo, aquí te presentamos una
                                        guía completa con toda la información básica sobre el
                                        arraigo familiar en España. Además, en Immiworld te
                                        ofrecemos ayuda con la solicitud y los trámites
                                        pertinentes para acceder a una autorización de
                                        residencia por Arraigo Familiar.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>¿Qué es el arraigo familiar?</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        El arraigo familiar es una de las formas posibles de
                                        obtener un permiso de residencia en España, al igual que
                                        el arraigo social o laboral. Está dirigido a personas
                                        que se encuentran en circunstancias extraordinarias. La
                                        regulación de la residencia por arraigo familiar se
                                        encuentra en la Ley de Extranjería, el Reglamento de
                                        Extranjería y la Instrucción DGI/SGRJ/10/2008, que
                                        autoriza la residencia temporal a hijos de padre o madre
                                        originariamente españoles.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Este permiso puede concederse a los siguientes
                                        solicitantes:
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-number">
                                        <p>
                                            Los requisitos para obtener el permiso de arraigo
                                            familiar están determinados por el Reglamento de
                                            Extranjería y son los siguientes:
                                        </p>
                                        <ul>
                                            <li>
                                                Progenitores o tutores de menores de edad nacidos en
                                                España, siempre que el solicitante tenga a su cargo
                                                al menor o menores en cuestión y convivan juntos. En
                                                caso de no convivencia, el solicitante debe estar al
                                                día en las obligaciones paternofiliales hacia el
                                                menor o menores. También se concede a quienes
                                                presten apoyo a personas discapacitadas nacidas en
                                                España y estén a cargo de dicha persona, con una
                                                autorización temporal por un período de 5 años, que
                                                permite trabajar por cuenta propia o ajena.
                                            </li>
                                            <li>
                                                Cónyuges o parejas de hecho debidamente acreditadas
                                                de ciudadanos/as españoles/as, así como ascendientes
                                                mayores de 65 años (o menores de 65 si están a
                                                cargo) y descendientes menores de 21 años (o mayores
                                                de 21 años a cargo) de ciudadanos/as españoles/as o
                                                de sus cónyuges o parejas de hecho.
                                            </li>
                                            <li>
                                                Hijos con al menos un ascendiente directo de primer
                                                grado de origen español.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Requisitos :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-list">
                                        <p>
                                            Los requisitos para obtener el permiso de arraigo
                                            familiar están determinados por el Reglamento de
                                            Extranjería y son los siguientes:
                                        </p>
                                        <ul>
                                            <li>
                                                <span>No ser ciudadano de la Unión Europea:</span>
                                                El solicitante debe ser extranjero y no ciudadano de
                                                la Unión Europea, Suiza o del Espacio Económico
                                                Europeo, ni familiar de algún habitante de estos.
                                            </li>
                                            <li>
                                                <span>Acreditar convivencia en España:</span> Es
                                                necesario poder demostrar la convivencia requerida
                                                por el Reglamento cuando se considere necesaria para
                                                obtener el certificado de arraigo familiar.
                                            </li>
                                            <li>
                                                <span>Carecer de antecedentes penales:</span> El
                                                solicitante no debe tener antecedentes penales,
                                                según lo definido por la legislación española, tanto
                                                en España como en otros países donde haya residido
                                                anteriormente.
                                            </li>
                                            <li>
                                                <span>Pertenecer a grupos familiares:</span> El
                                                solicitante debe pertenecer a uno de los tres grupos
                                                de posibles solicitantes explicados anteriormente en
                                                relación al arraigo familiar.
                                            </li>
                                            <li>
                                                <span>No estar vetado por el país de origen:</span>
                                                No debe existir ninguna prohibición de entrada al
                                                país ni aparecer en la lista de personas rechazables
                                                en el territorio de los países con los cuales España
                                                tenga un acuerdo al respecto.
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        <span>
                                            Es importante señalar que cualquier documento emitido
                                            en el extranjero debe estar debidamente legalizado o
                                            apostillado, y, si es necesario, traducido por un
                                            traductor jurado autorizado.
                                        </span>
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
                                <label for="first">¿Qué es el arraigo familiar?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        El arraigo familiar es una vía para obtener un permiso
                                        de residencia en España basado en circunstancias
                                        familiares extraordinarias. Está dirigido a personas que
                                        tienen vínculos familiares con ciudadanos españoles o
                                        residentes legales en España y cumplen ciertos
                                        requisitos establecidos por la legislación de
                                        extranjería.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">¿Cuáles son los requisitos para solicitar el arraigo
                                    familiar?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Los requisitos para solicitar el arraigo familiar
                                        incluyen no ser ciudadano de la Unión Europea ni
                                        familiar de algún habitante de estos países, poder
                                        acreditar la convivencia en España cuando sea necesario,
                                        carecer de antecedentes penales, pertenecer a uno de los
                                        grupos de posibles solicitantes, y no estar vetado por
                                        el país de origen.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">¿Qué beneficios ofrece el permiso de arraigo familiar?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        El permiso de arraigo familiar otorga al solicitante la
                                        posibilidad de residir y trabajar en España de forma
                                        legal. Además, puede facilitar la reagrupación familiar,
                                        permitiendo que otros miembros de la familia se unan al
                                        solicitante en España. Este permiso también puede
                                        conducir eventualmente a la obtención de la residencia
                                        permanente.
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
