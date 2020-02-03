<?php

  /**
   *
   */
  class Produit
  {
    private $id;
    private $nom;
    private $description;
    private $url;
    private $prix;

    function __construct($unId,$unNom, $uneDescription, $unUrl, $unPrix)
    {
      $this->id = $unId;
      $this->nom = $unNom;
      $this->description = $uneDescription;
      $this->url = $unUrl;
      $this->prix = $unPrix;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

}



 ?>
