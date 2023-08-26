<?php


namespace App\classes;


class Product
{

    public $products = [], $data = [];

    public function __construct()
    {
        $this->products = [
          0 => [
              'id' => 1,
              'sub_menu_id' => 1,
              'name' => 'New Shirt',
              'price' => 'Tk.'. 1500,
              'description' => 'This is a shirt.',
              'image' => 'assets/img/Man-Fashion/Shirt/1.jpg',
          ],
          1 => [
              'id' => 2,
              'sub_menu_id' => 1,
              'name' => 'New Fabric Shirt',
              'price' => 'Tk.'. 1200,
              'description' => 'This is a shirt',
              'image' => 'assets/img/Man-Fashion/Shirt/2.jpg',
          ],
          2 => [
              'id' => 3,
              'sub_menu_id' => 1,
              'name' => 'New Shirt',
              'price' => 'Tk.'. 1000,
              'description' => 'This is a shirt',
              'image' => 'assets/img/Man-Fashion/Shirt/3.jpg',
          ],
          3 => [
              'id' => 4,
              'sub_menu_id' => 1,
              'name' => 'Shirt',
              'price' => 'Tk.'. 4000,
              'description' => 'This is a shirt',
              'image' => 'assets/img/Man-Fashion/Shirt/4.jpg',
          ],
          4 => [
              'id' => 5,
              'sub_menu_id' => 2,
              'name' => 'T-shirt',
              'price' => 'Tk.'. 500,
              'description' => 'This is a t-shirt',
              'image' => 'assets/img/Man-Fashion/T-Shirt/1.jpg',
          ],
          5 => [
              'id' => 6,
              'sub_menu_id' => 2,
              'name' => 'New Design T-shirt',
              'price' => 'Tk.'. 700,
              'description' => 'This is a new design t-shirt',
              'image' => 'assets/img/Man-Fashion/T-Shirt/2.jpg',
          ],
          6 => [
              'id' => 7,
              'sub_menu_id' => 2,
              'name' => 'T-shirt',
              'price' => 'Tk.'. 1000,
              'description' => 'T-shirt',
              'image' => 'assets/img/Man-Fashion/T-Shirt/3.jpg',
          ],
          7 => [
              'id' => 8,
              'sub_menu_id' => 3,
              'name' => 'Pant',
              'price' => 'Tk.'. 5000,
              'description' => 'This is a Pant',
              'image' => 'assets/img/Man-Fashion/Pant/1.jpg',
          ],
          8 => [
              'id' => 9,
              'sub_menu_id' => 3,
              'name' => 'Jeans Pant',
              'price' => 'Tk.'. 2200,
              'description' => 'This is a Pant',
              'image' => 'assets/img/Man-Fashion/Pant/2.jpg',
          ],
          9 => [
              'id' => 10,
              'sub_menu_id' => 3,
              'name' => 'Pant',
              'price' => 'Tk.'. 3000,
              'description' => 'This is a Pant',
              'image' => 'assets/img/Man-Fashion/Pant/3.jpg',
          ],
          10 => [
              'id' => 11,
              'sub_menu_id' => 3,
              'name' => 'Pant',
              'price' => 'Tk.'. 4000,
              'description' => 'This is a Pant',
              'image' => 'assets/img/Man-Fashion/Pant/4.jpg',
          ],
          11 => [
              'id' => 12,
              'sub_menu_id' => 4,
              'name' => 'Jacket',
              'price' => 'Tk.'. 5000,
              'description' => 'This is a Jacket',
              'image' => 'assets/img/Man-Fashion/Jacket/1.jpg',
          ],
          12 => [
              'id' => 13,
              'sub_menu_id' => 4,
              'name' => 'Jacket',
              'price' => 'Tk.'. 12000,
              'description' => 'This is a Jacket',
              'image' => 'assets/img/Man-Fashion/Jacket/2.jpg',
          ],
          13 => [
              'id' => 14,
              'sub_menu_id' => 4,
              'name' => 'Jacket',
              'price' => 'Tk.'. 7000,
              'description' => 'This is a Jacket',
              'image' => 'assets/img/Man-Fashion/Jacket/3.jpg',
          ],
          14 => [
              'id' => 15,
              'sub_menu_id' => 5,
              'name' => 'Watch',
              'price' => 'Tk.'. 9000,
              'description' => 'This is a watch',
              'image' => 'assets/img/Man-Fashion/Watch/1.jpg',
          ],
          15 => [
              'id' => 16,
              'sub_menu_id' => 5,
              'name' => 'Watch',
              'price' => 'Tk.'. 12000,
              'description' => 'This is a watch',
              'image' => 'assets/img/Man-Fashion/Watch/2.jpg',
          ],
          16 => [
              'id' => 17,
              'sub_menu_id' => 5,
              'name' => 'Watch',
              'price' => 'Tk.'. 5000,
              'description' => 'This is a watch',
              'image' => 'assets/img/Man-Fashion/Watch/3.jpg',
          ],
          17 => [
              'id' => 18,
              'sub_menu_id' => 6,
              'name' => 'Shoes',
              'price' => 'Tk.'. 2000,
              'description' => 'This is a shoe',
              'image' => 'assets/img/Man-Fashion/Shoe/1.jpg',
          ],
          18 => [
              'id' => 5,
              'sub_menu_id' => 6,
              'name' => 'Shoes',
              'price' => 'Tk.'. 5000,
              'description' => 'This is a shoe',
              'image' => 'assets/img/Man-Fashion/Shoe/2.jpg',
          ],
          19 => [
              'id' => 6,
              'sub_menu_id' => 6,
              'name' => 'Sneakers',
              'price' => 'Tk.'. 4000,
              'description' => 'This is a sneakers',
              'image' => 'assets/img/Man-Fashion/Shoe/3.jpg',
          ],
        ];
    }

    public function getAllProduct()
    {
        return $this->products;
    }

    public function getSubMenuProduct($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['sub_menu_id'] == $id)
            {
                array_push($this->data, $product);
            }
        }

        return $this->data;
    }

    public function getProductById($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }

}