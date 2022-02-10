<?php


namespace App\classes;


class Series
{
    protected $i;
    protected $startingNumber;
    protected $endingNumber;
    protected $sum;
    protected $result;

    public function __construct($post=null)
    {
        $this->startingNumber= $post['starting_number'];
        $this->endingNumber = $post['ending_number'];

    }
    public function getSeries()
    {
        for($this->i=$this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result .= $this->i.'+';
            $this->sum += $this->i;
        }
        return
        [
            'result'=>rtrim($this->result,'+'). ' = '.$this->sum,
            'starting_number'=> $this->startingNumber,
            'ending_number'=> $this->endingNumber,
        ];
    }
}