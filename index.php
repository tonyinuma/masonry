<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "imgs");

$sql = "SELECT * FROM images";
$result = mysqli_query($db, "SELECT * FROM images");

?>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .grid-item {background-color: black; color: aliceblue;}
        .grid-item img { width: 100%;}
        .grid-item--width2 { width: 400px; }
    </style>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
</head>

 <div class="container">

     <div class='grid'>

         <?php



         foreach ($result as $a) {

             $v_add=mt_rand(1,50);
             $v_def = 100 + $v_add;
             $size = $v_def .".px";
             echo $size;

             echo '<div class="grid-item" style=" background-color: black; color: aliceblue; width: '.$size.'">
                 <a href="'.$a['path'].'">
                    <img src="'.$a['path'].'" style="width: '.$size.'">
                    </a>
                    <h2>'.$a['name'].'</h2>
                    <h2>'.$size.'</h2>
             </div>';
         }
         ?>

     </div>

 </div>




    <script type="text/javascript">
    jQuery(document).ready(function(){
        $('.grid').masonry({
            // options
            itemSelector: '.grid-item',
            columnWidth: 200
        });
    });
    </script>

</html>




<!--
<div class='grid'>
    ?php
while($row = mysqli_fetch_array($result)){
    echo '<div class="grid-item">
            <a href="'.$row['path'].'" target="_blank">
                <img src="'.$row['path'].'" alt="">
                <div>
                    <div>'.$row['name'].'</div>
                </div>
            </a>
        </div>';
}

mysqli_close($db);
?>
</div>
-->