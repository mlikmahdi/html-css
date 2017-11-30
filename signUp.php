<?php

require "function.php";
require "header.php";

?>

<div class="container">
    <div class="inscription">
        <h2>Inscription :</h2>
        <form action='' method='post'>

            <label for="sexe">Sexe :</label>
            <div>
                <input type="checkbox" id="masculin" value="masculin" name="sexe"/>
                <label for="masculin">M</label>
                <input type="checkbox" id="feminin" value="feminin" name="sexe"/>
                <label for="feminin">F</label>
            </div>
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" />
            </div>
            <div>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" />
            </div>
            <div>
                <label for="pseudos">Pseudos :</label>
                <input type="text" id="pseudos" />
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" />
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" />
            </div>
            <div>
                <label for="password">Confirmer mot de passe :</label>
                <input type="password" id="password" />
            </div>
            <div>
                <label for="pays">Pays :</label>
                <select id="selectPays">
                    <option value="Pays1">France</option>
                    <option value="Pays2">Espagne</option>
                    <option value="Pays3">Belgique</option>
                </select>
            </div>
            <div>
                <label for="date">Date de naissance :</label>
                <input type="date" name="anniversaire">
            </div>
            <div>
                <label for="photo">Photo de profil :</label>
                <input type="file" name="photo" />
            </div>
            <div>
                <input type='submit' name='inscription' value='Envoyer' id="envoyer">
            </div>
        </form>
    </div>
    <div class="newsletter">
        <h2>S'incrire à la newsletter :</h2>
        <div>
            <label for="email">Votre email :</label>
            <input type="email" id="email" />
        </div>
        <div>
            <input type='submit' name='inscription' value='Envoyer' id="envoyer">
        </div>
        </div>
</div>

<?php require "footer.php"; ?>