<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Exercice 1: exemple</title>
</head>
<body>
    <h1 class="d-flex justify-content-center m-4 text-warning">Qu'est ce que c'est ?</h1>
    <p class="d-flex justify-content-center border border-success m-4 p-2" id="p1">
        Ceci est une page web HTML générée <?php echo "par du PHP !" ; ?>
    </p>
    <p class=" justify-content-center m-3 p-2" id="p2">
    <?php 
        
        $tva = 0.2 ;
        $prix_unit = 1.33 ;
        $nombre_boisson = 5 ;
        $prix_totalht = $nombre_boisson * $prix_unit ;
        $prix_totalttc = $prix_totalht*$tva + $prix_totalht ;
        
        echo " Vous avez acheté ".$nombre_boisson." boissons à ".$prix_unit."€ l'unité hors taxes, soit un total de ".$prix_totalht."€ HT où ".$prix_totalttc."€ TTC. " ;
         
    ?>
    <br>
    <?php
        echo "Vous avez acheté <span>$nombre_boisson</span> boissons à <span>$prix_unit €</span> l'unité hors taxes, soit un total de <span>$prix_totalht €</span>  HT où <span>$prix_totalttc €</span>  TTC. " ;
    ?>
    <br>
    </p>
    <br>
    <p class=" justify-content-center m-3 p-2" id="p3">
    <?php
    /*
    1. Créer une variable $a avec une valeur de 5
    2. Créer une variable $b avec une valeur de -3

    3. En ne manipulant que des variables, inverser les deux valeur ($a doit prendre la valeur de $b et vis vers ça)
    */
        $a = 5 ;
        $b = -3 ;
        $c = $a ;
        $d = $b ;

        $a = $d ;
        $b = $c ;
        echo "La nouvelle valeur de a est $a et la nouvelle valeur de b est $b.";
    ?>
    </p>
    <div class="container text-center">
        <?php
            $fruits = array("Pomme", "Fraise", "Cerise", "Pêche");
            

            var_dump ( $fruits ); 
            /*
                1. Créer une variable $mon_nombre contenant un nombre

                2. Créer un tableau, stocké dans une nouvelle variable, dans lequel se trouvent, dans l'ordre, le nombre 5, la chaine "hello", le nombre 83 et la valeur de votre variable $mon_nombre

                3. Effectuer un var_dump() de votre tableau
                
                4. Afficher la case d'index 1
            */
        ?>
    </div>
    <div class="container text-center">
        <?php
        $mon_nombre = 18 ;
        $tableau = array(5, "Hello", 83, $mon_nombre);
        var_dump ($tableau);
        echo $tableau[1];
        ?>
    </div>
    <div>
        <?php
         /*
                1. Créer un tableau contenant dans l'ordre les chaines suivantes :
                    - "e"
                    - "oi"
                    - "j"
                    - "pr"
                    - "ch"
                    - "oux"
                    - "sen"
                    - "ir"
                    - "ca"
                    - "ill"
                    - "on"
                    - "qu"

                2. Avec le tableau, assembler ces syllabes pour former le mot le plus long possible
                3. Afficher le mot et sa taille
            */
            $tableau_2 = array("e","oi","j","pr","ch","oux","sen","ir","ca","ill","on","qu");
            var_dump ($tableau_2);
            $mot = $tableau_2[2].$tableau_2[10].$tableau_2[11].$tableau_2[9].$tableau_2[0];
            echo $mot;
            echo " Il y a ".strlen($mot) ." lettres dans ce mot."
        ?>
    </div>
</body>
</html>