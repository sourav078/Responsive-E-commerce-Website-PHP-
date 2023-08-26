<?php


namespace App\classes;


class SubMenu
{
    public $subMenus = [];

    public function __construct()
    {
        $this->subMenus = [
            0 => [
                'id' => 1,
                'menu_id' => 1,
                'name' => 'Shirt',
            ],
            1 => [
                'id' => 2,
                'menu_id' => 1,
                'name' => 'T-Shirt',
            ],
            2 => [
                'id' => 3,
                'menu_id' => 1,
                'name' => 'Pant',
            ],
            3 => [
                'id' => 4,
                'menu_id' => 1,
                'name' => 'Jacket',
            ],
            4 => [
                'id' => 5,
                'menu_id' => 1,
                'name' => 'Watch',
            ],
            5 => [
                'id' => 6,
                'menu_id' => 1,
                'name' => 'Shoe',
            ],
            6 => [
                'id' => 7,
                'menu_id' => 2,
                'name' => 'Sari',
            ],
            7 => [
                'id' => 8,
                'menu_id' => 2,
                'name' => 'T-Shirt',
            ],
            8 => [
                'id' => 9,
                'menu_id' => 2,
                'name' => 'Pant',
            ],
            9 => [
                'id' => 10,
                'menu_id' => 2,
                'name' => 'Dress',
            ],
            10 => [
                'id' => 11,
                'menu_id' => 2,
                'name' => 'Shoe',
            ],
            11 => [
                'id' => 12,
                'menu_id' => 2,
                'name' => 'Bag',
            ],
            12 => [
                'id' => 13,
                'menu_id' => 2,
                'name' => 'Cosmetics',
            ],
            13 => [
                'id' => 14,
                'menu_id' => 3,
                'name' => 'Shirt',
            ],
            14 => [
                'id' => 15,
                'menu_id' => 3,
                'name' => 'T-Shirt',
            ],
            15 => [
                'id' => 16,
                'menu_id' => 3,
                'name' => 'Pant',
            ],
            16 => [
                'id' => 17,
                'menu_id' => 3,
                'name' => 'Jacket',
            ],
            17 => [
                'id' => 18,
                'menu_id' => 3,
                'name' => 'Shoe',
            ],
            18 => [
                'id' => 19,
                'menu_id' => 3,
                'name' => 'Toys',
            ],
            19 => [
                'id' => 20,
                'menu_id' => 4,
                'name' => 'Mobile',
            ],
            20 => [
                'id' => 21,
                'menu_id' => 4,
                'name' => 'Laptop',
            ],
            21 => [
                'id' => 22,
                'menu_id' => 4,
                'name' => 'Monitor',
            ],
            22 => [
                'id' => 23,
                'menu_id' => 4,
                'name' => 'PC Accessories',
            ],
            23 => [
                'id' => 24,
                'menu_id' => 4,
                'name' => 'Others',
            ],
        ];
    }

    public function getAllSubMenu()
    {
        return $this->subMenus;
    }

}