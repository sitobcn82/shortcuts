<?php
	namespace baraut\PublicBundle\Entity;
	
	use Doctrine\ORM\Mapping as ORM;
	use Symfony\Component\Validator\Constraints as Assert;
	
	/**
	* @ORM\Table(name="shortcut")
	* @ORM\Entity
	* @ORM\HasLifecycleCallbacks 
	*/
	class Shortcut
	{
		/**
		* @var integer
		* @ORM\Id
		* @ORM\Column(type="integer")
		* @ORM\GeneratedValue(strategy="IDENTITY")
		*/
		private $id;

		/**
		 * @var string
		 * @ORM\Column(type="string", length=100)
		 */

		private $name;

		/**
		 * @var text
		 * @ORM\Column(type="text", length=100)
		 */

		private $command;

        /**
         * @var text
         * @ORM\Column(type="text", length=100)
         */

        private $description;

		/**
		 * @var string
		 * @ORM\Column(type="string", length=100, nullable = true)		
		 */

		private $plataform;


        /**
         * @ORM\ManyToOne(targetEntity="Program")
         * @ORM\JoinColumn(name="program_id", referencedColumnName="id")
         */
        protected $program;
        

		/**
		 * @var datetime
		 * @ORM\Column(type="datetime")
		 */

		private $created;

		/**
		 * @var datetime 	
		 * @ORM\Column(type="datetime")
		 */

		private $modified;

	/**
	* @ORM\PrePersist
	*/
	public function doCreated()
	{ 
		$this->setCreated(new \DateTime("now"));
		$this->setModified(new \DateTime("now"));
	}

	/**
	* @ORM\PreUpdate
	*/
	public function doModified()
	{ 
		$this->setModified(new \DateTime("now"));
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
     * Set name
     *
     * @param string $name
     * @return Shortcut
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
     * Set command
     *
     * @param string $command
     * @return Shortcut
     */
    public function setCommand($command)
    {
        $this->command = $command;
    
        return $this;
    }

    /**
     * Get command
     *
     * @return string 
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Shortcut
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Shortcut
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set plataform
     *
     * @param string $plataform
     * @return Shortcut
     */
    public function setPlataform($plataform)
    {
        $this->plataform = $plataform;
    
        return $this;
    }

    /**
     * Get plataform
     *
     * @return string 
     */
    public function getPlataform()
    {
        return $this->plataform;
    }

    /**
     * Set program
     *
     * @param \baraut\PublicBundle\Entity\Program $program
     * @return Shortcut
     */
    public function setProgram(\baraut\PublicBundle\Entity\Program $program = null)
    {
        $this->program = $program;
    
        return $this;
    }

    /**
     * Get program
     *
     * @return \baraut\PublicBundle\Entity\Program 
     */
    public function getProgram()
    {
        return $this->program;
    }

    public function __toString(){
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Shortcut
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}