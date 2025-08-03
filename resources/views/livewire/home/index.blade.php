<?php

namespace App\Livewire;

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use function Livewire\Volt\layout;

new class extends Component {
}; ?>


<section>
    <div
        style='background-image: url("{{asset("/img/sky-2.png")}}"); background-repeat: no-repeat; background-size: cover; background-position: center;'
        class="h-max min-h-full py-24 md:py-40 mt-4 max-w-none w-full px-10 text-center sm:max-w-md md:max-w-lg sm:px-4 md:max-w-none md:text-center">
        <span class="text-center font-borel text-secondary md:text-2xl">Hello :)</span>
        <h1 class="text-4xl font-sourceSans font-bold tracking-tight leading-10 text-center text-secondary md:text-center sm:text-4xl md:text-6xl lg:text-7xl">
            Ich bin Stevan, <br class="hidden sm:block">
            <h1
                x-data="{
        text: '',
        textArray : ['WEB DEV', 'SOFTWARE DEV', 'FREELANCER', 'DOG DAD'],
        textIndex: 0,
        charIndex: 0,
        typeSpeed: 110,
        cursorSpeed: 550,
        pauseEnd: 1500,
        pauseStart: 20,
        direction: 'forward',
    }"
                x-init="$nextTick(() => {
        let typingInterval = setInterval(startTyping, $data.typeSpeed);

        function startTyping(){
            let current = $data.textArray[ $data.textIndex ];

            // check to see if we hit the end of the string
            if($data.charIndex > current.length){
                    $data.direction = 'backward';
                    clearInterval(typingInterval);

                    setTimeout(function(){
                        typingInterval = setInterval(startTyping, $data.typeSpeed);
                    }, $data.pauseEnd);
            }

            $data.text = current.substring(0, $data.charIndex);

            if($data.direction == 'forward')
            {
                $data.charIndex += 1;
            }
            else
            {
                if($data.charIndex == 0)
                {
                    $data.direction = 'forward';
                    clearInterval(typingInterval);
                    setTimeout(function(){
                        $data.textIndex += 1;
                        if($data.textIndex >= $data.textArray.length)
                        {
                            $data.textIndex = 0;
                        }
                        typingInterval = setInterval(startTyping, $data.typeSpeed);
                    }, $data.pauseStart);
                }
                $data.charIndex -= 1;
            }
        }

        setInterval(function(){
            if($refs.cursor.classList.contains('hidden'))
            {
                $refs.cursor.classList.remove('hidden');
            }
            else
            {
                $refs.cursor.classList.add('hidden');
            }
        }, $data.cursorSpeed);

    })"
                class="flex items-center justify-center mx-auto text-center max-w-7xl">
                <div class="relative flex items-center justify-center h-10 md:h-24">
                    <h1 class="text-5xl sm:text-4xl md:text-8xl lg:text-9xl font-sourceSans font-black text-white"
                        x-text="text"></h1>
                    <span class="absolute right-0 w-2 -mr-2 bg-secondary h-3/4" x-ref="cursor"></span>
                </div>
            </h1>

        </h1>
        <div
            class="mx-auto font-normal font-sourceSans mt-5 text-center text-sm text-white  md:mt-8 md:max-w-lg md:text-center md:text-2xl">
            Willkommen! Hier findest du alles, was du über mich als Entwickler wissen musst. Viel Spaß!
        </div>
        <div
            class="flex flex-col justify-center items-center mt-6 md:mt-14 space-y-4 text-center sm:flex-row sm:space-y-0 sm:space-x-4">
                <span class="inline-flex relative w-full md:w-auto">
                    <a href="#_"
                       class="inline-flex justify-center items-center px-8 py-4 mx-auto text-base font-medium leading-6 text-white bg-secondary rounded-full border border-transparent xl:px-10 md:w-auto hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                        Erkunden
                    </a>
                </span>
        </div>
    </div>


    <section class="w-full px-10 py-20 bg-gray-50">
        <div class="max-w-5xl mx-auto">
            <h2 class="w-full mb-4 font-serif text-3xl text-left sm:text-4xl md:text-center lg:text-5xl">All the tools
                you know and love</h2>
            <p class="w-full mb-12 text-lg font-light text-left text-gray-700 md:text-center md:text-xl lg:text-2xl">Our
                application seemlessly integrates with the tools you already know and love. <br class="hidden md:block">Why
                learn another tool when you can integrate all your favorites with us.
            <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6">
                <div class="flex items-center justify-center py-8 bg-white shadow-sm rounded-xl">
                    <img src="https://cdn.devdojo.com/images/october2021/figma-dynamic-color.png" class="w-24 h-24">
                </div>
                <div class="flex items-center justify-center py-8 bg-white shadow-sm rounded-xl">
                    <img src="https://cdn.devdojo.com/images/october2021/blender-dynamic-color.png" class="w-24 h-24">
                </div>
                <div class="flex items-center justify-center py-8 bg-white shadow-sm rounded-xl">
                    <img src="https://cdn.devdojo.com/images/october2021/flash-dynamic-color.png" class="w-24 h-24">
                </div>
                <div class="flex items-center justify-center py-8 bg-white shadow-sm rounded-xl">
                    <img src="https://cdn.devdojo.com/images/october2021/notebook-dynamic-color.png" class="w-24 h-24">
                </div>
                <div class="flex items-center justify-center py-8 bg-white shadow-sm rounded-xl">
                    <img src="https://cdn.devdojo.com/images/october2021/paint-kit-dynamic-color.png" class="w-24 h-24">
                </div>
                <div class="flex items-center justify-center py-8 bg-white shadow-sm rounded-xl">
                    <img src="https://cdn.devdojo.com/images/october2021/rocket-dynamic-color.png" class="w-24 h-24">
                </div>
            </div>
            <div class="w-full mt-10 text-center">
                <a href="#_" class="inline-block font-medium text-gray-400 underline">View All Our Integrations</a>
            </div>
        </div>
    </section>

</section>

