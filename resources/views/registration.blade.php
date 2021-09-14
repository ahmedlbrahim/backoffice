<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription à l'atelier de discussion et validation du cadre d'interopérabilité de Djibouti</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="{{ asset('template/assets/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="particles-js">

</div>
<!-- MultiStep Form -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form id="msform" action="/registration" method="POST" novalidate>
                @csrf
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="fieldiv">
                    <img src="{{ asset('template/assets/images/pnglogo-ansie.png') }}" alt="logo-ansie">
                    <!-- fieldsets -->
                    <fieldset data-step="1">
                        <h2 class="fs-title">Super, pouvons-nous avoir votre nom complet ?</h2>
                        <!--<p class="help-block">List your strengths here.</p>-->
                        <div>
                            <input class="form-control" name="CAT_Custom_1" id="CAT_Custom_1" type="text"
                            placeholder="Veuillez saissir votre nom complet" required/>
                        </div>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    <fieldset data-step="2">
                        <h2 class="fs-title">Et quelle est votre adresse e-mail ?</h2>
                        <div>
                            <input class="form-control" name="CAT_Custom_2" id="CAT_Custom_2" type="email"
                               placeholder="Veuillez saissir votre email" required/>
                        </div>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    <fieldset data-step="3">

                        <h2 class="fs-title">Quel est votre numéro?</h2>
                        <div>
                            <input class="form-control" name="CAT_Custom_3" id="CAT_Custom_3" type="number"
                               placeholder="Veuillez saissir votre numéro de téléphone" required/>
                        </div>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    <fieldset data-step="4">

                        <h2 class="fs-title">L'institution que vous représentez.</h2>
                        <div>
                            <input class="form-control" name="CAT_Custom_4" id="CAT_Custom_4" type="text"
                               placeholder="Veuillez saissir votre institution" required/>
                        </div>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    <fieldset data-step="5">

                        <h2 class="fs-title">Votre fonction.</h2>
                        <div>
                            <input class="form-control" name="CAT_Custom_5" id="CAT_Custom_5" type="text"
                               placeholder="Veuillez saissir votre fonction" required/>
                        </div>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    <fieldset data-step="6">

                        <h2 class="fs-title">Ministère affilié</h2>
                        <select class="form-control" name="CAT_Custom_6" id="CAT_Custom_6">
                            <option value="Présidence">PRÉSIDENCE</option>
                            <option value="PRIMATURE">PRIMATURE</option>
                            <option value="MINISTERE DE LA JUSTICE ET DES AFFAIRES PENITENTIAIRES, CHARGE DES DROITS DE L'HOMME">
                                MINISTERE DE LA JUSTICE ET DES AFFAIRES PENITENTIAIRES, CHARGE DES DROITS DE L'HOMME
                            </option>
                            <option value="MINISTERE DE L'ECONOMIE, DES FINANCES CHARGE DE L'INDUSTRIE">MINISTERE DE
                                L'ECONOMIE, DES
                                FINANCES CHARGE DE L'INDUSTRIE
                            </option>
                            <option value="MINISTERE DES AFFAIRES ETRANGERES ET DE LA COOPERATION INTERNATIONALE, PORTE-PAROLE DU GOUVERNEMENT">
                                MINISTERE DES AFFAIRES ETRANGERES ET DE LA COOPERATION INTERNATIONALE, PORTE-PAROLE DU
                                GOUVERNEMENT
                            </option>
                            <option value="MINISTERE DE LA DEFENSE, CHARGE DES RELATIONS AVEC LE PARLEMENT">MINISTERE DE
                                LA DEFENSE,
                                CHARGE DES RELATIONS AVEC LE PARLEMENT
                            </option>
                            <option value="MINISTERE DE L'INTERIEUR">MINISTERE DE L'INTERIEUR</option>
                            <option value="MINISTERE DU BUDGET">MINISTERE DU BUDGET</option>
                            <option value="MINISTERE DE LA SANTE">MINISTERE DE LA SANTE</option>
                            <option value="MINISTERE DE L'EDUCATION NATIONALE ET DE LA FORMATION PROFESSIONNELLE">
                                MINISTERE DE L'EDUCATION NATIONALE ET DE LA FORMATION PROFESSIONNELLE
                            </option>
                            <option value="MINISTERE DE L'ENSEIGNEMENT SUPERIEUR ET DE LA RECHERCHE">MINISTERE DE
                                L'ENSEIGNEMENT
                                SUPERIEUR ET DE LA RECHERCHE
                            </option>
                            <option value="MINISTERE DE LA FEMME ET DE LA FAMILLE">MINISTERE DE LA FEMME ET DE LA
                                FAMILLE
                            </option>
                            <option value="MINISTERE DE L'AGRICULTURE, DE L'EAU, DE LA PÊCHE, DE L'ELEVAGE ET DES RESSOURCES HALIEUTIQUES">
                                MINISTERE DE L'AGRICULTURE, DE L'EAU, DE LA PÊCHE, DE L'ELEVAGE ET DES RESSOURCES
                                HALIEUTIQUES
                            </option>
                            <option value="MINISTERE DES INFRASTRUCTURES ET DE L'EQUIPEMENT">MINISTERE DES
                                INFRASTRUCTURES ET DE
                                L'EQUIPEMENT
                            </option>
                            <option value="MINISTERE DES AFFAIRES MUSULMANES ET DES BIENS WAKFS">
                                MINISTERE DES AFFAIRES MUSULMANES ET DES BIENS WAKFS
                            </option>
                            <option value="MINISTERE DES AFFAIRES SOCIALES ET DES SOLIDARITES">
                                MINISTERE DES AFFAIRES SOCIALES ET DES SOLIDARITES
                            </option>
                            <option value="MINISTERE DE L'ENERGIE CHARGE DES RESSOURCES NATURELLES">MINISTERE DE
                                L'ENERGIE CHARGE
                                DES
                                RESSOURCES NATURELLES
                            </option>
                            <option value="MINISTERE DU TRAVAIL CHARGE DE LA FORMALISATION ET DE LA PROTECTION SOCIALE">
                                MINISTERE DU TRAVAIL CHARGE DE LA FORMALISATION ET DE LA PROTECTION SOCIALE
                            </option>
                            <option value="MINISTERE DE L'ENVIRONNEMENT ET DU DÉVELOPPEMENT DURABLE">
                                MINISTERE DE L'ENVIRONNEMENT ET DU DÉVELOPPEMENT DURABLE
                            </option>
                            <option value="MINISTERE DE LA VILLE, DE L'URBANISME ET DE L'HABITAT">MINISTERE DE LA VILLE,
                                DE
                                L'URBANISME
                                ET DE L'HABITAT
                            </option>
                            <option value="MINISTERE DE LA COMMUNICATION, CHARGE DES POSTES ET DES TELECOMMUNICATIONS">
                                MINISTERE DE LA COMMUNICATION, CHARGE DES POSTES ET DES TELECOMMUNICATIONS
                            </option>
                            <option value="MINISTERE DU COMMERCE ET DU TOURISME">MINISTERE DU COMMERCE ET DU TOURISME
                            </option>
                            <option value="MINISTERE DE LA JEUNESSE ET DE LA CULTURE">MINISTERE DE LA JEUNESSE ET DE LA
                                CULTURE
                            </option>
                            <option value="MINISTERE DELEGUE CHARGE DE LA DECENTRALISATION">MINISTERE DELEGUE CHARGE DE
                                LA
                                DECENTRALISATION
                            </option>
                            <option value="MINISTERE DELEGUE CHARGE DE L'ECONOMIE NUMERIQUE ET DE L'INNOVATION">
                                MINISTERE DELEGUE CHARGE DE L'ECONOMIE NUMERIQUE ET DE L'INNOVATION
                            </option>
                            <option value="SECRETARIAT D'ETAT CHARGÉ DES INVESTISSEMENTS ET DU DÉVELOPPEMENT DU SECTEUR PRIVÉ">
                                SECRETARIAT D'ETAT CHARGÉ DES INVESTISSEMENTS ET DU DÉVELOPPEMENT DU SECTEUR PRIVÉ
                            </option>
                            <option value="SECRETARIAT D'ETAT CHARGÉ DES SPORTS">SECRETARIAT D'ETAT CHARGÉ DES SPORTS
                            </option>
                        </select>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    <fieldset data-step="7">

                        <h2 class="fs-title">Des questions sur l'événement ?</h2>
                        <textarea class="form-control" name="CAT_Custom_7" id="CAT_Custom_7" rows="4"></textarea>
                        <p>Nous vous répondrons par email.</p>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    
                    <fieldset>

                        <h2 class="fs-title">C'est tout pour le moment.
                            Nous espérons que vous êtes aussi excité que nous à bientôt.</h2>
                        <div class="success-checkmark">
                            <div class="check-icon">
                                <span class="icon-line line-tip"></span>
                                <span class="icon-line line-long"></span>
                                <div class="icon-circle"></div>
                                <div class="icon-fix"></div>
                            </div>
                        </div>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="submit" name="submit" class="submit action-button" value="Submit"/>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.MultiStep Form -->
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src="{{ asset('template/assets/js/particles.min.js') }}"></script>
<script src="{{ asset('template/assets/js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha512-0QDLUJ0ILnknsQdYYjG7v2j8wERkKufvjBNmng/EdR/s/SE7X8cQ9y0+wMzuQT0lfXQ/NhG+zhmHNOWTUS3kMA==" crossorigin="anonymous"></script>
<script>
    jQuery.extend(jQuery.validator.messages, {
        required: "Ce champ est requis.",
        email: "Veuillez entrer une adresse mail valide.",
    });
</script>
</body>
</html>