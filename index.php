
<?php
    // # PHP - Les tableaux

    // ## Exercice 1
    // Créer un tableau **mois** et l'initialiser avec les valeurs suivantes :
    // - **janvier**
    // - **février**
    // - **mars**
    // - **avril**
    // - **mai**
    // - **juin**
    // - **juillet**
    // - **aout**
    // - **septembre**
    // - **octobre**
    // - **novembre**
    // - **décembre**
    $monTabl=array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'novembre', 'décembre');

    ## Exercice 2 Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.
    echo 'Exo2: ';
    echo $monTabl[2];

    ## Exercice 3 Avec le tableau de l'exercice , afficher la valeur de l'index 5.
    echo '<br>Exo3: ';
    echo $monTabl[5];

    ## Exercice 4 Avec le tableau de l'exercice 1, modifier le mois de **aout** pour lui ajouter l'accent manquant.
    echo '<br>Exo4: ';
    // $monTabl[7]='août';
    $monTabl[7]=str_replace('u', 'û',$monTabl[7]);
    echo $monTabl[7];
    // // Génère : <body text='black'>
    // $bodytag = str_replace("%body%", "black", "<body text='%body%'>");

    ## Exercice 5 Créer un tableau associatif avec comme index le numéro des départements de la région Occitanie et en valeur leur nom.
    $monTabl = array(9=>'Ariège', 11=>'aude', 12=>'Aveyron', 30=>'Gard', 31=>'Haute-Garonne', 32=>'Gers', 34=>'Hérault', 46=>'Lot', 48=>'Lozère',65=>'Hautes Pyrénées', 66=>'Pyrénées Orientales', 81=>'Tarn', 82=>'Tarn et Garonne');
    //acepte les chiffres avec ou sans les ''

    ## Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 30.
    echo '<br>Exo6: ';
    echo $monTabl[30];

    ## Exercice 7 Avec le tableau de l'exercice 5,  ajouter la ligne correspondant au code postal et à la ville de Narbonne.
    echo '<br>Exo7: ';
    $monTabl[11]='Aude';
    echo $monTabl[11];
    $monTabl[11100]='Narbonne';
    echo '/ '.$monTabl[11100];
   
    ## Exercice 8 Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
    echo '<br>Exo8: ';
    foreach ($monTabl as &$value) {
        echo '<br>'.$value;
    }

    ## Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
    echo '<br>Exo9: ';
    var_dump($monTabl);

    ## Exercice 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
    // Cela pourra être, par exemple, de la forme : **"Le département" + nom_departement + "a le numéro" + num_departement**
    echo '<br>Exo10: ';
    foreach ($monTabl as $key => $value) {        // echo "{$key} => {$value} ";
        echo '<br>Le département ' .$value. ' a le numéro ' .$key.'.';
    }
    

?>