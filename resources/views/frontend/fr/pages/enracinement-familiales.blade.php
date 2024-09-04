<x-fr.head title="{{ setting('site.title') . ' - ' . $page->title }}" />


<div class="wrapper bg-dark">

    <x-fr.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Arraigo-familiar
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
                                    <h3>Présentation :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Si un jour vous vous êtes demandé ce qu'est le arraigo
                                        familiar ou comment l'obtenir, nous vous présentons ici
                                        un guide complet avec toutes les informations de base
                                        sur le arraigo familiar en Espagne. En outre, chez
                                        Immiworld, nous vous offrons une aide pour la demande et
                                        les démarches nécessaires pour obtenir une autorisation
                                        de résidence pour le Arraigo Familiar.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Quelles sont vos racines familiales ?</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Le arraigo familiar est l'une des façons possibles
                                        d'obtenir une autorisation de résidence en Espagne, tout
                                        comme le arraigo social ou professionnel. Il est destiné
                                        aux personnes se trouvant dans des circonstances
                                        extraordinaires. La réglementation de la résidence pour
                                        arraigo familiar se trouve dans la Loi sur les
                                        étrangers, le Règlement sur les étrangers et
                                        l'Instruction DGI/SGRJ/10/2008, qui autorise la
                                        résidence temporaire aux enfants de parents originaires
                                        espagnols.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Ce permis peut être accordé aux demandeurs suivants :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-number">
                                        <p>
                                            Les conditions pour obtenir le permis de racines
                                            familiales sont déterminées par le Règlement sur
                                            l'immigration et sont les suivantes :
                                        </p>
                                        <ul>
                                            <li>
                                                Les parents ou tuteurs de mineurs nés en Espagne, à
                                                condition que le demandeur ait la charge du ou des
                                                mineurs en question et qu'ils vivent ensemble. En
                                                cas de non-cohabitation, le demandeur doit être à
                                                jour dans les obligations parentales envers le ou
                                                les mineurs. Il est également accordé à ceux qui
                                                fournissent un soutien à des personnes handicapées
                                                nées en Espagne et qui ont la charge de cette
                                                personne, avec une autorisation temporaire pour une
                                                période de 5 ans, ce qui permet de travailler pour
                                                son propre compte ou pour le compte d'autrui
                                            </li>
                                            <li>
                                                Les conjoints ou partenaires de fait dûment
                                                accrédités de citoyens espagnols, ainsi que les
                                                ascendants de plus de 65 ans (ou de moins de 65 ans
                                                s'ils sont à charge) et les descendants de moins de
                                                21 ans (ou de plus de 21 ans à charge) de citoyens
                                                espagnols ou de leurs conjoints ou partenaires de
                                                fait.
                                            </li>
                                            <li>
                                                Les enfants ayant au moins un parent direct de
                                                premier degré d'origine espagnole.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Exigences :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-list">
                                        <p>
                                            Les exigences pour obtenir le permis de arraigo
                                            familiar sont déterminés par le Règlement sur les
                                            étrangers et sont les suivants :
                                        </p>
                                        <ul>
                                            <li>
                                                <span>Ne pas être citoyen de l'Union européenne :</span>
                                                Le demandeur doit être étranger et non citoyen de
                                                l'Union européenne, de la Suisse ou de l'Espace
                                                économique européen, ni parent d'un habitant de ces
                                                pays.
                                            </li>
                                            <li>
                                                <span>Prouver la cohabitation en Espagne :</span> Il
                                                est nécessaire de pouvoir démontrer la cohabitation
                                                requise par le Règlement lorsque cela est considéré
                                                comme nécessaire pour obtenir le certificat de
                                                arraigo familiar.
                                            </li>
                                            <li>
                                                <span>Avoir un casier judiciaire vierge :</span> Le
                                                demandeur ne doit pas avoir de casier judiciaire,
                                                tel que défini par la législation espagnole, en
                                                Espagne ou dans d'autres pays où il a résidé
                                                précédemment.
                                            </li>
                                            <li>
                                                <span>Appartenir à des groupes familiaux :</span> Le
                                                demandeur doit appartenir à l'un des trois groupes
                                                de demandeurs possibles expliqués ci-dessus en
                                                relation avec le arraigo familiar.
                                            </li>
                                            <li>
                                                <span>Ne pas être interdit par le pays d'origine
                                                    :</span>
                                                Il ne doit y avoir aucune interdiction d'entrée dans
                                                le pays ni être sur la liste des personnes
                                                refusables sur le territoire des pays avec lesquels
                                                l'Espagne a un accord à cet égard.
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        <span>
                                            Il est important de souligner que tout document émis à
                                            l'étranger doit être dûment légalisé ou apostillé, et,
                                            si nécessaire, traduit par un traducteur assermenté
                                            autorisé.
                                        </span>
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
                                <label for="first">Quelles sont ces "racines familiales" ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Le "arraigo familiar" est une voie pour obtenir un
                                        permis de résidence en Espagne basé sur des
                                        circonstances familiales extraordinaires. Il est destiné
                                        aux personnes ayant des liens familiaux avec des
                                        citoyens espagnols ou des résidents légaux en Espagne et
                                        remplissant certains critères établis par la législation
                                        sur les étrangers.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Quels sont les critères pour demander le "arraigo
                                    familiar" ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Les critères pour demander le "arraigo familiar"
                                        comprennent ne pas être citoyen de l'Union européenne ni
                                        être parent d'un habitant de ces pays, pouvoir justifier
                                        la cohabitation en Espagne lorsque cela est nécessaire,
                                        ne pas avoir de casier judiciaire, appartenir à l'un des
                                        groupes de demandeurs potentiels et ne pas être interdit
                                        par le pays d'origine.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input type="radio" name="accordion" id="third" />
                                <label for="third">Quels avantages offre le permis de "arraigo familiar" ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Le permis de "arraigo familiar" accorde au demandeur la
                                        possibilité de résider et de travailler légalement en
                                        Espagne. De plus, il peut faciliter la réunification
                                        familiale en permettant à d'autres membres de la famille
                                        de rejoindre le demandeur en Espagne. Ce permis peut
                                        également éventuellement mener à l'obtention de la
                                        résidence permanente.
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
