# Site OLDY — comment le modifier

Le site est construit en **blocs**. Tout le contenu visible est dans un seul
fichier : \`contenu.php\`. Vous n'avez jamais besoin de toucher au HTML.

## Modifier un texte, un tarif, un contact

Ouvrez \`contenu.php\` et changez le texte entre les apostrophes. Enregistrez.
Le site est à jour immédiatement.

## Réordonner les sections

Chaque section est un bloc entre crochets dans la liste \`blocs\`.
Déplacez le bloc dans la liste : l'ordre de la page suit l'ordre de la liste.

## Masquer une section sans la supprimer

Dans le bloc, remplacez \`'actif' => true\` par \`'actif' => false\`.

## Ajouter une section

Copiez-collez un bloc existant du même type et changez son contenu.
Si le bloc a un \`id\`, donnez-lui un identifiant différent.

## Types de blocs disponibles

| type        | à quoi ça sert                                    |
|-------------|---------------------------------------------------|
| \`hero\`      | bandeau d'accueil avec titre et boutons           |
| \`texte\`     | une section de texte centrée                      |
| \`cartes\`    | une grille de cartes courtes                      |
| \`citation\`  | une citation avec auteur et rôle                  |
| \`etapes\`    | une liste numérotée d'étapes                      |
| \`offres\`    | les ateliers avec prix, plus un encadré tarifaire |
| \`contact\`   | le bloc final avec e-mail et téléphone            |

Pour créer un nouveau type de bloc, ajoutez un fichier dans \`blocs/\`
portant le nom du type, puis utilisez ce type dans \`contenu.php\`.

Dans le bloc \`offres\`, chaque atelier peut avoir un champ \`'gamme'\`
optionnel (ex. \`'gamme' => 'Gamme Essentiel'\`) : un petit repère affiché
au-dessus du nom, sans jamais indiquer de prix — les tarifs restent
consultables uniquement dans l'espace client.

## Règle importante

N'écrivez jamais de HTML dans \`contenu.php\`. Tout est échappé
automatiquement : c'est ce qui rend le site insensible aux injections.
Pour les apostrophes dans un texte, utilisez le caractère typographique ’.

## Structure des fichiers

    index.php        moteur de rendu (ne contient aucun texte)
    contenu.php      LE fichier à modifier
    blocs/           un gabarit HTML par type de bloc
    partials/        en-tête et pied de page
    assets/          feuille de style et logo
