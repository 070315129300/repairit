<?php 
    class sanitize{

        function sanitizeInput($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = addslashes($data);

            return $data;

        }
    }
?>