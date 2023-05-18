<?php
include('Persona.php');
include('Animal.php');
//creo una Persona.
$persona_1 = new Persona("Pepe", 40);
echo "La persona se llama " . $persona_1->getName() . "\n";

//Creo un animal y le añado a Persona.
$animal_1 = new Animal('Linda', 5, $persona_1);
echo "El animal se llama " . $animal_1->getName() . " propiedad de "
     . $animal_1->getPepHolder()->getName() . "\n";