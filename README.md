## Pré-requis:
Pour jouer, il faut avoir au moins PHP 8 installé et utilisable sur un terminal.

## Comment lancer le projet :
Pour lancer le projet, il faut telecharger les fichiers et dans le terminal, se 
placer sur dans le dossier contenant les fichiers (ici le dossier se nomme 
tic-tac-toe) et taper la commande `php index.php`.

## Comment jouer:
Pour jouer: une fois la commande lancée, le visuel s'affiche dans le terminal
ATTENTION!! Il faut être deux en local ou il faut jouer les deux joueurs.
A ce moment, en dessous du visuel, un message indiquant quel joueur est en train
de jouer (joueur 1 = X, joueur 2 = O) et il faut entrer la lettre de la colonne
en majuscule (A,B ou C) et le nombre de la ligne (1,2 ou 3) peut importe l'ordre.
Lorsqu'un joueur reussis aligner 3 de ses signes, un message apparait et indique
quel joueur a gagner et arrête le jeux.
Si la grille est remplie mais qu'aucun des joueurs n'a gagner, un message apparait
et indique "Match nul" et arrête le jeu.
Pour recommencer une partie, if faut retaper la commande `php index.php`.
