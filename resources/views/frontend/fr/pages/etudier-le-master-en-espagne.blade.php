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

                        <!-- Presentation paragraph -->
                        <div class="presentation-wrapper mt-4">
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Présentation</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Les études de master en Espagne offrent d'excellentes
                                        opportunités aux étudiants marocains titulaires d'une
                                        licence qui souhaitent poursuivre leurs études dans ce
                                        pays. L'Espagne est connue pour la qualité de son
                                        système éducatif, ses universités prestigieuses et son
                                        environnement multiculturel. Pour réussir dans
                                        l'obtention d'un master en Espagne, il est important de
                                        suivre trois étapes clés : l'admission, la préparation
                                        des documents et l'obtention du visa, ainsi que
                                        l'arrivée en Espagne.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-paragraph">
                                    <div class="p-number">
                                        <ul>
                                            <li>
                                                Quels sont les étapes à suivre pour demander
                                                l'admission dans les universités espagnoles afin
                                                d'étudier un master ?
                                            </li>
                                            <p>
                                                <span>Le premier pas consiste à demander
                                                    l'admission</span>
                                                dans les universités espagnoles. Les candidats
                                                doivent rechercher les programmes de master
                                                correspondant à leurs intérêts et compétences, puis
                                                soumettre leur candidature en suivant les procédures
                                                d'admission spécifiques de chaque université. Il est
                                                important de se renseigner sur les exigences
                                                linguistiques,
                                                <span>les délais de candidature et les documents
                                                    nécessaires</span>.
                                            </p>
                                            <li>
                                                Quels sont les documents nécessaires à préparer pour
                                                étudier en Espagne après avoir reçu une confirmation
                                                d'admission dans un programme de master ?
                                            </li>
                                            <p>
                                                <span>Une fois l'admission confirmée</span>, la
                                                deuxième étape consiste à préparer le dossier
                                                nécessaire pour étudier en Espagne. Cela implique de
                                                rassembler des documents tels que les relevés de
                                                notes, les diplômes, les certificats de langue, les
                                                lettres de recommandation et les preuves éventuelles
                                                de financement. Il est essentiel de s'assurer que
                                                tous les documents sont authentifiés et
                                                <span>traduits dans la langue requise</span>.
                                            </p>
                                            <li>
                                                Quelles sont les démarches à suivre pour obtenir un
                                                visa d'étudiant en Espagne en tant qu'étudiant
                                                marocain après avoir reçu une confirmation
                                                d'admission dans un programme de master ?
                                            </li>
                                            <p>
                                                <span>La troisième étape importante est d'obtenir le
                                                    visa d'étudiant pour l'Espagne</span>. Les étudiants marocains
                                                doivent prendre
                                                rendez-vous au consulat espagnol de leur pays et
                                                présenter leur dossier complet, y compris
                                                l'acceptation de l'université, les preuves de
                                                ressources financières et d'assurance médicale. Il
                                                est recommandé d'entamer les démarches de visa dès
                                                que l'admission est confirmée,
                                                <span>car cela peut prendre du temps</span>.
                                            </p>
                                            <li>
                                                Quels sont les conseils clés que les étudiants
                                                marocains doivent suivre pour augmenter leurs
                                                chances de succès dans leur projet d'étudier un
                                                master en Espagne ?
                                            </li>
                                            <p>
                                                <span>En suivant ces trois étapes essentielles</span>, les étudiants
                                                marocains peuvent augmenter leurs
                                                chances de réussir dans l'obtention d'un master en
                                                Espagne. Il est important de rester organisé, de
                                                respecter les délais et de rechercher des
                                                informations auprès des autorités compétentes pour
                                                faciliter le processus d'admission,
                                                <span>d'obtention de visa et d'arrivée en Espagne</span>.
                                            </p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Outro -->
                            <div class="outro">
                                <div class="p-title mb-2">
                                    <h3>Pourquoi choisir immiworld ?</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Immiworld est votre allié de confiance pour toutes vos
                                        démarches d'immigration en Espagne. Notre cabinet
                                        d'avocats spécialisé en immigration est dédié à aider
                                        nos clients à naviguer efficacement à travers les
                                        processus complexes liés aux visas, au renouvellement
                                        des cartes de résidence et à l'obtention de la
                                        nationalité. Avec notre expérience et notre engagement
                                        envers nos clients, nous offrons la tranquillité
                                        d'esprit nécessaire pour que vos projets d'immigration
                                        se déroulent sans complications.
                                    </p>
                                </div>
                            </div>
                            <!-- Experience -->
                            <div class="experience-list">
                                <!-- Experient first list -->
                                <div class="exp-list">
                                    <img src="{{ asset('img/exp-icon-time.svg') }}" alt="24 hours for file process" />
                                    <div class="exp-text">
                                        Dossier traité en moins de <span>24 heures</span>.
                                    </div>
                                </div>
                                <!-- Experient second list -->
                                <div class="exp-list">
                                    <img src="{{ asset('img/exp-icon-years.svg') }}" alt="24 hours for file process" />
                                    <div class="exp-text">
                                        Plus de <span>5 ans</span> d'expérience en droit de
                                        l'immigration.
                                    </div>
                                </div>
                                <!-- Experient third list -->
                                <div class="exp-list">
                                    <img src="{{ asset('img/exp-icon-cas.svg') }}" alt="24 hours for file process" />
                                    <div class="exp-text">
                                        Plus de <span>200 cas</span> complexes résolus avec
                                        succès grâce à Immiworld.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion list MOST FAMOUS QUESTIONS -->
                        <ul class="accordion mt-4">
                            <!-- First Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="first" checked />
                                <label for="first">Quels types de programmes de master sont disponibles pour
                                    les étudiants marocains en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Il existe une grande variété de
                                        programmes de master disponibles, allant des sciences
                                        aux sciences humaines et aux affaires.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Quels sont les principaux requisitos pour l'admission
                                    dans les programmes de master des universités espagnoles
                                    pour les étudiants marocains ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Les exigences communes incluent
                                        la possession d'une licence ou de son équivalent, la
                                        présentation de résultats d'examens de compétence en
                                        espagnol comme le DELE, et le respect des exigences
                                        spécifiques du programme.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Quels sont quelques avantages d'étudier un master en
                                    Espagne pour les étudiants marocains ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Les avantages comprennent une
                                        éducation de haute qualité, l'opportunité d'apprendre
                                        une nouvelle langue et culture, et de meilleures
                                        perspectives professionnelles au niveau national et
                                        international.
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
