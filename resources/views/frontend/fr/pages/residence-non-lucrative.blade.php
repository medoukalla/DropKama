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
                                        Le visa de résidence non lucrative est un type de résidence en Espagne qui
                                        accorde aux citoyens non européens disposant de fonds suffisants une
                                        autorisation de résider dans le pays sans exercer aucune activité économique.
                                        Cela vaut aussi bien pour le demandeur principal que pour sa famille, qui peut
                                        également vivre dans le pays avec lui ou elle. Ce visa vous permettra de rester
                                        en Espagne pendant 1 an à compter de votre entrée sur le territoire espagnol,
                                        car il s'agit d'une autorisation de résidence initiale. Par la suite, vous aurez
                                        la possibilité de renouveler le permis de manière successive, chaque
                                        renouvellement durant 2 ans. Cela jusqu'à l'obtention de la résidence permanente
                                        ou de longue durée (après 5 ans). L'une de ses principales caractéristiques est
                                        qu'elle ne vous permet pas d'exercer aucune activité économique ou
                                        professionnelle en Espagne. Autrement dit, vous ne pourrez pas travailler pour
                                        une entreprise opérant dans le pays, car il s'agit d'une nature à but non
                                        lucratif. De plus, il n'est pas nécessaire d'investir dans le pays pour obtenir
                                        le visa. Ceci, ajouté à ses faibles exigences, en fait un permis facile à
                                        obtenir. Avec le non-lucratif, la seule chose dont vous devrez vous préoccuper
                                        est d'avoir suffisamment de ressources pour vous maintenir. Si vous pouvez
                                        démontrer que vous disposez de fonds suffisants et que votre séjour dans le pays
                                        ne représentera aucun coût pour le gouvernement, vous pourrez obtenir la
                                        résidence.
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
                                            <li>Ne pas être citoyen d'un État membre de l'Union européenne, de l'Espace
                                                économique européen ou de la Suisse, ou parent de citoyens de ces pays
                                                bénéficiant du statut de citoyen de l'Union.</li>
                                            <li>Ne pas se trouver irrégulièrement sur le territoire espagnol.</li>
                                            <li>Ne pas avoir de casier judiciaire en Espagne et dans les pays où vous
                                                avez résidé au cours des cinq dernières années, pour des délits
                                                existants dans le système juridique espagnol.</li>
                                            <li>Ne pas être interdit d'entrée en Espagne et ne pas être listé comme
                                                indésirable sur le territoire des pays avec lesquels l'Espagne a signé
                                                un accord en ce sens.</li>
                                            <li> Disposer de ressources économiques suffisantes pour couvrir les frais
                                                de séjour et de retour, et le cas échéant, ceux de vos proches, selon
                                                les montants suivants.</li>
                                            <li>Pour votre propre entretien, 400 % du IPREM par mois.</li>
                                            <li>Pour l'entretien de chacun de vos proches, 100 % du IPREM par mois.</li>
                                            <li>Avoir une assurance maladie publique ou privée souscrite auprès d'une
                                                entité d'assurance autorisée à opérer en Espagne.</li>
                                            <li>Ne souffrir d'aucune des maladies pouvant avoir des répercussions graves
                                                sur la santé publique, conformément aux dispositions du Règlement
                                                sanitaire international de 2005.</li>
                                            <li>Ne pas se trouver, le cas échéant, dans le délai d'engagement de
                                                non-retour en Espagne que l'étranger a assumé en adhérant à un programme
                                                de retour volontaire.</li>
                                            <li>Avoir payé la taxe de traitement des procédures.</li>
                                        </ul>
                                    </div>
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Documentation :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                    <div class="p-list">
                                        <ul>
                                            <li>Formulaire de demande de visa de résidence en double exemplaire, dûment
                                                rempli et signé par l'étranger, ou son représentant légal s'il est
                                                mineur.</li>
                                            <li>Passeport ou titre de voyage, reconnu comme valide en Espagne, avec une
                                                validité minimale d'un an.</li>
                                            <li>Certificat de casier judiciaire ou document équivalent, si vous êtes
                                                majeur pénal, délivré par les autorités du pays d'origine ou des pays où
                                                vous avez résidé au cours des cinq dernières années.</li>
                                            <li>Documentation prouvant que vous disposez de ressources économiques pour
                                                la période demandée. Cela peut être prouvé par tout moyen de preuve, y
                                                compris la fourniture de titres de propriété, de chèques certifiés ou de
                                                cartes de crédit accompagnés d'une certification bancaire indiquant le
                                                montant disponible comme crédit sur la carte. Si les ressources
                                                proviennent d'actions ou de participations dans des entreprises
                                                espagnoles, mixtes ou étrangères, situées en Espagne, elles seront
                                                attestées par la certification desdites entreprises indiquant que le
                                                demandeur n'exerce aucune activité professionnelle en leur sein,
                                                accompagnée, en outre, d'une déclaration sous serment de l'étranger en
                                                ce sens.
                                            </li>
                                            <li>Documentation prouvant que vous disposez d'une assurance maladie.
                                            </li>
                                            <li>Certificat médical. Note importante : lorsque des documents provenant
                                                d'autres pays sont fournis, ils doivent être traduits en espagnol ou
                                                dans la langue co-officielle du territoire où la demande est déposée.
                                                D'autre part, tout document public étranger doit être préalablement
                                                légalisé par le consulat d'Espagne compétent dans le pays où ledit
                                                document a été délivré, ou, le cas échéant, par le Ministère des
                                                Affaires étrangères, de l'Union européenne et de la Coopération, sauf si
                                                ledit document a été apostillé par l'autorité compétente du pays
                                                émetteur conformément à la Convention de La Haye du 5 octobre 1961 et
                                                sauf si ledit document est exempt de légalisation en vertu d'une
                                                convention internationale.</li>
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
                                <label for="first">Combien de temps permet le visa de résidence non lucrative de
                                    séjourner en Espagne initialement ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Elle permet de séjourner en Espagne pendant un an à
                                        partir de l'entrée sur le territoire espagnol.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Quels documents sont requis pour demander la résidence non
                                    lucrative en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Les documents requis incluent un passeport valide, des
                                        certificats de casier judiciaire, des preuves de ressources financières et une
                                        assurance maladie, entre autres.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Quel est le but principal de la résidence non lucrative en Espagne
                                    ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Le but principal est de permettre aux citoyens non
                                        européens de résider en Espagne sans exercer d'activités économiques, à
                                        condition qu'ils disposent de ressources suffisantes pour subvenir à leurs
                                        besoins et à ceux de leur famille, sans entraîner de dépenses pour le
                                        gouvernement.
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
