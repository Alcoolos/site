<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NotesRepository")
 */
class Notes
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
  
      /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Produit")
    * @ORM\JoinColumn(nullable=true)
    */
    private $produit_id;

    // add your own fields

    /**
     * @ORM\Column(type="float")
     */
    private $note;

    public function getProduit_id()
    {
        return $this->produit_id;
    }

    public function setProduit_id($produit_id)
    {
        $this->produit_id = $produit_id;
    }

    // public function getUser_id()
    // {
    //     return $this->user_id;
    // }
    //
    // public function setUser_id($user_id)
    // {
    //     $this->user_id = $user_id;
    // }


    public function getNote()
    {
        return $this->note;
    }

    public function setNote($note)
    {
        $this->note = $note;
    }
}
