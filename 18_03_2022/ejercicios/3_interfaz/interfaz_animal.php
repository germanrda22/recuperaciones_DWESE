<?php
namespace Animal;
interface Animal{
    public function getCuerpo();
    public function getRespiracion();
    public function getExtremidades();
    public function setExtremidades(string $extremidades);
    public function getDesplazamiento();
    public function setDesplazamiento(string $desplazamiento);
    public function getReproduccion();
    public function getHabitat();
    public function setHabitat(string $habitat);
}