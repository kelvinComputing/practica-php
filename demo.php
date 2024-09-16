<?php 
    $name = "miguel";
    $newAge = 62;
    $isOLd = $newAge > 30;

    const NOMBRE = 'Carlos';

    define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg');

    $output = "Hola $name,  con una edad de $newAge";
    $outputAge = match (true) {
        $newAge < 2 => "Eres un bebe, $name",
        $newAge < 10 => "Eres un niño, $name",
        $newAge < 18  => "Eres un adolescente, $name",
        $newAge < 40 => "Eres un adulto, $name",
        $newAge < 60 => "Eres un adulto viejo, $name",
        default => "Hueles a madera, $name",
    };

    $bestLanguages = ["PHP", "JavaScript", "Phyton"];
    $bestLanguages[] = "Java";
    $bestLanguages[] = "TypeScript";

    $person = [
        "name" => "Migel",
        "age" => 78,
        "isDev" => true,
        "languages" => ["PHP", "JavaScript", "Python"],
    ];
    $person["name"] = "carlos";
    $person["languages"][] = "java";
?>

<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>
      

<img src="<?= LOGO_URL ?>" alt="">
<h1>
    <?= $output ?> 
</h1>

<h2><?= $outputAge ?></h2>

<style>
    :root {
        color-scheme: dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>