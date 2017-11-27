<?php

namespace AdvertBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Expertise
 *
 * @ORM\Table(name="expertise")
 * @ORM\Entity(repositoryClass="AdvertBundle\Repository\ExpertiseRepository")
 */
class Expertise
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
     * One Cart has One Customer.
     * @OneToOne(targetEntity="AdvertBundle\Entity\Advert", inversedBy="expertise")
     * @JoinColumn(name="advert_id", referencedColumnName="id")
     */
    private $advert;


    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */

    private $status;

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
     * Set advert
     *
     * @param \AdvertBundle\Entity\Advert $advert
     *
     * @return Expertise
     */
    public function setAdvert(\AdvertBundle\Entity\Advert $advert = null)
    {
        $this->advert = $advert;

        return $this;
    }

    /**
     * Get advert
     *
     * @return \AdvertBundle\Entity\Advert
     */
    public function getAdvert()
    {
        return $this->advert;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Expertise
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
