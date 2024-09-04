<x-fr.head title="{{ setting('site.title') . ' - ' . $page->title }}" />


<div class="wrapper bg-dark">

    <x-fr.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Arraigo-social
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
                                        C'est une autorisation de résidence temporaire pour des circonstances
                                        exceptionnelles qui peut
                                        être accordée aux citoyens étrangers résidant en Espagne depuis au moins trois
                                        ans et ayant un
                                        contrat ou des contrats de travail, et/ou ayant des liens familiaux en Espagne
                                        ou étant intégrés
                                        socialement.
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
                                        <ul>
                                            <li><span>Ne pas être citoyen d'un État membre de l'Union européenne</span>,
                                                de l'Espace
                                                économique européen ou de la Suisse, ou parent de citoyens de ces pays
                                                bénéficiant du statut
                                                de citoyen de l'UE.</li>
                                            <li><span>Ne pas être citoyen d'un État de l'Union européenne</span>, de
                                                l'Espace économique
                                                européen ou de la Suisse, ou parent de citoyens de ces pays bénéficiant
                                                du statut de citoyen
                                                de l'Union.</li>
                                            <li><span>Ne pas avoir de casier judiciaire en Espagne et dans les pays
                                                    précédents</span> de
                                                résidence au cours des cinq dernières années pour des crimes existants
                                                dans le système
                                                juridique espagnol.</li>
                                            <li>
                                                <span>Ne pas être interdit d'entrée en Espagne et ne pas être listé
                                                    comme indésirable</span>
                                                sur le territoire des pays avec lesquels l'Espagne a signé un accord en
                                                ce sens.
                                            </li>
                                            <li><span>Ne pas se trouver, le cas échéant, dans le délai d'engagement de
                                                    non-retour en
                                                    Espagne</span> que l'étranger a assumé en retournant volontairement
                                                dans son pays d'origine.
                                            </li>
                                            <li><span>Avoir résidé de manière continue en Espagne pendant au moins trois
                                                    ans</span>. Pour
                                                que cette condition soit remplie, les absences d'Espagne pendant cette
                                                période ne peuvent pas
                                                dépasser 120 jours.</li>
                                            <li><span>Avoir des liens familiaux avec d'autres étrangers résidents</span>
                                                (<span>conjoints ou
                                                    partenaires enregistrés, ascendants ou descendants au premier degré
                                                    et ligne directe</span>)
                                                ou présenter un rapport d'ancrage attestant de son intégration sociale
                                                émis par la Communauté
                                                autonome (ou la Municipalité si la Communauté autonome l'a autorisé),
                                                sur le territoire duquel
                                                il a sa résidence habituelle</li>
                                        </ul>
                                    </div>
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
                                        en Espagne. Notre
                                        cabinet d'avocats spécialisé en immigration est dédié à aider nos clients à
                                        naviguer efficacement
                                        à travers les processus complexes liés aux visas, au renouvellement des cartes
                                        de résidence et à
                                        l'obtention de la nationalité. Avec notre expérience et notre engagement envers
                                        nos clients, nous
                                        offrons la tranquillité d'esprit nécessaire pour que vos projets d'immigration
                                        se déroulent sans
                                        complications.
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
                                <label for="first">Qu'est-ce que l'arraigo social en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> L'arraigo social en Espagne est un mécanisme légal
                                        permettant aux personnes
                                        en situation irrégulière de régulariser leur situation migratoire si elles
                                        peuvent démontrer une
                                        intégration significative dans la société espagnole.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Quels critères sont pris en compte pour demander l'arraigo social
                                    ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Les critères peuvent inclure la résidence continue en
                                        Espagne, la
                                        participation active à la communauté, l'existence de liens familiaux ou
                                        professionnels, entre
                                        autres aspects démontrant une intégration effective dans la société.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Quel est l'objectif de l'arraigo social en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> L'objectif principal est de promouvoir l'inclusion
                                        sociale et la cohésion,
                                        reconnaissant la contribution positive que les personnes en situation
                                        irrégulière peuvent apporter
                                        à la société espagnole par leur intégration et leur participation active à la
                                        communauté.
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
