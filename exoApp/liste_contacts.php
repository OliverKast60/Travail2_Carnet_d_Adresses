<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        define('DB_SERVER','localhost');
        define('DB_USER','root');
        define('DB_PASS','');
        define('DB_NAME','contact');
        $bdd=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    ?>
<?php
        $affichcontact =$bdd->query("SELECT* FROM  mescontacts");
        include ("b.php");
?>
    <center>
        <h2 style="margin-left: 100px;margin-top: 40px;">Les Contacts</h2>
    </center>
    <table id="medectable" style="text-align: center;">
        <tr style="font-weight: 500; font-size: 22px; color: #4F6487;">
            <td class="">
                id contact
            </td>
            <td class="">
                Nom contact
            </td>
            <td class="m">
                Prénom contact
            </td>
            <td class="" colspan="5" style="text-align: center;">
                Actions
            </td>
        </tr>

    <?php
    $num = 1;

    while($sbdcontact=$affichcontact->fetch_assoc())
    {
    ?>
        <tr>
            <td class="medec">
                <?php echo $num ++;?>
            </td>
            <td class="medec">
                <?php echo $sbdcontact["nom"];?>
            </td>
            <td class="medec">
                <?php echo $sbdcontact["prenom"];?>
            </td>
            <td class="medec">
                <a href="./contact.php?modif=<?php echo $sbdcontact["id"];?>">Plus...</a>
            </td>
        </tr>

        <?php
        }
        ?>
    </table>
    <a href="./index.php">Retour</a>
</body>
</html>
