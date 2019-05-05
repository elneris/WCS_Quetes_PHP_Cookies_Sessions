Challenge
The Cookie Factory" lance son site e-commerce

Cookies time

A partir des ressources ci-dessus et du template que tu peux récupérer sur github tu vas pouvoir commencer le développement du site e-commerce : "The Cookie Factory"

Il s'agit d'une petite application qui permet de s'identifier avec seulement un nom d'utilisateur, sans appel à une base de données.

    On entre un nom d'utilisateur dans le formulaire de login, celui-ci est pris en compte et enregistré en session. On ne demande pas de mot de passe pour vérifier l'identité.

Si l'utilisateur n'est pas identifié, il n'a pas accès aux pages du site internet autres que index.php et login.php.

    Tant qu'il n’y a pas de variable de session contenant le nom de l'utilisateur, celui-ci est redirigé vers la page de login. Tu peux chercher sur ton moteur de recherche favori comment rediriger en PHP.

Une fois identifié, l'utilisateur est redirigé sur la page index.php où l'on trouve la liste des cookies disponibles. Et bien évidemment, il n'est plus possible d’accéder à la page de login. Petite astuce ;)

Sur cette page, toute une liste de biscuits s'offre à toi. Lorsqu'un client clique sur le bouton d'ajout au panier, il faut enregistrer cet article dans tes variables de sessions.

    Libre à toi de modifier le comportement du bouton pour que l'ajout soit pris en compte.

    Avant d’enregistrer dans $_SESSION le panier du client, tu auras peut-être besoin de faire transiter l'information via $_GET ou $_POST.

Comme tu peux le voir, dans la barre de menu, on souhaite la bienvenue à "Wilder", sers-toi du nom de l'utilisateur pour personnaliser le message d'accueil.
Critères de validation

    On peut s'identifier de manière simple avec seulement un nom d'utilisateur,
    Le nom d'utilisateur donné lors de l'identification est repris sur toutes les pages depuis les sessions,
    Mon panier est stocké dans mes variables de sessions et est affiché sur la page "Panier".
    Il est possible d’accéder uniquement aux pages login.php et index.php tant que l’utilisateur n’est pas connecté.
    La page login.php devient inaccessible une fois connecté, l'utilisateur est redirigé vers la page index.php s'il tente d'y accéder.
    L'utilisateur peut également se délogger à l'aide d'un bouton "déconnexion".

