<?php 
    $server = 'localhost';
    $username = 'root';
    $password ='';
    $dbname ='corona';
    $conn = mysqli_connect($server,$username,$password,$dbname);
    if($conn){
        ?>
        <script>
            alert('successfull');
        </script>

        <?php
    }
    else{
        ?>
        <script>
            alert('error');
        </script>

        <?php
    }


?>