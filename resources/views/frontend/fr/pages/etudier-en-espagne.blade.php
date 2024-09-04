<x-fr.head title="{{ setting('site.title') . ' - ' . $page->title }}" />


<div class="wrapper bg-dark">

    <x-fr.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
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
                                    <h3>Présentation</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        <span>En Espagne, les étudiants marocains ont accès à une offre académique
                                            variée</span>, qui
                                        comprend <span>non seulement</span> des programmes universitaires en
                                        <span>licence et en master</span>,
                                        mais également <span>des programmes de formation professionnelle (grado
                                            superior)</span> et
                                        des programmes préparatoires <span>à l'université (selectividad)</span>. De
                                        plus, étudier en
                                        Espagne offre également l'opportunité d'apprendre la langue espagnole, <span>une
                                            compétence très recherchée sur le marché du travail international.

                                            Les étudiants marocains peuvent choisir d'étudier l'espagnol</span> dans une
                                        école de
                                        langue spécialisée, <span>pour acquérir les compétences linguistiques
                                            nécessaires pour
                                            communiquer efficacement avec les locaux</span>, ainsi que pour améliorer
                                        leurs
                                        perspectives professionnelles en Espagne et dans <span>d'autres pays
                                            hispanophones</span>.

                                        <span>Pour ceux qui souhaitent poursuivre des études universitaires, l'Espagne
                                            offre
                                            une gamme de programmes universitaires en licence et en master, dans des
                                            domaines tels que le droit, l'économie, l'ingénierie, les sciences humaines,
                                            la
                                            technologie de l'information, la santé, les sciences sociales</span> et bien
                                        plus
                                        encore.Les étudiants marocains peuvent également suivre une formation
                                        professionnelle <span>(grado superior) pour acquérir des compétences
                                            spécialisées dans
                                            un domaine professionnel spécifique, ce qui peut leur ouvrir de nombreuses
                                            portes pour leur future carrière</span>.

                                        <span>Enfin, les étudiants marocains</span> peuvent suivre une année
                                        préparatoire
                                        <span>(selectividad) pour accéder à l'université espagnole. Cette année
                                            préparatoire</span>
                                        leur permet de se préparer <span>aux examens d'entrée à l'université</span>
                                        espagnole, <span>ainsi
                                            que de perfectionner leur maîtrise de la langue espagnole.

                                            En somme, étudier en Espagne offre aux étudiants marocains une variété
                                            d'options
                                            académiques, ainsi que la possibilité d'apprendre l'espagnol et de
                                            s'immerger
                                            dans la culture espagnole</span>.
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
                                <a href="{{ url('fr/page/Etudier-en-espagne-sans-Selectividad') }}" class="col-lg-6">
                                    <div>
                                        <div class="item bg1">
                                            <h4>Étudier en espagne <br>
                                                Sans Selectividad</h4>
                                        </div>
                                    </div>
                                </a>
                                <!-- single item end -->

                                <!-- single item start  -->
                                <a href="{{ url('fr/page/etudier-la-selectividad-en-espagne') }}" class="col-lg-6">
                                    <div>
                                        <div class="item bg2">
                                            <h4>Étudier la selectividad <br>
                                                en Espagne</h4>
                                        </div>
                                    </div>
                                </a>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <a href="{{ url('fr/page/etudier-la-langue-en-espagne') }}" class="col-lg-6">
                                    <div>
                                        <div class="item bg3">
                                            <h4>Étudier la langue <br>
                                                en espagne</h4>
                                        </div>
                                    </div>
                                </a>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <a href="{{ url('fr/page/etudier-la-licence-en-espagne') }}" class="col-lg-6">
                                    <div>
                                        <div class="item bg4">
                                            <h4>Étudier la licence <br>
                                                en espagne</h4>
                                        </div>
                                    </div>
                                </a>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <a href="{{ url('fr/page/etudier-le-grado-superior-en-espagne') }}" class="col-lg-6">
                                    <div>
                                        <div class="item bg5">
                                            <h4>Formation professionnelle <br>
                                                (Grado superior)</h4>
                                        </div>
                                    </div>
                                </a>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <a href="{{ url('fr/page/etudier-le-master-en-espagne') }}" class="col-lg-6">
                                    <div>
                                        <div class="item bg5">
                                            <h4>Étudier un master en espagne</h4>
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
                                    <h2>Intéressé par <br>
                                        un <span>visa étudiant ?</span></h2>
                                    <p>Réservez votre consultation
                                        en ligne gratuitement</p>
                                    <a href="{{ route('frontend.index') . '/#consulting' }}">Réservez votre
                                        consultation</a>
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
                        <h2>Besoin d’aide?</h2>
                        <h4>Contactez-nous</h4>
                        <p><strong>Live Chat:</strong> Le délai d'attente moyen est de 3 minutes.</p>
                        <p><strong>Demander à être rappelé:</strong> Disponible uniquement sous un rendez vous</p>
                        <p><strong>Réseaux sociaux:</strong> Le délai d'attente moyen est de 15 minutes.</p>
                        <x-links_area />
                    </div>


                </div>
                <!-- single item end -->

            </div>
            <!-- .row end -->
        </div>
    </div>
</main>
<!-- main end -->


<x-fr.footer />
