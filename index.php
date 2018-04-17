<?php

class FizzBuzz
{
    private $boolFive;
    private $boolSeven;
    private $strAusgabe;

    public function __construct()
    {
        $this->boolFive = false;
        $this->boolSeven = false;
        $this->strAusgabe = '';
    }


    //Meine Lösung
    public function Main()
    {
        for($i = 1; $i <= 100; $i++ )
        {
            $this->boolFive = false;
            $this->boolSeven = false;
            $this->strAusgabe = '';

            if(($i % 5) == 0 )
            {
                $this->boolFive = true;
                $this->strAusgabe = $i." Fizz";
            }

            if(($i % 7 == 0))
            {
                $this->boolSeven = true;
                $this->strAusgabe = $i." Buzz";
            }

            if($this->boolFive && $this->boolSeven)
            {
                $this->strAusgabe = $i." FizzBuzz";
            }

            $this->PrepareEcho();
        }
    }

    private function PrepareEcho()
    {
        if(!empty($this->strAusgabe))
        {
            echo '<pre>';
            echo $this->strAusgabe;
            echo '</pre>';
        }
    }

    //Musterlösung eines Azubis aus der Schweiz
    public function Test()
    {
        for($i = 1; $i <= 100; $i++)
        {
            if($i % 5 == 0)
            {
                echo '<pre>';
                echo $i." Fizz";
                echo '</pre>';
            }

            if($i % 7 == 0)
            {
                echo '<pre>';
                echo $i." Buzz";
                echo '</pre>';
            }

            if(!($i % 5 == 0 || $i % 7 == 0))
            {
                echo '<pre>';
                echo $i." FizzBuzz";
                echo '</pre>';
            }
        }
    }
}

$objFizzBuzz = new FizzBuzz();
$objFizzBuzz->Test();