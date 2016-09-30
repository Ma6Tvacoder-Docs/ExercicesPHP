# Réaliser un sapin de noël en PHP #

## les boucles For ##

Dans cet exercice vous apprendrez à utiliser les boucles 'for' pour travailler sur des données de manieres procedural. Avec la boucle 'for' ou travail sur un ensemble de donnée en même temps et dans un ordre precis également.
	
* formulaire --> GET
* includes
* boucles FOR

Le but de l'exercice va être de creer un formulaire en méthode GET afin de récupérer une variable qui va générer notre Sapin de noël. Les étages du sapin, du tronc ainsi que le nombre de feuilles devront être indéxé sur cette variable.

### 1. Les fichiers : ###

Nous allons utiliser le principe des includes afin d'utiliser de profiter du coté dynamique du PHP. On aura besoin pour ce faire d' un fichier index pour lancer l'exercice, un header qui regroupera toutes les informations et un fichier Sapin qui va générer notre sapin.

#### header.php ####

Le header va contenir les meta (doctype, meta, title, language, link(css, js...), etc...)
une balise body ouvrante et notre formulaire que nous construiront plus tard. Cela nous permetra de modifier plus tard notre sapin a la volée sans avoir a revenir en arrière.

* a. doctype
* b. meta
* c. body
* d. formulaire (on vera cela plus loin...)

#### index.php ####

Le fichier index va simplement charger le header en include et fermer les balise body et html. Il nous permet de ne pas avoir de message d'erreur sur les variables php. Il est possible de faire differement pour n'avoir qu'un seul fichier index qui va tout générer mais par soucis de simplification et de compréhenssion nous procederons de la sorte. 

* a. include header
* b. body fermante
* c. html fermante

#### sapin.php ####

Le fichier sapin va nous permettre de charger et executer notre code php qui va générer notre sapin de noël.
Pour le moment nous allons 

		
		
	
	