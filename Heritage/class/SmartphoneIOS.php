<?php


class SmartphoneIOS  extends Smartphone
{
    public function __construct(string $brand, string $os, string $operateur)
    {
        parent::__construct($brand, 'IOS', $operateur);
    }
}