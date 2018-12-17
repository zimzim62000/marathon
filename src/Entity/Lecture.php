<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LectureRepository")
 */
class Lecture
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateLecture;

    /**
     * @ORM\Column(type="integer")
     */
    private $numSequence;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Chapitre")
     */
    private $chapitre;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Histoire")
     */
    private $histoire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateLecture(): ?\DateTimeInterface
    {
        return $this->dateLecture;
    }

    public function setDateLecture(\DateTimeInterface $dateLecture): self
    {
        $this->dateLecture = $dateLecture;

        return $this;
    }

    public function getNumSequence(): ?int
    {
        return $this->numSequence;
    }

    public function setNumSequence(int $numSequence): self
    {
        $this->numSequence = $numSequence;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChapitre() {
        return $this->chapitre;
    }

    /**
     * @param mixed $chapitre
     */
    public function setChapitre($chapitre): void {
        $this->chapitre = $chapitre;
    }

    /**
     * @return mixed
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getHistoire() {
        return $this->histoire;
    }

    /**
     * @param mixed $histoire
     */
    public function setHistoire($histoire): void {
        $this->histoire = $histoire;
    }

}
