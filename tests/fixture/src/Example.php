<?php

namespace App;

class Example
{
    public function methodA()
    {
        return $this;
    }

    public function methodB()
    {
        return $this;
    }

    public function methodC()
    {
        $this->methodA()->methodB();
    }
}