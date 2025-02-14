<?php

abstract class Animal {
    public function fazerSom() {}

    public function mover() {
        return "Se move";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        return "Late";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        return "Mia";
    }
}

class Passaro extends Animal {
    public function fazerSom() {
        return "Canta";
    }

    public function mover() {
        return "Voa e " . parent::mover();
    }
}

$cachorro = new Cachorro();
$gato = new Gato();
$passaro = new Passaro();

echo "Cachorro: " . $cachorro->fazerSom() . "\n";
echo "Gato: " . $gato->fazerSom() . "\n";
echo "Passaro: " . $passaro->fazerSom() . "\n";

echo "Todos os animais: " . $cachorro->mover() . "\n";
?>
