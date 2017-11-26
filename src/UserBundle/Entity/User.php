<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\ManyToMany(targetEntity="AdvertBundle\Entity\Advert", cascade={"persist"})
     */
    private $favorite_advert;

    /**
     * One Product has Many Features.
     * @OneToMany(targetEntity="AdvertBundle\Entity\Advert", mappedBy="reservedBy")
     */
    private $reservedCar;

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
     * Add favoriteAdvert
     *
     * @param \AdvertBundle\Entity\Advert $favoriteAdvert
     *
     * @return User
     */
    public function addFavoriteAdvert(\AdvertBundle\Entity\Advert $favoriteAdvert)
    {
        $this->favorite_advert[] = $favoriteAdvert;

        return $this;
    }

    /**
     * Remove favoriteAdvert
     *
     * @param \AdvertBundle\Entity\Advert $favoriteAdvert
     */
    public function removeFavoriteAdvert(\AdvertBundle\Entity\Advert $favoriteAdvert)
    {
        $this->favorite_advert->removeElement($favoriteAdvert);
    }

    /**
     * Get favoriteAdvert
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFavoriteAdvert()
    {
        return $this->favorite_advert;
    }

    /**
     * Add reservedCar
     *
     * @param \AdvertBundle\Entity\Advert $reservedCar
     *
     * @return User
     */
    public function addReservedCar(\AdvertBundle\Entity\Advert $reservedCar)
    {
        $this->reservedCar[] = $reservedCar;

        return $this;
    }

    /**
     * Remove reservedCar
     *
     * @param \AdvertBundle\Entity\Advert $reservedCar
     */
    public function removeReservedCar(\AdvertBundle\Entity\Advert $reservedCar)
    {
        $this->reservedCar->removeElement($reservedCar);
    }

    /**
     * Get reservedCar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservedCar()
    {
        return $this->reservedCar;
    }
}
