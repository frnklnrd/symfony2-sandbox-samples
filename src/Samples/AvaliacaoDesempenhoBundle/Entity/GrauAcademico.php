<?php

namespace Samples\AvaliacaoDesempenhoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrauAcademico
 *
 * @ORM\Table(name="samples_avaliacao_desempenho__grauacademico")
 * @ORM\Entity
 */
class GrauAcademico
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
     * @ORM\Column(name="grau", type="string", length=255)
     */
    private $grau;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviatura", type="string", length=255)
     */
    private $abreviatura;


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
     * Set grau
     *
     * @param string $grau
     * @return GrauAcademico
     */
    public function setGrau($grau)
    {
        $this->grau = $grau;

        return $this;
    }

    /**
     * Get grau
     *
     * @return string 
     */
    public function getGrau()
    {
        return $this->grau;
    }

    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     * @return GrauAcademico
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;

        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string 
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }
    
    public function __toString() {
        return $this->id?$this->grau." (".$this->abreviatura.".)":"";
    }    
}
