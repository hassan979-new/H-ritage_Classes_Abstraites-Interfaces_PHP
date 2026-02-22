<?php
declare(strict_types=1);

spl_autoload_register(function (string $class):void {
    $prefix = "App\\";
    $baseDir = __DIR__ . "/../src/";
    if (strncmp($prefix,$class,strlen($prefix)) !== 0) {
        return;
    }

    $relativeClass = substr($class, strlen($prefix));
    $file = $baseDir . str_replace("\\","/",$relativeClass) . ".php";

    if (file_exists($file)) {
        require $file;
    }
});

use App\Service\PrinterService;
use App\Entity\Enseignant;
use App\Entity\Etudiant;
use App\Entity\Filiere;

$filiereInfo = new Filiere(1, "Informatique");

$e1 = new Etudiant(null, "Hassan", "Agouram@example.com", $filiereInfo);
$e2 = new Etudiant(null, "Taha", "Mjati@example.com", $filiereInfo);

$ensgn1 = new Enseignant(null, "Dr Mouhamed", "Mouhamed@example.com", "Maitre de conferences");

$personnes = [$e1, $e2, $ensgn1];
$printer = new PrinterService;
$printer->printLabels($personnes);

echo PHP_EOL . "Export tableau (exemple) :" . PHP_EOL;

print_r($e1->toArray());
print_r($ensgn1->toArray());