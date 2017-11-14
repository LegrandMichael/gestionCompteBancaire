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
            <a class="btn btn-primary" data-toggle="modal" href='#creerCompte'>Créer un compte</a>
            <div class="modal fade" id="creerCompte">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="submit" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Création de compte</h4>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" role="form">
                                <legend>Form title</legend>
                                <div class="form-group">
                                    <label for="">label</label>
                                    <input type="text" class="form-control" id="" placeholder="Input field">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary" data-toggle="modal" href='#creerClient'>Créer un client</a>
            <div class="modal fade" id="creerClient">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            
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
                            $perso3 = new Personne('Yves', 'Montand');
                            $persoTotal = [$perso1,$perso2,$perso3];
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
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>