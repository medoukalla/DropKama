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
                            <!-- Number -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Présentation</h3>
                                </div>
                                <div class="p-paragraph">
                                    <div class="p-number">
                                        <p>
                                            Les formations professionnelles (grado superior) en
                                            Espagne sont une option populaire pour les étudiants
                                            maghrébins qui souhaitent poursuivre leurs études
                                            supérieures. Contrairement aux programmes
                                            universitaires traditionnels, les formations
                                            professionnelles mettent l'accent sur les compétences
                                            pratiques et préparent les étudiants à entrer sur le
                                            marché du travail dès l'obtention de leur diplôme.
                                        </p>
                                        <ul>
                                            <li>
                                                Quels sont les domaines couverts par les formations
                                                professionnelles en Espagne et quelle est leur durée
                                                ?
                                            </li>
                                            <p>
                                                <span>Les formations professionnelles en Espagne</span>
                                                couvrent divers domaines tels que
                                                <span>l'administration des affaires, le design, les
                                                    technologies de l'information et le tourisme</span>, et peuvent
                                                durer de <span>deux</span> à
                                                <span>trois</span> ans.
                                            </p>
                                            <li>
                                                Quels sont les prérequis pour que les étudiants
                                                marocains puissent étudier une formation
                                                professionnelle en Espagne ?
                                            </li>
                                            <p>
                                                <span>Les étudiants marocains</span> souhaitant
                                                étudier
                                                <span>une formation professionnelle en Espagne</span>
                                                doivent avoir réussi leur diplôme d'éducation
                                                secondaire et pouvoir démontrer leur niveau de
                                                compétence en espagnol.
                                            </p>
                                            <li>
                                                Pourquoi les formations professionnelles (grado
                                                supérieur) en Espagne sont-elles une option
                                                populaire parmi les étudiants maghrébins qui
                                                souhaitent poursuivre leurs études supérieures ?
                                            </li>
                                            <p>
                                                <span>Les formations professionnelles sont généralement
                                                    moins coûteuses que les programmes</span>
                                                universitaires traditionnels, ce qui les rend
                                                accessibles à un
                                                <span>plus grand nombre d'étudiants marocains</span>. De plus, de
                                                nombreuses formations
                                                professionnelles
                                                <span>offrent des stages ou des projets pratiques pour
                                                    permettre aux étudiants</span>
                                                de se familiariser avec le monde du travail et
                                                d'établir des <span>contacts</span> dans leur
                                                <span>domaine d'études</span>.
                                            </p>
                                            <li>
                                                Quels sont les avantages d'accessibilité des
                                                formations professionnelles en Espagne pour les
                                                étudiants marocains par rapport aux programmes
                                                universitaires traditionnels ?
                                            </li>
                                            <p>
                                                <span>En fin de compte</span>, les formations
                                                professionnelles en <span>Espagne</span> peuvent
                                                être <span>une excellente option</span> pour les
                                                étudiants maghrébins
                                                <span>qui cherchent à acquérir des compétences</span>
                                                pratiques et à se préparer à une carrière réussie.
                                                <span>Ces programmes</span> offrent une formation de
                                                qualité
                                                <span>dans une large gamme de domaines</span> et
                                                constituent une alternative viable aux
                                                <span>études universitaires traditionnelles</span>.
                                            </p>
                                        </ul>
                                    </div>
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
                                <label for="first">Qu'est-ce que un grado superior en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> un grado superior est un
                                        programme de formation professionnelle de deux ans qui
                                        permet d'acquérir des compétences spécifiques dans des
                                        domaines tels que la technologie, la santé, la gestion
                                        et l'industrie.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Quelles sont les exigences typiques pour accéder à un
                                    grado superior en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Les exigences incluent
                                        généralement la possession d'un diplôme d'études
                                        secondaires ou son équivalent.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Quels sont les avantages d’étudier un grado superiorr en
                                    Espagne pour les étudiants marocains ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Les avantages comprennent
                                        l'acquisition de compétences pratiques et spécialisées,
                                        de meilleures perspectives d'emploi et la possibilité
                                        d'acquérir une expérience de travail grâce à des stages.
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
