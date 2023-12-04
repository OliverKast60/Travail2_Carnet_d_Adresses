<?php
    session_start();
    ob_start();
    include('conn.php');
    include "config.php";
    include ("b.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" class="d-flex flex-column gap-3 m-auto col-10 col-md-7 col-xl-4" method="post" enctype="multipart/form-data">
<div class="text-center">
<div class="form-div mb-5 mt-3">
    <center><h1 class="title-form">AJOUTER UN CONTACT</h1></center>
</div>
<div class="form-div mt-3 mb-3">
    <input type="text" name="nom" id="" class="form-control" placeholder="Nom du Contact" required autocomplete="off">
</div>
<div class="form-div mb-3">
    <input type="text" name="prenom" id="" class="form-control" placeholder="Prenom du Contact" required autocomplete="off">
</div>
<div class="form-div mb-3">
    <input type="telephone" name="telephone" class="form-control" required placeholder="Telephone" autocomplete="off">
</div>
<div class="form-div mb-3">
    <input type="text" name="adresse" class="form-control" required placeholder="Adresse du contact" autocomplete="off">
</div>

<div class="form-div mb-3">
    <input type="email" name="email" class="form-control" required placeholder="Email" autocomplete="off">
</div>
<div class="form-div mb-3">
    <input type="text" name="description" class="form-control" required placeholder="Description" autocomplete="off">
</div>
<div class="p-3 m-auto text-center mb-3 mt-3">
    <button type="submit" name="save" class="btn btn-primary border-0 py-2 px-3" style="background-color: #4F6487;height:40px; text-align: center; align-items: center;">Envoyer</button>
    <button type="reset" name="reset" class="btn btn-primary border-0 py-2 px-3" style="background-color: red;height:40px; text-align: center;">Annuler</button>
    <button type="submit" name="save" class="btn btn-primary border-0 py-2 px-3" style="background-color: #4F6487;height:40px; text-align: center; align-items: center; text-decoration: none;"><a href="./liste_contacts.php" style="color: #fff;">Contacts</a></button>
</div>
</form>

<?php
    if (isset($_POST["save"])) {
        $nom= $_POST["nom"];
        $prenom = $_POST["prenom"];
        $telephone = $_POST["telephone"];
        $adresse = $_POST["adresse"];
        $email = $_POST["email"];
        $description = $_POST["description"];

        $insert_contact = "INSERT INTO `mescontacts`( `nom`, `prenom`, `numero`, `adresse`, `email`, `description`) VALUES ('$nom','$prenom','$adresse','$telephone','$email','$description')";

        $dbh->exec($insert_contact);

        header("location:./liste_contacts.php");
    }
?>

</body>
</html>
