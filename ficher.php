<?php
$errors = [];
$allowedMimeTypes = ['text/plain', 'image/jpeg', 'image/jpg', 'application/pdf', 'image/svg+xml'];

if (!is_dir('upload')){
    mkdir('upload','0755');
}

//On boucle sur tous les fichiers proposé dans _FILES.

foreach ($_FILES as $file) {
    if ($file['error'] === 0){
        if (in_array($file['type'], $allowedMimeTypes) && (int)$file['size'] <= (2 * 1024 * 1024)){

        }
        else{
            $errors[] = "votre fichier et trop grand " . $file["name"];
        }
    }
    else{
        $errors[] = "Une erreur s'est produite ";
    }
}