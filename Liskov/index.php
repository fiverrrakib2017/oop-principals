<?php


class Bird{
    public function fly(){
        echo "<b>I Can Fly</b><br>";
    }
}
class Penguin  extends Bird{
    public function fly(){
        echo "<b> I can't fly</b><br>";
    }
}


function makeBirdFly(Bird $bird){
    $bird->fly();
}

$bird = new Bird();
$penguin = new Penguin();


makeBirdFly($bird);    // Output: I can fly
makeBirdFly($penguin); // Output: I can't fly