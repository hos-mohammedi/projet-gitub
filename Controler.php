<?php






$nom =  $_POST['nom'] ;
$prenom =  $_POST['prenom'] ;
$Role =  $_POST['Role'] ;
$Email =  $_POST['Email'] ;

$age =  $_POST['AgeUtilisateur'] ;
$mdp =  $_POST['mdp'] ;





if($Role == 'PDG'){
    $Role = 1;
}
elseif ($Role == 'Redacteur'){
    $Role = 2;
}
elseif ($Role == 'Client'){
    $Role = 3;
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myentreprise";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `users`(`Nom`,`Prenom`,`Email`,`Role`,`Age`,`Mdp`) 
VALUES ('$nom','$prenom','$Email','$Role','$age','$mdp')";

if ($conn->query($sql) === TRUE) {
    echo "NEW USER ! ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

