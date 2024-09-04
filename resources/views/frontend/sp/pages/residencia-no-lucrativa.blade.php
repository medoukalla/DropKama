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
                                        El visado de residencia no lucrativa es un tipo de residencia en España que
                                        concede a ciudadanos no Europeos con fondos suficientes una autorización de
                                        residir en el país sin realizar ningún tipo de actividad económica. Y esto es
                                        así tanto para el solicitante principal como para su familia, ya que también
                                        pueden vivir en el país con él o ella.
                                        Esta visa te permitirá permanecer en España durante 1 año desde que entres en
                                        territorio español, ya que se trata de una autorización de residencia inicial.
                                        Posteriomrente, tendrás la opción de renovar el permiso de forma sucesiva,
                                        durando cada renovación 2 años. Esto hasta alcanzar la residencia permanente o
                                        de larga duración ( <span>a los 5 años</span> ). <br>
                                        Una de sus características principales es que no te permite realizar ningún tipo
                                        de actividad económica o profesional en España. Es decir, no podrás trabajar
                                        para ninguna empresa que opere en el país. Pues dispone de una naturaleza sin
                                        fines de lucro.
                                        Además, no es necesario que inviertas en el país para conseguir el visado. Esto
                                        sumado a sus pocos requisitos lo hace un permiso fácil de adquirir.
                                        Con la no lucrativa, de lo único de lo que deberás preocuparte es disponer de
                                        medios suficientes para mantenerte. Si puede demostrar que tiene fondos
                                        suficientes y que tu estancia en el país no supondrá ningún gasto para el
                                        Gobierno, podrás conseguir la residencia.
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
                                        <ul>
                                            <li>No ser ciudadano de un Estado de la Unión Europea, del Espacio Económico
                                                Europeo o de Suiza, o familiar de ciudadanos de estos países a los que
                                                les sea de aplicación el régimen de ciudadano de la Unión.</li>
                                            <li>No encontrarse irregularmente en territorio español.</li>
                                            <li>Carecer de antecedentes penales en España y en los países donde haya
                                                residido durante los últimos cinco años, por delitos existentes en el
                                                ordenamiento español.</li>
                                            <li>No tener prohibida la entrada en España y no figurar como rechazable en
                                                el espacio territorial de países con los que España tenga firmado un
                                                convenio en tal sentido.</li>
                                            <li> Tener los medios económicos necesarios para sufragar los gastos de
                                                estancia y regreso y, en su caso, los de sus familiares, de acuerdo con
                                                las siguientes cuantías.</li>
                                            <li>Para su sostenimiento mensualmente el 400 % del IPREM.</li>
                                            <li>Para el sostenimiento de cada uno de sus familiares, mensualmente, el
                                                100% del IPREM.</li>
                                            <li>Contar con un seguro público o privado de enfermedad concertado con una
                                                Entidad aseguradora autorizada para operar en España.</li>
                                            <li>No padecer ninguna de las enfermedades que pueden tener repercusiones de
                                                salud pública graves de conformidad con lo dispuesto en el Reglamento
                                                Sanitario Internacional de 2005.</li>
                                            <li>No encontrarse, en su caso, dentro del plazo de compromiso de no retorno
                                                a España que el extranjero haya asumido al acogerse a un programa de
                                                retorno voluntario.</li>
                                            <li>Haber abonado la tasa por tramitación de los procedimientos.</li>
                                        </ul>
                                    </div>
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Documentación :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                    <div class="p-list">
                                        <ul>
                                            <li>Impreso de solicitud de visado de residencia en modelo oficial por
                                                duplicado, debidamente cumplimentado y firmado por el extranjero, o su
                                                representante legal en caso de ser menor de edad.</li>
                                            <li>Pasaporte o título de viaje, reconocido como válido en España, con
                                                vigencia mínima de un año.</li>
                                            <li>Certificado de antecedentes penales o documento equivalente, en caso de
                                                ser mayor de edad penal, expedido por las autoridades del país de origen
                                                o del país o países en que haya residido durante los últimos cinco años.
                                            </li>
                                            <li> Documentación acreditativa de disponer de medios económicos para el
                                                período que se solicita. Se podrá acreditar por cualquier medio de
                                                prueba, incluyendo la aportación de títulos de propiedad, cheques
                                                certificados o tarjetas de crédito acompañados de una certificación
                                                bancaria que acredite la cantidad disponible como crédito en la tarjeta.
                                                Si los medios proceden de acciones o participaciones en empresas
                                                españolas, mixtas o extranjeras, radicadas en España, se acreditará
                                                mediante certificación de las mismas que el solicitante no ejerce
                                                actividad laboral alguna en ellas, acompañando, además, declaración
                                                jurada del extranjero en tal sentido.</li>
                                            <li> Documentación acreditativa de disponer de seguro médico.</li>
                                            <li> Certificado médico. Nota importante: cuando se aporten documentos de
                                                otros países deberán estar traducidos al castellano o lengua cooficial
                                                del territorio donde se presente la solicitud. <br>
                                                Por otro lado, todo documento público extranjero deberá ser previamente
                                                legalizado por la Oficina consular de España con jurisdicción en el país
                                                en el que se ha expedido dicho documento o, en su caso, por el
                                                Ministerio de Asuntos Exteriores, Unión Europea y Cooperación, salvo en
                                                el caso en que dicho documento haya sido apostillado por la Autoridad
                                                competente del país emisor según el Convenio de la Haya de 5 de octubre
                                                de 1961 y salvo que dicho documento esté exento de legalización en
                                                virtud de Convenio Internacional.</li>
                                        </ul>
                                    </div>
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
                                <label for="first">¿Cuánto tiempo permite el visado de residencia no lucrativa
                                    permanecer en España inicialmente?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Permite permanecer en España durante un año desde la
                                        entrada en territorio español.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">¿Qué documentos se requieren para solicitar la residencia no
                                    lucrativa en España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> Se requieren documentos como el pasaporte válido,
                                        certificados de antecedentes penales, evidencia de medios económicos y seguro
                                        médico, entre otros.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">¿Cuál es el objetivo principal de la residencia no lucrativa en
                                    España?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Respuesta:</span> El objetivo principal es permitir a ciudadanos no
                                        europeos residir en España sin realizar actividades económicas, siempre que
                                        dispongan de medios suficientes para su sustento y el de sus familiares, sin
                                        suponer un gasto para el gobierno.
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
