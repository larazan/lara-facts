@extends('frontend.layout')

@push('meta')
<meta name="title" content="{{ config('app.name') }} Blogs">
<meta name="description" content="Wander Blog | Tech Startup | Luxury Vacation Rentals | Corporate Retreat | REIT Stock | Travel to California Luxury Vacation Rentals and more. ">
<meta name="keywords" content="Wander,Home,Experience,Vacation,Workstation,Find,Happy,Place">
@endpush

@section('content')



<main class="relative bg-white2 bg-[#fefbec] pb-12">
        <div class=" mx-auto max-w-screen-lg ">
          <div
            class="px-6 pt-24 md:pt-24 pb-8 md:pb-10"
          >
            <h1 class="text-4xl sm:text-3xl md:text-4xl pally-medium lg:text-5xl font-headline font-black tracking-snug text-center leading-12 sm:leading-15 md:leading-19 lg:leading-26 text-gray-800">
              <span>Blog</span>
            </h1>
            <!-- <p class="text-gray-600 text-lg md:text-2xl text-center leading-normal md:leading-9 mt-3 md:mt-6">
              Get inspiring jokes .
            </p> -->
            
          </div>

          <div class="my-0 px-6">
            @if (!empty($tag))
            <div class="font-semibold text-black tracking-tight text-lg">tag by: <span class="text-lg md:text-3xl text-black font-semibold md:font-bold uppercase">{{ $tag }}</span></div>
            @else
            <div class="h-0 md:h-0"></div>
            @endif
        </div>

        <div class="">
          <div class="container px-6 mx-auto ">
            <ul class="grid grid-flow-row grid-cols-1 md:grid-cols-2 gap-10">
             {{-- 
              <li class="py-6 md:py-10">
                <h2 class="pb-4 text-center md:text-left">
                  <a
                    href="/articles/work-from-home-setup/"
                    class="text-2xl md:text-3xl leading-8 md:leading-10 font-bold text-gray-800 hover:text-blue-700 transition ease-in-out duration-150"
                  >
                    Upgrade Your Work From Home Setup: 28 remote pros share
                    their best tips and recommendations
                  </a>
                </h2>
                <p class="md:text-lg md:leading-normal text-gray-600 text-center md:text-left">
                  Creating a dedicated space (with the freedom to roam) and
                  designing a setup conducive to your best work can boost your
                  performance and encourage behaviors that lead to more focus
                  and follow-through.
                </p>
                <div
                  class="pt-6 flex justify-center md:justify-start"
                  
                >
                  <div class="flex items-center" >
                    <div class="w-10 h-10" >
                      <img
                        src="{{ url('frontend/img/claire.png') }}"
                        alt="Claire Emerson"
                        class="rounded-full w-full"
                      />
                    </div>
                    <div class="ml-3 leading-6" >
                      <div
                        class="font-medium text-gray-600"
                        
                      >
                        Claire Emerson
                      </div>
                      <div class="text-sm text-gray-500" >
                        <time datetime="2022-20-47">Jan 20, 2022</time>
                        <span> · </span>
                        <span>13 min read</span>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="py-6 md:py-10">
                <h2 class="pb-4 text-center md:text-left">
                  <a
                    href="/articles/how-to-plan-your-day/"
                    class="text-2xl md:text-3xl leading-8 md:leading-10 font-bold text-gray-800 hover:text-blue-700 transition ease-in-out duration-150"
                  >
                    How To Plan Your Day To Maximize Your Time (And Minimize
                    Distractions)
                  </a>
                </h2>
                <p class="md:text-lg md:leading-normal text-gray-600 text-center md:text-left">
                  By adopting habits, routines, and rituals that maximize your
                  time, minimize distractions, and make follow-through your
                  focus — navigating your tasks and projects becomes a breeze.
                </p>
                <div
                  class="pt-6 flex justify-center md:justify-start"
                  
                >
                  <div class="flex items-center" >
                    <div class="w-10 h-10" >
                      <img
                        src="{{ url('frontend/img/claire.png') }}"
                        alt="Claire Emerson"
                        class="rounded-full w-full"
                      />
                    </div>
                    <div class="ml-3 leading-6" >
                      <div
                        class="font-medium text-gray-600"
                        
                      >
                        Claire Emerson
                      </div>
                      <div class="text-sm text-gray-500" >
                        <time datetime="2021-29-00">Nov 29, 2021</time>
                        <span> · </span>
                        <span>13 min read</span>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              --}}
              @foreach($articles as $a)
              <li class="relative rounded-lg bg-white drop-shadow overflow-hidden">
                <h2 class="px-4 py-6 text-center md:text-left bg-[#fed44e]">
                  <a
                    href="{{ url('/articles/' . $a->slug) }}"
                    class="text-2xl md:text-3xl leading-8 md:leading-8 font-bold pally-medium text-gray-800 hover:text-blue-700 transition ease-in-out duration-150"
                  >
                    {{ $a->title }}
                  </a>
                </h2>
                <p class="px-4 py-5 min-h-56 line-clamp-2 text-base text-gray-600 md:leading-normal text-center md:text-left">
                  {{ $a->excerpt() }}
                </p>
                <div class="absolute bottom-0 px-4 pb-5 flex justify-center md:justify-start">
                  <div class="flex items-center" >
                    <div class="w-10 h-10" >
                      <img
                        src="{{ Avatar::create($a->user->name)->toBase64() }}"
                        alt="{{ $a->user->name }}"
                        class="rounded-full w-full"
                      />
                    </div>
                    <div class="ml-3 leading-6" >
                      <div
                        class="font-medium text-gray-600"
                        
                      >
                      {{ $a->user->first_name }} {{ $a->user->last_name }}
                      </div>
                      <div class="text-sm text-gray-500" >
                        <time datetime="2021-29-00">{{ $a->created_at->diffForHumans() }}</time>
                        <span> · </span>
                        <span>{{ $a->readTime() }} min read</span>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>  
          
          {{ $articles->links() }}

        </div>
        
      </main>


@endsection