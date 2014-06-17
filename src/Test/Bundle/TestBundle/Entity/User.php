<?php

namespace Test\Bundle\TestBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="nom", type="string", length=120)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=120)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=40)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth", type="date")
     */
    private $birth;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="smallint")
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_point", type="integer")
     */
    private $totalPoint;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_point", type="integer")
     */
    private $tempPoint;
    
    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="mesAmis")
     */
    private $amisAvecMoi;
    
    /**
     * @ORM\ManyToMany(targetEntity="User", inversedBy="amisAvecMoi")
     * @ORM\JoinTable(name="friends",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="friend_user_id", referencedColumnName="id")}
     *      )
     */
    private $mesAmis;
    
    public function __construct() {
        $this->amisAvecMoi = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mesAmis = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
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
     * Set birth
     *
     * @param \DateTime $birth
     * @return User
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime 
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return User
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set totalPoint
     *
     * @param integer $totalPoint
     * @return User
     */
    public function setTotalPoint($totalPoint)
    {
        $this->totalPoint = $totalPoint;

        return $this;
    }

    /**
     * Get totalPoint
     *
     * @return integer 
     */
    public function getTotalPoint()
    {
        return $this->totalPoint;
    }

    /**
     * Set tempPoint
     *
     * @param integer $tempPoint
     * @return User
     */
    public function setTempPoint($tempPoint)
    {
        $this->tempPoint = $tempPoint;

        return $this;
    }

    /**
     * Get tempPoint
     *
     * @return integer 
     */
    public function getTempPoint()
    {
        return $this->tempPoint;
    }

    /**
     * Ajouter un ami avec moi
     *
     * @param \Test\Bundle\TestBundle\Entity\User $amisAvecMoi
     * @return User
     */
    public function addAmisAvecMoi(\Test\Bundle\TestBundle\Entity\User $amisAvecMoi)
    {
        $this->amisAvecMoi[] = $amisAvecMoi;

        return $this;
    }

    /**
     * Supprimer les amis avec moi
     *
     * @param \Test\Bundle\TestBundle\Entity\User $amisAvecMoi
     */
    public function removeAmisAvecMoi(\Test\Bundle\TestBundle\Entity\User $amisAvecMoi)
    {
        $this->amisAvecMoi->removeElement($amisAvecMoi);
    }

    /**
     * Récuperer les amis avec moi
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAmisAvecMoi()
    {
        return $this->amisAvecMoi;
    }

    /**
     * Ajouter un ami
     *
     * @param \Test\Bundle\TestBundle\Entity\User $mesAmis
     * @return User
     */
    public function addMesAmi(\Test\Bundle\TestBundle\Entity\User $mesAmis)
    {
        $this->mesAmis[] = $mesAmis;

        return $this;
    }

    /**
     * Supprimer un ami
     *
     * @param \Test\Bundle\TestBundle\Entity\User $mesAmis
     */
    public function removeMesAmi(\Test\Bundle\TestBundle\Entity\User $mesAmis)
    {
        $this->mesAmis->removeElement($mesAmis);
    }

    /**
     * Récupérer mes amis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMesAmis()
    {
        return $this->mesAmis;
    }
}
