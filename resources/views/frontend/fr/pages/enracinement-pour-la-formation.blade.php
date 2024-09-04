<x-fr.head title="{{ setting('site.title') . ' - ' . $page->title }}" />


<div class="wrapper bg-dark">

    <x-fr.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Arraigo-para-la-formacion
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
                                        L'arraigo para la formación est une résidence pour des
                                        circonstances exceptionnelles d'une durée équivalente à
                                        1 an (pouvant être prolongée jusqu'à 2 ans), qui permet
                                        à l'étranger en situation irrégulière d'obtenir un
                                        permis de résidence pour étudier et se former en
                                        Espagne. Ce nouvel arraigo sera accordé à tous les
                                        immigrants en situation irrégulière depuis au moins 2
                                        ans et qui envisagent de commencer une formation
                                        réglementée leur permettant d'obtenir un diplôme après
                                        avoir achevé leurs études; un diplôme qui devrait leur
                                        permettre de pratiquer dans la profession
                                        correspondante. Mais tous les cours ne répondent pas aux
                                        critères pour ce type d'arraigo.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Peut-on travailler avec l'arraigo pour la formation?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Non, il n'est pas possible de travailler avec l'arraigo
                                        pour la formation. Cette résidence pour des
                                        circonstances exceptionnelles ne vous permettra que
                                        d'étudier.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Exigences :</h3>
                                </div>
                                <div class="p-paragraph">
                                    <!-- Residencia continuada en España : -->
                                    <div class="p-list">
                                        <p>
                                            <span>Résidence continue en Espagne :</span>
                                        </p>
                                        <ul>
                                            <li>
                                                Tout d'abord, et de la même manière que pour l'une
                                                des 3 figures d'arraigo existantes, vous devrez
                                                démontrer une résidence continue minimale (bien que
                                                dans une situation irrégulière) en Espagne. <br />
                                                Dans ce cas, nous parlons de 2 ans, et pour le
                                                prouver, vous devrez utiliser toute preuve valable.
                                                <br />
                                                Nous parlons, par exemple, de l'inscription au
                                                registre, de votre passeport sur lequel figurent les
                                                sorties et les entrées, de tickets de caisse, de
                                                factures d'électricité ou de gaz, de cartes de
                                                différents clubs, etc. <br />
                                                Ainsi, il sera important de ne pas dépasser un total
                                                de 90 jours d'absence au cours de ces 2 années.
                                                <br />
                                                Cependant, vous devez tenir compte du fait que vous
                                                ne pouvez pas être interdit d'entrée en Espagne ou
                                                dans l'un des pays avec lesquels l'Espagne a signé
                                                un accord en ce sens.
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Carecer de antecedentes penales :  -->
                                    <div class="p-list">
                                        <p><span>Absence d'antécédents criminels : </span></p>
                                        <ul>
                                            <li>
                                                Si quelque chose que toutes les autorisations de
                                                résidence ont en commun en Espagne, c'est qu'elles
                                                exigent de prouver l'absence d'antécédents
                                                criminels. <br />
                                                Ainsi, pour pouvoir demander l'arraigo para la
                                                formación, vous devrez prouver que vous n'avez aucun
                                                casier judiciaire ou policier au cours des 5
                                                dernières années, tant en Espagne que dans tout
                                                autre pays où vous avez résidé. <br />
                                                Ces antécédents doivent avoir une validité maximale
                                                de 6 mois. <br />
                                                Dans le cas où vous pouvez prouver que vous avez
                                                passé 5 ans continus en Espagne ou que vous avez
                                                présenté une demande préalable d'une autre
                                                autorisation de résidence, il ne sera pas nécessaire
                                                de fournir des antécédents criminels.
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Comprometerte a iniciar tus estudios : -->
                                    <div class="p-list">
                                        <p>
                                            <span>S'engager à commencer vos études :</span>
                                        </p>
                                        <ul>
                                            <li>
                                                Enfin, et comme point le plus important, l'étranger
                                                en situation irrégulière doit s'engager à commencer
                                                ses études en Espagne. <br />
                                                Il est important de préciser ce point : l'étranger
                                                doit S'ENGAGER, mais il n'est pas nécessaire qu'il
                                                ait déjà commencé ses études pour que cette
                                                autorisation soit accordée. <br />
                                                Cependant, dans les 3 mois suivant l'obtention de
                                                l'arraigo para la formación, il devra s'inscrire
                                                dans un établissement et en apporter la preuve ;
                                                sinon, il perdrait son arraigo.
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Y, finalmente, en cuanto al compromiso a iniciar sus estudios, debemos considerar lo siguiente: -->
                                    <div class="p-list">
                                        <p>
                                            <span>En ce qui concerne l'engagement à commencer ses
                                                études, nous devons considérer ce qui suit:</span>
                                        </p>
                                        <ul>
                                            <li>
                                                L'étranger doit s'engager à suivre une formation qui
                                                doit être réglementée.
                                            </li>
                                            <li>
                                                Cette formation doit permettre l'obtention d'une
                                                certification officielle de qualifications
                                                professionnelles qui figure dans le Catalogue
                                                national des qualifications professionnelles dans le
                                                domaine de l'administration du travail.
                                            </li>
                                            <li>
                                                Esta formación debe certificar una aptitud técnica
                                                específica.
                                            </li>
                                            <li>
                                                Cette formation doit certifier une compétence
                                                technique spécifique et doit être une formation
                                                permettant et nécessaire pour pouvoir exercer une
                                                occupation spécifique.
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
                                <label for="first">Qu'est-ce que l'arraigo para la formación et quelle est
                                    sa durée?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        L'arraigo para la formación est un permis de résidence
                                        pour des circonstances exceptionnelles qui permet à un
                                        étranger en situation irrégulière d'étudier et de se
                                        former en Espagne. Sa durée est initialement d'1 an,
                                        mais peut être prolongée jusqu'à 2 ans.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Peut-on travailler avec l'arraigo para la formación?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Non, l'arraigo para la formación permet uniquement
                                        d'étudier. Il n'est pas autorisé de travailler pendant
                                        cette période.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Quels sont les requisitos pour obtenir l'arraigo para la
                                    formación?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Les requisitos comprennent avoir au moins 2 ans de
                                        résidence continue en Espagne en situation irrégulière,
                                        ne pas avoir d'antécédents criminels en Espagne et dans
                                        d'autres pays au cours des 5 dernières années, et
                                        s'engager à suivre une formation réglementée aboutissant
                                        à une certification officielle de qualifications
                                        professionnelles.
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
