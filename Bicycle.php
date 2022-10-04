 <?php

  // Bicycle.php
  class Bicycle

  {
    private string $color = "green";
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;


public function getColor(): string

{

    return $this->color;

}

public function setColor(string $color): void

{

    $this->color = $color;

}

public function getCurrentSpeed(): int

{

    return $this->currentSpeed;

}

public function setCurrentSpeed(int $currentSpeed): void

{
    $this->currentSpeed = $currentSpeed;

}

public function forward(): string

{
    $this->currentSpeed = 10;
    return "Goooooooooo ! \n";

}
public function brake(): string

{
   $sentence = "";

   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!! \n";
   }

   $sentence .= "I'm stopped ! \n";
   return $sentence;
}

private function dump()

{
    var_dump($this);
}

}












