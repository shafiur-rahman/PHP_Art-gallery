

<?php
  require('db.php');
  require('database.php');
  session_start();
  if(isset($_SESSION['username']))
  {
  $username = $_SESSION['username'];
?>


<?php
// Array with names
$a[] = "Shorol";
$a[] = "Cube";
$a[] = "Akif";
$a[] = "Shovon";
$a[] = "masud";
$a[] = "Dhali";
$a[] = "Tusher";
$a[] = "Bahadur";
$a[] = "Turno";



// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>

<?php
}
else
{
  header("Location: index.php");
}?>