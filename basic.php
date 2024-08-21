<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    max-width: 80%;
    background-color: aqua;
    margin: auto;
    padding: 23px;
}
</style>
<body>
  <div class="container">
    <h1> hello this is my site</h1>
    <p>your party status:</p>
    
<?php
$age = 34;
if($age<5){
    echo "you can go to the party";
}
else{
    echo "you can not go to the party";
}


 $languages = array("suhas","tope","hello");
 echo count($languages);
 echo $languages[2];

// iterating arrays in PHP using while loop 
 $a = 0;
 while($a <count($languages)){
     echo "<br>the value of a is:";
     echo $languages[$a];
     $a++;
 }

 
// // using do while loop 
// $a = 0;
// do{
//     echo "<br>the value of a is:";
//     echo $a;
//     $a++;
// }while($a <=10);

// using do while loop
// $i = 0;
//     while ($i <= 10) {
//         echo "<br>the value of a is:";
//         echo $i;
//         $i++;
//     }

// for loop
for ($i=0; $i < 10; $i++) { 
    echo "<br>the value from for loop of i is:";
    echo $i;
  }


?>
</div>?you
</body>

</html>