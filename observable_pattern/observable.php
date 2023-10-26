<?php

abstract class SubcriberObject {
    abstract function update($tutorial);
}

abstract class PublisherObject{
    abstract function attach(SubcriberObject $observer);
    abstract function detach(SubcriberObject $observer);
    abstract function notify();
}

class TutorialPublisher extends PublisherObject{
    private $tutorials = "";
    private $observers=[];
    public function attach(SubcriberObject $observer){
        array_push($this->observers,$observer) ;      
    }

    public function detach(SubcriberObject $observer){
        foreach($this->observers as $key=>$value){
            if($observer == $value){
                unset($this->observers[$key]);
            }
        }
    }

    public function notify(){
        foreach($this->observers as $observer){
            $observer->update($this->tutorials);
        }
    }

    public function addTutorial($tuto){
        $this->tutorials = $tuto;
        $this->notify();
    }
}

class StudentSubcriber extends SubcriberObject{
   private $name ;
   public function userName($name="djja"){
        $this->name = $name;
   }
    public function update($tutorial)
    {
        echo "new tutorial $tutorial " . "$this->name<br>";
    }
}

$Student1 = new StudentSubcriber;
$Student1->userName("Jame");
$Student2 = new StudentSubcriber;
$Student2->userName("Mario");
$Student3 = new StudentSubcriber;
$Student3->userName("sharlot");

$TutorialChannel = new TutorialPublisher;
$TutorialChannel->attach($Student1);
$TutorialChannel->attach($Student2);
$TutorialChannel->attach($Student3);

$TutorialChannel->addTutorial("TanoshiiNihongo");
echo "<hr>";
$TutorialChannel->detach($Student2);
$TutorialChannel->addTutorial("ichibanwatashi");


