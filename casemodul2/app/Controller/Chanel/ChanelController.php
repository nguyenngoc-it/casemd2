<?php


namespace App\Controller\Chanel;


use App\Model\ProductModel;

class ChanelController
{
    protected $chanelModel;

    public function __construct()
    {
        $this->chanelModel = new ProductModel();
    }


    public function showAllproducts()
    {
        $products = $this->chanelModel->getAll();
        include_once 'app/View/backend/chanel/list.php';
    }

    public function showAllAfnan()
    {
        $products = $this->chanelModel->getAfnan();
        include_once 'app/View/backend/chanel/list.php';
    }

    public function showAllAlaia()
    {
        $products = $this->chanelModel->getAlaia();
        include_once 'app/View/backend/chanel/list.php';
    }

    public function showBurbery()
    {
        $products = $this->chanelModel->getBurbery();
        include_once 'app/View/backend/chanel/list.php';
    }

    public function showCalvin()
    {
        $products = $this->chanelModel->getCalvin();
        include_once 'app/View/backend/chanel/list.php';
    }

    public function createProduct()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'app/View/backend/chanel/create.php';
        } else {
            $_REQUEST['fileToUpload'] = $this->uploadImage();
            $this->chanelModel->create($_REQUEST);
            //echo '<pre>';var_dump($result);die();
            header('location:home.php');

        }
    }

    public function deleteProduct()
    {
        $id = $_REQUEST['id'];
        $this->chanelModel->delete($id);
        header('location:home.php');
    }

    public function updateProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $product = $this->chanelModel->getById($id);
            include_once 'app/View/backend/chanel/update.php';
        } else {
            if ($_REQUEST['fileToUpload'] !== '') {
                $this->uploadImage();
            }
            $this->chanelModel->update($_REQUEST);
            header('location:home.php');
        }
    }

    public function searchproduct($request)
    {
        $products = $this->chanelModel->search($request);
        include_once 'app/View/backend/chanel/search.php';
    }

    public function uploadImage()
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

// Check file size
//        if ($_FILES["fileToUpload"]["size"] > 500000) {
//            echo "Sorry, your file is too large.";
//            $uploadOk = 0;
//        }

// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }


}