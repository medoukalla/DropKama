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
                                        La Selectividad en Espagne, également connue sous le nom
                                        d'Évaluation du Baccalauréat pour l'Accès à l'Université
                                        (EBAU ou EvAU), est un examen écrit passé par les
                                        étudiants qui souhaitent accéder à des études
                                        universitaires dans des universités publiques et privées
                                        en Espagne. Cet examen évalue les connaissances et les
                                        capacités acquises pendant le Baccalauréat ou des études
                                        équivalentes au Maroc et est structuré en deux phases :
                                        la phase obligatoire (anglais, mathématiques...) et la
                                        phase facultative (biologie, chimie...). La Selectividad
                                        a lieu à différentes dates, généralement en juin, et la
                                        note obtenue à cet examen est déterminante pour l'accès
                                        à l'université et le choix de la carrière. La note de la
                                        Selectividad n'expire pas (la partie facultative expire
                                        après 2 ans, tandis que la partie obligatoire ne le fait
                                        pas), donc en cas de besoin d'amélioration, les
                                        étudiants peuvent se présenter à de nouvelles
                                        convocations de l'examen.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-paragraph">
                                    <div class="p-number">
                                        <ul>
                                            <li>
                                                Quels sont les requisitos pour que les étudiants
                                                marocains puissent postuler aux universités
                                                espagnoles ?
                                            </li>
                                            <p>
                                                Les étudiants marocains doivent obtenir une note
                                                minimale pour pouvoir postuler aux universités
                                                espagnoles. Cette note minimale varie selon
                                                l'université et le programme d'études choisi. Les
                                                étudiants doivent également avoir réussi leur
                                                dernière année d'études secondaires.
                                            </p>
                                            <li>
                                                Quelle est l'importance de la Selectividad pour les
                                                étudiants marocains qui souhaitent étudier en
                                                Espagne ?
                                            </li>
                                            <p>
                                                La Selectividad peut être un défi pour les étudiants
                                                marocains, mais elle est essentielle pour pouvoir
                                                postuler à une université espagnole. En passant cet
                                                examen, les étudiants peuvent accéder à une large
                                                gamme de programmes universitaires dans des domaines
                                                tels que les sciences, les sciences sociales, les
                                                arts et les humanités.
                                            </p>
                                            <li>
                                                Quel rôle joue la Selectividad dans l'accès des
                                                étudiants marocains à différents programmes
                                                universitaires en Espagne ?
                                            </li>
                                            <p>
                                                La Selectividad est une étape cruciale pour les
                                                étudiants marocains qui souhaitent étudier à
                                                l'université en Espagne. Cet examen leur permet
                                                d'accéder à une variété de programmes universitaires
                                                et de se former dans divers domaines académiques et
                                                professionnels.
                                            </p>
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
                                <label for="first">Quels sont les requisitos pour postuler aux universités
                                    espagnoles ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Les requisitos incluent obtenir une note minimale et
                                        réussir la dernière année d'études secondaires avec
                                        succès.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Pourquoi la Selectividad est-elle importante pour les
                                    étudiants marocains qui souhaitent étudier en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        La Selectividad est essentielle pour accéder aux
                                        universités espagnoles et à une large gamme de
                                        programmes universitaires.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Quel est le rôle de la Selectividad dans l'accès à
                                    différents programmes universitaires en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        La Selectividad est cruciale pour accéder à des
                                        programmes universitaires et se former dans divers
                                        domaines académiques et professionnels.
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
