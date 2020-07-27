<?php

class Clientmordb extends DB
{

    public function addClientmoral($raison_social, $nom, $adresse, $numidentf, $telephone, $email, $login, $password)
    {
        $sql = "INSERT INTO client_moral VALUES(NULL, '$raison_social', '$nom', '$adresse', '$numidentf', '$telephone', '$email', '$login', '$password')";

        $conn = getConnection();
        return $conn->exec($sql);
    }
}
