<?php

namespace Model;

class Word
{
    protected $id;

    protected $string;

    public function __construct($id = null)
    {
        if (null !== $id) {
            $this->getWordById($id);
        }
    }

    public function length()
    {
        return strlen($this->string);
    }

    public function has($symbol)
    {
        // @todo find all occurancies
//        return strpos
    }

    public function getId()
    {
        return $this->id;
    }

    public function getString()
    {
        return $this->string;
    }

    public function setString($val)
    {
        $this->string = $val;
    }

    public function getWordById($id)
    {

    }
}
