<?php

namespace eBAM\ObjectMgtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="eBAM\ObjectMgtBundle\Entity\AddressRepository")
 */
class Address
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
     * @ORM\Column(name="Department", type="text")
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="SubDepartment", type="text")
     */
    private $subDepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="StreetName", type="text")
     */
    private $streetName;

    /**
     * @var string
     *
     * @ORM\Column(name="BuildingNumber", type="text")
     */
    private $buildingNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="PostCode", type="text")
     */
    private $postCode;

    /**
     * @var string
     *
     * @ORM\Column(name="TownName", type="text")
     */
    private $townName;

    /**
     * @var string
     *
     * @ORM\Column(name="CountrySubDivision", type="text")
     */
    private $countrySubDivision;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressLine1", type="text")
     */
    private $addressLine1;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressLine2", type="text")
     */
    private $addressLine2;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressLine3", type="text")
     */
    private $addressLine3;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressLine4", type="text")
     */
    private $addressLine4;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressLine5", type="text")
     */
    private $addressLine5;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressLine6", type="text")
     */
    private $addressLine6;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressLine7", type="text")
     */
    private $addressLine7;


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
     * Set department
     *
     * @param string $department
     * @return Address
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set subDepartment
     *
     * @param string $subDepartment
     * @return Address
     */
    public function setSubDepartment($subDepartment)
    {
        $this->subDepartment = $subDepartment;

        return $this;
    }

    /**
     * Get subDepartment
     *
     * @return string 
     */
    public function getSubDepartment()
    {
        return $this->subDepartment;
    }

    /**
     * Set streetName
     *
     * @param string $streetName
     * @return Address
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;

        return $this;
    }

    /**
     * Get streetName
     *
     * @return string 
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Set buildingNumber
     *
     * @param string $buildingNumber
     * @return Address
     */
    public function setBuildingNumber($buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;

        return $this;
    }

    /**
     * Get buildingNumber
     *
     * @return string 
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * Set postCode
     *
     * @param string $postCode
     * @return Address
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get postCode
     *
     * @return string 
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Set townName
     *
     * @param string $townName
     * @return Address
     */
    public function setTownName($townName)
    {
        $this->townName = $townName;

        return $this;
    }

    /**
     * Get townName
     *
     * @return string 
     */
    public function getTownName()
    {
        return $this->townName;
    }

    /**
     * Set countrySubDivision
     *
     * @param string $countrySubDivision
     * @return Address
     */
    public function setCountrySubDivision($countrySubDivision)
    {
        $this->countrySubDivision = $countrySubDivision;

        return $this;
    }

    /**
     * Get countrySubDivision
     *
     * @return string 
     */
    public function getCountrySubDivision()
    {
        return $this->countrySubDivision;
    }

    /**
     * Set addressLine1
     *
     * @param string $addressLine1
     * @return Address
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Get addressLine1
     *
     * @return string 
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Set addressLine2
     *
     * @param string $addressLine2
     * @return Address
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Get addressLine2
     *
     * @return string 
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Set addressLine3
     *
     * @param string $addressLine3
     * @return Address
     */
    public function setAddressLine3($addressLine3)
    {
        $this->addressLine3 = $addressLine3;

        return $this;
    }

    /**
     * Get addressLine3
     *
     * @return string 
     */
    public function getAddressLine3()
    {
        return $this->addressLine3;
    }

    /**
     * Set addressLine4
     *
     * @param string $addressLine4
     * @return Address
     */
    public function setAddressLine4($addressLine4)
    {
        $this->addressLine4 = $addressLine4;

        return $this;
    }

    /**
     * Get addressLine4
     *
     * @return string 
     */
    public function getAddressLine4()
    {
        return $this->addressLine4;
    }

    /**
     * Set addressLine5
     *
     * @param string $addressLine5
     * @return Address
     */
    public function setAddressLine5($addressLine5)
    {
        $this->addressLine5 = $addressLine5;

        return $this;
    }

    /**
     * Get addressLine5
     *
     * @return string 
     */
    public function getAddressLine5()
    {
        return $this->addressLine5;
    }

    /**
     * Set addressLine6
     *
     * @param string $addressLine6
     * @return Address
     */
    public function setAddressLine6($addressLine6)
    {
        $this->addressLine6 = $addressLine6;

        return $this;
    }

    /**
     * Get addressLine6
     *
     * @return string 
     */
    public function getAddressLine6()
    {
        return $this->addressLine6;
    }

    /**
     * Set addressLine7
     *
     * @param string $addressLine7
     * @return Address
     */
    public function setAddressLine7($addressLine7)
    {
        $this->addressLine7 = $addressLine7;

        return $this;
    }

    /**
     * Get addressLine7
     *
     * @return string 
     */
    public function getAddressLine7()
    {
        return $this->addressLine7;
    }
}
