<?php
                if(isset($_SESSION['name']))
                {
                unset($_SESSION['name']);
                }
                //echo '<h1>You have been successfully logout</h1>';
				header('location:regi1.php');
?>

