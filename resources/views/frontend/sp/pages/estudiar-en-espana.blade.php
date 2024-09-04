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
                        {{-- Presentation start --}}
                        <div class="presentation-wrapper mt-4">
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Presentación</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        <span> En España, los estudiantes marroquíes tienen acceso a una oferta
                                            académica
                                            variada</span>, que incluye no solo programas <span>universitarios de
                                            licenciatura y master</span>,
                                        sino también programas <span>de formación profesional (grado superior) y
                                            programas
                                            preparatorios para la universidad (selectividad). Además, estudiar en España
                                            también ofrece la oportunidad</span> de <span>aprender el idioma español,
                                            una habilidad muy
                                            buscada en el mercado laboral internacional</span>.

                                        <span>Los estudiantes marroquíes pueden optar por estudiar español</span> en una
                                        escuela <span>de
                                            idiomas especializada, para adquirir las habilidades lingüísticas</span>
                                        necesarias
                                        para <span>comunicarse</span> efectivamente <span>con los locales, así como para
                                            mejorar sus
                                            perspectivas profesionales en España y otros países de habla hispana</span>.

                                        <span>Para aquellos que deseen seguir estudios universitarios</span>, España
                                        ofrece <span>una
                                            variedad de programas universitarios</span> de <span>licenciatura y
                                            maestría</span>, en áreas como
                                        <span>derecho, economía, ingeniería, ciencias humanas, tecnología de la
                                            información,
                                            salud, ciencias sociales</span> y mucho más. <span>Los estudiantes</span>
                                        marroquíes también pueden
                                        realizar una <span>formación profesional (grado superior)</span> para adquirir
                                        habilidades
                                        especializadas en <span>un campo profesional específico</span>, lo que puede
                                        <span>abrirles muchas
                                            puertas para su futura carrera</span>.

                                        <span>Por último, los estudiantes marroquíes pueden seguir</span> un año
                                        preparatorio
                                        (<span>selectividad</span>) para acceder a <span>la universidad española</span>.
                                        Este año preparatorio les
                                        permite prepararse para <span>los exámenes de ingreso a la universidad</span>
                                        española, <span>así
                                            como perfeccionar su dominio del idioma español</span>.

                                        <span>En resumen, estudiar en España ofrece a los estudiantes marroquíes una
                                            variedad
                                            de opciones académicas, así como la oportunidad de aprender español y
                                            sumergirse
                                            en la cultura española.</span>


                                    </p>
                                </div>
                            </div>

                        </div>
                        {{-- Presentation end --}}
                        {{-- Line --}}
                        <hr class="what-is-hr">
                        {{-- 6 packs --}}
                        <div class="espagneWrapp">
                            <!-- row start  -->
                            <div class="row">
                                <!-- single item start  -->
                                <a href="{{ url('page/Estudiar-en-Espana-sin-Selectividad') }}" class="col-lg-6">
                                    <div>
                                        <div class="item bg1">
                                            <h4>Estudiar en España sin Selectividad</h4>
                                        </div>
                                    </div>
                                </a>
                                <!-- single item end -->

                                <!-- single item start  -->
                                <a href="{{ url('page/estudiar-selectividad-en-espana') }}" class="col-lg-6">
                                    <div>
                                        <div class="item bg2">
                                            <h4>Estudiar la Selectividad en España</h4>
                                        </div>
                                    </div>
                                </a>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <a href="{{ url('page/estudiar-el-idioma-en-espana') }}    " class="col-lg-6">
                                    <div>
                                        <div class="item bg3">
                                            <h4>Estudiar el idioma en España</h4>
                                        </div>
                                    </div>
                                </a>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <a href="{{ url('page/estudiar-la-licenciatura-en-espana') }}" class="col-lg-6">
                                    <div>
                                        <div class="item bg4">
                                            <h4>Estudiar la licenciatura en España</h4>
                                        </div>
                                    </div>
                                </a>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <a href="{{ url('page/estudiar-el-grado-superior-en-espana') }}" class="col-lg-6">
                                    <div>
                                        <div class="item bg5">
                                            <h4>Formación profesional (Grado superior)</h4>
                                        </div>
                                    </div>
                                </a>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <a href="{{ url('page/estudia-el-master-en-espana') }}" class="col-lg-6">
                                    <div>
                                        <div class="item bg5">
                                            <h4>Estudiar un master en España</h4>
                                        </div>
                                    </div>
                                </a>
                                <!-- single item end -->

                            </div>
                            <!-- row end -->
                        </div>
                        {{-- Line --}}
                        <hr class="what-is-hr">
                        <!-- Intéressé par start  -->
                        <div class="interessePar">
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="itemleftD align-self-center">
                                    <img src="{{ asset('img/img3.png') }}"
                                        alt="Intéressé par
                                    un visa étudiant ?"
                                        class="img-fluid">
                                </div>
                                <div class="itemRightD align-self-center">
                                    <h2>¿Interesado en una <span>visa de estudiante?</span></h2>
                                    <p>Reserve su consulta en línea de forma gratuita</p>
                                    <a href="{{ route('frontend.sp.index') . '/#consulting' }}">Reserve su consulta</a>
                                </div>
                            </div>
                        </div>
                        <!-- Intéressé par end  -->
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
