
<?php 

    function base64_url_encode($input)
    {
        $salt="455780ECRET_STUFF56476335";

        $encript = base64_encode($input.$salt);
        return $encript;
    }


    function base64_url_decode($input)
    {
        $salt="455780ECRET_STUFF56476335";
        $decrypted_id_raw = base64_decode($input);
        $decrypted_id = preg_replace(sprintf('/%s/', $salt), '', $decrypted_id_raw);
        return $decrypted_id;

    }



    function fetchAll($conn, $query){
        $stmt = $conn-> query($query);
        return $stmt->fetchAll();
    }
?>