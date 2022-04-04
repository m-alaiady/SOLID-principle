<?php 
// ISP or Interface Segregation Principle states many interfaces should be in seperate small interface 
// and do not make one interface that gonna handle other unsed method
// without having one interface that hold all print operations
// we can create many small interfaces for a specific task

interface Printable{
    public function print() : void;
}
interface Faxable extends Printable{
    public function fax() : void;
}
interface Scanable extends Printable{
    public function scan() : void;
}

class HPPrinter implements Scanable{
    public function print() : void
    {
        echo "Printing via HPPrinter \n";
    }    
    public function scan() : void
    {
        echo "Scanning via HPPrinter \n";
    }
}

class CanonPrinter implements Faxable{
    public function print() : void
    {
        echo "Printing via CanonPrinter \n";
    }
    public function fax() : void
    {
        echo "Faxing via CanonPrinter \n";
    }
    public function scan() : void
    {
        echo "Scanning via CanonPrinter \n";
    }
}

$hp = new HPPrinter();
$canon = new CanonPrinter();

$hp->scan();
$hp->print();

$canon->scan();
$canon->print();
$canon->fax();