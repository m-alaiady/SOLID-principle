<?php

// depedancy inversion states class should not depends on each other directly
// instead they both should depend on abstraction

interface ButtonOperations{
    public function turnOn();
    public function turnOff();
}

interface DeviceOperations{
    public function turnDeviceOn();
    public function turnDeviceOff();
}

class Button implements ButtonOperations{

    private DeviceOperations $device;

    public function __construct(DeviceOperations $device)
    {
        $this->device = $device;
    }
    
    public function turnOn() : void {
        $this->device->turnDeviceOn();
    }
    public function turnOff() : void {
        $this->device->turnDeviceOff();
    }
}

// now whatever device we have (Lamb, TV, microwave, print .. etc) can work without any issues

class Lamb implements DeviceOperations{
    public function turnDeviceOn(){
        echo "Turning Lamb On";
    }

    public function turnDeviceOff(){
        echo "Turning Lamb Off";
    }
}

// now suppose we have another device i.e. TV
class TV implements DeviceOperations{
    public function turnDeviceOn(){
        echo "Turning TV On";
    }

    public function turnDeviceOff(){
        echo "Turning TV Off";
    }
}

$lamb = new Lamb();
$tv = new TV();
$lambButton = new Button($lamb);
$TVButton = new Button($tv);

$lambButton->turnOn();
echo "\n";
$lambButton->turnOff();
echo "\n";

$TVButton->turnOn();
echo "\n";
$TVButton->turnOff();
