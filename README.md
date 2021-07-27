# Projet MissionToMars - The Mars Rover Kata
***

## Probleme:

Un rovers robotique doit être posé par la NASA sur un plateau sur Mars.
Ce plateau, curieusement rectangulaire, doit être parcouru par le rovers afin que leurs caméras embarquées puissent avoir une vue complète de la terrain environnant à renvoyer sur Terre.

La position et l'emplacement du rover sont représentés par une combinaison des coordonnées x et y et une lettre représentant l'un des quatre points cardinaux. 
Le plateau est découpé en grille pour simplifier la navigation. 
Un exemple de position pourrait être 0, 0, N, ce qui signifie que le le rover est dans le coin inférieur gauche et fait face au nord.

Afin de contrôler un rover, la NASA envoie une simple chaîne de lettres.
Les lettres possibles sont 'L', 'R' et 'F', 'B'.

'L' et 'R' font tourner le rover à 90 degrés respectivement vers la gauche ou la droite mais sans bouger de son emplacement actuel.
« F » signifie avancer d'un point de la grille et maintenir le même cap.
« B » signifie reculer d'un point de la grille et maintenir le même cap.

Supposons que le carré directement au nord de (x, y) est (x, y+1).

### INPUT:

Le rover reçoit des lignes d'entrée. La ligne est une série d'instructions pour dire au rover comment explorer le plateau.

### OUTPUT:

La sortie pour chaque rover devrait être ses coordonnées finales et son cap.

### EXAMPLE:

##### Test Input:

    RFFFFLFFFF
    LFFL

##### Expected Output:

    4 4 N
    2 4 S

## Solution:

### Technologies:
* Réalisé avec le langage PHP.
* Utilisation de PHPUnit (framework open source de tests unitaires dédié au langage de programmation PHP).

### Faire fonctionner le code:
* Taper la commande ```composer install``` pour installer toutes les dépendances
* Aller dans le dossier du projet
* Taper la commande ```php ./src/App.php {arg1} {arg2} ...```
* Par exemple: ```php ./src/App.php RFFFFLFFFF LFFL```
##### Résultat:

    4 4 N
    2 4 S

### Faire fonctionner les tests unitaires
* Aller dans le dossier du projet
* Taper la commande ```./vendor/bin/phpunit tests```