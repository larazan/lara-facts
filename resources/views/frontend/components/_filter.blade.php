@php
$categories = \App\Models\Category::all();
@endphp

<div class="hidden2 flex flex-col bg-white fixed overflow-y-auto top-0 h-full shadow-2xl w-[45vw] transition-all duration-300 z-50 custom-scrollbar"" id="menubar" :class="filterOpen ? 'left-0' : '-left-full'" x-cloak>
    <div class="sticky top-0 flex w-full items-center justify-between px-4 py-3 border-b bg-white">
      <div class="w-1/2">
        <span class="uppercase font-bold text-gray-900">Filter</span>
      </div>

      <div class="flex justify-end w-1/2">
        <div @click.stop="filterOpen = !filterOpen" class="cursor-pointer w-8 h-8 flex justify-center items-center rounded-full shadow bg-white hover:bg-slate-50">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width=2 stroke="currentColor" class="w-6 h-6 text-gray-900">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
      </div>
    </div>

    <div class="flex justify-start items-center flex-col gap-4  py-4 ">
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
                            <a href="" class="ml-1 min-w-0 flex-1 pally-medium text-gray-500 hover:text-[#20bd70] text-sm">{{ $cat->name }}</a>
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



</div>

<div :class="filterOpen ? 'block' : 'hidden'" class=" opacity-30 fixed inset-0 z-30 bg-black"></div>