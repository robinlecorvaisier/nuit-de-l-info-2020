<?php


class BddConnectorFactory
{
    static public function create()
    {
        $connector = mysqli_connect("localhost", "root", "", "spacegameoddyssey");

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