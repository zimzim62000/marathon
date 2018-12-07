<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="histoire")
 */
class Histoire {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="text", length=500)
     */
    private $pitch;


    /**
     * @ORM\Column(type="string", length=256)
     */
    private $photo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\genre")
     */
    private $genre;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $user;

    /**
     * @return mixed
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPitch() {
        return $this->pitch;
    }

    /**
     * @param mixed $pitch
     */
    public function setPitch($pitch): void {
        $this->pitch = $pitch;
    }

    /**
     * @return mixed
     */
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void {
        $this->photo = $photo;
    }

    /**
     * @return string
     */
    public function getGenre(): string {
        return $this->genre;
    }

    /**
     * @param string $genre
     */
    public function setGenre(string $genre): void {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

}