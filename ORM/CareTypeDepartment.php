<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTypeDepartment
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTypeDepartmentRepository")
 * @ORM\Table(name="care_type_department", indexes={@ORM\Index(name="type", columns={"type"})})
 */
class CareTypeDepartment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $type;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $LD_var;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $modify_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $modify_time;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $create_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $create_time;

    public function __construct()
    {
    }

    /**
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareTypeDepartment
     */
    public function setNr($nr)
    {
        $this->nr = $nr;

        return $this;
    }

    /**
     * Get the value of nr.
     *
     * @return integer
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Set the value of type.
     *
     * @param string $type
     * @return \Entity\CareTypeDepartment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareTypeDepartment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of LD_var.
     *
     * @param string $LD_var
     * @return \Entity\CareTypeDepartment
     */
    public function setLDVar($LD_var)
    {
        $this->LD_var = $LD_var;

        return $this;
    }

    /**
     * Get the value of LD_var.
     *
     * @return string
     */
    public function getLDVar()
    {
        return $this->LD_var;
    }

    /**
     * Set the value of description.
     *
     * @param string $description
     * @return \Entity\CareTypeDepartment
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTypeDepartment
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of modify_id.
     *
     * @param string $modify_id
     * @return \Entity\CareTypeDepartment
     */
    public function setModifyId($modify_id)
    {
        $this->modify_id = $modify_id;

        return $this;
    }

    /**
     * Get the value of modify_id.
     *
     * @return string
     */
    public function getModifyId()
    {
        return $this->modify_id;
    }

    /**
     * Set the value of modify_time.
     *
     * @param datetime $modify_time
     * @return \Entity\CareTypeDepartment
     */
    public function setModifyTime($modify_time)
    {
        $this->modify_time = $modify_time;

        return $this;
    }

    /**
     * Get the value of modify_time.
     *
     * @return datetime
     */
    public function getModifyTime()
    {
        return $this->modify_time;
    }

    /**
     * Set the value of create_id.
     *
     * @param string $create_id
     * @return \Entity\CareTypeDepartment
     */
    public function setCreateId($create_id)
    {
        $this->create_id = $create_id;

        return $this;
    }

    /**
     * Get the value of create_id.
     *
     * @return string
     */
    public function getCreateId()
    {
        return $this->create_id;
    }

    /**
     * Set the value of create_time.
     *
     * @param datetime $create_time
     * @return \Entity\CareTypeDepartment
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;

        return $this;
    }

    /**
     * Get the value of create_time.
     *
     * @return datetime
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function __sleep()
    {
        return array('nr', 'type', 'name', 'LD_var', 'description', 'status', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}