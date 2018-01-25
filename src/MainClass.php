<?php

namespace TestPackage;

class MainClass
{
    public static function doSomething()
    {
        // doing something
        for ($i = 0; $i < 10; $i++) {
            OutputClass::message('Logging ' . $i);            
        }
    }
}
