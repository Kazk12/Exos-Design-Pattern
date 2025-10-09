# Explications

L'objectif de ce projet est de créer une **Commande Laravel** qui s'exécutera grace à `php artisan`.
Cette commande aura pour but de remplir à la base données mysql à partir du fichier json.

Le code métier de votre projet se touve dans le répertoire `App\Quiz`. 
Il contient les classes métiers **Answer**, **Question**, et **Quiz** ainsi que le code associé, à savoir **les factories**, **les interfaces** ...

L'application contiendra **2 models** qui correspondront aux **2 tables** de la base de données, **3 repositories**
- 1 pour Answer et la communication avec la base de données
- 1 pour Question et la communication avec la base de données
- 1 pour le Quiz qui permettra de récupérer et parser les informations du fichier json.

Le repositories du Quiz est un peu particulier.

Il est allié à une classe de type **Presenter**. 

En regardant bien le code du **QuizRepository**, on constate que l'on récupère le fichier, on en récupère le contenu et l'on parse le json qui nous retournera un tableau (grâce au paramètre true de json_decode). 

On parcours ensuite 1 à 1 les lignes de ce tableau, chaque ligne correspondant à une question. 

On envoi la question dans le presenter dont le rôle sera de récuperer les données brutes du Json, et de les retravailler pour les rendre propre afin de les rendre compatible avec la **QuizFactory**.

La commande servant à parser le code Json devra donc effectuer les étapes suivantes : 

- Instancier la QuizFactory
  - Afin de créer et gérer le quiz, celle-ci aura besoin de, File QuizRepository, QuestionRepository.
- Créer le Quiz
  - Appeler la fonction save de Quiz afin que tout s'enregistre en Bdd

Le code permettant d'afficher une question aléatoire sera similaire : 

- Instancuer la **QuizFactory**, non pas en utilisant le **FileQuizRepository** mais avec le **EloquentQuizRepository**

- Créer le **Quiz**

- Appeler la fonction qui permettra de récuperer une question aléatoire

Enfin, le seul objetif de cet exercice sera ensuite de créer un controller, puis une route qui aura pour rôle d'afficher une question de manière aléatoire.

Cette question aura au préalable été rentrée dans la base de données grâce à la commande lancée sur le fichier Json.

Nous ne gererons rien d'autre que cela.

Vous pouvez évidemment complètement dévier de mon code ou ma proposition d'arborescence. 

Egalement, quasiment aucun des fichiers fournis n'est complet, n'hésitez pas à les modifier.

❗Il faut bien comprendre qu'au final, que ça soit par la commande ou par la bdd, le but est de reconstituer la classe **Quiz**, via la **QuizFactory**, qui elle même crééera les questions et appelera la **AnswerFactory**. 

La class **Quiz** contientra un tableau des **Questions**, chaque question contenant un tableau des réponses possibles.