<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', '/home/index')->name('home.index');
Volt::route('/nav', 'navigation')->name('navigation');;
