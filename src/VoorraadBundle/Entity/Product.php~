<?php

namespace VoorraadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="VoorraadBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="artikelnummer", type="text")
     */
    private $artikelnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="omschrijving", type="text")
     */
    private $omschrijving;

    /**
     * @var string
     *
     * @ORM\Column(name="grootboeknummer", type="string", length=255)
     */
    private $grootboeknummer;

    /**
     * @var int
     *
     * @ORM\Column(name="aantal", type="integer")
     */
    private $aantal;

    /**
     * @var string
     *
     * @ORM\Column(name="prijs", type="decimal", scale=2)
     */
    private $prijs;


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
     * Set omschrijving
     *
     * @param string $omschrijving
     * @return Product
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return string 
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * Set grootboeknummer
     *
     * @param string $grootboeknummer
     * @return Product
     */
    public function setGrootboeknummer($grootboeknummer)
    {
        $this->grootboeknummer = $grootboeknummer;

        return $this;
    }

    /**
     * Get grootboeknummer
     *
     * @return string 
     */
    public function getGrootboeknummer()
    {
        return $this->grootboeknummer;
    }

    /**
     * Set aantal
     *
     * @param integer $aantal
     * @return Product
     */
    public function setAantal($aantal)
    {
        $this->aantal = $aantal;

        return $this;
    }

    /**
     * Get aantal
     *
     * @return integer 
     */
    public function getAantal()
    {
        return $this->aantal;
    }

    /**
     * Set prijs
     *
     * @param string $prijs
     * @return Product
     */
    public function setPrijs($prijs)
    {
        $this->prijs = $prijs;

        return $this;
    }

    /**
     * Get prijs
     *
     * @return string 
     */
    public function getPrijs()
    {
        return $this->prijs;
    }

    /**
     * Set artikelnummer
     *
     * @param string $artikelnummer
     * @return Product
     */
    public function setArtikelnummer($artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;

        return $this;
    }

    /**
     * Get artikelnummer
     *
     * @return string 
     */
    public function getArtikelnummer()
    {
        return $this->artikelnummer;
    }
}
