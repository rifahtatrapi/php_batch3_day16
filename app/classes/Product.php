<?php


namespace App\classes;


class Product
{
    protected  $products = [];
    public function  getAllProduct(){
        return[
            0=>[
                'id'         => 1,
               'name'        => 'T-Shirt',
               'catagory'    => 'Man Fashion',
               'brand'       => 'Yellow',
               'price'       => '1200',
               'description' => '',
               'image'       => '2.jpg',

            ],
            1=>[
                   'id'         => 2,
                   'name'        => 'T-Shirt',
                   'catagory'    => 'Man Fashion',
                   'brand'       => 'Yellow',
                   'price'       => '1200',
                   'description' => '',
                   'image'       => '2.jpg',

                ],
            2=>[
                   'id'         => 3,
                   'name'        => 'T-Shirt',
                   'catagory'    => 'Man Fashion',
                   'brand'       => 'Yellow',
                   'price'       => '1200',
                   'description' => '',
                   'image'       => '2.jpg',

            ],
        ];
    }
    public function getAllProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }

        }
    }

}