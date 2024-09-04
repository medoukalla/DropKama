<x-fr.head title="{{ setting('site.title') . ' - ' . $page->title }}" />


<div class="wrapper bg-dark">

    <x-fr.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}') }}" alt="img" class="img-fluid">

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
                                        Pour de nombreux étrangers, le refus de leur demande de résidence peut
                                        ressembler à la fin du monde, estimant qu'ils ont perdu toute possibilité de
                                        l'obtenir définitivement. Cependant, c’est loin d’être vrai. Il existe trois
                                        options ou étapes différentes que vous pouvez toujours suivre pour obtenir votre
                                        carte verte. <br> Dans cet article, nous explorerons en détail chacun de ces
                                        recours : le recours en réexamen, le recours en appel et le recours
                                        contentieux-administratif. <br> Nous analyserons leurs principales différences,
                                        le moment où il est nécessaire de déposer chacun, les délais et délais de
                                        réponse, et nous vous proposerons des conseils pratiques pour réussir votre
                                        dépôt de recours.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>A quoi sert une recours en immigration ?</h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Un recours en matière d'immigration sert d'outil juridique pour contester le
                                        rejet d'une demande de séjour ou de renouvellement de carte. <br> Elle est
                                        présentée sous la forme d'un écrit formel au bureau de l'immigration ou à
                                        l'organisme compétent, exprimant notre désaccord avec la décision et demandant
                                        un réexamen. <br> L'objectif est de faire réévaluer notre dossier, soit parce
                                        que nous croyons répondre à toutes les exigences, soit parce que nous
                                        considérons qu'il y a eu une erreur dans l'évaluation. <br> Il est crucial de
                                        présenter des arguments solides qui soutiennent notre demande et justifient
                                        pourquoi nous méritons une réponse favorable.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Avantages de déposer un recours en matière d'immigration :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Si vous avez obtenu une résolution négative dans votre demande de résidence ou
                                        de renouvellement, <span>cela vaut-il la peine et le temps qu'exige un appel
                                            ?</span> du même. Les recours n'ont pas de coûts ou de frais associés que
                                        vous devez payer ( <span>elles sont donc totalement gratuites</span> ), et le
                                        pire résultat que vous puissiez obtenir est de rester dans la même situation de
                                        déni ( <span>mais vous avez beaucoup à gagner</span> ). D'autre part, pendant la
                                        durée du recours, vous bénéficierez du droit de séjour, vous éviterez ainsi la
                                        possibilité de recevoir un dossier d'expulsion. Et, en outre, pendant la période
                                        temporaire pendant laquelle le recours est traité, vous pourrez soumettre à
                                        nouveau votre demande ( <span>à partir de 0</span> ) ou en démarrer un nouveau,
                                        Le recours vous permettrait donc de gagner du temps supplémentaire pour
                                        régulariser votre situation.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Les types de recours selon l'organisme auquel nous l'envoyons :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        De manière générale, il existe deux types de recours disponibles pour lutter
                                        contre une résolution négative, Selon l'institution à laquelle nous envoyons
                                        notre recours, nous retrouvons les deux grands groupes suivants :
                                    <div class="p-list">
                                        <ul>
                                            <li><span>Recours administratives</span>, si elles s'adressent directement
                                                au Bureau des Etrangers (l'Administration), qui est celui qui a résolu
                                                négativement notre demande de séjour (initiale ou renouvelée).</li>
                                            <li><span>Moyen judiciaire</span>, lorsque nous déposons l'appel devant un
                                                juge. Nous ne pourrons accéder à cette voie qu'après avoir épuisé la
                                                voie administrative ; C'est-à-dire qu'il faut d'abord avoir parcouru
                                                chacune des recours administratives offertes par la loi.</li>
                                        </ul>
                                    </div>
                                    </p>
                                    <p>Comme nous allons le voir maintenant, il existe deux types de recours
                                        administratifs, le recours en appel et le recours en réexamen.</p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Recurso de alzada :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Au sein de la voie administrative, le premier type de recours que l'on trouve
                                        est le recours. <br>
                                        Elle peut être déposée lorsque la voie administrative n'est pas encore épuisée.
                                        Autrement dit, cela aura lieu lorsque la personne ( <span>fonctionnaire</span> )
                                        qui a analysé notre dossier et nous a envoyé la réponse négative à la demande
                                        n'est pas la plus haute autorité ou la personne responsable de l'institution
                                        compétente ( <span>c'est-à-dire le bureau de l'immigration ou la subdélégation
                                            gouvernementale</span> ). <br>
                                        Dans ces cas-là, nous demandons au supérieur direct du fonctionnaire qui a
                                        résolu notre demande de l'examiner pour déterminer si son collègue a commis une
                                        erreur ou non. <br>
                                        Logiquement, nous devons expliquer notre raisonnement et préciser exactement
                                        pourquoi la résolution a été émise par erreur. <br>
                                        Le dépôt de ce type de recours est obligatoire si l’on souhaite accéder
                                        ultérieurement à une procédure judiciaire.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Recours de reposición :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Dans les cas où nous avons adressé un recours à la plus haute autorité de
                                        l'administration pour reconsidérer notre demande et que nous avons reçu une
                                        autre réponse de rejet, nous pouvons alors déposer un recours pour réexamen.
                                        <br>
                                        Comme il n'y a plus personne au-dessus de cette personne qui puisse réétudier le
                                        dossier, nous demandons à ce chef de l'Office des Etrangers ou de la
                                        Subdélégation du Gouvernement de revoir lui-même (et encore) sa décision. <br>
                                        Si le recours est présenté correctement et suffisamment motivé, il est très
                                        probable que nous obtenions le droit de séjour de cette manière.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Recours contentieux-administratif :
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Une fois que nous avons épuisé la voie administrative, nous pouvons passer au
                                        recours contentieux-administratif. <br>
                                        Autrement dit, vous avez demandé votre permis de séjour, votre demande a été
                                        refusée, vous avez déposé un premier recours qui a été rejeté, et enfin vous
                                        avez déposé un deuxième recours en réexamen qui a également été refusé. <br>
                                        On comprend alors que l'Office des étrangers ne modifiera plus sa décision, il
                                        faut donc désormais s'adresser à un juge pour faire rectifier le verdict. <br>
                                        Ainsi, ce recours contentieux-administratif est une procédure judiciaire
                                        utilisée pour contredire les dispositions générales et les actes expresses de
                                        l'Administration Publique.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Quels sont les délais pour faire un recours ?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Les délais pour faire appel d’une demande d’immigration refusée sont essentiels
                                        pour réussir le processus. La loi fixe les délais suivants :
                                    <div class="p-list">
                                        <ul>
                                            <li>Pour les recours administratifs, le délai est de 1 mois à compter du
                                                lendemain de la notification de la décision de refus.</li>
                                            <li>En revanche, le délai pour introduire un recours
                                                contentieux-administratif est de 2 mois à compter de la date de
                                                réception de la résolution, qui dans ce cas serait la date du recours en
                                                réexamen.</li>
                                        </ul>
                                    </div>
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Combien de temps faut-il pour répondre à un recours ?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        La durée de réponse à un recours varie selon le type de recours introduit :
                                    <div class="p-list">
                                        <ul>
                                            <li>En cas de recours, l'administration dispose d'un délai de 3 mois pour
                                                trancher. A défaut de réponse dans ce délai, le recours est réputé
                                                rejeté.</li>
                                            <li>En revanche, le recours en réexamen doit être résolu dans un délai
                                                maximum de 1 mois. Si une réponse n’a pas été donnée dans ce délai, elle
                                                pourra également être considérée comme rejetée.</li>
                                        </ul>
                                    </div>
                                    Il est important de garder à l'esprit que ces délais sont généraux et peuvent varier
                                    en fonction de la ville et de la Communauté Autonome dans laquelle vous vous
                                    trouvez. Dans certains cas, il est possible de recevoir une réponse dans un délai
                                    beaucoup plus court.
                                    </p>
                                </div>
                            </div>
                            <!-- paragraph -->
                            <div class="subject">
                                <div class="p-title mb-2">
                                    <h3>
                                        Puis-je quitter l’Espagne si j’ai fait recours ?
                                    </h3>
                                </div>
                                <div class="p-paragraph">
                                    <p>
                                        Concernant la possibilité de quitter l’Espagne après avoir fait appel, cela
                                        n’est malheureusement pas possible. Si vous avez déposé un recours, vous devez
                                        rester en Espagne jusqu'à ce qu'une réponse soit reçue. Contrairement aux cas où
                                        le renouvellement de la carte de séjour est attendu, où une autorisation de
                                        retour pour voyager peut être demandée, lorsqu'un recours est déposé, une
                                        première réponse négative a été reçue, ce qui signifie qu'il ne s'agit pas d'un
                                        résident légal en Espagne.
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
                                <label for="first">Qu'est-ce qu'un recours administrative ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        Un recours administratif est une procédure judiciaire par laquelle une personne
                                        ou une entité conteste une décision administrative qu'elle considère comme
                                        injuste ou incorrecte. Il permet de demander le réexamen de la décision devant
                                        la même autorité qui l'a rendue ou devant une autorité supérieure.
                                    </p>
                                </div>
                            </li>
                            <!-- Second Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="second" />
                                <label for="second">Quel est l’objectif d’introduire un recours administratif ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
                                    <p>
                                        L’objectif principal du dépôt d’un recours administratif est de contester une
                                        décision administrative considérée comme injuste ou incorrecte. Cherche à
                                        obtenir un réexamen de la décision par l’autorité compétente pour corriger
                                        d’éventuelles erreurs ou injustices.
                                    </p>
                                </div>
                            </li>
                            <!-- Third Question -->
                            <li>
                                <input class="accordion-input" type="radio" name="accordion" id="third" />
                                <label for="third">Quelles sont les démarches pour introduire un recours
                                    administratif ?
                                    <img src="{{ asset('img/arrow-bold.svg') }}" alt="arrow icon" />
                                </label>
                                <div class="acc-content">
                                    <img src="{{ asset('img/balance-scale.svg') }}" alt="Balance icon" />
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
