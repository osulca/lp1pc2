<?php
class Date{
    private $day;
    private $month;
    private $year;

    public function getDay(): int{
        return $this->day;
    }

    public function setDay(int $day){
        $this->day = $day;
    }

    public function getMonth(): int{
        return $this->month;
    }

    public function setMonth(int $month){
        $this->month = $month;
    }

    public function getYear(): int{
        return $this->year;
    }

    public function setYear(int $year){
        $this->year = $year;
    }

    public function __construct(int $day = 1, int $month = 1, int $year = 2018)
    {
        if($year<2000){
            echo "el año debe ser mayor igual a 2000";
        }else{
            $this->day = $day;
            $this->month = $month;
            $this->year = $year;
        }
    }

    public function advance(){
        if($this->day<31){
            $this->day++;
        }else{
            $this->day = 1;
            if($this->month<12){
                $this->month++;
            }else{
                $this->month = 1;
                $this->year++;
            }
        }
    }
}
