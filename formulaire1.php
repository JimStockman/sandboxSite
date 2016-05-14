<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
    <body>

     <p>
     	Veuillez taper votre nom
     </p>  


        <form method="post" action="http://www.monsite.com/cible.php">
        	
            <p>
             	
               <input type="text" name="prenom"/>
               <input type="submit" value="valider"/>  

            </p>

            <textarea name="message" rows="5" cols="27">
Vous pouvez écrire ici ! ;)
            </textarea>

<input type="checkbox" name="case" id="case" /> <label for="case">Avez-vous choisis un pays ?</label>

<!-- case cochée par defaut si dessous grâce à "checked" -->

<input type="checkbox" name="case" checked="checked" />

<select name="choix">
    <option value="choix1">Russie</option>
    <option value="choix2">Suisse</option>
    <option value="choix3">Belgique</option>
    <option value="choix4">Zambie</option>
</select>

        </form>

        <form method="post" action="http://www.monsite.com/cible.php">
        	
<!-- champs caché si dessous -->

<input type="hidden" name="pseudo" value="STRYK3R" />

Aimez-vous le paintball ?

<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>

<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>

        </form>

    </body>
</html>