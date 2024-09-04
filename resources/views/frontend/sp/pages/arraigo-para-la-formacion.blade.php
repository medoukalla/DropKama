<x-sp.head title="{{ setting('site.title') . ' - ' . $page->title }}" />


<div class="wrapper bg-dark">

    <x-sp.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Arraigo-para-la-formacion
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
                                        El arraigo para la formación es una residencia por
                                        circunstancias excepcionales de duración equivalente a 1
                                        año ( <span>se puede extender hasta 2 años</span> ), que
                                        permitirá al extranjero en situación irregular conseguir
                                        un permiso de residencia para poder estudiar y formarse
                                        en España. Este nuevo arraigo será concedido a todos
                                        aquellos inmigrantes que lleven en situación irregular
                                        por lo menos 2 años y que pretendan iniciar una
                                        formación reglada que les permita conseguir un título
                                        tras completar los estudios; título que les debe
                                        permitir ejercitar en la profesión correspondiente.Pero
                                        no todos los cursos cumplen los requisitos para este
                                        tipo de arraigo.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>¿Se puede trabajar con el arraigo por formación?</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        No, no se puede trabajar con el arraigo por formación.
                                        Pues esta residencia por circunstancias excepcionales
                                        únicamente te permitirá estudiar.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Requisitos :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <!-- Residencia continuada en España : -->
                                    <div class="p-list">
                                        <p>
                                            <span>Residencia continuada en España :</span>
                                        </p>
                                        <ul>
                                            <li>
                                                Lo primero, y del mismo modo que sucede con
                                                cualquiera de las 3 figuras de arraigo existentes,
                                                deberás demostrar un mínimo de residencia continuada
                                                (aunque en situación irregular) en España. <br />

                                                En este caso hablamos de 2 años, y para hacerlo
                                                deberás usar cualquier prueba válida. <br />

                                                Hablamos, por ejemplo, del empadronamiento, tu
                                                pasaporte en el que se muestran las salidas y
                                                entradas, tickets de compra, facturas de la luz o
                                                gas, carnets de diferentes clubs, etc. <br />

                                                Así, será importante que no registres por un total
                                                superior a 90 días dentro de estos 2 años. <br />

                                                Sin embargo, debes tener en cuenta que no puedes
                                                tener la entrada prohibida en España ni en
                                                cualquiera de los países que España haya firmado un
                                                acuerdo en ese sentido.
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Carecer de antecedentes penales :  -->
                                    <div class="p-list">
                                        <p><span>Carecer de antecedentes penales :</span></p>
                                        <ul>
                                            <li>
                                                Si hay algo que todas las autorizaciones de
                                                residencia tienen en común en España es que
                                                requieren demostrar la carencia de antecedentes
                                                penales. <br />

                                                Así, para poder solicitar el arraigo para la
                                                formación deberás demostrar que no tienes ningún
                                                registro delictivo o policial durante los últimos 5
                                                años, tanto en España como en cualquier otro país en
                                                el que hayas residido. <br />

                                                Éstos antecedentes deberán tener una vigencia máxima
                                                de 6 meses. <br />

                                                En el caso de poder demostrar que llevas 5 años
                                                continuados permaneciendo en España o de que hayas
                                                realizado una solicitud previa de otro permiso de
                                                residencia, no será necesario aportar antecedentes
                                                penales.
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Comprometerte a iniciar tus estudios : -->
                                    <div class="p-list">
                                        <p>
                                            <span>Comprometerte a iniciar tus estudios :</span>
                                        </p>
                                        <ul>
                                            <li>
                                                Finalmente, y como punto más importante, el
                                                extranjero en situación irregular deberá
                                                comprometerse a iniciar sus estudios en España.
                                                <br />

                                                Es importante matizar este punto: el extranjero debe
                                                COMPROMETERSE, pero no es necesario que ya haya
                                                iniciado sus estudios para que esta autorización sea
                                                concedida. <br />

                                                No obstante, 3 meses posteriores a la consecución
                                                del arraigo para la formación, deberá haberse
                                                matriculado en un centro y dar prueba de ello; de lo
                                                contrario perdería su arraigo.
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Y, finalmente, en cuanto al compromiso a iniciar sus estudios, debemos considerar lo siguiente: -->
                                    <div class="p-list">
                                        <p>
                                            <span>Y, finalmente, en cuanto al compromiso a iniciar
                                                sus estudios, debemos considerar lo siguiente:</span>
                                        </p>
                                        <ul>
                                            <li>
                                                El extranjero debe comprometerse a iniciar una
                                                formación que debe ser reglada.
                                            </li>
                                            <li>
                                                Dicha formación debe permitir la consecución de una
                                                certificación oficial de cualificaciones
                                                profesionales que esté dentro del Catálogo Nacional
                                                de Cualificaciones Profesionales en el ámbito de la
                                                administración laboral.
                                            </li>
                                            <li>
                                                Esta formación debe certificar una aptitud técnica
                                                específica.
                                            </li>
                                            <li>
                                                debe ser una formación que habilite y sea necesaria
                                                para poder ejercer una ocupación específica.
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
                                <label for="first">Qué es el arraigo para la formación y cuál es su
                                    duración?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        El arraigo para la formación es un permiso de residencia
                                        por circunstancias excepcionales que permite a un
                                        extranjero en situación irregular estudiar y formarse en
                                        España. Su duración es inicialmente de 1 año, pero puede
                                        extenderse hasta 2 años.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">¿Se puede trabajar con el arraigo por formación?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        No, el arraigo por formación únicamente permite
                                        estudiar. No se autoriza trabajar durante este período.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">¿Cuáles son los requisitos para obtener el arraigo para
                                    la formación?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Los requisitos incluyen tener al menos 2 años de
                                        residencia continua en España en situación irregular,
                                        carecer de antecedentes penales en España y en otros
                                        países durante los últimos 5 años, y comprometerse a
                                        iniciar una formación reglada que conduzca a una
                                        certificación oficial de cualificaciones profesionales.
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
