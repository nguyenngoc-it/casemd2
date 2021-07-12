<?php


namespace App\Model;


class ProductModel
{
    private $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT products.id, products.image,products.name,products.price,products.id_category,products.describes,products.status
                    FROM products
                    JOIN category ON category.id=products.id_category AND category.id=1";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllObj($stmt->fetchAll());

        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function getAfnan()
    {
        try {
            $sql = "SELECT products.id, products.image,products.name,products.price,products.id_category,products.describes,products.status
                    FROM products
                    JOIN category ON category.id=products.id_category AND category.id=2";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllObj($stmt->fetchAll());

        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function getAlaia(): array
    {
        try {
            $sql = "SELECT products.id, products.image,products.name,products.price,products.id_category,products.describes,products.status
                    FROM products
                    JOIN category ON category.id=products.id_category AND category.id=3";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllObj($stmt->fetchAll());

        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function getBurbery()
    {
        try {
            $sql = "SELECT products.id, products.image,products.name,products.price,products.id_category,products.describes,products.status
                    FROM products
                    JOIN category ON category.id=products.id_category AND category.id=4";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllObj($stmt->fetchAll());

        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function getCalvin()
    {
        try {
            $sql = "SELECT products.id, products.image,products.name,products.price,products.id_category,products.describes,products.status
                    FROM products
                    JOIN category ON category.id=products.id_category AND category.id=5 ";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllObj($stmt->fetchAll());

        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $sql = "select * from `products` where `id`=$id";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertToObject($stmt->fetch());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function create($request)
    {

        $url = 'uploads/' . $_FILES['fileToUpload']['name'];
        try {
            $sql = "insert into `products`(`name`,`price`,`image`,`id_category`,`describes`,`status`) values (?,?,?,?,?,?)";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name-product']);
            $stmt->bindParam(2, $request['price-product']);
            $stmt->bindParam(3, $url);
            $stmt->bindParam(4, $request['id-category']);
            $stmt->bindParam(5, $request['describes']);
            $stmt->bindParam(6, $request['status']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }

    }

    public function delete($id)
    {
        $sql = "delete from `products` where `id`=$id";
        $stmt = $this->dbConnect->connect()->prepare($sql);
        $stmt->execute();
    }

    public function update($request)
    {
        $product = $this->getById($_REQUEST['id']);
        if ($_FILES['fileToUpload']['name'] == '') {
            $url = $product->getImage();

        } else {
            $url = 'uploads/' . $_FILES['fileToUpload']['name'];

        }
        try {
            $sql = "update `products` set `name`=?, `price`=?,`image`=?,`id_category`=?,`describes`=?,`status`=? where `id`=" . $request['id'];
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name-product']);
            $stmt->bindParam(2, $request['price-product']);
            $stmt->bindParam(3, $url);
            $stmt->bindParam(4, $request['id-category']);
            $stmt->bindParam(5, $request['describes']);
            $stmt->bindParam(6, $request['status']);
            $stmt->execute();

        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function search($search): array
    {
        try {
            $sql = "SELECT * FROM products WHERE name LIKE '%$search%' ";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->execute();
            return $this->convertAllObj($stmt->fetchAll());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function convertToObject($data)
    {
        $product = new Product($data['name'], $data['price'], $data['id_category'], $data['describes'], $data['status']);
        $product->setId($data['id']);
        if ($data['image'] == null) {
            $product->setImage('upload/default/default.jpg');
        } else {
            $product->setImage($data['image']);
        }
        return $product;
    }

    public function convertAllObj($data)
    {
        $objs = [];
        foreach ($data as $item) {
            $objs[] = $this->convertToObject($item);
        }
        return $objs;
    }



}