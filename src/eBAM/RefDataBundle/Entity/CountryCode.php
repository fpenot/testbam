<?php

namespace eBAM\RefDataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CountryCode
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="eBAM\RefDataBundle\Entity\CountryCodeRepository")
 */
class CountryCode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CountryCode", type="string")
     */
    private $countryCode;

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
     * Set countryCode
     *
     * @param integer $countryCode
     * @return CountryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return integer 
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
}
