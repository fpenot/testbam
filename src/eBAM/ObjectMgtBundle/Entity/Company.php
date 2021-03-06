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

	public function __construct()
	{
		// Par d�faut, la date de l'annonce est la date d'aujourd'hui
		$this->creationDate = new \Datetime();
		$this->lastModificationDate = new \Datetime();
		$this->registrationDate = new \Datetime();
	}

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
	* @ORM\ManyToOne(targetEntity="eBAM\RefDataBundle\Entity\CountryCode")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $countryOfOperation;

	/**
	* @ORM\ManyToOne(targetEntity="eBAM\ObjectMgtBundle\Entity\Address")
	*/
	private $operationalAddress;

	/**
	* @ORM\ManyToOne(targetEntity="eBAM\ObjectMgtBundle\Entity\Address")
	*/
	private $businessAddress;

	/**
	* @ORM\ManyToOne(targetEntity="eBAM\ObjectMgtBundle\Entity\Address")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $legalAddress;

	/**
	* @ORM\ManyToOne(targetEntity="eBAM\ObjectMgtBundle\Entity\Address")
	*/
	private $billingAddress;

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

    /**
     * Set countryOfOperation
     *
     * @param \eBAM\RefDataBundle\Entity\CountryCode $countryOfOperation
     * @return Company
     */
    public function setCountryOfOperation(\eBAM\RefDataBundle\Entity\CountryCode $countryOfOperation)
    {
        $this->countryOfOperation = $countryOfOperation;

        return $this;
    }

    /**
     * Get countryOfOperation
     *
     * @return \eBAM\RefDataBundle\Entity\CountryCode 
     */
    public function getCountryOfOperation()
    {
        return $this->countryOfOperation;
    }

    /**
     * Set operationalAddress
     *
     * @param \eBAM\ObjectMgtBundle\Entity\Address $operationalAddress
     * @return Company
     */
    public function setOperationalAddress(\eBAM\ObjectMgtBundle\Entity\Address $operationalAddress = null)
    {
        $this->operationalAddress = $operationalAddress;

        return $this;
    }

    /**
     * Get operationalAddress
     *
     * @return \eBAM\ObjectMgtBundle\Entity\Address 
     */
    public function getOperationalAddress()
    {
        return $this->operationalAddress;
    }

    /**
     * Set businessAddress
     *
     * @param \eBAM\ObjectMgtBundle\Entity\Address $businessAddress
     * @return Company
     */
    public function setBusinessAddress(\eBAM\ObjectMgtBundle\Entity\Address $businessAddress = null)
    {
        $this->businessAddress = $businessAddress;

        return $this;
    }

    /**
     * Get businessAddress
     *
     * @return \eBAM\ObjectMgtBundle\Entity\Address 
     */
    public function getBusinessAddress()
    {
        return $this->businessAddress;
    }

    /**
     * Set legalAddress
     *
     * @param \eBAM\ObjectMgtBundle\Entity\Address $legalAddress
     * @return Company
     */
    public function setLegalAddress(\eBAM\ObjectMgtBundle\Entity\Address $legalAddress)
    {
        $this->legalAddress = $legalAddress;

        return $this;
    }

    /**
     * Get legalAddress
     *
     * @return \eBAM\ObjectMgtBundle\Entity\Address 
     */
    public function getLegalAddress()
    {
        return $this->legalAddress;
    }

    /**
     * Set billingAddress
     *
     * @param \eBAM\ObjectMgtBundle\Entity\Address $billingAddress
     * @return Company
     */
    public function setBillingAddress(\eBAM\ObjectMgtBundle\Entity\Address $billingAddress = null)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * Get billingAddress
     *
     * @return \eBAM\ObjectMgtBundle\Entity\Address 
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }
}
