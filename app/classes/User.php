<?php


namespace App\classes;


class User
{
    public function getAlluser()
    {
        return [
            0=>[
                'id'=> 1,
                'name'=>'shahabuddin Khan',
                'email'=>'shaha@gmail.com',
                'password'=>'123465'
            ],
            1=>[
                'id'=> 2,
                'name'=>'amir Khan',
                'email'=>'amir@gmail.com',
                'password'=>'1234655'
            ],
            2=>[
        'id'=> 3,
        'name'=>'Admin',
        'email'=>'admin@gmail.com',
        'password'=>'123456'
    ]
        ];
    }
}