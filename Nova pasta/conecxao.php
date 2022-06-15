<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=food", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
  
 

    session_start();

    $Login =$_POST['login'];
    $Senha =$_POST['senha'];
    
  //  $con = mysqli_connect('HOSTNAME','USERNAME','PASSWORD');

  //  mysqli_select_db('food'$con);
    
    
    
//  $result = mysql_query("SELECT * FROM `login` WHERE `idLOGIN` = '$login' AND `idSenha`= '$login'");

// banco de dados comunica

// verifica banco login 


/* if(mysql_num_rows ($result) > 0 )
{
$_SESSION['idLOGIN'] = $login;
$_SESSION['IdSENHA'] = $senha;
header('location:site.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:index.php');

  }

*/
?>
