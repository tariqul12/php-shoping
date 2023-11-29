<?php


namespace App\classes;


class Student
{
    public $products = [];

    public function __construct()
    {
        $this->products =[
            0=>[
                'id' =>1,
                'name'=>'Printed Face Mask V1017',
                'code'=>'S-1361-117257',
                'price' => '150.00',
                'roll' => '65',
                "image" => "assests/img/1.jpeg",
                "detail" =>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

",
            ],

            1=>[
                'id' =>2,
                'name'=>'Exclusive Couple Finger Ring',
                'code'=>'S-843-48111',
                'price' => '250',
                'roll' => '33',
                "image" => "assests/img/4.jpeg",
                "detail" =>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

",
            ],

            2=>[
                'id' =>3,
                'name'=>'Washable 3-Ply Filter Mask',
                'code'=>'S-843-140693',
                'price' => '50',
                'roll' => '12',
                "image" => "assests/img/6.jpeg",
                "detail" =>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

",
            ],

            3=>[
                'id' =>4,
                'name'=>'N95 Particulate Respirator',
                'code'=>'S-843-100168',
                'price' => '750',
                'roll' => '34',
                "image" => "assests/img/7.jpeg",
                "detail" =>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

",
            ],
            4=>[
                'id' =>5,
                'name'   =>'Washable 3-Ply Filter Mask',
                'code'   =>'S-1050-140692',
                'price' => '50',
                'roll'   => '55',
                "image"  => "assests/img/8.jpeg",
                "detail" =>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

",
            ],
            5=>[
                'id'     =>6,
                'name'   =>'High Quality PPE COVIT',
                'code'   =>' S-843-97685',
                'price' => '3,000',
                'roll'   => '54',
                "image"  => "assests/img/9.png",
                "detail" =>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

",
            ],
        ];

    }

    public function getAllProducts()
    {
        return $this->products;

    }

    public function getProductByid($id)
    {
        foreach ($this->products as $product)
        {
            if ($product["id"]==$id){
                return $product;
            }
        }
    }
}