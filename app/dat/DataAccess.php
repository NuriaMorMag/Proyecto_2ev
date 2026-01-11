<?php
//Clase que habla con la BD

require_once "Userapp.php";
require_once "Gallery.php";
require_once "app/config.php";

class DataAccess
{

    private static $model = null; //Guarda la única instancia de la clase (Singleton)

    //Sentencias preparadas
    private $stmt_User;
    private $connection;
    private $stmt_allImages;
    private $stmt_imagesByCategory;

    private function __construct()
    {
        try {
            $this->connection = new PDO(
                "mysql:host=" . SERVER_DB . ";dbname=" . DATABASE . ";charset=utf8",
                DB_USER,
                DB_PASSWD
            );

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //si hay un error se lanza una excepcion
            $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            // Preparo las sentencias una sola vez 
            $this->stmt_User = $this->connection->prepare("SELECT * FROM userapp WHERE login = :login");
            $this->stmt_allImages = $this->connection->prepare("SELECT * FROM gallery");
            $this->stmt_imagesByCategory = $this->connection->prepare("SELECT * FROM gallery WHERE category = :cat");
        } catch (PDOException $e) {
            die("Connection error: " . $e->getMessage());
        }
    }

    /*
    Si no existe el objeto, lo crea
    Hace que no haya dos conexiones a la BD
    */
    public static function getModel()
    {
        if (self::$model == null) {
            self::$model = new DataAccess();
        }
        return self::$model;
    }

    //Cierra la conexión anulando todos los objectos relacioanado con la conexión PDO (stmt)
    public static function closeModel()
    {
        if (self::$model != null) {
            self::$model->stmt_getUser = null;
            self::$model->stmt_allImages = null;
            self::$model->stmt_imagesByCategory = null;
            self::$model->connection = null;
            self::$model = null;
        }
    }

    //Devuelve un usuario o false
    public function getUser(String $login)
    {
        $user = false;

        $this->stmt_User->setFetchMode(PDO::FETCH_CLASS, 'Userapp');
        $this->stmt_User->bindParam(':login', $login);

        if ($this->stmt_User->execute()) {
            if ($obj = $this->stmt_User->fetch()) {
                $user = $obj;
            }
        }

        return $user;
    }

    // Devuelve todas las imágenes
    public function getAllImages()
    {
        $this->stmt_allImages->execute();
        return $this->stmt_allImages->fetchAll(PDO::FETCH_CLASS, "Gallery");
    }

    // Devuelve las imágenes por categoría
    public function getImagesByCategory($category)
    {
        $this->stmt_imagesByCategory->bindParam(":cat", $category);
        $this->stmt_imagesByCategory->execute();
        return $this->stmt_imagesByCategory->fetchAll(PDO::FETCH_CLASS, "Gallery");
    }

    // Evita la clonación del Singleton 
    public function __clone()
    {
        trigger_error("You cannot clone a Singleton", E_USER_ERROR);
    }
}
