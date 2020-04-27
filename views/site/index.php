<html>
<head></head>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<body>
<form action="index.php" method="post">
    <label>Enter your name </label>
    <p>Name: <input type="text" name="nameString" class="form-control" required></p>
    <input type="submit">
</form>

<?php


$str1 = $_POST["nameString"];
if(!empty($str1))
{
    echo "<h1>Your name is $str1 </h1>";
    $str_base64= base64_encode ($str1);

    echo "<h3>Hello $str_base64,Welcome to WNS!! <br></h3>";
}
$p=time();
//echo "<br />";
echo $p;



?>


</body >
</html>