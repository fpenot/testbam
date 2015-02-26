<?php

namespace eBAM\ObjectMgtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="eBAM\ObjectMgtBundle\Entity\CompanyRepository")
 */
class Company
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
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_modification_date", type="datetime")
     */
    private $lastModificationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="FullLegalName", type="text")
     */
    private $fullLegalName;

    /**
     * @var string
     *
     * @ORM\Column(name="TradingName", type="text")
     */
    private $tradingName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="RegistrationDate", type="date")
     */
    private $registrationDate;


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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Company
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set lastModificationDate
     *
     * @param \DateTime $lastModificationDate
     * @return Company
     */
    public function setLastModificationDate($lastModificationDate)
    {
        $this->lastModificationDate = $lastModificationDate;

        return $this;
    }

    /**
     * Get lastModificationDate
     *
     * @return \DateTime 
     */
    public function getLastModificationDate()
    {
        return $this->lastModificationDate;
    }

    /**
     * Set fullLegalName
     *
     * @param string $fullLegalName
     * @return Company
     */
    public function setFullLegalName($fullLegalName)
    {
        $this->fullLegalName = $fullLegalName;

        return $this;
    }

    /**
     * Get fullLegalName
     *
     * @return string 
     */
    public function getFullLegalName()
    {
        return $this->fullLegalName;
    }

    /**
     * Set tradingName
     *
     * @param string $tradingName
     * @return Company
     */
    public function setTradingName($tradingName)
    {
        $this->tradingName = $tradingName;

        return $this;
    }

    /**
     * Get tradingName
     *
     * @return string 
     */
    public function getTradingName()
    {
        return $this->tradingName;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     * @return Company
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime 
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }
}
