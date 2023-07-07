<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    private  $contacts = [
        [
          'first_name' => 'Wendi',
          'last_name' => 'Clements',
          'email' => 'wendiclements@pharmacon.com',
          'phone' => 9625662947,
          'birthday' => '1979-12-12'
        ],
        [
          'first_name' => 'Tamra',
          'last_name' => 'Alvarado',
          'email' => 'tamraalvarado@pharmacon.com',
          'phone' => 9495783043,
          'birthday' => '1988-12-11'
        ],
        [
          'first_name' => 'Lacey',
          'last_name' => 'Cantu',
          'email' => 'laceycantu@pharmacon.com',
          'phone' => 8605962964,
          'birthday' => '1983-03-06'
        ],
        [
          'first_name' => 'Booker',
          'last_name' => 'Blake',
          'email' => 'bookerblake@pharmacon.com',
          'phone' => 9915982782,
          'birthday' => '1988-09-20'
        ],
        [
          'first_name' => 'Elise',
          'last_name' => 'Kaufman',
          'email' => 'elisekaufman@pharmacon.com',
          'phone' => 8115473402,
          'birthday' => '1972-11-07'
        ],
        [
          'first_name' => 'Francis',
          'last_name' => 'Rivas',
          'email' => 'francisrivas@pharmacon.com',
          'phone' => 8795752612,
          'birthday' => '1974-08-29'
        ],
        [
          'first_name' => 'Bowen',
          'last_name' => 'Hall',
          'email' => 'bowenhall@pharmacon.com',
          'phone' => 9585352360,
          'birthday' => '1988-08-21'
        ],
        [
          'first_name' => 'Ruth',
          'last_name' => 'Mckenzie',
          'email' => 'ruthmckenzie@pharmacon.com',
          'phone' => 9285262350,
          'birthday' => '1999-06-03'
        ],
        [
          'first_name' => 'Priscilla',
          'last_name' => 'Shields',
          'email' => 'priscillashields@pharmacon.com',
          'phone' => 9935293621,
          'birthday' => '1987-08-19'
        ],
        [
          'first_name' => 'Evelyn',
          'last_name' => 'Simmons',
          'email' => 'evelynsimmons@pharmacon.com',
          'phone' => 9674833720,
          'birthday' => '1979-03-15'
        ]
      ];


    public function index () {
        $contacts =  $this->contacts;

        if (isset($_GET['s'])) {
          $s = strtolower($_GET['s']);
          $contacts = array_filter($this->contacts, function ($contact) use ($s) {
            return strpos(strtolower($contact['first_name']), $s) !== false || strpos(strtolower($contact['last_name']), $s) !== false;
          }); 
        }

        return view('contacts', ['contacts' => $contacts]);
    }

    public function show ($id) {
        return view('contact', ['contact' => $this->contacts[$id]]);
    }
}
