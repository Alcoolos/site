<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CocktailRepository")
 */
class Cocktail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    // add your own fields

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $desc;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $imglink = 'test';

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $notemoy;


    public function getId()
    {
        return $this->id;
    }

    public function getNotemoy()
    {
        return $this->notemoy;
    }

    public function getImglink()
    {
        return $this->imglink;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setImglink($imglink)
    {
        $this->imglink = $imglink;
    }

    public function setNotemoy($notemoy)
    {
        $this->notemoy = $notemoy;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setDesc($desc)
    {
        $this->desc = $desc;
    }
}
