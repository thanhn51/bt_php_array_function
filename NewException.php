<?php

class NewException extends Exception
{
    public function __toString()
    {
        parent::__toString(); // TODO: Change the autogenerated stub
        return "Không tồn tại giá trị này trong mảng";
    }
}