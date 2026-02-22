# 🧮 Projet PHP – Gestion des personnes avec services et interfaces
## Description
Ce projet PHP illustre une architecture orientée objet pour la gestion des personnes (Étudiants et Enseignants) :

- Classe abstraite Personne définissant les attributs communs et les validations.

- Entités spécialisées (Etudiant, Enseignant) héritant de Personne et implémentant ExportableInterface.

- Classe Filiere associée aux étudiants.

- Interfaces génériques (IdentifiableInterface, ExportableInterface) pour imposer des contrats.

- Service PrinterService pour afficher les labels des personnes.

- Export en tableau via toArray() pour sérialisation ou affichage.
## Project Structure
```
project/
├── public/
│   └── index.php
├── src/
│   ├── Contract/
│   │   ├── ExportableInterface.php
│   │   └── IdentifiableInterface.php
│   ├── Entity/
│   │   ├── Personne.php
│   │   ├── Etudiant.php
│   │   ├── Enseignant.php
│   │   └── Filiere.php
│   └── Service/
│       └── PrinterService.php
└── README.md
```
# ⚙️ Features
## 1. Fichier index.php
- Configure l’autoload des classes sous le namespace App\.

- Crée des instances de Filiere, Etudiant, et Enseignant.

- Regroupe les personnes dans un tableau et utilise PrinterService pour afficher leurs labels.

- Exporte les données des entités en tableau via toArray().

## 2. Interfaces
- IdentifiableInterface : impose getId() et setId().

- ExportableInterface : impose toArray() pour exporter les données.
## 3. Classe abstraite Personne
- Attributs communs : id, nom, email.

- Validation stricte : identifiant positif, nom obligatoire, email valide.

- Méthode abstraite getRole() à implémenter par les sous-classes.

- Méthode getLabel() pour afficher une représentation textuelle.

## 4. Classe Etudiant
- Hérite de Personne.

- Attribut supplémentaire : Filiere.

- Implémente ExportableInterface avec export des informations de filière.

- Rôle : "Etudiant".

## 5. Classe Enseignant
- Hérite de Personne.

- Attribut supplémentaire : grade.

- Implémente ExportableInterface avec export du grade.

- Rôle : "Enseignant".
## 6. Classe Filiere
- Attributs : id, libelle.

- Validation stricte : identifiant positif, libellé obligatoire.

## 7. Service PrinterService
- Méthode printLabels(array $personnes) : affiche les labels des personnes.

- Vérifie que chaque élément du tableau est bien une instance de Personne.
## 🖥️ Example Execution
- <img width="480" height="504" alt="image" src="https://github.com/user-attachments/assets/7ea700a2-0571-45ab-93db-8a16ce861c85" />
```php
Etudiant : Hassan <Agouram@example.com>
Etudiant : Taha <Mjati@example.com>
Enseignant : Dr Mouhamed <Mouhamed@example.com>

Export tableau (exemple) :
Array
(
    [id] =>
    [nom] => Hassan
    [email] => Agouram@example.com
    [role] => Etudiant
    [filiere] => Array
        (
            [id] => 1
            [libelle] => Informatique
        )

)
Array
(
    [id] =>
    [nom] => Dr Mouhamed
    [email] => Mouhamed@example.com
    [role] => Enseignant
    [grade] => Maitre de conferences
)
```
## 💡 Concepts Practiced

- Héritage et classes abstraites en PHP.

- Implémentation d’interfaces pour imposer des contrats.

- Validation stricte des données avec exceptions.

- Services pour la logique métier (PrinterService).

- Export des entités en tableau pour sérialisation.

- Organisation modulaire du projet.
## 🧑‍💻 Author

- 👤 Agouram Hassan
- 🏫 Programmation orientée objet : PHP
- 🎓 Instructor	Mr.LACHGAR
- 📅 22 février 2026
