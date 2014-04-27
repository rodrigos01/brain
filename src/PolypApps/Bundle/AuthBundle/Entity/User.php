<?php

namespace PolypApps\Bundle\AuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="apikey", type="string", length=255, nullable=false)
     */
    private $apikey;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PolypApps\Bundle\AuthBundle\Entity\Service", inversedBy="userid")
     * @ORM\JoinTable(name="user_service",
     *   joinColumns={
     *     @ORM\JoinColumn(name="userid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="serviceid", referencedColumnName="id")
     *   }
     * )
     */
    private $serviceid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->serviceid = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set apikey
     *
     * @param string $apikey
     * @return User
     */
    public function setApikey($apikey)
    {
        $this->apikey = $apikey;

        return $this;
    }

    /**
     * Get apikey
     *
     * @return string 
     */
    public function getApikey()
    {
        return $this->apikey;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add serviceid
     *
     * @param \PolypApps\Bundle\AuthBundle\Entity\Service $serviceid
     * @return User
     */
    public function addServiceid(\PolypApps\Bundle\AuthBundle\Entity\Service $serviceid)
    {
        $this->serviceid[] = $serviceid;

        return $this;
    }

    /**
     * Remove serviceid
     *
     * @param \PolypApps\Bundle\AuthBundle\Entity\Service $serviceid
     */
    public function removeServiceid(\PolypApps\Bundle\AuthBundle\Entity\Service $serviceid)
    {
        $this->serviceid->removeElement($serviceid);
    }

    /**
     * Get serviceid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getServiceid()
    {
        return $this->serviceid;
    }
}
