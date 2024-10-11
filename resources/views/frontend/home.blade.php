@extends('frontend.layout')

@push('meta')
<meta name="title" content="{{ config('app.name') }}">
<meta name="keywords" content="topic, quotes, author">
@endpush

@section('content')

@include('frontend.components._ads_modal')

<div class="flex flex-col bg-white min-h-screen pt-[60px] md:pt-[100px]">
    @include('frontend.components._hero')
    @include('frontend.components._content')
    <div class="flex flex-row w-full">
        <div class="flex flex-1 flex-col items-center justify-center relative">

            <div class="flex flex-1 flex-col pb-18 px-3 md:px-0 max-w-sm md:max-w-2xl">
           

                <div class="flex py-8 md:py-20 relative">
                    <div class="flex flex-col gap-y-24 md:gap-y-32 mx-auto max-w-6xl">
                        
                        
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


@endsection