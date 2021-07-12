<?php


namespace App\Model;


class Product
{
    private $id;
    private $name;
    private $price;
    private $image;
    private $id_category;
    private $describes;
    private $status;

    /**
     * Product constructor.
     * @param $name
     * @param $price
     * @param $image
     * @param $id_category
     * @param $describes
     * @param $status
     */
    public function __construct($name, $price, $id_category, $describes, $status)
    {
        $this->name = $name;
        $this->price = $price;
        $this->id_category = $id_category;
        $this->describes = $describes;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * @param mixed $id_category
     */
    public function setIdCategory($id_category)
    {
        $this->id_category = $id_category;
    }

    /**
     * @return mixed
     */
    public function getDescribes()
    {
        return $this->describes;
    }

    /**
     * @param mixed $describes
     */
    public function setDescribes($describes)
    {
        $this->describes = $describes;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }



}