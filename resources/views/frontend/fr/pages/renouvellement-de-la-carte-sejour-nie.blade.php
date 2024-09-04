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
                                        Le renouvellement de la carte de résidence en Espagne
                                        est une étape essentielle pour les étrangers résidant
                                        légalement dans le pays. Que vous ayez une carte de
                                        résidence temporaire, une carte de résidence de longue
                                        durée, une carte de résidence pour travailleurs ou tout
                                        autre type de permis de résidence, il est important de
                                        connaître les conditions et les procédures nécessaires
                                        pour renouveler votre carte.
                                    </p>
                                </div>
                            </div>
                            <!-- Paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Rassembler les documents nécessaires :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-list">
                                        <ul>
                                            <li>
                                                Passeport complet et valide ou titre de voyage
                                                reconnu comme valable en Espagne.
                                            </li>
                                            <li>
                                                Formulaire de demande de Carte d'Identité d'Étranger
                                                (TIE) (Formulaire EX17).
                                            </li>
                                            <li>
                                                Autres documents pouvant être requis selon votre
                                                situation spécifique.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Soumettre la demande :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-list">
                                        <ul>
                                            <li>
                                                La demande avec les documents requis doit être
                                                présentée dans n'importe quel Bureau des Étrangers
                                                ou Commissariat de Police correspondant.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Attendre la résolution :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-list">
                                        <ul>
                                            <li>
                                                Une fois la demande soumise, vous devrez attendre
                                                qu'elle soit favorablement résolue.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Demander la Carte d'Identité d'Étranger (TIE) :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-list">
                                        <ul>
                                            <li>
                                                Après avoir reçu la résolution favorable, vous
                                                devrez demander la Carte d'Identité d'Étranger.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p>
                                    Il est important de noter que les étrangers titulaires
                                    d'une autorisation de résidence de longue durée ou de
                                    résidence de longue durée-UE doivent renouveler leur Carte
                                    d'Identité d'Étranger tous les cinq ans.
                                </p>
                                <p>
                                    N'oubliez pas qu'il s'agit des étapes générales et
                                    qu'elles peuvent varier en fonction de votre situation
                                    spécifique. Si vous avez des doutes, vous pouvez appeler
                                    le commissariat de police national le plus proche ou le
                                    bureau des étrangers de votre localité.
                                </p>
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
                                <label for="first">Quels sont les documents nécessaires pour renouveler la
                                    carte de résidence (NIE) en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Réponse : Les documents requis incluent un passeport
                                        valide ou un titre de voyage reconnu comme valide en
                                        Espagne, le formulaire de demande de Carte d'Identité
                                        d'Étranger (TIE) (Formulaire EX17), et d'autres
                                        documents qui peuvent être requis selon votre situation
                                        spécifique.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Où doit-on présenter la demande de renouvellement de la
                                    carte de résidence en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Réponse : La demande, accompagnée des documents
                                        nécessaires, doit être déposée dans n'importe quel
                                        bureau des étrangers ou commissariat de police
                                        correspondant.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Combien de temps faut-il attendre pour obtenir une
                                    réponse après avoir soumis la demande de renouvellement de
                                    la carte de résidence en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Réponse : Une fois la demande déposée, il faut attendre
                                        la résolution favorable.
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
