<?php

namespace AdvertBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * Advert
 *
 * @ORM\Table(name="advert")
 * @ORM\Entity(repositoryClass="AdvertBundle\Repository\AdvertRepository")
 */
class Advert
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
 * @var string
 *
 * @ORM\Column(name="carModel", type="string", length=255)
 */
    private $carModel;

    /**
     * @var string
     *
     * @ORM\Column(name="imageUrl", type="string", length=255)
     */
    private $imageUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="power", type="integer", nullable=true)
     */
    private $power;

    /**
     * @var int
     *
     * @ORM\Column(name="mileage", type="integer")
     */
    private $mileage;

    /**
     * @var int
     *
     * @ORM\Column(name="yearOfProduction", type="integer")
     */
    private $yearOfProduction;

    /**
     * @var string
     *
     * @ORM\Column(name="gearbox", type="string", length=255)
     */
    private $gearbox;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="energy", type="string", length=255)
     */
    private $energy;

    /**
     * @var string
     *
     * @ORM\Column(name="colorIndoor", type="string", length=255)
     */
    private $colorIndoor;

    /**
     * @var string
     *
     * @ORM\Column(name="colorOutdoor", type="string", length=255)
     */
    private $colorOutdoor;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrOfDoors", type="integer")
     */
    private $nbrOfDoors;

    /**
     * @var string
     *
     * @ORM\Column(name="immatriculation", type="string", length=255)
     */
    private $immatriculation;

    /**
     * @var string
     *
     * @ORM\Column(name="greyCard", type="string", length=255)
     */
    private $greyCard;

    /**
     * @var bool
     *
     * @ORM\Column(name="firstHand", type="boolean")
     */
    private $firstHand;


    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="reservedCar")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $reservedBy;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="user_id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $createdBy;

    /**
     * One Customer has One Cart.
     * @OneToOne(targetEntity="AdvertBundle\Entity\Expertise", mappedBy="advert")
     */
    private $expertise;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set carModel
     *
     * @param string $carModel
     *
     * @return Advert
     */
    public function setCarModel($carModel)
    {
        $this->carModel = $carModel;

        return $this;
    }

    /**
     * Get carModel
     *
     * @return string
     */
    public function getCarModel()
    {
        return $this->carModel;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Advert
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set power
     *
     * @param integer $power
     *
     * @return Advert
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return int
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set mileage
     *
     * @param integer $mileage
     *
     * @return Advert
     */
    public function setMileage($mileage)
    {
        $this->mileage = $mileage;

        return $this;
    }

    /**
     * Get mileage
     *
     * @return int
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * Set yearOfProduction
     *
     * @param integer $yearOfProduction
     *
     * @return Advert
     */
    public function setYearOfProduction($yearOfProduction)
    {
        $this->yearOfProduction = $yearOfProduction;

        return $this;
    }

    /**
     * Get yearOfProduction
     *
     * @return int
     */
    public function getYearOfProduction()
    {
        return $this->yearOfProduction;
    }

    /**
     * Set gearbox
     *
     * @param string $gearbox
     *
     * @return Advert
     */
    public function setGearbox($gearbox)
    {
        $this->gearbox = $gearbox;

        return $this;
    }

    /**
     * Get gearbox
     *
     * @return string
     */
    public function getGearbox()
    {
        return $this->gearbox;
    }

    /**
     * Set energy
     *
     * @param string $energy
     *
     * @return Advert
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }

    /**
     * Get energy
     *
     * @return string
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Set colorIndoor
     *
     * @param string $colorIndoor
     *
     * @return Advert
     */
    public function setColorIndoor($colorIndoor)
    {
        $this->colorIndoor = $colorIndoor;

        return $this;
    }

    /**
     * Get colorIndoor
     *
     * @return string
     */
    public function getColorIndoor()
    {
        return $this->colorIndoor;
    }

    /**
     * Set colorOutdoor
     *
     * @param string $colorOutdoor
     *
     * @return Advert
     */
    public function setColorOutdoor($colorOutdoor)
    {
        $this->colorOutdoor = $colorOutdoor;

        return $this;
    }

    /**
     * Get colorOutdoor
     *
     * @return string
     */
    public function getColorOutdoor()
    {
        return $this->colorOutdoor;
    }

    /**
     * Set nbrOfDoors
     *
     * @param integer $nbrOfDoors
     *
     * @return Advert
     */
    public function setNbrOfDoors($nbrOfDoors)
    {
        $this->nbrOfDoors = $nbrOfDoors;

        return $this;
    }

    /**
     * Get nbrOfDoors
     *
     * @return int
     */
    public function getNbrOfDoors()
    {
        return $this->nbrOfDoors;
    }

    /**
     * Set immatriculation
     *
     * @param string $immatriculation
     *
     * @return Advert
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get immatriculation
     *
     * @return string
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set greyCard
     *
     * @param string $greyCard
     *
     * @return Advert
     */
    public function setGreyCard($greyCard)
    {
        $this->greyCard = $greyCard;

        return $this;
    }

    /**
     * Get greyCard
     *
     * @return string
     */
    public function getGreyCard()
    {
        return $this->greyCard;
    }

    /**
     * Set firstHand
     *
     * @param boolean $firstHand
     *
     * @return Advert
     */
    public function setFirstHand($firstHand)
    {
        $this->firstHand = $firstHand;

        return $this;
    }

    /**
     * Get firstHand
     *
     * @return bool
     */
    public function getFirstHand()
    {
        return $this->firstHand;
    }

    /**
     * Set reservedBy
     *
     * @param \UserBundle\Entity\User $reservedBy
     *
     * @return Advert
     */
    public function setReservedBy(\UserBundle\Entity\User $reservedBy = null)
    {
        $this->reservedBy = $reservedBy;

        return $this;
    }

    /**
     * Get reservedBy
     *
     * @return \UserBundle\Entity\User
     */
    public function getReservedBy()
    {
        return $this->reservedBy;
    }

    /**
     * Set expertise
     *
     * @param \AdvertBundle\Entity\Expertise $expertise
     *
     * @return Advert
     */
    public function setExpertise(\AdvertBundle\Entity\Expertise $expertise = null)
    {
        $this->expertise = $expertise;

        return $this;
    }

    /**
     * Get expertise
     *
     * @return \AdvertBundle\Entity\Expertise
     */
    public function getExpertise()
    {
        return $this->expertise;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return Advert
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param description $description
     * @return Advert
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


    public function  __toString(){
        return $this->getCarModel();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->createdBy = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add createdBy
     *
     * @param \UserBundle\Entity\User $createdBy
     *
     * @return Advert
     */
    public function addCreatedBy(\UserBundle\Entity\User $createdBy)
    {
        $this->createdBy[] = $createdBy;

        return $this;
    }

    /**
     * Remove createdBy
     *
     * @param \UserBundle\Entity\User $createdBy
     */
    public function removeCreatedBy(\UserBundle\Entity\User $createdBy)
    {
        $this->createdBy->removeElement($createdBy);
    }

    /**
     * Get createdBy
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set createdBy
     *
     * @param \UserBundle\Entity\User $createdBy
     *
     * @return Advert
     */
    public function setCreatedBy(\UserBundle\Entity\User $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }
}
