<div class="max-w-full xl:max-w-[1800px] mx-auto  flex flex-col justify-center items-center bg-white">
    <div class="w-11/12 mx-auto">
        <div class=" md:pb-16 mt-0 md:mt-[72px] ">
            <div class="mt-4 md:mt-[72px] flex flex-col">
                <div class="mb-4 md:mb-9">
                    <h3 class="text-2xl md:text-3xl font-bold text-black leading-tight">
                        Browse Categories Facts
                    </h3>
                </div>
                <div class="flex flex-col md:flex-row w-full">
                    <div class="w-full md:w-3/12 ">
                        <div class="flex flex-col text-md leading-5 md:text-lg md:leading-6 font-semibold text-black custom-rich-text mb-7 md:mb-8">
                            <div>
                                <div>
                                    <p class="font-sans">
                                        The Million Facts is the number one source for the most interesting & random facts about animals, celebrities, food, films, games & so much more. You will learn something about everything!
                                    </p>
                                    <p class="font-sans"></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a
                                href="{{ url('/category') }}"
                                class="font-semibold animated-underline after:bg-[#fff] before:bg-[#000] text-black">
                                See all
                            </a>
                        </div>
                    </div>

                    <div class="overflow-x-auto overflow-hidden md:w-9/12 md:-mt-4 ">
                        <div>
                            <div
                                class="w-full">
                                <div class="w-full table">
                                    <div class="w-full  flex px-0 pb-6 -ml-2 md:px-4">
                                        @foreach($facts as $f)
                                        <a
                                            href="/product"
                                            class="h-full z-1 relative text-left">
                                            <div class="absolute top-10 z-10 left-4 lg:left-10">
                                                <div class="flex gap-2 transition-opacity ease-in-out duration-300 opacity-0 min-h- 7 h-7 mb-3 md:mb-4 pointer-events-none"></div>
                                            </div>
                                            <div class="flex flex-col items-center h-full">
                                                <div class="relative lg:p-4 mb-10 lg:mb-0 hover:lg:shadow-sm lg:w-[342px] lg:min-h-[412px] p-2 h-full cursor-pointer">
                                                    <div class="group/card">
                                                        <div class="relative h-[297px] w-[297px] lg:h-[306px] lg:w-[306px] bg-[#e9e9e9]">
                                                            <div class="absolute h-[100%] w-[100%] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-2">
                                                                <div class="absolute h-[100%] w-[100%] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-opacity duration-500 opacity-100 group-hover/card:lg:opacity-0">
                                                                    <div class="w-full h-full">
                                                                        <div class="hidden2 md:block md:w-full md:h-full relative animate-[fadeIn_0.3s_ease-out]">
                                                                            <img src="/fact/{{ $f }}" alt="" class="object-cover" />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        @endforeach


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>