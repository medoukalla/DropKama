<x-fr.head title="{{ setting('site.title') . ' - ' . $page->title }}" />


<div class="wrapper bg-dark">

    <x-fr.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Arraigo-laboral
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
                                        Arraigo laboral Il s'agit d'une autorisation de
                                        <span>séjour temporaire pour des circonstances
                                            exceptionnelles</span>
                                        qui peut être accordée aux ressortissants étrangers se
                                        trouvant irrégulièrement en Espagne et ayant eu des
                                        relations de travail pendant au moins six mois.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Exigence :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-list">
                                        <ul>
                                            <li>
                                                <span>Ne pas être citoyen d'un État membre de l'Union
                                                    européenne </span>, de l'Espace économique européen ou de la Suisse,
                                                ou être membre de la famille de citoyens de ces pays
                                                soumis au régime de citoyen de l'Union.
                                            </li>
                                            <li>
                                                <span>Ne pas avoir de casier judiciaire en
                                                    Espagne</span>
                                                et dans les pays de résidence précédents au cours
                                                des cinq dernières années, pour des crimes prévus
                                                par la législation espagnole.
                                            </li>
                                            <li>
                                                <span>Ne pas être interdit d'entrée en Espagne</span>
                                                et ne pas être répertorié comme pouvant être refusé
                                                sur le territoire des pays avec lesquels l'Espagne a
                                                signé un accord à cet égard.
                                            </li>
                                            <li>
                                                <span>Ne pas se trouver</span>, le cas échéant,
                                                <span>dans le délai de non-retour en Espagne</span>
                                                que l'étranger a accepté lors de son retour
                                                volontaire dans son pays d'origine.
                                            </li>
                                            <li>
                                                <span>Avoir séjourné en Espagne de manière continue
                                                    pendant une période minimale de deux ans</span>. La présence
                                                continue est entendue si les absences
                                                n'ont pas dépassé 90 jours au cours des deux
                                                dernières années.
                                            </li>
                                            <li>
                                                Pouvoir
                                                <span>prouver l'existence de relations de travail</span>
                                                d'une durée minimale de six mois.
                                            </li>
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
                                <label for="first">Quelle est la condition principale pour demander
                                    l'arraigo laboral en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> La condition principale est
                                        d'avoir cotisé au moins 6 mois à la sécurité sociale
                                        espagnole par le biais d'un contrat de travail formel et
                                        continu.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Quels documents sont nécessaires pour prouver l'arraigo
                                    laboral en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Des documents tels que le contrat
                                        de travail, les fiches de paie, les certificats de
                                        cotisation à la sécurité sociale et tout autre document
                                        prouvant la relation de travail et la cotisation
                                        minimale requise peuvent être demandés.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Quel est l'objectif de l'arraigo laboral en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> L'objectif est de régulariser la
                                        situation migratoire des travailleurs étrangers qui
                                        contribuent déjà au marché du travail espagnol, en
                                        garantissant la protection de leurs droits du travail et
                                        en favorisant leur intégration sociale et économique
                                        dans le pays.
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
