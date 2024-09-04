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
                                        Para muchos extranjeros, la negación de su solicitud de residencia puede
                                        sentirse como el fin del mundo, creyendo que han perdido toda posibilidad de
                                        obtenerla de manera definitiva. Sin embargo, esto está lejos de ser cierto.
                                        Existen tres opciones o pasos diferentes que aún pueden tomar para obtener su
                                        tarjeta de residencia. En este artículo, exploraremos en detalle cada uno de
                                        estos recursos: el recurso de reposición, el recurso de alzada y el recurso
                                        contencioso-administrativo. Analizaremos sus diferencias principales, cuándo es
                                        necesario presentar cada uno, los plazos y tiempos de respuesta, y ofreceremos
                                        un consejo práctico para asegurar el éxito al interponer tu recurso.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>¿Para qué sirve un recurso en extranjería ?</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Un recurso en materia de extranjería sirve como una herramienta legal para
                                        impugnar el rechazo de una solicitud de residencia o renovación de tarjeta. Se
                                        presenta en forma de un escrito formal ante la oficina de extranjería o el
                                        organismo competente, expresando nuestra discrepancia con la decisión y
                                        solicitando una reconsideración. El objetivo es que se revalúe nuestro
                                        expediente, ya sea porque creemos que cumplimos con todos los requisitos o
                                        porque consideramos que ha habido un error en la evaluación. Es crucial
                                        presentar argumentos sólidos que respalden nuestra petición y justifiquen por
                                        qué merecemos una respuesta favorable.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Ventajas de interponer un recurso de extranjería :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Si has conseguido una resolución denegatoria en tu solicitud de residencia o
                                        renovación, <span>¿compensa el esfuerzo y tiempo que un recurso requiere?</span>
                                        ¿O es mejor acepta ala decisión e manera definitiva?
                                        La realidad es que <span>presentar un recurso es algo totalmente
                                            recomendado</span>, y en este apartado te aportamos los principales motivos.
                                        Lo primero de todo es entender que <span>no pierdes nada</span> (más allá del
                                        tiempo de preparación del mismo). <span>Los recursos no tienen ningún coste
                                            asociado ni tasas que debas pagar</span> (por lo que es totalmente
                                        gratuito), y el peor resultado que podrías conseguir es quedarte en la misma
                                        situación denegatoria (pero tienes mucho a ganar).
                                        Por otro lado, <span>durante la duración del recurso recibirás el derecho a
                                            estancia</span>, por lo que evitarás la posibilidad de recibir un expediente
                                        de expulsión.
                                        Y, además, <span>durante el plazo temporal en el que el recurso se encuentra en
                                            trámite podrías volver a presentar tu solicitud (de 0) o iniciar una
                                            nueva</span>; por lo que el recurso te permitiría ganar tiempo extra para
                                        regularizar tu situación.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Los tipos de recurso según el organismo al que lo mandemos :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        A nivel general, <span>existen dos tipos de recursos disponibles</span> para
                                        poder luchar contra una resolución denegatoria.
                                        Dependiendo de la institución a la que mandemos nuestro recurso, encontramos los
                                        siguientes dos grandes grupos:
                                    <div class="p-list">
                                        <ul>
                                            <li><span>Recursos administrativos</span>, si van directamente ante la
                                                Oficina de Extranjería (la Administración), que es quien ha resuelto
                                                nuestra solicitud de residencia (inicial o renovación) de manera
                                                denegatoria.</li>
                                            <li><span>Vía judicial</span>, cuando el recurso lo interponemos ante un
                                                juez. No podremos acceder a esta vía hasta que no hayamos agotado la vía
                                                administrativa; es decir, primero deberemos haber pasado por cada uno de
                                                los recursos administrativos que nos ofrece la ley.</li>
                                        </ul>
                                    </div>
                                    </p>
                                    <p>Como ahora veremos, <span>a su vez existen dos tipos de recursos
                                            administrativos</span>, el recurso de alzada y el recurso de reposición.</p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Recurso de alzada :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Dentro de la vía administrativa, <span>el primer tipo de recurso que encontramos
                                            es el de alzada</span>.
                                        Puede ser interpuesto cuando todavía no se ha agotado la vía administrativa. Es
                                        decir, tendrá lugar cuando la persona (funcionario) que ha analizado nuestro
                                        expediente y nos ha mandado la respuesta negativa de la solicitud no es la
                                        máxima autoridad o responsable en la institución competente (es decir, la
                                        oficina de extranjería o subdelegación de gobierno).
                                        En estos casos, <span>solicitamos las superior directo del funcionario que ha
                                            resuelto nuestra solicitud la revise para que determine si su compañero de
                                            trabajo ha cometido un error o no</span>.
                                        Como es lógico, deberemos alegarle nuestro razonamiento y especificar por qué
                                        motivos exactamente la resolución se ha dictado de manera errónea.
                                        <span>La interposición e este tipo de recurso es obligatoria si queremos
                                            posteriormente acceder a la vía judicial</span>.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Recurso de reposición :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        En los casos en los que hayamos mandado un recurso al máximo responsable en la
                                        administración para que reconsidere nuestra solicitud y hemos recibido otra
                                        respuesta denegatoria, <span>podremos entonces interponer un recurso de
                                            reposición</span>.
                                        Como ya no hay nadie por encima de esta persona para que pueda volver a estudiar
                                        el expediente, le pedimos a este máximo responsable de la Oficina de Extranjería
                                        o Subdelegación de Gobierno que revise él mismo (y de nuevo) su decisión.
                                        En caso de plantear correctamente el recurso y alegar motivos suficientes, es
                                        muy probable que nos admitan la residencia por esta vía.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Recurso contencioso-administrativo :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Una vez hayamos agotado la vía administrativa podremos pasar al recurso
                                        <span>contencioso-amdminsitrativo</span>.
                                        Es decir, has solicitado tu permiso de residencia, te han denegado la solicitud,
                                        has interpuesto un primer recurso de alzada que ha sido denegado, y finalmente
                                        has interpuesto un segundo recurso de reposición también denegado.
                                        <span>Entendemos entonces que la oficina de extrajería ya no modificará su
                                            decisión, por lo que ahora debemos dirigirnos a un juez</span> para que se
                                        rectifique el veredicto.
                                        Así, este recurso contencioso-administrativo es un procedimiento judicial que se
                                        emplea para contradecir disposiciones generales y actos expresos de la
                                        Administración Pública.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        ¿Cuáles son los plazos para recurrir?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Los plazos para recurrir una solicitud de extranjería denegatoria son esenciales
                                        para tener éxito en el proceso. La ley establece los siguientes rangos
                                        temporales:
                                    <div class="p-list">
                                        <ul>
                                            <li>Para los recursos por vía administrativa, se dispone de un plazo de 1
                                                mes a partir del día siguiente a la notificación de la resolución
                                                denegatoria.</li>
                                            <li>En cambio, el plazo para interponer un recurso
                                                contencioso-administrativo es de 2 meses a partir de la fecha en que se
                                                ha recibido la resolución, que en este caso sería la del recurso de
                                                reposición.</li>
                                        </ul>
                                    </div>
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        ¿Cuánto se demora la respuesta de un recurso?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        La duración de la respuesta a un recurso varía según el tipo de recurso que se
                                        haya presentado:
                                    <div class="p-list">
                                        <ul>
                                            <li>En el caso del recurso de alzada, la administración tiene un plazo de 3
                                                meses para resolver. Si no se ha recibido ninguna respuesta dentro de
                                                este período, se considera que el recurso ha sido desestimado.</li>
                                            <li>Por otro lado, el recurso de reposición debe resolverse en un plazo
                                                máximo de 1 mes. Si no se ha dado una respuesta dentro de este plazo,
                                                también se puede considerar desestimado.</li>
                                        </ul>
                                    </div>
                                    Es importante tener en cuenta que estos plazos son generales y pueden variar según
                                    la ciudad y la Comunidad Autónoma en la que se encuentre. En algunos casos, es
                                    posible recibir una respuesta en un tiempo mucho más corto.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        ¿Puedo salir de España si he interpuesto un recurso?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Con respecto a la posibilidad de salir de España después de interponer un
                                        recurso, desafortunadamente, no es posible. Si has presentado un recurso, debes
                                        permanecer en España hasta que se reciba una respuesta. A diferencia de los
                                        casos en los que se espera la renovación de la tarjeta de residencia, donde se
                                        puede solicitar una autorización de regreso para viajar, cuando se interpone un
                                        recurso, se ha recibido una respuesta negativa inicial, lo que significa que no
                                        se es un residente legal en España.
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
                                <label for="first">¿Qué es un recurso administrativo?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Un recurso administrativo es un procedimiento legal mediante el cual una persona
                                        o entidad impugna una decisión administrativa que considera injusta o
                                        incorrecta. Permite solicitar una revisión de la decisión ante la misma
                                        autoridad que la emitió o ante una autoridad superior.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">¿Cuál es el objetivo de interponer un recurso administrativo?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        El objetivo principal de interponer un recurso administrativo es impugnar una
                                        decisión administrativa que se considera injusta o incorrecta. Busca obtener una
                                        revisión de la decisión por parte de la autoridad competente para corregir
                                        posibles errores o injusticias
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">¿Cuáles son los pasos para presentar un recurso administrativo?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Los pasos para presentar un recurso administrativo generalmente incluyen
                                        redactar un escrito formal en el que se exponen los motivos de la impugnación,
                                        presentarlo ante la autoridad que emitió la decisión impugnada dentro del plazo
                                        establecido por la ley, y proporcionar cualquier documentación o evidencia
                                        relevante que respalde la impugnación. Luego, se espera una respuesta por parte
                                        de la autoridad competente.
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
