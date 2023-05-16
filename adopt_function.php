<?php
        include_once("config.php");


            if(isset($_POST['adopt'])){
                $pet_id = $_POST['pet_id'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $pet_name = $_POST['pet_name'];


                $insert = mysqli_query($conn, "INSERT INTO adopt_history (owner, phone, pet_name) VALUES ('$name', '$phone', '$pet_name')");
                $delete = mysqli_query($conn, "DELETE FROM adopt_catalog WHERE ID='$pet_id'");

                if ($delete) {  
                    header('location:adoption.php');  
               }
            }