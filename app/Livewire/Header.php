<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return <<<'HTML'
            <header class="navigation bg-tertiary">
                <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">
                            <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{ asset('front/images/logo.png')}}" alt="Wallet">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                                <li class="nav-item"> <a wire:navigate class="nav-link" href="/">Home</a></li>
                                <li class="nav-item "> <a wire:navigate class="nav-link" href="about.html">About Us</a></li>
                                <li class="nav-item "> <a wire:navigate.hover class="nav-link" href="{{ route('services') }}">Services</a></li>
                                <li class="nav-item "> <a wire:navigate class="nav-link" href="team.html">Our Team</a></li>
                                <li class="nav-item "><a wire:navigate class="nav-link " href="blog.html">Blog</a></li>
                                <li class="nav-item "><a wire:navigate class="nav-link " href="faq.html">FAQ</a></li>
                            </ul>
                            <a wire:navigate href="#!" class="btn btn-outline-primary">Contact Us</a>
                        </div>
                    </div>
                </nav>
            </header>
        HTML;
    }
}
