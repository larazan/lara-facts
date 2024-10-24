@extends('frontend.layout')

@push('meta')
<meta name="title" content="{{ config('app.name') }} Topics">
<meta name="description" content="alot topics for quotes ready to search">
<meta name="keywords" content="topic, tags, quotes, author">
@endpush

@section('content')

<main class="pt-[60px] md:pt-[80px] min-h-screen2 pt-162 h-full bg-white">
    <div class="max-w-5xl mx-auto">
        
    <div class="sticky top-16 bg-white py-4 border-b border-gray-200 bg-white/30 backdrop-filter backdrop-blur-sm">
        <div class="flex flex-wrap justify-left  mx-auto w-11/12 md:w-10/12  items-center">
            @foreach($letters as $l)
            <a 
                href="#{{ $l }}"
                class="flex mr-2 mt-2 justify-center items-center mb-1.5 w-8 h-8 bg-white hover:bg-[#20bd70] px-2 py-1 border-2  hover:text-white border-gray-900 @if(Request::segment(3) == $l){{ 'bg-blue-800 text-white' }}@else{ 'bg-white text-gray-900' }@endif"
            >
                <span class="uppercase font-bold ">{{ $l }}</span>
            </a>
            @endforeach
        </div>
    </div>

        <div class="px-6 py-5 md:py-12 mb-5 space-y-4">
            <div class="flex flex-col divide-y-2">
                
                @foreach($topics as $alpha => $tags)
                <div class="flex px-2 py-6 space-x-5" id="{{ $alpha }}">
                    <div><span class="text-lg font-semibold uppercase pally-bold">{{ $alpha }}</span></div>
                    <div class="flex flex-wrap justify-left mx-auto w-full md:w-12/12 items-center">
                    
                        @foreach($tags as $t)
                        <a href="">
                            <div class="mr-2 mt-1 mb-1 py-1.5 px-3 text-sm bg-white border border-slate-300 rounded-xs flex items-center text-slate-900 gap-x-1 hover:bg-slate-200 transition cursor-pointer">
                                <div class="truncate tracking-wide text-xs font-semibold capitalize">{{ $t->name }}</div>
                            </div>
                        </a>
                        @endforeach
                        
                    </div>

                </div>
                @endforeach        
            
            </div>
        </div>
    </div>

</main>


@endsection