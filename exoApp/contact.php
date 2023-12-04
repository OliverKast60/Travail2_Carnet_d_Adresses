<?php
$basedonne=new PDO('mysql:host=localhost;dbname=contact;charset=utf8','root','');
?>
<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>Afficher un contact</title>
</head>
<body>
    <?php
  $affichcontact =$basedonne->query("SELECT*FROM  mescontacts WHERE id='".$_GET["modif"]."' "); 
  $sbdcontact=$affichcontact->fetch();
  include ("b.php");
   ?>
  <div>
    <div class="text-center">
        <div class="form-div mb-5 mt-3">
            <center><h1 class="title-form">Afficher un contact</h1></center>
        </div>
        <div class="form-div mt-3 mb-3">
            <h2>Nom du contact</h2>
            <p><?php echo $sbdcontact["nom"];?></p>
        </div>
        <div class="form-div mb-3">
        <h2>Prenom du contact</h2>
            <p><?php echo $sbdcontact["prenom"];?></p>
        </div>
        <div class="form-div mb-3">
        <h2>tel du contact</h2>
            <p><?php echo $sbdcontact["numero"];?></p>
        </div>
        <div class="form-div mb-3">
        <h2>Adresse du contact</h2>
            <p><?php echo $sbdcontact["adresse"];?></p>
        </div>
        <div class="form-div mb-3">
            <h2>email du contact</h2>
            <p><?php echo $sbdcontact["email"];?></p>
        </div>
        <div class="form-div mb-3">
        <h2>description</h2>
            <p><?php echo $sbdcontact["description"];?></p>
        </div>
        <div class="p-3 m-auto text-center mb-3 mt-3">
            <button type="submit" name="save" class="btn btn-primary border-0 py-2 px-3" style="background-color: #4F6487;height:30px; text-align: center; align-items: center;"><a href="./liste_contacts.php" style="color: #fff;">contacts</a></button>  
        </div>
  </div>
</body>
</html>                    