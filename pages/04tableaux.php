<body style="padding-bottom: 50rem;">
 
 
 
    <?php
 
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
 
 
    //******************* */  LES TABLEAUX***************
 
 
    //Il existes 3 types de tableaux en PHP
 
    // 1. Tableau indexé
    // 2. Tableau associatif
    // 3. Tableau multidimensionnel
 
 
 
    // *****les tableaux (array) index *****
 
    // declaration d'un tableau il y a deux methodes
 
 
    //1er methode
    // array() est une fonction de PHP
    $tab = array("NASSUF", 2, true, 123.5);
 
    // 2eme methode
    // [] c'est une syntaxe plus courte
    $tab2 = ["element0", "element1", "element2"];
 
 
    //AJOUT D'UN ELEMENT DANS LE TABLEAU EN DERNIERE POSITION
 
    // la syntaxe est $tab2[] = "valeur";
 
    $tab2[] = "ajout de element3";
    echo "<pre>";
    print_r($tab2);
    echo "</pre>";
// si vous oublier les crochets [] le tableau sera remplacé  exemple :
   // $tab2 = "ajout elements 4";
 
    echo "<pre>";
    print_r($tab2);
    echo "</pre>";
    
    // pour ajouter avec la fonction array_push()
    
    // array_push($tableauAmodifier, "elementAajouter");
    // avec array_push() on peut ajouter plusieurs éléments
    array_push($tab2,"ajout_element4","ajout_element5");

    
    echo "<pre>";
    print_r($tab2);
    echo "</pre>";
    
 
    //echo $tab; // me donne une erreur array to string conversion
 
    echo $tab[0] . " " . $tab[1] . " " . $tab[2] . " " . $tab[3];
    // echo $tab[0,2]// ne marche pas si on veut afficher plusieur index
 
    // fonction de debugage pour afficher le contenu du tableau
 
    // var_dump()
    // affiche l'index la longueur du tableau et le type de chaque element longueur de chaine de caractere
    var_dump($tab);
 
 
 
    // Print_r() est souvent accompagné de la balise <pre></pre> pour plus de lisibilité
    // affiche moins d'infos que var_dump ( pour un débugage rapide)
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
 
 
    // ***** te tableau associatif*****
 
    // un tableau associatif est un tableau dans laquel on choisit la dénomination des index
 
    // on utilise l'opérateur clé valeur => premet d'assigner une valeur à une clé personalisée
 
    $user1 = [
 
        "id" => 123,
        "name_username" => "Nassaf",
        "email" => "nassaf@gmail.com"
    ];
 
    // ici "id" est la clé et 123 est la valeur "=>" est un lien entre les deux
 
    print_r($user1);
 
    echo "<br>";
 
    echo $user1["email"];//"nassaf@gmail.com"
    //Ou avec la function array()
 
    $user2 = array(
 
        "id" => 123,
        "name_username" => "Nassaf",
        "email" => "nassuf@gmail.com",
    );
 
    // ajout d'elements avec un  tableau associatif
    // on ajoute la clé dans les crochets et la valeur apres le = 

  

    array_push($user2,["villes" =>"nice"]); // avec array_push il y aura toujours un index

    // pour ajouter un element dans un tableau associatif utiliser la syntaxe suivante
    $user2["ville"] ="Toulouse";
    $user2["password"] = "123456";

    var_dump($user2);

    echo "<br>";
 
    print_r($user2["id"]);
    echo "<br>";
    echo $user2["id"];
 
    echo "<br>";
    var_dump($user2);
 
 
 
    // php ne fait pas la différence entre un tableau indexé et un tableau associatif
    // quand on affiche le print_r() ou var_dump()  l'affichache des tableaux indexés est la même que des tableaux associatifs
 
    $tab4 = [1, 2, "julien"];
 
 
    echo "<pre>";
    print_r($tab4);
    echo "</pre>";
 
    $tab5 = [
        0 => 1,
        1 => 2,
        2 => "julien"
    ];
 
    //****** */ les tableaux multidimensionnels*****
 
    $tab_multi = [
        "Najiba", // index 0
        ["email", "password"], // index 1
        "Seckene" // index 2
    ];
    echo "<br>";
    //echo "je suis l'echo de email :" . $tab_multi[1];
    echo "<br>";
    $users = [
 
        [
            "id" => 123,
            "name_username" => "Nassuf",
            "email" => "nassuf@gmail.com",
            "données_perso"=>[
                "name"=>"Nassuf",
                "age"=>25,
                "ville"=>"Casablanca"
            ]
        ],
        [
            "id" => 124,
            "name_username" => "Najiba",
            "email" => "najiba@gmail.com"
        ],
        [
            "id" => 125,
            "name_username" => "Nawel",
            "email" => "nawel@gmail.com"
        ],
    ];
 


    var_dump($users);

echo "bonjour " . $users[2]["email"];
 
    echo "<pre>";
    print_r($tab_multi);
    echo "</pre>";
 
    print_r($tab_multi);
 
    echo "<br>";
    // connaitre la longeur d'un tableau

    // sur un tableau indexé
    $tab5 = ["element0", "element1", "element2"];

    echo "longeur du tableau :" . count($tab5);
 
 $persone=[
    "nom" =>"Arnaud",
    "mail" =>"arnaud@gmail.com",
    "age" =>[
        "hypothétique" =>15,
         "reel" =>55,
         "année de naissance" =>1965
    ],
    "ville" =>"Casablanca"
];
 echo "<br>";
 echo count ($persone);
 echo "<br>";
 echo count($persone ["age"]);
 echo "<br>";


    ?>
</body>
 