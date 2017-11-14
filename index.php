<?php

require 'Class/Autoloader.php';
Autoloader::register(); 
//require 'Class/Personne.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <title>Gestion des comptes bancaires</title>
</head>
<body>
    <div class="page-header">
        <h1 class="text-center">Gestion des comptes bancaires<br><small>Simplon Carcassonne</small></h1>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Créer un compte</button>
            
        
            <button type="submit" class="btn btn-primary">Créer un client</button>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">N° du Compte</th>
                            <th class="text-center">Prénom</th>
                            <th class="text-center">Nom</th>
                            <th class="text-center">Conseiller</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                            $perso1 = new Personne("Jean", "Dujardin");
                            $perso2 = new Personne("Michaël", "Legrand");
                            $persoTotal = [$perso1,$perso2];
                            //var_dump($persoTotal);
                                foreach ( $persoTotal as $key => $value) {
                                    # code...
                                    ?>
                                <tr class="text-center">
                                <td><a href=""><?=$value->getId();?></a></td>
                                <td><?=$value->getPrenom();?></td>
                                <td><?=$value->getNom();?></td>
                                <td></td>
                            <?php    
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Latest compiled and minified JS -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery.js"></script>
</body>
</html>