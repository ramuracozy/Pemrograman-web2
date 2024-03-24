<?php

class ParkirMotor {
    private $NamaPemilik;
    private $NamaMotor;
    private $warnaMotor;

    public function __construct($NamaPemilik, $NamaMotor, $warnaMotor,)
    {
        $this->NamaPemilik = $NamaPemilik;
        $this->NamaMotor = $NamaMotor;
        $this->warnaMotor = $warnaMotor;
    }

}
?>