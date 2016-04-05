<?php

namespace VoorraadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use VoorraadBundle\Entity\ReparatieRegel;
/**
 * ReparatieOrder
 *
 * @ORM\Table(name="reparatie_order")
 * @ORM\Entity(repositoryClass="VoorraadBundle\Repository\ReparatieOrderRepository")
 */
class ReparatieOrder
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="voertuig", type="integer")
     */
    private $voertuig;

    /**
     * @var int
     *
     * @ORM\Column(name="kilometerstand", type="integer")
     */
    private $kilometerstand;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="datetime")
     */
    private $datum;

    /**
     * @ORM\OneToMany(targetEntity="ReparatieRegel", mappedBy="order")
     */
    private $regels;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set voertuig
     *
     * @param integer $voertuig
     * @return ReparatieOrder
     */
    public function setVoertuig($voertuig)
    {
        $this->voertuig = $voertuig;

        return $this;
    }

    /**
     * Get voertuig
     *
     * @return integer 
     */
    public function getVoertuig()
    {
        return $this->voertuig;
    }

    /**
     * Set kilometerstand
     *
     * @param integer $kilometerstand
     * @return ReparatieOrder
     */
    public function setKilometerstand($kilometerstand)
    {
        $this->kilometerstand = $kilometerstand;

        return $this;
    }

    /**
     * Get kilometerstand
     *
     * @return integer 
     */
    public function getKilometerstand()
    {
        return $this->kilometerstand;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     * @return ReparatieOrder
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime 
     */
    public function getDatum()
    {
        return $this->datum;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->regels = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add regels
     *
     * @param \VoorraadBundle\Entity\ReparatieRegel $regels
     * @return ReparatieOrder
     */
    public function addRegel(\VoorraadBundle\Entity\ReparatieRegel $regels)
    {
        $this->regels[] = $regels;

        return $this;
    }

    /**
     * Remove regels
     *
     * @param \VoorraadBundle\Entity\ReparatieRegel $regels
     */
    public function removeRegel(\VoorraadBundle\Entity\ReparatieRegel $regels)
    {
        $this->regels->removeElement($regels);
    }

    /**
     * Get regels
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegels()
    {
        return $this->regels;
    }
}
