<?php

namespace App\Http\Controllers;



class PolitessController 
{
    //

    public function helloEveryone()

    {
        return view('Hello', [

            'name' => 'Fiorella',
            'numbers' => [1, 2, 3],
        
        ]);


    }

    public function goodBye() 

    {
        return view('good-bye'); 
    }

    public function helloSomone($name) 

    {

        return view('Hello',[
            'name' => $name,
            'numbers' => [],
        ]);

    }
    public function TotoMama()

    {
        return view('Toto', [

            'nom' => '/a propos',
            'Tabs' => ['Xavier', 'Mahfoud', 'Stépahen'],
        ]);
    }

    public function TotoShow($user)

    {

        return view('Toto-show', [

            'user' => $user,
           
        ]
    
    );

    }
}
