@extends('frontend.layout')


@section('content')

<main class="flex bg-white min-h-screen pt-16 md:pt-[60px] max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="w-full flex-grow max-w-6xl sm:mx-auto p-2 px-2 sm:py-8 space-y-8">
        <div class="w-full sm:grid sm:grid-cols-5">
            <div class="w-full flex flex-col col-span-5 space-y-4">
                <div class="flex flex-row justify-between">
                    <span class="pally-bold text-2xl">Detail</span>

                </div>

                <div class="max-w-4xl mx-auto relative" x-data="{ activeSlide: 1, slides: [1, 2, 3, 4, 5] }">
                    <!-- Slides -->
                    <template x-for="slide in slides" :key="slide">
                        <div
                            x-show="activeSlide === slide"
                            class="p-24 font-bold text-5xl h-64 flex items-center bg-teal-500 text-white rounded-lg">
                            <span class="w-12 text-center" x-text="slide"></span>
                            <span class="text-teal-300">/</span>
                            <span class="w-12 text-center" x-text="slides.length"></span>
                        </div>
                    </template>

                    <!-- Prev/Next Arrows -->
                    <div class="absolute inset-0 flex">
                        <div class="flex items-center justify-start w-1/2">
                            <button
                                class="bg-teal-100 text-teal-500 hover:text-orange-500 font-bold hover:shadow-lg rounded-full w-12 h-12 -ml-6"
                                x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                                &#8592;
                            </button>
                        </div>
                        <div class="flex items-center justify-end w-1/2">
                            <button
                                class="bg-teal-100 text-teal-500 hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 -mr-6"
                                x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                                &#8594;
                            </button>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="absolute w-full flex items-center justify-center px-4">
                        <template x-for="slide in slides" :key="slide">
                            <button
                                class="flex-1 w-4 h-2 mt-4 mx-2 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-teal-600 hover:shadow-lg"
                                :class="{ 
              'bg-orange-600': activeSlide === slide,
              'bg-teal-300': activeSlide !== slide 
          }"
                                x-on:click="activeSlide = slide"></button>
                        </template>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
</main>

@endsection