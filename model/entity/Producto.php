<?php

/**
 * Description of Usuario
 *
 * @author wadmin
 */
class Producto  {
    private ?int $id;
    private string $nombre;
    private string $nombre_corto;
    private string $descripcion;
    private float $pvp;
    private string $familia;
    
    use ViewData;
    
    // public function __construct(string $email, string $pwdhash, array $roles) {
    //     $this->email = $email;
    //     $this->pwdhash = $pwdhash;
    //     $this->roles = $roles;
    // }
    
  
 

    /**
     * Get the value of id
     *
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param ?int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     *
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param string $nombre
     *
     * @return self
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of nombre_corto
     *
     * @return string
     */
    public function getNombreCorto(): string
    {
        return $this->nombre_corto;
    }

    /**
     * Set the value of nombre_corto
     *
     * @param string $nombre_corto
     *
     * @return self
     */
    public function setNombreCorto(string $nombre_corto): self
    {
        $this->nombre_corto = $nombre_corto;

        return $this;
    }

    /**
     * Get the value of descripcion
     *
     * @return string
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @param string $descripcion
     *
     * @return self
     */
    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of pvp
     *
     * @return float
     */
    public function getPvp(): float
    {
        return $this->pvp;
    }

    /**
     * Set the value of pvp
     *
     * @param float $pvp
     *
     * @return self
     */
    public function setPvp(float $pvp): self
    {
        $this->pvp = $pvp;

        return $this;
    }

    /**
     * Get the value of familia
     *
     * @return string
     */
    public function getFamilia(): string
    {
        return $this->familia;
    }

    /**
     * Set the value of familia
     *
     * @param string $familia
     *
     * @return self
     */
    public function setFamilia(string $familia): self
    {
        $this->familia = $familia;

        return $this;
    }
}
