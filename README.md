# Un système de gestion de compte bancaire

## Modéliser le système avec les classes suivantes :

- CompteManager

    - Proprietés: comptes, lastNumCompte

    - Méthodes:

        - ouvrirCompte(Client cli, Conseiller com, depassementAutorise, depotInitial) : Vérifie que la personne n'a pas déja ouvert un compte si non ouvre le compte et l'ajoute à la liste des comptes.

        - cloturerCompte(Compte cpt) : Vérifie que le compte est à zero.

- Compte

    - Proprietés: numéro, solde, opérations, client, conseiller, depassementAutorise

    - Methodes:

        - credit(montant) : création opération de crédit et modification du solde.

        - debit(montant): création opération de débit si le montant ne dépasse pas la réserve autorisée, modification du solde si besoin est.

        - bloquer: permet de bloquer toute opération

- Operation

    - Propriétés: montant, sens(débit ou crédit), commentaire

- Personne

    - Proprietés: id, nom, prenom

- Client

    - Hérite de Personne

    - Proprieté: conseiller qui a créé le client

- Conseiller

    - Hérite de Personne

    - Proprieté: nbClient : nombre de client suivis

## Implémenter le système en PHP

- Un fichier par classe
- Utilisation du require_once pour l'inclusion des fichiers ou si non d'un autoloader.
- Tester au fur et à mesure
