<?php
namespace App\classes;

class Home
{
    protected $number;
    protected $primeNum;
    protected $check;

    public function __construct($post = null)
    {
        $this->number = $post['given_number'];
        $this->check ='prime';
    }

    public function index()
    {

        header('Location: action.php?pages=home');
    }
    public function primeNumber()
    {
        //btn value input
        //echo $this->number;
        if ($this->number ==1 ||$this->number ==2){
            return "Your Number $this->number is prime";
        }
        else
        {
            for ($this->primeNum =2;$this->primeNum <$this->number;$this->primeNum++)
            {
                if ($this->number%$this->primeNum ==0)
                {
                    return "Your Number $this->number is not prime";
                }
            }
            return "Your Number $this->number is prime";
        }


    }
}