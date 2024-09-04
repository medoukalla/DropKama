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
                                        Le visa étudiant est l'autorisation de séjour qui permet aux citoyens non
                                        européens de rester en Espagne pendant qu'ils étudient dans des centres
                                        éducatifs publics ou privés, effectuent des recherches dans le pays ou
                                        participent à un certain type de formation.
                                        Plus précisément, tous ceux qui souhaitent s'inscrire à une formation
                                        professionnelle, master, troisième cycle, doctorat ou licence en Espagne doivent
                                        demander un visa d'études.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Avez-vous vraiment besoin d’un visa d’études pour étudier en Espagne ?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Dépend. Si vous n’êtes pas citoyen de l’UE, la réponse est simple : oui.
                                        Si vous comptez étudier ou effectuer des recherches dans le pays, vous devez
                                        demander un permis de séjour pour étudier dans le pays.
                                        Cependant, vous ne pouvez pas obtenir de visa étudiant si vous êtes originaire
                                        de l’Union européenne. En gros puisque vous n’en avez pas besoin.
                                        Selon l'article 44 du décret royal 557/2011, tous les étudiants de l'UE, de
                                        l'EEE ou de la Suisse peuvent séjourner en Espagne tout en étudiant sans visa.
                                        Ceci s'applique également aux membres de la famille amenés avec eux à la suite
                                        d'une demande conjointe.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Exigences :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                    <div class="p-list">
                                        <p>
                                            Avant de commencer la procédure de demande proprement dite, il sera crucial
                                            de comprendre toutes les conditions que tout étranger doit remplir pour
                                            obtenir un visa d'études. A défaut, l'obtention de cette autorisation ne
                                            sera pas possible :
                                        </p>
                                        <ul>
                                            <li>Comme nous l'avons déjà vu, vous ne pouvez pas être citoyen de l'Union
                                                européenne.</li>
                                            <li>Vous devez avoir un statut légal en Espagne et ne pas être interdit
                                                d'entrée dans le pays.</li>
                                            <li>Posséder des fonds financiers suffisants pour rester en Espagne pendant
                                                1 ou 2 ans (selon la durée du séjour) sera nécessaire. Celle-ci sera
                                                valorisée à 100% mensuellement de l'IPREM, ce qui équivaut à environ 600
                                                € par mois.</li>
                                            <li>Avoir une assurance maladie privée avec une couverture complète en
                                                Espagne.</li>
                                            <li>Vous devrez être admis dans le cours/l’université dans laquelle vous
                                                envisagez d’étudier. Cela signifie qu'avant de commencer la candidature,
                                                vous devez avoir reçu la lettre d'acceptation délivrée par le centre
                                                éducatif.</li>
                                            <li>Avoir un casier judiciaire exempt de charges.</li>
                                            <li><span>Obtenir l'equivalence de votre diplôme de baccalauréat ou votre
                                                    diplome universitaire</span></li>
                                        </ul>
                                    </div>

                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Pouvez-vous travailler avec votre visa étudiant en Espagne ?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Oui, il est tout à fait possible de travailler en Espagne avec votre visa
                                        d'études. Si votre visa d'études a été délivré après le 16 août 2022, vous
                                        pouvez automatiquement travailler avec ce visa pendant un maximum de 30 heures
                                        par semaine, sans avoir à effectuer d'activités supplémentaires. démarches (la
                                        carte elle-même vous autorise déjà à travailler).
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="outro">
                                <div class="p-title mb-2">
                                    <h3>Pourquoi choisir immiworld ?</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Immiworld est votre allié de confiance pour toutes vos démarches d'immigration
                                        en Espagne. Notre cabinet d'avocats spécialisé en immigration est dédié à aider
                                        nos clients à naviguer efficacement à travers les processus complexes liés aux
                                        visas, au renouvellement des cartes de résidence et à l'obtention de la
                                        nationalité. Avec notre expérience et notre engagement envers nos clients, nous
                                        offrons la tranquillité d'esprit nécessaire pour que vos projets d'immigration
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
                                <label for="first">Les citoyens de l’UE ont-ils besoin d’un visa d’études pour
                                    étudier en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Non, les citoyens de l'UE n'ont pas besoin de visa
                                        d'études pour étudier en Espagne.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Quelles sont les conditions de base pour obtenir un visa d’études
                                    en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Certaines conditions incluent avoir un statut légal en
                                        Espagne, disposer de fonds financiers suffisants, avoir une assurance maladie
                                        privée et être admis dans un cours/une université.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Puis-je travailler avec un visa étudiant en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Oui, il est possible de travailler en Espagne avec un
                                        visa étudiant, avec certaines restrictions et conditions en fonction de la date
                                        de délivrance du visa.
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
