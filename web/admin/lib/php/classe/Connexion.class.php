<?php
class Connexion {

    private static $_instance = null;

    public static function getInstance($dsn, $user, $pass) {

        if (!self::$_instance) {
            try {
                self::$_instance = new PDO($dsn, $user, $pass);
                self::$_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
                ?><script> notif("connection etablie"); </script><?php
            } catch (PDOException $e) {
                print "Erreur de connexion : " . $e->getMessage() . " " . $e->getLine();
                //print "pass : ".$pass. " user = ".$user;
            }
        }
        return self::$_instance;
    }
}
?>


