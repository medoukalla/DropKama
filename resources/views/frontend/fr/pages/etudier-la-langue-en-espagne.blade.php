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
                                        Effectuer un séjour linguistique en Espagne est une
                                        option très bénéfique pour les étudiants marocains
                                        désireux d'améliorer leurs compétences en espagnol.
                                        Cette expérience offre une immersion complète dans la
                                        langue et la culture espagnoles, offrant de nombreux
                                        avantages tant sur le plan personnel que professionnel.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Exigences:</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Pour participer à un séjour linguistique en Espagne, les
                                        étudiants marocains doivent être titulaires d'au moins
                                        un baccalauréat ou de son équivalent au Maroc. De plus,
                                        ils doivent demander un visa d'étudiant au consulat
                                        d'Espagne au Maroc.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>Procédure:</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Le processus pour réaliser un séjour linguistique en
                                        Espagne commence par la recherche et la sélection d'une
                                        école ou d'une institution proposant des programmes
                                        d'immersion linguistique. Une fois l'institution
                                        choisie, les étudiants doivent entamer la demande de
                                        visa d'étudiant au consulat d'Espagne au Maroc. Cela
                                        implique de remplir les formulaires requis, de fournir
                                        la documentation nécessaire et de satisfaire aux
                                        exigences établies. De plus, les étudiants doivent
                                        prendre en compte des aspects pratiques tels que le coût
                                        de la vie, le logement et autres dépenses liées au
                                        séjour en Espagne.
                                    </p>
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
                                        démarches d'immigration en Espagne. <br />
                                        Notre cabinet d'avocats spécialisé en immigration est
                                        dédié à aider nos clients à naviguer efficacement à
                                        travers les processus complexes liés aux visas, au
                                        renouvellement des cartes de résidence et à l'obtention
                                        de la nationalité. Avec notre expérience et notre
                                        engagement envers nos clients, nous offrons la
                                        tranquillité d'esprit nécessaire pour que vos projets
                                        d'immigration se déroulent sans complications.
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
                                <label for="first">Quels sont les requisitos pour étudier en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Réponse : Il est nécessaire d'avoir au moins un
                                        baccalauréat ou son équivalent au Maroc, et de demander
                                        un visa d'étudiant au consulat d'Espagne au Maroc.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Quels aspects doivent être pris en compte lors de la
                                    planification d'un séjour linguistique en Espagne ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Il est important de considérer
                                        l'emplacement de l'institution éducative, le coût de la
                                        vie, les options de logement et autres dépenses
                                        associées au séjour en Espagne.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Comment puis-je trouver une institution éducative
                                    appropriée pour réaliser un séjour linguistique en Espagne
                                    ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        <span>Réponse :</span> Vous pouvez rechercher en ligne
                                        et contacter directement les institutions éducatives
                                        pour obtenir des informations sur leurs programmes
                                        d'immersion linguistique et les exigences d'admission.
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
