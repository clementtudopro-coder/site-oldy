<?php
/* ===========================================================================
   CONTENU DU SITE OLDY

   C'est le SEUL fichier à modifier pour changer les textes, les tarifs,
   les coordonnées ou l'ordre des sections.

   Chaque entrée de « blocs » est une section de la page :
     - changer un texte      : modifiez le texte entre les apostrophes
     - réordonner            : déplacez le bloc dans la liste
     - masquer une section   : mettez 'actif' => false
     - dupliquer une section : copiez-collez le bloc entier

   N'écrivez jamais de HTML ici : tout est échappé automatiquement, c'est ce
   qui rend le site insensible aux injections.

   Attention : à l'intérieur d'un texte, écrivez les apostrophes avec le
   caractère typographique ’ (et non ') pour ne rien avoir à échapper.
   =========================================================================== */

return [

  'site' => [
    'nom'          => 'OLDY',
    'titre'        => 'OLDY — Ateliers créatifs et sensoriels pour seniors',
    'description'  => 'OLDY conçoit et anime des ateliers créatifs clé en main dans les résidences seniors, résidences autonomie et EHPAD : suspensions et bougies parfumées, bouquets de fleurs en cire, terrariums.',
    'email'        => 'ateliers.oldy@gmail.com',
    'telephone'    => '+33 6 99 94 92 98',
    'espace_url'   => 'https://espace.ateliersoldy.fr/login.php',
    'espace_label' => 'Espace membre',
    'menu' => [
      ['label' => 'Notre mission', 'ancre' => '#mission'],
      ['label' => 'Le déroulé',    'ancre' => '#deroule'],
      ['label' => 'Nos ateliers',  'ancre' => '#ateliers'],
      ['label' => 'Blog',          'ancre' => '/blog/'],
      ['label' => 'Contact',       'ancre' => '#contact'],
    ],
  ],

  'blocs' => [

    [
      'type'     => 'hero',
      'actif'    => true,
      'surtitre' => 'Ateliers créatifs pour seniors',
      'titre'    => 'Réveillez les sens. Éveillez la créativité.',
      'texte'    => 'OLDY conçoit et anime des ateliers créatifs et sensoriels, 100 % clé en main, dans les résidences seniors et les établissements accueillant des personnes âgées.',
      'bouton_principal'  => ['label' => 'Demander un devis',      'lien' => '#contact'],
      'bouton_secondaire' => ['label' => 'Découvrir les ateliers', 'lien' => '#ateliers'],
      'photo'         => 'atelier-1.jpg',
      'photo_alt'     => 'Résidents assis autour d’une table, créant chacun leur suspension parfumée avec fleurs séchées et perles.',
      'photo_legende' => 'Atelier suspensions parfumées',
    ],

    [
      'type'     => 'texte',
      'actif'    => true,
      'id'       => 'mission',
      'surtitre' => 'Notre mission',
      'titre'    => 'Et si chaque résident devenait artiste ?',
      'paragraphes' => [
        'Les seniors ont soif de distractions et de nouveautés. OLDY répond à ce besoin en proposant des expériences créatives qui réveillent la curiosité, tissent des liens et font naître une véritable fierté créative.',
        'Chaque atelier est pensé pour que chacun participe à son rythme, quelles que soient ses capacités, et reparte avec une création qui lui appartient.',
      ],
    ],

    [
      'type'   => 'cartes',
      'actif'  => true,
      'id'     => 'atouts',
      'titre'  => 'Pourquoi OLDY',
      'cartes' => [
        ['titre' => '100 % clé en main',   'texte' => 'Nous apportons le matériel, installons les postes individuels et repartons avec le rangement. Votre équipe n’a rien à préparer.'],
        ['titre' => 'Flexibles',           'texte' => 'Le format, la durée et le niveau de difficulté s’adaptent au groupe : résidence autonomie, EHPAD, club senior ou CCAS.'],
        ['titre' => 'Liens humains forts', 'texte' => 'L’atelier est autant un moment de création qu’un moment d’échange. Le rythme laisse toute sa place à la conversation.'],
      ],
    ],

    [
      'type'   => 'citation',
      'actif'  => true,
      'texte'  => 'Après de nombreuses années passées sur les marchés à créer des bougies parfumées, j’ai eu la chance de côtoyer quotidiennement des personnes âgées. Ces moments d’échange et d’affection ont fait naître l’envie de transmettre ce savoir-faire à travers des ateliers conviviaux et accessibles, dédiés aux seniors.',
      'auteur' => 'Tara Lebon',
      'role'   => 'Fondatrice et animatrice — Maison Kara Paris',
    ],

    [
      'type'   => 'etapes',
      'actif'  => true,
      'id'     => 'deroule',
      'titre'  => 'Le déroulé d’un atelier',
      'intro'  => 'Exemple : l’atelier suspension parfumée. Format 1 h 30, groupe de 10 personnes, 20 minutes de mise en place, un poste individuel par participant.',
      'etapes' => [
        ['titre' => 'Accueil',                 'texte' => 'Chaque accueil suit un rituel régulier, afin de rassurer les participants et d’installer une routine familière.'],
        ['titre' => 'Explication de l’atelier','texte' => 'Nous détaillons chaque étape et montrons le déroulé complet avant de commencer.'],
        ['titre' => 'Le choix des options',    'texte' => 'Chacun personnalise sa création dans la limite des options retenues : moule, parfum, décorations.'],
        ['titre' => 'Le coulage',              'texte' => 'Supervisé par Tara. L’autonomie est laissée à chacun selon ses capacités.'],
        ['titre' => 'Le temps de séchage',     'texte' => 'Un moment d’échange où l’on choisit les décors et où l’on prend le temps d’explorer l’univers créatif.'],
        ['titre' => 'La pose du décor',        'texte' => 'Éléments décoratifs et finitions : c’est le moment des choix finaux.'],
        ['titre' => 'Démoulage et remise',     'texte' => 'Finitions, remise des créations et temps d’échange pour clore l’atelier.'],
      ],
    ],

    [
      'type'     => 'galerie',
      'actif'    => true,
      'id'       => 'moments',
      'surtitre' => 'En images',
      'titre'    => 'Un moment de partage, en toute simplicité',
      'intro'    => 'Concentration, échanges et sourires : quelques instants pris sur le vif lors d’un atelier suspensions et bouquets parfumés.',
      'photos'   => [
        ['fichier' => 'atelier-1.jpg', 'alt' => 'Résidents assis autour d’une grande table, créant chacun leur suspension parfumée avec fleurs séchées et perles.'],
        ['fichier' => 'atelier-2.jpg', 'alt' => 'Tara, l’animatrice, échange avec les participants autour du plateau de flacons de parfum et de matériel.'],
        ['fichier' => 'atelier-3.jpg', 'alt' => 'Gros plan sur les mains des participants composant leurs créations en cire, entourées de fleurs séchées et paillettes.'],
      ],
    ],

    [
      'type'   => 'cartes',
      'actif'  => true,
      'id'     => 'materiaux',
      'titre'  => 'Des matériaux sains et sûrs',
      'cartes' => [
        ['titre' => 'Cire de soja',              'texte' => '100 % végétale et sans OGM.'],
        ['titre' => 'Parfums européens',         'texte' => 'Responsables et sains, sans phtalates ni substances cancérigènes.'],
        ['titre' => 'Fleurs séchées françaises', 'texte' => 'Ignifugées, pour une sécurité totale en établissement.'],
        ['titre' => 'Moules et accessoires',     'texte' => 'Un large choix de formes, de moules et de décors, renouvelé au fil des saisons.'],
      ],
    ],

    [
      'type'   => 'offres',
      'actif'  => true,
      'id'     => 'ateliers',
      'titre'  => 'Nos ateliers',
      'intro'  => 'Huit formats, tous clé en main, pensés pour des groupes d’une dizaine de personnes.',
      'offres' => [
        ['nom' => 'Suspension parfumée',       'theme' => 'Univers olfactif',   'gamme' => 'Gamme Découverte', 'texte' => 'Une suspension parfumée entièrement personnalisable — parfum, fleurs séchées, pierres naturelles, paillettes — à suspendre dans une armoire, un tiroir ou une pièce, qu’elle embaume subtilement.'],
        ['nom' => 'Bougie parfumée',           'theme' => 'Univers olfactif',   'texte' => 'La réalisation complète d’une véritable bougie parfumée, entièrement personnalisable.'],
        ['nom' => 'Bouquet de cire parfumée',  'theme' => 'Univers olfactif',   'gamme' => 'Gamme Essentiel',  'texte' => 'Un bouquet de fleurs en cire : une alternative décorative et parfumée au bouquet frais, qui ne fane pas.'],
        ['nom' => 'Terrarium',                 'theme' => 'Végétal',            'gamme' => 'Gamme Signature',  'texte' => 'Un mini-jardin composé par chaque participant, à garder dans sa chambre ou son logement.'],
        ['nom' => 'Tableau végétal',           'theme' => 'Végétal',            'gamme' => 'Gamme Signature',  'texte' => 'Une composition encadrée de fleurs et feuillages séchés, assemblée comme un petit tableau à accrocher dans sa chambre ou à offrir.'], // texte à valider — brouillon
        ['nom' => 'Kokedama',                  'theme' => 'Végétal',            'gamme' => 'Gamme Découverte', 'texte' => 'Une plante enveloppée de mousse et de fil, façon jardin japonais miniature, à poser sur une coupelle ou à suspendre dans sa chambre.'], // texte à valider — brouillon
        ['nom' => 'Porte-clefs',               'theme' => 'Créatif & manuel',   'gamme' => 'Gamme Découverte', 'texte' => 'Un atelier manuel et coloré, façon scoubidou : pampilles, perles et rubans.'],
        ['nom' => 'Couronne d’automne',        'theme' => 'Créatif & manuel',   'gamme' => 'Gamme Essentiel',  'texte' => 'Une couronne décorative composée de feuillages, baies et éléments naturels aux couleurs de l’automne, à suspendre sur une porte ou un mur.'], // texte à valider — brouillon
      ],
      'encadre_titre'   => 'Un budget maîtrisé, adapté à votre établissement',
      'encadre_texte'   => 'Le prix d’un atelier se compose d’un forfait d’animation et d’un coût matériel par participant. Le coût matériel dépend des options choisies : vous ajustez le budget à la taille du groupe et au type d’atelier.',
      'encadre_exemple' => 'La gamme Découverte démarre à 230 € HT, pour un groupe de 10 personnes, matériel compris.',
      'encadre_note'    => 'Le tarif est dégressif : plus l’engagement s’inscrit dans la durée — cycle de 3 mois, 6 mois ou sur l’année — plus le tarif par séance diminue. Chaque proposition fait l’objet d’un devis personnalisé, adapté à votre établissement.',
    ],

    [
      'type'  => 'contact',
      'actif' => true,
      'id'    => 'contact',
      'titre' => 'Offrez l’expérience OLDY à vos résidents',
      'texte' => 'Un moment de partage où chacun peut exprimer sa créativité. Parlons de votre établissement et construisons ensemble le format qui vous convient.',
    ],

  ],
];
