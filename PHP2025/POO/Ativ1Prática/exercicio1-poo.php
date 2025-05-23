<?php

class Computador {

    public $Cor;
    public $Modelo;
    public $Marca;
    public $TipoProcessador;
    public $Tamanho;

    public function ligar(){

    }

    public function desligar(){


    }

    public function reiniciar(){


    }

    public function SalvarArquivos(){


    }

    public function EditarArquivos(){


    }}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class Ventilador {

    public $Cor;
    public $Modelo;
    public $Marca;
    public $TipoHelice;
    public $Tamanho;

    public function ligar(){

    }

    public function desligar(){


    }

    public function AumentarVelo(){


    }

    public function DiminuirVelo(){


    }

    public function Fixar(){


    }}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


class CarregadorCell {

    public $Cor;
    public $Modelo;
    public $Marca;
    public $TipoEntrada;
    public $Comprimento;

    public function conectar(){

    }

    public function desconectar(){


    }}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class Talher {

    public $Cor;
    public $Formato;
    public $Marca;
    public $Tipo;
    public $Funcao;

    public function Cortar(){

    }

    public function ManipularAlimentos(){


    }

    public function Espetar(){



    }}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class MáquinaLavar {

    public $Cor;
    public $Modelo;
    public $Marca;
    public $Capacidade;
    public $Tamanho;

    public function Centrifugar(){

    }

    public function Lavar(){


    }

    public function Enxugar(){


    }

    public function LavagemRapida(){


    }

    public function Autolimpar(){


    }}


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    class contaBancaria {
        public $saldo;
        public $numeroConta;
        public $titular;

        public function exibirSaldo($saldo){
            return "O saldo é R$" .$this -> saldo;
        
        }

        public function depositar($deposito){
            $this->saldo += $deposito;

        }

        public function retirar(){
            $this-> saldo -= $saque;

        }

        public function exibir(){

        }

        $contaAlves -> new contaBancaria();
        $contaAlves -> numeroConta = 84937;
        $contaAlves -> titularNome = 'Vinícius Alves Ferreira';
        $contaAlves -> saldoConta = 345678;


        $contaSP -> new contaBancaria();
        $contaSP -> numeroConta = 19367;
        $contaSP -> titularNome = 'Tarcísio de Freitas';
        $contaSP -> saldoConta = 8536458237985;

        $contaLuan -> new contaBancaria();
        $contaLuan -> numeroConta = 82375;
        $contaLuan -> titularNome = 'Luan Santana';
        $contaLuan -> saldoConta = 4783368;



}