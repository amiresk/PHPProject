<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
</head>

<body>

    <?php
    
    $db = mysqli_connect("localhost", "root", "", "shop_store" );
    $result = mysqli_query($db , "SELECT * FROM products " );

    echo '<div class="flex-container">';
    while($row = mysqli_fetch_array($result)){
        echo '<div>'
                        ."<a href=''><img style= width:100px;height:100px; src='images/".$row['image']."' >".'</a><br><br>'
                        ."<strong>".$row['name'].'</strong><br><br><br>'
                        .$row['description']
                        .'<br><br><br> $'
                        .$row['price'].'</h5><br>'
                        .           '</div>';
    }
     echo "</div>";

    ?>
    
    <details>
        <summary>Copyright 1999-2014.</summary>
        <p> - by Refsnes Data. All Rights Reserved.</p>
        <p>All content and graphics on this web site are the property of the company Refsnes Data.</p>
   </details>

</body>
</html>