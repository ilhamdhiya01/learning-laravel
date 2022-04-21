<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navbar = [
            'Home' => '/',
            'Profile' => '/profile',
            'Contact' => '/contact',
            'About' => '/about',
            'Mahasiswa' => '/student'
        ];
        return view('layouts.navbar', compact('navbar'));
    }
}
