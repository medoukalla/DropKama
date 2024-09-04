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
                                        En Espagne, il existe plusieurs options pour étudier
                                        sans avoir besoin de réussir la Selectividad. Une de ces
                                        options est la phase pour les étudiants étrangers en
                                        Andalousie, qui se déroule chaque année du 6 au 24 mars
                                        et nécessite d'avoir obtenu le baccalauréat au cours des
                                        deux dernières années, ainsi que l'homologation du
                                        baccalauréat marocain en espagnol. Une autre alternative
                                        est de suivre un master avec un niveau B1 ou B2 en
                                        espagnol, ou de venir en Espagne pour étudier la langue
                                        avant de postuler. Enfin, il est possible de choisir de
                                        suivre une formation professionnelle de deux ans appelée
                                        "grado superior", pour laquelle seule l'homologation du
                                        baccalauréat marocain est nécessaire.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Exigences :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Pour accéder à la phase pour les étudiants étrangers en
                                        Andalousie, il est nécessaire d'avoir obtenu le
                                        baccalauréat au cours des deux dernières années et
                                        d'avoir fait homologuer le baccalauréat marocain en
                                        espagnol. Pour étudier un master en Espagne, il faut
                                        avoir un niveau B1 ou B2 en espagnol, ou suivre des
                                        études de langue dans le pays avant de postuler au
                                        master. Enfin, pour suivre un grado superior en Espagne,
                                        seule l'homologation du baccalauréat marocain en
                                        espagnol est nécessaire. Il est crucial de vérifier et
                                        de respecter les exigences spécifiques de chaque option
                                        avant de commencer le processus de candidature.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Procédure :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Le processus pour étudier en Espagne varie selon
                                        l'option choisie. Pour participer à la phase pour les
                                        étudiants étrangers en Andalousie, il faut soumettre une
                                        demande pendant la période spécifiée, en joignant la
                                        documentation requise et en vérifiant l'homologation du
                                        baccalauréat marocain en espagnol. Pour étudier un
                                        master, on peut postuler directement aux universités
                                        espagnoles une fois les exigences linguistiques
                                        remplies, soit avec un niveau B1 ou B2 en espagnol, soit
                                        après avoir suivi des cours de langue en Espagne. Pour
                                        les programmes de grado superior, il faut demander
                                        l'homologation du baccalauréat marocain en espagnol et,
                                        une fois obtenue, chercher et postuler aux programmes de
                                        grado superior selon les procédures établies par les
                                        institutions éducatives. Il est crucial de suivre les
                                        instructions fournies par les autorités compétentes et
                                        de respecter les délais fixés pour chaque processus de
                                        candidature.
                                    </p>
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
                                <label for="first">Quelles sont les options pour étudier en Espagne sans
                                    passer par la Selectividad ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Les options comprennent la
                                        participation à la phase des étudiants étrangers en
                                        Andalousie, suivre un master en Espagne ou suivre un
                                        programme de formation professionnelle de niveau
                                        supérieur.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Quels sont les requisitos pour accéder à la phase des
                                    étudiants étrangers en Andalousie ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Les requisitos sont d'avoir
                                        obtenu le baccalauréat au cours des deux dernières
                                        années et d'avoir fait homologuer le baccalauréat
                                        marocain en espagnol.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Quel niveau d'espagnol est requis pour étudier un master
                                    en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Il est nécessaire d'avoir un
                                        niveau B1 ou B2 en espagnol, ou de suivre des études de
                                        langue en Espagne avant de postuler, selon les
                                        requisitos d'admission de chaque université.
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
