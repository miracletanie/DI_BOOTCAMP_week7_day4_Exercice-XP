<?php
if(isset($_POST["submit"])) {
  $file = $_FILES["file"]["name"];
  $fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
  if($fileType == "pdf") {
    // vérifie s'il y a eu des erreurs lors du téléchargement du fichier
    if ($_FILES["file"]["error"] > 0) {
      echo "Une erreur est survenue lors du téléchargement du fichier.";
    } else {
      // déplace le fichier téléchargé du répertoire temporaire vers une destination souhaitée
      move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$file);
      echo "Le fichier a été téléchargé avec succès.";
    }
  } else {
    echo "Seuls les fichiers PDF sont autorisés.";
  }
}
?>