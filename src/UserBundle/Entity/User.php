<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
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
     * @ORM\OneToOne(targetEntity="AdvertBundle\Entity\Advert", inversedBy="user")
     */
    public $reservedCar;

    /**
     * @return mixed
     */
    public function getReservedCar()
    {
        return $this->reservedCar;
    }

    /**
     * @param mixed $reservedCar
     */
    public function setReservedCar($reservedCar)
    {
        $this->reservedCar = $reservedCar;
    }

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
}
