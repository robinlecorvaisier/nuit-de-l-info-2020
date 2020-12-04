<?php


class BddConnectorFactory
{
    static public function create()
    {
        $connector = mysqli_connect("146.59.204.253", "admin", "moicontent", "surfeur");

        if(!$connector){
            echo "erreur connexion base de données";
            die;
        }

        if ($connector->connect_errno) {
            echo 'Connect Error (' . $connector->connect_errno . ') <br>'
                . $connector->connect_error;
            die;
        }

        return $connector;
    }
}