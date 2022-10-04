<?php

 
  class Car

  {

    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats,string $energy ) 
    {
            $this->color = $color;
            $this->nbSeats = $nbSeats;
            $this->energy = $energy;
    }

public function getNbWheels():int
{ 
    return nbWheels;
}
public function setNbWheels(int $nbWheels)
{ 
    $this->nbWheels = $nbWheels;
}
public function getCurrentSpeed():int
{ 
    return $this->currentSpeed;
}
public function setCurrentSpeed(int $currentSpeed):void
{ 
    $this->currentSpeed = $currentSpeed;
}
    
public function getColor():int
{ 
    return $this->color;
}
public function setColor(int $color):void
{ 
    $this->color = $color;
}

public function getNbSeats():int
{ 
    return $this->nbSeat;
}
public function setNbSeats(int $nbSeats):void
{ 
    $this->nbSeat = $nbSeats;
}

public function getEnergy():int
{ 
    return $this->energy;
}
public function setEnergy(int $energy):void
{ 
    $this->energy = $energy;
}

public function getEnergyLevel():int
{ 
    return $this->energyLevel;
}
public function setEnergyLevel(int $energyLevel):void
{ 
    $this->energyLevel = $energyLevel;
}


//car move
public function forward(): string

{
    $this->currentSpeed = 50;
    return "Goooooooooo caaaaaaaaaaar ! \n";

}
public function brake(): string

{
   $sentence = "";

   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!! \n";
   }

   $sentence .= "I stopped the car! \n";
   return $sentence;
}


}