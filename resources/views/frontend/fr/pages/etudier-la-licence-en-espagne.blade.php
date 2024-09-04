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
                                        Pour les étudiants marocains, étudier une licence en
                                        Espagne offre une opportunité unique d'acquérir une
                                        éducation supérieure de qualité dans un environnement
                                        internationalement reconnu. Avec une vaste gamme de
                                        programmes académiques et des universités prestigieuses,
                                        l'Espagne est une destination attrayante pour ceux qui
                                        cherchent à élargir leurs horizons académiques et
                                        culturels. Les universités espagnoles proposent des
                                        programmes de licence dans divers domaines d'études, des
                                        humanités et sciences sociales à l'ingénierie et aux
                                        sciences naturelles, offrant aux étudiants marocains la
                                        possibilité de se spécialiser dans leur domaine
                                        d'intérêt. En plus de l'excellence académique, l'Espagne
                                        offre un riche patrimoine culturel, un climat agréable
                                        et une haute qualité de vie, ce qui en fait une
                                        destination idéale pour les étudiants marocains désireux
                                        d'enrichir leur expérience universitaire et de se
                                        préparer à une carrière réussie dans un environnement
                                        mondialisé
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Quelles sont les conditions que doivent remplir les
                                        étudiants marocains pour accéder à un diplôme en Espagne
                                        ?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Pour accéder à une licence en Espagne, les étudiants
                                        marocains doivent remplir certaines conditions. Tout
                                        d'abord, ils doivent être titulaires du baccalauréat.
                                        Ensuite, pour certaines universités et programmes, les
                                        étudiants peuvent avoir besoin de réussir la
                                        Selectividad, un examen national qui évalue les
                                        connaissances acquises à la fin de l'enseignement
                                        secondaire et qui est nécessaire pour accéder aux études
                                        universitaires. Cependant, certaines universités
                                        espagnoles offrent la possibilité de s'inscrire
                                        directement sans passer par la Selectividad, soit par le
                                        biais de la Fase Extrajeros en Andalousie, soit par
                                        l'homologation du baccalauréat marocain.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Quels sont les avantages d'étudier un diplôme en Espagne
                                        pour les étudiants marocains ?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Une fois ces conditions remplies, les étudiants
                                        marocains peuvent accéder à une grande variété de
                                        programmes de diplôme dans les universités espagnoles,
                                        avec la possibilité de choisir parmi des disciplines
                                        telles que les sciences, la technologie, les humanités,
                                        les langues et bien plus encore. Les avantages d'étudier
                                        un diplôme en Espagne sont nombreux, notamment la
                                        qualité de l'enseignement, les infrastructures modernes
                                        et les programmes de formation solides qui garantissent
                                        une éducation complète et une préparation adéquate pour
                                        le marché du travail. De plus, les étudiants ont
                                        l'opportunité de découvrir une nouvelle culture,
                                        d'apprendre une nouvelle langue et de rencontrer des
                                        personnes du monde entier, ce qui enrichit leur
                                        expérience personnelle et leur ouvre des opportunités
                                        internationales
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="outro">
                                <div class="p-title mb-2">
                                    <h3>Pourquoi choisir Immiworld ?</h3>
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
                                <label for="first">Quels types de programmes de licence sont disponibles
                                    pour les étudiants marocains en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Il existe une large gamme de
                                        programmes disponibles, comprenant notamment
                                        l'ingénierie, les sciences, les sciences humaines et les
                                        affaires.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Quels sont les principaux requisitos para l'admission
                                    dans les universités espagnoles pour les étudiants
                                    marocains ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Les exigences comprennent la
                                        présentation du diplôme de baccalauréat marocain ou son
                                        équivalent, l'homologation des études secondaires et la
                                        preuve de compétence en espagnol.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Quels sont quelques avantages d'étudier une licence en
                                    Espagne pour les étudiants marocains ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Les avantages incluent une
                                        éducation de haute qualité dans un environnement
                                        international, la possibilité d'apprendre une nouvelle
                                        langue et culture, ainsi que de meilleures perspectives
                                        d'emploi au niveau national et international.
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
