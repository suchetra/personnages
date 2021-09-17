<?php
class Hydrate
{
    function __construct(array $donnees) {
            $this->hydrate($donnees);
            var_dump($donnees);
        }
    
    function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $setter = 'set'.ucfirst($key);
            // Si le setter correspondant existe :
            if (method_exists($this, $setter)) {
            // On appelle le setter = $setter contient son nom !!!
                $this->$setter($value);
            }
        }
    }
}
