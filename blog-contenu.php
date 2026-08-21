<?php
/* ===========================================================================
   CONTENU DU BLOG OLDY

   C'est le SEUL fichier à modifier pour ajouter, changer ou retirer un
   article de blog. Le fonctionnement reprend celui de contenu.php.

   Pour ajouter un article :
     1. Copiez-collez un bloc d'article existant dans 'articles'.
     2. Changez sa clé (le slug, ex. 'mon-nouvel-article') : c'est ce qui
        apparaît dans l'URL, en minuscules, avec des tirets, sans accents.
     3. Placez le nouvel article EN PREMIER dans la liste : les articles
        s'affichent dans l'ordre où ils sont écrits ici, du plus récent
        (en haut) au plus ancien (en bas).

   Le corps d'un article est une liste de 'sections' de plusieurs types :
     - intro       : le chapeau, juste sous le titre (un seul par article)
     - titre2      : un sous-titre principal (H2)
     - titre3      : un sous-titre secondaire, sous un titre2 (H3)
     - paragraphe  : un paragraphe de texte
     - liste       : une liste de points, chacun avec un titre court et un texte
     - encadre     : un encart mis en valeur (avec un lien optionnel)

   Pour retirer un article sans le supprimer, mettez 'actif' => false.

   N'écrivez jamais de HTML ici : tout est échappé automatiquement, c'est ce
   qui rend le site insensible aux injections.

   Attention : à l'intérieur d'un texte, écrivez les apostrophes avec le
   caractère typographique ’ (et non ') pour ne rien avoir à échapper.
   =========================================================================== */

return [

  'articles' => [

    'ateliers-automne-ehpad-idees-activites-sensorielles' => [
      'actif'         => true,
      'titre'         => 'Ateliers créatifs pour l’automne en EHPAD : idées d’activités sensorielles pour animer votre résidence',
      'accroche'      => 'Sept idées d’ateliers sensoriels pour l’automne en EHPAD et résidence senior, les bienfaits de la stimulation sensorielle, et comment adapter chaque activité à la mobilité réduite.',
      'date'          => '2026-08-21',
      'temps_lecture' => '6 min',
      'image'         => 'atelier-1.jpg',
      'image_alt'     => 'Résidents assis autour d’une table, occupés à un atelier créatif sensoriel avec fleurs séchées et perles.',
      'mots_cles'     => ['activité EHPAD automne', 'atelier sensoriel senior', 'animation résidence autonomie', 'stimulation sensorielle personnes âgées'],

      'sections' => [

        ['type' => 'intro', 'texte' => 'Chaque automne, la lumière change, les odeurs aussi : feuilles mouillées, épices, bois, sous-bois. Pour une résidence senior, une résidence autonomie ou un EHPAD, cette saison est une occasion naturelle de proposer des ateliers qui réveillent les sens plutôt que de simplement occuper un après-midi. Voici de quoi construire une programmation d’automne concrète, avec des idées d’activités et la méthode pour les adapter à un public à mobilité réduite.'],

        ['type' => 'titre2', 'texte' => 'Pourquoi la stimulation sensorielle a sa place à l’automne'],

        ['type' => 'paragraphe', 'texte' => 'La stimulation sensorielle sollicite l’attention, la mémoire et la perception en s’appuyant sur ce que le corps reconnaît directement : une odeur, une texture, une couleur. Chez les personnes âgées, ce type d’activité a un effet documenté sur le bien-être émotionnel — les odeurs et les textures familières raniment des souvenirs, créent des expériences agréables et favorisent les échanges entre résidents. Les activités sensorielles plus douces, elles, contribuent à réduire le stress et l’anxiété.'],

        ['type' => 'paragraphe', 'texte' => 'L’automne est une saison particulièrement riche pour ce travail sensoriel : la cannelle, le clou de girofle, la châtaigne grillée, l’odeur d’humus et de bois mouillé, la palette de couleurs chaudes — ocre, rouille, brun — plus contrastée et donc plus facile à percevoir pour des yeux vieillissants. Autant de repères concrets à utiliser dans l’animation, sans qu’il soit nécessaire de sortir de l’établissement.'],

        ['type' => 'titre2', 'texte' => 'Sept idées d’ateliers sensoriels pour l’automne'],

        ['type' => 'paragraphe', 'texte' => 'Des formats simples à monter, à adapter à la taille de votre groupe et au temps dont vous disposez :'],

        ['type' => 'liste', 'items' => [
          ['titre' => 'Atelier olfactif épices et sous-bois', 'texte' => 'Faire deviner à l’aveugle des odeurs d’automne — cannelle, clou de girofle, pomme, feuilles séchées — dans de petits sachets ou flacons. Un exercice de mémoire et de reconnaissance qui fonctionne même avec des résidents très en retrait.'],
          ['titre' => 'Composition de feuillages séchés', 'texte' => 'Assembler des feuilles, fleurs et éléments naturels séchés sur un support à encadrer. Un travail de composition libre, sans contrainte de précision, qui laisse toute la place au choix personnel.'],
          ['titre' => 'Couronne d’automne', 'texte' => 'Une couronne décorative en feuillages, baies et éléments naturels à suspendre sur une porte ou un mur commun — un projet qui prend forme visiblement au fil de la séance et qui reste ensuite dans l’établissement.'],
          ['titre' => 'Bougie ou suspension parfumée', 'texte' => 'La réalisation d’un objet parfumé, personnalisable par le choix du parfum et des éléments décoratifs. Le geste de couler ou d’assembler peut être supervisé pour les résidents les moins autonomes.'],
          ['titre' => 'Parcours tactile de textures', 'texte' => 'Faire toucher, sans les nommer à l’avance, des matières d’automne : écorce, pomme de pin, laine, feuille sèche, châtaigne. Utile en atelier autonome pour des résidents en perte de repères verbaux, car le toucher ne demande pas de langage.'],
          ['titre' => 'Dégustation guidée de saveurs d’automne', 'texte' => 'Faire reconnaître au goût des produits de saison — pomme, poire, châtaigne, épices — avant de les nommer ensemble. Un moment convivial qui mobilise une autre porte d’entrée sensorielle que la vue ou le toucher.'],
          ['titre' => 'Mini-jardin ou terrarium', 'texte' => 'Composer un petit jardin en pot, à garder en chambre : une façon de retrouver un contact avec le végétal quand les sorties extérieures se raréfient avec le froid.'],
        ]],

        ['type' => 'titre2', 'texte' => 'Comment adapter une activité à la mobilité réduite'],

        ['type' => 'paragraphe', 'texte' => 'La stimulation sensorielle n’a de valeur que si chaque résident peut réellement y participer, quelles que soient ses capacités physiques ou cognitives du jour. Trois leviers simples changent beaucoup.'],

        ['type' => 'titre3', 'texte' => 'Adapter le poste, pas l’activité'],
        ['type' => 'paragraphe', 'texte' => 'Un poste individuel réglable en hauteur permet à un résident en fauteuil de travailler à la même table que les autres, sans adaptation de l’exercice lui-même. L’objectif est que la contrainte reste sur le mobilier, jamais sur le contenu de l’atelier.'],

        ['type' => 'titre3', 'texte' => 'Réduire ce qui demande de la dextérité fine'],
        ['type' => 'paragraphe', 'texte' => 'Préparer à l’avance ce qui exige de la précision — matériel pré-découpé, quantités pré-dosées, moules déjà en place — pour que le résident garde la main sur les choix (couleur, parfum, décor) sans être bloqué par un geste technique devenu difficile.'],

        ['type' => 'titre3', 'texte' => 'Prévoir une version sans manipulation'],
        ['type' => 'paragraphe', 'texte' => 'Pour les résidents qui ne peuvent plus manipuler, garder une place pour une participation purement sensorielle : sentir, toucher, commenter, choisir à voix haute pendant qu’un animateur ou un voisin de table réalise le geste. Personne n’est mis à l’écart, même sans les mains.'],

        ['type' => 'titre2', 'texte' => 'Construire une programmation d’automne cohérente'],

        ['type' => 'paragraphe', 'texte' => 'Une séance d’une heure à une heure trente, pour un groupe d’une dizaine de résidents, avec un poste individuel par participant, reste le format le plus simple à tenir dans la durée. Alterner les portes d’entrée sensorielles d’une séance à l’autre — odorat une semaine, toucher la suivante, goût ensuite — évite la lassitude et permet de repérer les résidents qui répondent mieux à un sens qu’à un autre.'],

        ['type' => 'encadre', 'titre' => 'S’appuyer sur un partenaire clé en main', 'texte' => 'Certains établissements choisissent de déléguer l’organisation à un intervenant extérieur pour libérer du temps d’équipe. OLDY, par exemple, anime ce type d’atelier sensoriel — suspensions et bougies parfumées, bouquets en cire, terrariums, couronnes d’automne — en apportant le matériel et en repartant avec le rangement, dans des résidences seniors, résidences autonomie et EHPAD.', 'lien' => ['label' => 'Découvrir les ateliers OLDY', 'url' => '/#ateliers']],

      ],
    ],

  ],

];
