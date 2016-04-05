<?php

namespace VoorraadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use VoorraadBundle\Entity\Product;
use VoorraadBundle\Entity\ReparatieOrder;

/**
 * ReparatieRegel
 *
 * @ORM\Table(name="reparatie_regel")
 * @ORM\Entity(repositoryClass="VoorraadBundle\Repository\ReparatieRegelRepository")
 */
class ReparatieRegel
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
     * @ORM\Column(name="aantal", type="integer")
     */
    private $aantal;

    /**
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product", referencedColumnName="id")
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity="ReparatieOrder", inversedBy="regels")
     * @ORM\JoinColumn(name="order", referencedColumnName="id")
     */
    private $order;


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
     * Set aantal
     *
     * @param integer $aantal
     * @return ReparatieRegel
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
     * Set product
     *
     * @param \VoorraadBundle\Entity\Product $product
     * @return ReparatieRegel
     */
    public function setProduct(\VoorraadBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \VoorraadBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set order
     *
     * @param \VoorraadBundle\Entity\ReparatieOrder $order
     * @return ReparatieRegel
     */
    public function setOrder(\VoorraadBundle\Entity\ReparatieOrder $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \VoorraadBundle\Entity\ReparatieOrder 
     */
    public function getOrder()
    {
        return $this->order;
    }
}
