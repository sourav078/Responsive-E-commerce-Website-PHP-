<?php


namespace App\classes;


class Menu
{
    public $menus = [];

    public function __construct()
    {
        $this->menus = [
            0 => [
                'id' => 1,
                'name' => 'Man Fashion',
            ],
            1 => [
                'id' => 2,
                'name' => 'Woman Fashion',
            ],
            2 => [
                'id' => 3,
                'name' => 'kids Fashion',
            ],
            3 => [
                'id' => 4,
                'name' => 'Electronics',
            ],
        ];
    }

    public function getAllMenu()
    {
        return $this->menus;
    }
}