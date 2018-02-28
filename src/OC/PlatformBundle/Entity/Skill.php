<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 *
 * @ORM\Table(name="skill")
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Repository\SkillRepository")
 */
class Skill
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
      * @ORM\OneToMany(targetEntity="OC\PlatformBundle\Entity\AdvertSkill", mappedBy="skill")
      * @ORM\JoinColumn(nullable=true)
     */
    private $advertskills;

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
     * Set name
     *
     * @param string $name
     *
     * @return Skill
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
     * Constructor
     */
    public function __construct()
    {
        $this->advertskills = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add advertskill
     *
     * @param \OC\PlatformBundle\Entity\AdvertSkill $advertskill
     *
     * @return Skill
     */
    public function addAdvertskill(\OC\PlatformBundle\Entity\AdvertSkill $advertskill)
    {
        $this->advertskills[] = $advertskill;
    
        return $this;
    }

    /**
     * Remove advertskill
     *
     * @param \OC\PlatformBundle\Entity\AdvertSkill $advertskill
     */
    public function removeAdvertskill(\OC\PlatformBundle\Entity\AdvertSkill $advertskill)
    {
        $this->advertskills->removeElement($advertskill);
    }

    /**
     * Get advertskills
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdvertskills()
    {
        return $this->advertskills;
    }
}
