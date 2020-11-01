<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Memberinfo {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Lebron James',
            'birth'=>'1984-12-30',
            'nationality'=> 'Amercia',
            'team'=>'Lakers',
            'height'=>'2.06cm',
            'weight'=> '113.4kg',
            'achievements'=>'4 times MVP,4 times FMVP',
            'image' => 'LBJ.jpeg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Anthony Davis',
            'birth'=>'1993-3-11',
            'nationality'=> 'Amercia',
            'team'=>'Lakers',
            'height'=>'2.08cm',
            'weight'=> '100kg',
            'achievements'=>'1 time NBA championship,7 times NBA ALL-Star',
            'image' => 'Davis.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Raion Rondo',
            'birth'=>'1986-2-22',
            'nationality'=> 'Amercia',
            'team'=>'Lakers',
            'height'=>'1.85cm',
            'weight'=> '77.6kg',
            'achievements'=>'2 times championship, 4 times NBA ALL-Star',
            'image' => 'RJ.jpeg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Dwight Howard',
            'birth'=>'1985-12-8',
            'nationality'=> 'Amercia',
            'team'=>'Lakers',
            'height'=>'2.11cm',
            'weight'=> '120kg',
            'achievements'=>'1 times championship, 8 times NBA ALL-Star',
            'image' => 'DW.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Danny Green',
            'birth'=>'1987-6-22',
            'nationality'=> 'Amercia',
            'team'=>'Lakers',
            'height'=>'1.98cm',
            'weight'=> '97.5kg',
            'achievements'=>'3 times championship',
            'image' => 'Green.jpeg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Kyle Kuzma',
            'birth'=>'1995-7-24',
            'nationality'=> 'Amercia',
            'team'=>'Lakers',
            'height'=>'2.03cm',
            'weight'=> '100.2kg',
            'achievements'=>'1 times championship',
            'image' => 'kuz.jpeg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
