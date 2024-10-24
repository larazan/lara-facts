@extends('frontend.layout')


@section('content')


<main class="flex bg-white min-h-screen pt-16 md:pt-[60px] max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="w-full flex-grow max-w-6xl sm:mx-auto p-2 px-2 sm:py-8 space-y-8">
        <div class="w-full sm:grid sm:grid-cols-5">
            <div class="w-full flex flex-col col-span-5 space-y-4">
                <div class="flex ">
                    <span class="pally-bold text-2xl">Browse</span>
                </div>
                <div class="w-full sm:grid sm:grid-cols-5 sm:space-x-4">
                    <form wire:submit.prevent="filterItems" class="hidden md:block">
                        <div class="flex justify-start items-center flex-col gap-4 border border-gray-300 rounded py-4 shadow-sm">
                            <div class="w-full bg-white space-y-4">
                                <div class="px-4 py-2 flex gap-3 flex-col">
                                    <div class="w-full">
                                        <button type="submit" class="w-full border border-green-600 bg-[#20bd70] hover:bg-green-400 hover:text-green-700 text-white px-3 py-2 text-sm rounded-lg transition duration-500">
                                            Filter
                                        </button>
                                    </div>
                                    <div class="w-full flex justify-start">
                                        <button wire:click="resetFilter" type="button" class="text-gray-400 hover:text-gray-700 text-xs">
                                            Reset
                                        </button>
                                    </div>
                                </div>

                                <div class="px-4 py-2">
                                    <h3 class="font-medium text-gray-900 pb-3">Category</h3>
                                    <div class="">
                                        <div class="space-y-2">
                                        @foreach($categories as $cat)
                                            <div class="flex items-center">
                                                <input id="businessModelOptions-subscription" wire:model.defer="selectedBusinessModels" value="subscription" type="checkbox" class="h-4 w-4 rounded border text-[#20bd70] focus:ring-0">
                                                <label for="businessModelOptions-subscription" class="ml-3 min-w-0 flex-1 text-gray-500 text-sm">{{ $cat->name }}</label>
                                            </div>
                                        @endforeach
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="px-4 py-2">
                                    <h3 class="font-medium text-gray-900 pb-3">Type</h3>
                                    <div class="">
                                        <div class="space-y-2">
                                            <div class="flex items-center">
                                                <input id="foundingTeamOptions-solo" wire:model.defer="selectedFoundingTeams" value="solo" type="checkbox" class="h-4 w-4 rounded border text-[#20bd70] focus:ring-0">
                                                <label for="foundingTeamOptions-solo" class="ml-3 min-w-0 flex-1 text-gray-500 text-sm">
                                                    Single
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="foundingTeamOptions-two" wire:model.defer="selectedFoundingTeams" value="two" type="checkbox" class="h-4 w-4 rounded border text-[#20bd70] focus:ring-0">
                                                <label for="foundingTeamOptions-two" class="ml-3 min-w-0 flex-1 text-gray-500 text-sm">
                                                    Series
                                                </label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <div class="col-span-4 space-y-4 w-full">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-4 gap-y-4  xl:gap-x-4">

                            <div class="group relative flex flex-col justify-center items-start h-72 transition-all duration-150  hover:scale-105 cursor-pointer">
                                <div class="absolute w-full h-full">
                                    <div class="w-full h-full">
                                        <div class="bg-mask flex md:block md:w-full md:h-full relative transition duration-300 ease-out ">
                                        <img src="/frontend/img/jaguar.jpg" alt="" class="h-full w-full object-cover" />
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-0 z-20">
                                    <h3 class="font-bold mb-2 px-2 py-3 leading-tight text-white text-2xl md:text-h5 md:mb-[2px]">
                                        Top 10 facts about Jaguar
                                    </h3>
                                
                                </div>
                                <div class="absolute z-10 bottom-0 h-56 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                            </div>

                            <div class="group relative flex flex-col justify-center items-start h-72 transition-all duration-150  hover:scale-105 cursor-pointer">
                                <div class="absolute w-full h-full">
                                    <div class="w-full h-full">
                                        <div class="bg-mask flex md:block md:w-full md:h-full relative transition duration-300 ease-out ">
                                        <img src="/frontend/img/orca.jpg" alt="" class="h-full w-full object-cover" />
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-0 z-20">
                                    <h3 class="font-bold mb-2 px-2 py-3 leading-tight text-white text-2xl md:text-h5 md:mb-[2px]">
                                        Top 10 facts about Orca
                                    </h3>
                                    
                                </div>
                                <div class="absolute z-10 bottom-0 h-56 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                            </div>

                            <div class="group relative flex flex-col justify-center items-start h-72 transition-all duration-150  hover:scale-105 cursor-pointer">
                                <div class="absolute w-full h-full">
                                    <div class="w-full h-full">
                                        <div class="bg-mask flex md:block md:w-full md:h-full relative transition duration-300 ease-out ">
                                        <img src="/frontend/img/badak.jpg" alt="" class="h-full w-full object-cover" />
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-0 z-20">
                                    <h3 class="font-bold mb-2 px-2 py-3 leading-tight text-white text-2xl md:text-h5 md:mb-[2px]">
                                        Top 10 facts about Rhino
                                    </h3>
                                    
                                </div>
                                <div class="absolute z-10 bottom-0 h-56 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                            </div>

                            <div class="group relative flex flex-col justify-center items-start h-72 transition-all duration-150  hover:scale-105 cursor-pointer">
                                <div class="absolute w-full h-full">
                                    <div class="w-full h-full">
                                        <div class="bg-mask flex md:block md:w-full md:h-full relative transition duration-300 ease-out ">
                                        <img src="/frontend/img/red-panda.jpg" alt="" class="h-full w-full object-cover" />
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-0 z-20">
                                    <h3 class="font-bold mb-2 px-2 py-3 leading-tight text-white text-2xl md:text-h5 md:mb-[2px]">
                                        Top 10 facts about Red Panda
                                    </h3>
                                
                                </div>
                                <div class="absolute z-10 bottom-0 h-56 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                            </div>

                            <div class="group relative flex flex-col justify-center items-start h-72 transition-all duration-150  hover:scale-105 cursor-pointer">
                                <div class="absolute w-full h-full">
                                    <div class="w-full h-full">
                                        <div class="bg-mask flex md:block md:w-full md:h-full relative transition duration-300 ease-out ">
                                        <img src="/frontend/img/cheetah.jpg" alt="" class="h-full w-full object-cover" />
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-0 z-20">
                                    <h3 class="font-bold mb-2 px-2 py-3 leading-tight text-white text-2xl md:text-h5 md:mb-[2px]">
                                        Top 10 facts about Cheetah
                                    </h3>
                                    
                                </div>
                                <div class="absolute z-10 bottom-0 h-56 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                            </div>

                            <div class="group relative flex flex-col justify-center items-start h-72 transition-all duration-150  hover:scale-105 cursor-pointer">
                                <div class="absolute w-full h-full">
                                    <div class="w-full h-full">
                                        <div class="bg-mask flex md:block md:w-full md:h-full relative transition duration-300 ease-out ">
                                        <img src="/frontend/img/Snow_leopard_pair.jpg" alt="" class="h-full w-full object-cover" />
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-0 z-20">
                                    <h3 class="font-bold mb-2 px-2 py-3 leading-tight text-white text-2xl md:text-h5 md:mb-[2px]">
                                        Top 10 facts about Snow Leopard
                                    </h3>
                                    
                                </div>
                                <div class="absolute z-10 bottom-0 h-56 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                            </div>

                            <div class="group relative flex flex-col justify-center items-start h-72 transition-all duration-150  hover:scale-105 cursor-pointer">
                                <div class="absolute w-full h-full">
                                    <div class="w-full h-full">
                                        <div class="bg-mask flex md:block md:w-full md:h-full relative transition duration-300 ease-out ">
                                        <img src="/frontend/img/pangolin.jpg" alt="" class="h-full w-full object-cover" />
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-0 z-20">
                                    <h3 class="font-bold mb-2 px-2 py-3 leading-tight text-white text-2xl md:text-h5 md:mb-[2px]">
                                        Top 10 facts about Pangolin
                                    </h3>
                                
                                </div>
                                <div class="absolute z-10 bottom-0 h-56 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                            </div>

                            <div class="group relative flex flex-col justify-center items-start h-72 transition-all duration-150  hover:scale-105 cursor-pointer">
                                <div class="absolute w-full h-full">
                                    <div class="w-full h-full">
                                        <div class="bg-mask flex md:block md:w-full md:h-full relative transition duration-300 ease-out ">
                                        <img src="/frontend/img/koala.jpg" alt="" class="h-full w-full object-cover" />
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-0 z-20">
                                    <h3 class="font-bold mb-2 px-2 py-3 leading-tight text-white text-2xl md:text-h5 md:mb-[2px]">
                                        Top 10 facts about Koala
                                    </h3>
                                    
                                </div>
                                <div class="absolute z-10 bottom-0 h-56 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                            </div>

                            <div class="group relative flex flex-col justify-center items-start h-72 transition-all duration-150  hover:scale-105 cursor-pointer">
                                <div class="absolute w-full h-full">
                                    <div class="w-full h-full">
                                        <div class="bg-mask flex md:block md:w-full md:h-full relative transition duration-300 ease-out ">
                                        <img src="/frontend/img/panda.jpg" alt="" class="h-full w-full object-cover" />
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-0 z-20">
                                    <h3 class="font-bold mb-2 px-2 py-3 leading-tight text-white text-2xl md:text-h5 md:mb-[2px]">
                                        Top 10 facts about Panda
                                    </h3>
                                    
                                </div>
                                <div class="absolute z-10 bottom-0 h-56 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection