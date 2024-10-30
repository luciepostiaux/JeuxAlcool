<?php

return [
    'Fuck the Queen' => [
        'description' => 'Place un verre vide au centre de la table et dispose un paquet de cartes face cachée autour du verre en cercle, en faisant attention à ne pas briser le cercle, car sinon tu devras boire un shot. Attention, celui qui tire la dame doit dire "fuck the queen" et les autres doivent répéter après lui ; le dernier qui le dit boit un shot.',
        'intensity' => 'medium',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'cards' => [
            [
                'value' => 'As',
                'color' => null,
                'effect' => 'Le joueur boit 2 gorgées.'
            ],
            [
                'value' => '2',
                'color' => 'red',
                'effect' => 'Le joueur boit 2 gorgées.'
            ],
            [
                'value' => '2',
                'color' => 'black',
                'effect' => 'Le joueur donne 2 gorgées.'
            ],
            [
                'value' => '3',
                'color' => 'red',
                'effect' => 'Le joueur boit 3 gorgées.'
            ],
            [
                'value' => '3',
                'color' => 'black',
                'effect' => 'Le joueur donne 3 gorgées.'
            ],
            [
                'value' => '4',
                'color' => 'red',
                'effect' => 'Le joueur boit 4 gorgées.'
            ],
            [
                'value' => '4',
                'color' => 'black',
                'effect' => 'Le joueur donne 4 gorgées.'
            ],
            [
                'value' => '5',
                'color' => 'null',
                'effect' => 'Devient le "Maître des shots", il doit choisir le contenu des prochains shots.'
            ],
            [
                'value' => '6',
                'color' => 'null',
                'effect' => 'Choisis un binôme. Ce binôme est valable jusqu\'à ce qu\'un autre joueur tire un nouveau 6.'
            ],
            [
                'value' => '7',
                'color' => 'null',
                'effect' => 'Le joueur choisit un jeu (ex : Bozo, jeu du doigt, Dans ma valise, Une grenouille dans un lac, etc.).'
            ],
            [
                'value' => '8',
                'color' => 'null',
                'effect' => 'Deviens le "Sniper". Les autres joueurs ne doivent pas croiser son regard, sinon ils boivent un shot. Quand un autre 8 est tiré, le précédent Sniper est annulé.'
            ],
            [
                'value' => '9',
                'color' => 'null',
                'effect' => 'Le joueur pose des questions auxquelles on ne peut pas répondre. Le joueur qui tire le prochain 9 prend la relève.'
            ],
            [
                'value' => '10',
                'color' => 'null',
                'effect' => 'Le joueur invente une règle. Elle ne doit pas concerner les binômes ni le verre du milieu.'
            ],
            [
                'value' => 'Valet',
                'color' => 'null',
                'effect' => ' Le joueur verse un alcool ou un diluant dans le verre du milieu. Celui qui tire le 4ème Valet doit boire le verre du milieu.'
            ],
            [
                'value' => 'Dame',
                'color' => 'null',
                'effect' => 'Dès que le tireur dit "Fuck the Queen", les autres doivent le répéter. Le dernier à le dire boit un shot'
            ],
            [
                'value' => 'Roi',
                'color' => 'null',
                'effect' => 'Le joueur donne deux shots à d\'autres joueurs.'
            ],
        ],
    ],

    'La Suite' => [
        'description' => "Un jeu où les joueurs doivent deviner quelle carte sortira d'un paquet mélangé.",
        'intensity' => 'medium',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Disposer une carte de chaque valeur (de l\'As au Roi) en ligne, face visible.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Prédiction' => 'Chaque joueur annonce la carte qu’il pense voir sortir.',
                'Bonne prédiction' => 'Si la carte annoncée est tirée, le joueur donne 2 shots.',
                'Prédiction proche' => 'Si la carte tirée est adjacente à celle annoncée, le joueur donne 1 shot.',
                'Prédiction éloignée' => 'Si la carte est éloignée, le joueur boit un nombre de gorgées égal à la différence entre sa carte et celle sortie (ex: 7 annoncé, 10 tiré = 3 gorgées).'
            ]
        ]
    ],


    'La Suite qui Pue' => [
        'description' => "Un jeu de devinettes où chaque carte est associée à un shot.",
        'intensity' => 'hard',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Disposer une carte de chaque valeur (de l\'As au Roi) en ligne, face visible.',
                'Placer un shot rempli au-dessus de chaque carte.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Prédiction' => 'Chaque joueur annonce une carte.',
                'Bonne prédiction' => 'Si la carte annoncée sort, le joueur donne le shot associé à un autre joueur.',
                'Prédiction proche' => 'Si la carte tirée est adjacente à celle annoncée (ex: 7 annoncé, 6 ou 8 tiré), le joueur donne aussi le shot.',
                'Prédiction éloignée' => 'Si la carte tirée est beaucoup plus éloignée (ex: 7 annoncé, 4 ou 10 tiré), le joueur boit le shot associé à la carte tirée.'
            ]
        ]
    ],


    'Jeu de la Mort' => [
        'description' => "Un jeu où les joueurs tirent des cartes et boivent en fonction de leur position sur un plateau.",
        'intensity' => 'medium',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Disposer les cartes face cachée en rectangle, avec plus de rangées que de colonnes.',
                'Choisir une rangée de départ pour représenter l\'étage 0, puis numéroter les rangées vers le haut (1, 2, 3, etc.).'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Carte rouge' => 'Si un joueur tire une carte rouge, il boit un nombre de gorgées égal à la valeur de la carte + numéro d’étage.',
                'Carte noire' => 'Si un joueur tire une carte noire, il distribue ce total de gorgées à d’autres joueurs.',
                'Exemple' => 'Exemple : Si un joueur tire un 3 rouge à l’étage 0, il boit 3 gorgées (3 + 0). S’il tire un 3 noir à l’étage 1, il distribue 4 gorgées (3 + 1).'
            ]
        ]
    ],


    "Le Dispersé" => [
        'description' => "Un jeu de tirage de cartes où chaque couleur détermine qui boit ou distribue des gorgées.",
        'intensity' => 'medium',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Étaler toutes les cartes face cachée sur la table de manière aléatoire.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Carte rouge' => 'Le joueur boit un nombre de gorgées correspondant à la valeur de la carte.',
                'Carte noire' => 'Le joueur distribue ce nombre de gorgées à d’autres joueurs.',
            ]
        ],
        'end_game' => [
            'rules' => [
                'Condition de fin' => 'Le jeu continue jusqu’à ce que toutes les cartes soient tirées.'
            ]
        ]
    ],


    'Les Petits Chevaux' => [
        'description' => "Un jeu de paris sur des symboles de cartes pour faire avancer son As.",
        'intensity' => 'soft',
        'duration' => 'rapide',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Retirer les As du paquet et les placer en ligne au bord de la table.',
                'Disposer deux colonnes de 5 cartes de chaque côté de la ligne des As, face cachée.',
                'Chaque joueur mise sur un symbole (trèfle, cœur, carreau ou pique) et parie en gorgées ou en shots.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Avancement' => 'Si le symbole de la carte retournée correspond à un As, cet As avance d’une case.',
                'Palier spécial' => 'À chaque rangée franchie, on retourne les premières cartes des colonnes de gauche et de droite pour indiquer l’As qui monte ou descend.',
            ]
        ],
        'end_game' => [
            'rules' => [
                'Classement final' => 'Le premier As à atteindre le sommet gagne, le second arrive en deuxième, etc.',
                'Récompenses' => 'Le premier donne 2 fois sa mise, le deuxième donne sa mise, le troisième boit sa mise, le dernier boit 2 fois sa mise.'
            ]
        ]
    ],


    'Pyramide' => [
        'description' => 'Un jeu de bluff et de stratégie basé sur une pyramide de cartes.',
        'intensity' => 'medium',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Distribuer 3 à 4 cartes par joueur, face cachée.',
                'Disposer le reste des cartes en forme de pyramide (6 rangées environ), face cachée.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Mémorisation' => 'Les joueurs mémorisent leurs cartes pendant 20 secondes, puis les placent devant eux, face cachée.',
                'Retour des cartes' => 'On retourne une carte de la base de la pyramide, puis on progresse vers le sommet.',
                'Nombre de gorgées' => 'Chaque rangée de la pyramide représente un nombre croissant de gorgées (rangée 1 = 1 gorgée, rangée 2 = 2 gorgées, etc.).',
                'Avant-dernière rangée' => 'La dernière rangée représente un demi-verre ou un shot, et l’avant-dernière un verre entier ou deux shots.',
                'Bluff' => 'Si un joueur a une carte identique à celle retournée dans la pyramide, il peut forcer un autre joueur à boire. Si ce dernier pense qu\'il bluffe, il peut dire "tu mens". En cas de bluff avéré, le bluffeur boit le double des gorgées ; sinon, l\'accusateur boit le double.'
            ]
        ],
        'end_game' => [
            'rules' => [
                'Condition de fin' => 'Le jeu se termine une fois toutes les cartes de la pyramide retournées.',
                'Révélation des cartes' => 'Les joueurs révèlent leurs cartes une par une. Toute erreur d\'annonce entraîne un shot à boire par erreur.',
                'Consulter ses cartes' => 'Si un joueur regarde ses cartes avant la fin, il boit 4 gorgées par carte regardée.'
            ]
        ]
    ],



    'La Route' => [
        'description' => 'Un jeu où les équipes doivent prédire la valeur des cartes tout au long d’une route.',
        'intensity' => 'medium',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Disposer une ligne de 5 cartes : la première et la dernière sont face cachée, les trois au milieu sont face visible.',
                'Placer le reste du paquet en pioche.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Prédiction' => 'L\'équipe des chercheurs devine si la carte piochée est plus grande ou plus petite que celle visible sur la table.',
                'Erreur de prédiction' => 'En cas d\'erreur, l\'équipe recommence au début et boit un nombre de gorgées égal au nombre de cartes précédemment devinées.',
                'Réussite' => 'En cas de succès, l\'équipe fait boire une gorgée à l\'équipe adverse et continue son parcours.'
            ]
        ],
        'end_game' => [
            'rules' => [
                'Objectif' => 'L\'objectif est d\'atteindre l\'extrémité de la ligne puis de revenir au point de départ.',
                'Condition de fin' => 'Si les chercheurs terminent le parcours avant l\'épuisement du paquet, l\'équipe adverse boit un shot. Sinon, c\'est à eux de boire.'
            ]
        ]
    ],


    'Le H et Petit Train' => [
        'description' => 'Un jeu de cartes en forme de "H" où chaque colonne a un effet sur les gorgées distribuées ou bues.',
        'intensity' => 'medium',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Former un "H" géant avec deux colonnes de 6 cartes et deux barres horizontales de 4 cartes.',
                'Distribuer entre 3 et 5 cartes à chaque joueur, face visible.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Retour des cartes' => 'Les cartes des colonnes sont retournées une par une, en alternant entre la colonne de gauche et celle de droite.',
                'Correspondance' => 'Si une carte retournée correspond à une carte d\'un joueur, il la pose et applique l\'effet selon sa position : à gauche, il distribue des gorgées ; à droite, il les boit.',
                'Barres horizontales' => 'Les cartes des barres horizontales ont des effets différents : la première carte à gauche donne 1 shot, la dernière à droite en fait boire 1. Les deux cartes du milieu représentent 2 shots à donner ou à boire.'
            ]
        ],
        'end_game' => [
            'rules' => [
                'Petit Train' => 'À la fin, les deux derniers joueurs devinent si les cartes tirées sont supérieures ou inférieures à la précédente. Chaque erreur coûte une gorgée.'
            ]
        ]
    ],


    'Rouge ou Noir' => [
        'description' => 'Un jeu de devinettes avec des gorgées distribuées en fonction de la précision des prédictions.',
        'intensity' => 'soft',
        'duration' => 'rapide',
        'min_players' => 2,
        'max_players' => 2,
        'setup' => [
            'instructions' => [
                'Ce jeu se joue avec un paquet de cartes mélangé entre deux joueurs.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Couleur' => 'Devine si la carte est rouge ou noire.',
                'Comparaison' => 'Devine si la carte est plus grande, plus petite ou égale à la précédente.',
                'Position' => 'Devine si la carte est "intérieure" ou "extérieure" par rapport aux deux premières.',
                'Symbole' => 'Devine le symbole de la carte (trèfle, carreau, pique ou cœur).'
            ]
        ],
        'end_game' => [
            'rules' => [
                'Récompenses et pénalités' => 'Pour chaque erreur, le joueur boit une gorgée. Pour chaque réponse correcte, il distribue une gorgée. S\'il ne fait aucune erreur, il donne un shot ; s\'il se trompe partout, il en boit un.'
            ]
        ]
    ],

    'Dé à deviner' => [
        'description' => 'Un jeu de devinettes avec des gorgées distribuées en fonction des résultats d’un lancer de dé.',
        'intensity' => 'hard',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Mélanger le paquet et former une pile face cachée au centre de la table.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Deviner le résultat' => 'Le joueur retourne la première carte et devine si le dé sera pair ou impair.',
                'Bonne prédiction' => 'En cas de bonne prédiction, il donne des gorgées selon la carte retournée (As = 1, Valet = 11, etc.).',
                'Mauvaise prédiction' => 'En cas d\'erreur, le joueur boit le nombre de gorgées indiqué par la carte et passe au joueur suivant.'
            ]
        ],
        'end_game' => [
            'rules' => [
                'Condition de fin' => 'Le jeu se termine lorsque toutes les cartes sont épuisées.'
            ]
        ]
    ],


    'Dé correspondant' => [
        'description' => "Un jeu où les joueurs doivent obtenir une correspondance pair/impair entre les cartes et le résultat du dé.",
        'intensity' => 'hard',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Mélangez le paquet de cartes et formez une pile face cachée.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Correspondance' => 'Le résultat du dé doit correspondre au caractère pair ou impair de la carte tirée.',
                'Succès' => 'Si le joueur réussit, il ajoute la valeur de la carte à celles déjà en jeu et donne les gorgées correspondantes.',
                'Échec' => 'En cas d’échec, il boit la valeur de la carte et prend les cartes précédemment réussies.'
            ]
        ],
        'end_game' => [
            'rules' => [
                'Condition de fin' => 'Le jeu continue jusqu’à ce que toutes les cartes soient tirées.'
            ]
        ]
    ],


    'La Route Losange' => [
        'description' => "Un jeu où les joueurs avancent dans un losange en devinant la couleur des cartes.",
        'intensity' => 'medium',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Formez un losange de cartes symétrique avec une rangée de 1, puis 2, 3, 4, 3, 2, et 1 carte.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Prédiction' => 'Chaque joueur devine la couleur de la carte cachée (rouge ou noire) pour avancer.',
                'Succès' => 'En cas de bonne réponse, le joueur avance et peut continuer à deviner.',
                'Échec' => 'En cas d’échec, le joueur retourne au début, boit autant de gorgées que de cartes précédemment réussies, et les cartes réussies sont recouvertes.'
            ]
        ],
        'end_game' => [
            'rules' => [
                'Variante' => 'La taille du losange peut varier selon le nombre de joueurs.'
            ]
        ]
    ],

    'Le 30' => [
        'description' => "Un jeu où les joueurs accumulent des points en fonction des cartes tirées, jusqu’à atteindre 30 points.",
        'intensity' => 'medium',
        'duration' => 'classique',
        'min_players' => 5,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Retirer toutes les cartes spéciales du paquet (cartes +2, changement de sens, etc.).',
                'Chaque joueur choisit une couleur parmi les quatre (rouge, vert, jaune, bleu).',
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Tirage des cartes' => 'Chaque joueur tire la première carte du paquet. La couleur de la carte indique à qui donner les gorgées.',
                'Rouge' => 'Le joueur boit.',
                'Vert' => 'Le joueur donne à qui il veut.',
                'Jaune' => 'La personne à gauche boit.',
                'Bleu' => 'La personne à droite boit.',
                'Points' => 'Le chiffre sur la carte indique le nombre de gorgées à boire. Pour un 0, cela vaut 1 shot et compte pour 10 points.',
                'Objectif' => 'Le but est de collecter des cartes de la couleur choisie pour atteindre 30 points.'
            ]
        ],
        'end_game' => [
            'rules' => [
                'Victoire' => 'Le premier joueur à atteindre 30 points gagne et donne 2 shots. Le deuxième donne 1 shot, l’avant-dernier boit 1 shot, et le dernier boit 2 shots.',
                'Remarque' => 'Si le paquet est épuisé, les cartes des vainqueurs sont mélangées et remises en jeu.'
            ]
        ]
    ],


    'Collecte ta couleur' => [
        'description' => "Un jeu où chaque joueur accumule des points en fonction de la couleur de ses cartes pour atteindre le plus haut score.",
        'intensity' => 'medium',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Retirer toutes les cartes spéciales du paquet (cartes +2, changement de sens, etc.).',
                'Étaler les cartes face cachée sur la table.',
                'Chaque joueur choisit une couleur (rouge, vert, jaune, bleu).'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Tirage des cartes' => 'Chaque joueur tire une carte à tour de rôle.',
                'Rouge' => 'Le joueur boit.',
                'Vert' => 'Le joueur donne à qui il veut.',
                'Jaune' => 'La personne à gauche boit.',
                'Bleu' => 'La personne à droite boit.',
                'Points' => 'Si la carte est de la couleur choisie par le joueur, il gagne des points en fonction du chiffre sur la carte. Le 0 vaut 1 shot et 10 points pour la couleur correspondante.'
            ]
        ],
        'end_game' => [
            'rules' => [
                'Victoire' => 'Lorsque toutes les cartes sont tirées, le joueur avec le plus de points gagne.'
            ]
        ]
    ],

    'Le Basique' => [
        'description' => 'Mise en place :

        Retirez un exemplaire de chaque couleur des cartes "+2", "bloquer", et "changement de sens".
        Conservez les cartes numérotées et les autres cartes spéciales. Mélangez-les et étalez-les face cachée sur la table.
        Déroulement du jeu : Chaque joueur tire une carte à tour de rôle. Selon la carte tirée, le joueur devra boire ou distribuer des gorgées, ou encore jouer une carte spéciale qui affectera le cours du jeu. Les effets de chaque carte sont déterminés par leur couleur et leur valeur, allant de simples gorgées à des actions comme bloquer une carte ou changer la couleur active du jeu.

        Fin du jeu : Le jeu se termine lorsque toutes les cartes ont été tirées. Les détails spécifiques de chaque type de carte seront expliqués séparément dans un tableau pour faciliter la référence pendant le jeu.',
        'intensity' => 'medium-hard',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Retirer un exemplaire de chaque couleur des cartes de blocage, de changement de sens et de +2.',
                'Garder toutes les autres cartes numérotées, les mélanger et les étaler face cachée sur la table.',
            ],
        ],
        'gameplay' => [
            'rules' => [
                'De 1 à 9' => 'Le nombre indique combien de gorgées doivent être prises ou données en fonction de la couleur : rouge = pour soi, vert = pour un autre joueur, jaune = joueur à gauche, bleu = joueur à droite.',
                '0' => 'Le joueur prend 1 shot.',
                '+2' => 'Le joueur doit immédiatement tirer deux cartes supplémentaires.',
                '+4' => 'Le joueur peut distribuer 4 gorgées gratuites.',
                'Bloquer' => 'Permet de bloquer une carte de la couleur correspondante. Exemple : un bloquer bleu bloque la prochaine carte bleue qui devrait faire boire le joueur.',
                'Changement de sens' => 'Permet de faire boire quelqu\'un d\'autre à la place de soi, en fonction de la couleur de la carte.',
                'Changement de couleur' => 'La prochaine carte tirée détermine la couleur active pour les 5 prochains tours.',
                'Blanche' => 'Le joueur suivant doit tirer une carte, et le chiffre indique combien de shots sont à donner. Le joueur ayant tiré la carte blanche prend un shot mais peut distribuer les autres.',
            ]
        ]
    ],

    'Le Bingo' => [
        'description' => 'Collecte les cartes numérotées et utilise les cartes spéciales pour atteindre la victoire.',
        'intensity' => 'medium',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Retirer toutes les cartes spéciales sauf un exemplaire de chaque couleur des cartes bloquer et changement de sens.',
                'Garder également les 4 cartes changement de couleur et les 4 cartes blanches.',
                'Étaler les cartes face cachée sur la table.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Objectif' => 'Collecter les cartes numérotées de 0 à 9 devant soi.',
                'Couleurs' => 'Rouge = toi, Vert = à qui tu veux, Jaune = à gauche, Bleu = à droite. Ou, si vous décidez de boire toutes les cartes, toutes les cartes sont “rouges” pour la distribution.',
                '0' => 'Le joueur prend 1 shot.',
                'Bloquer' => 'Permet de bloquer une carte du jeu d\'un adversaire de la couleur correspondante. La carte bloquée retourne au milieu du jeu.',
                'Changement de sens' => 'Permet de récupérer une carte dans son propre jeu sans la remettre au milieu.',
                'Changement de couleur' => 'Permet de prendre un exemplaire de chaque couleur dans le jeu des adversaires.',
                'Carte blanche' => 'Même principe que le changement de couleur, mais les cartes prises retournent au milieu du jeu.'
            ]
        ],
        'end_game' => [
            'rules' => [
                'Double' => 'Le premier joueur à obtenir un double (deux exemplaires du même chiffre) prend un shot.',
                'Triple' => 'Le premier à obtenir un triple prend également un shot, et ainsi de suite.'
            ]
        ]
    ],
    'Serpent et Échelle' => [
        'description' => 'Un jeu où les joueurs avancent sur un chemin de cartes en suivant les effets des cartes spéciales et des dés.',
        'intensity' => 'high',
        'duration' => 'long',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Enlever les cartes spéciales du paquet sauf les 4 blanches, bloquer et changement de sens.',
                'Créer un rectangle avec le plus de cartes possible, face cachée, en suivant une structure en serpentin (monte et descend, en zigzag).',
                'Placer les cartes bloquer et changement de sens à la place de certaines cartes standards.',
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Déroulement' => 'Chaque joueur a un pion et un dé. Ils avancent de case en case en suivant le chemin formé par les cartes.',
                'Changement de sens' => 'Si un joueur tombe sur une carte changement de sens, il monte comme une échelle vers l\'autre carte de la même couleur.',
                'Bloquer' => 'Si un joueur tombe sur une carte bloquer, il descend jusqu\'à l\'autre carte bloquer de la même couleur.',
                'Carte blanche' => 'Les cartes blanches font redescendre le joueur tout en bas du plateau et le forcent à boire un shot.',
                'Chiffre sur la carte' => 'Le chiffre sur la carte où le joueur tombe détermine qui boit et combien de gorgées (0 = 1 shot).',
                'Dé' => 'Si un joueur fait un 6 avec le dé, il relance. Au troisième 6, il retombe à la case départ et doit boire un shot.',
            ]
        ],
        'end_game' => [
            'rules' => [
                'Objectif' => 'Le but est d\'arriver en premier à la fin du plateau.',
                'Condition de fin' => 'Pour terminer, le joueur doit obtenir le chiffre exact avec le dé, sinon il recule d\'autant de cases qu\'il a dépassé.'
            ]
        ]
    ],
    'Le Classique' => [
        'description' => 'Un jeu de cartes simple où chaque carte a un effet basé sur sa couleur et sa valeur.',
        'intensity' => 'soft',
        'duration' => 'classique',
        'min_players' => 2,
        'max_players' => null,
        'setup' => [
            'instructions' => [
                'Retirer toutes les cartes spéciales du paquet (cartes +2, changement de sens, etc.) et ne garder que les cartes numérotées de 0 à 9.',
                'Étaler les cartes face cachée sur la table.'
            ],
        ],
        'gameplay' => [
            'rules' => [
                'Rouge' => 'Le joueur qui tire une carte rouge boit.',
                'Vert' => 'Le joueur qui tire une carte verte donne à qui il veut.',
                'Jaune' => 'La personne à la gauche du joueur qui tire la carte boit.',
                'Bleu' => 'La personne à la droite du joueur qui tire la carte boit.',
                'Chiffre sur la carte' => 'Le chiffre indique combien de gorgées doivent être prises ou données.',
                '0' => 'Le joueur prend 1 shot.'
            ]
        ],
        'end_game' => [
            'rules' => [
                'Condition de fin' => 'Le jeu se termine une fois toutes les cartes tirées.'
            ]
        ]
    ],

];
