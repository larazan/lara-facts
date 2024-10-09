{{-- 

<footer class="flex w-full bg-white">
  <div class="mx-auto max-w-5xl ">
    <div class="px-6 py-2 md:py-6 sm:px-6 lg:col-span-3 lg:px-8">
      <div class="grid grid-cols-1 gap-10 sm:grid-cols-2">
        <div class="mt-6">
          <div class="flex w-full flex-row space-x-2 justify-center md:justify-start sm:flex-wrap">
            <a href="/" target="_blank" rel="noreferrer">
              <img src="/frontend/img/logo.png" alt="logo" class="w-full h-16 md:h-16" />
            </a>
            
          </div>
          <div class="flex w-full justify-center py-6">
            <nav aria-label="Footer Navigation - Support">
              <ul class="flex gap-6 ">
                <li>
                  <a href="/" rel="noreferrer" target="_blank" class="font-bold text-gray-900 transition hover:text-[#FF6D42]">
                    <span class="sr-only">Facebook</span>

                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path fillRule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clipRule="evenodd" />
                    </svg>
                  </a>
                </li>

                <li>
                  <a href="/" rel="noreferrer" target="_blank" class="font-bold text-gray-900 transition hover:text-[#FF6D42]">
                    <span class="sr-only">Instagram</span>

                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path fillRule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clipRule="evenodd" />
                    </svg>
                  </a>
                </li>

                <li>
                  <a href="/" rel="noreferrer" target="_blank" class="font-bold text-gray-900 transition hover:text-[#FF6D42]">
                    <span class="sr-only">Twitter</span>

                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>

                <li>
                  <a href="/" rel="noreferrer" target="_blank" class="font-bold text-gray-900 transition hover:text-[#FF6D42]">
                    <span class="sr-only">GitHub</span>
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path fillRule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clipRule="evenodd" />
                    </svg>
                  </a>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>


        <div class="grid grid-cols-2 gap-4 md:gap-6 sm:grid-cols-2">
          <div>
            <nav aria-label="Footer Navigation - Services" class="mt-0 md:mt-6">
              <ul class="space-y-2 text-md font-mabrybold">
                <li>
                  <a href="{{ route('faqs') }}" class="font-bold text-gray-900 transition hover:text-[#FF6D42]">
                    Help
                  </a>
                </li>

                <li>
                  <a href="{{ route('about') }}" class="font-bold text-gray-900 transition hover:text-[#FF6D42]">
                    About
                  </a>
                </li>

                <li>
                  <a href="{{ route('contact') }}" class="font-bold text-gray-900 transition hover:text-[#FF6D42]">
                    Contact
                  </a>
                </li>

                <li>
                  <a href="{{ route('terms') }}" class="font-bold text-gray-900 transition hover:text-[#FF6D42]">
                    Terms of Service
                  </a>
                </li>

                <li>
                  <a href="{{ route('privacy-policy') }}" class="font-bold text-gray-900 transition hover:text-[#FF6D42]">
                    Privacy Policy
                  </a>
                </li>
              </ul>
            </nav>
          </div>

          <div>
            <nav aria-label="Footer Navigation - Company" class="mt-0 md:mt-6">
              <ul class="space-y-2 text-md font-mabrybold">
                
                
                <li>
                  <a href="{{ route('topic') }}" class="font-bold text-gray-900 transition hover:text-[#FF6D42]">
                    Topics
                  </a>
                </li>
                <li>
                  <a href="{{ route('articles') }}" class="font-bold text-gray-900 transition hover:text-[#FF6D42]">
                    Article
                  </a>
                </li>
                
                
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="pt-6 md:pt-12">
        <div class="py-0 sm:mb-0 mx-2 md:mx-5 xl:mx-auto text-center border-gray-300 border-t-[0.5px]  max-w-7xl">
          <p class="text-normal text-gray-700 my-3 md:my-6">©{{ date('Y') }} Million-Quotes Enterprises Pvt. Ltd. – All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

--}}

<footer class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 mb-10">
        <div class="col-span-full hidden lg:col-span-1 lg:block">
            <a class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 via-teal-500 via-emerald-500 to-pink-500 inline-flex items-center gap-x-2 text-xl font-extrabold dark:text-white" href="/">
                <img class="w-10 h-auto " src="/favicon/apple-touch-icon.png" alt="ColorBliss">
                <span class="block mr-10">ColorBliss</span>
            </a>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-gray-100">Product</h4>
            <div class="mt-3 grid space-y-3 text-sm">
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/ai-generated-coloring-page">AI Coloring Page Generator</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/product/photo-to-coloring-page">Convert photos to coloring pages</a><span class="inline text-blue-600 dark:text-blue-500">— New</span></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/custom-coloring-books">Custom Coloring Book Printing</a><span class="inline text-blue-600 dark:text-blue-500">— New</span></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/coloring-pages">Free Coloring Pages</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/#pricing">Pricing</a></p>
            </div>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-gray-100">Company</h4>
            <div class="mt-3 grid space-y-3 text-sm">
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/about">About us</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/blog">Blog</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/#love">Wall of Love</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/changelog">Changelog</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/affiliates">Affiliates</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="https://climate.stripe.com/uB0CD8">Climate Pledge</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/terms">Terms &amp; Conditions</a></p>
            </div>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-gray-100">Follow Us</h4>
            <div class="mt-3 grid space-y-3 text-sm">
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="https://www.facebook.com/profile.php?id=61551855449896">Facebook</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="https://www.pinterest.com/getcolorbliss/">Pinterest</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="https://www.instagram.com/colorbliss.art/">Instagram</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="https://twitter.com/_colorblissart">𝕏 / Twitter</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="https://www.tiktok.com/@colorbliss.art">TikTok</a></p>
            </div>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-gray-100">Account</h4>
            <div class="mt-3 grid space-y-3 text-sm">
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/signup">Sign Up</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/login">Log In</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/auth/forgot-password">Forgot Password</a> </p>
            </div>
            <h4 class="mt-7 text-xs font-semibold text-gray-900 uppercase dark:text-gray-100">Other Sites</h4>
            <div class="mt-3 grid space-y-3 text-sm">
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="https://hotelsforkids.net">Hotels for Kids</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="https://calculating.world">Calculating World</a></p>
            </div>
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <div class="sm:flex sm:justify-between sm:items-center">
            <div class="flex items-center gap-x-3">
                <span class="hidden sm:block text-sm text-gray-500 sm:text-center dark:text-gray-400">© <!-- -->2024<!-- -->.<!-- --> <a class="hover:underline" href="/">ColorBliss</a> <!-- -->is a product of Marginalia Ventures LLC. All rights reserved.</span>
            </div>
            <div class="flex justify-between items-center">
                <div class="mt-3 sm:hidden"><a class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 via-teal-500 via-emerald-500 to-pink-500 inline-flex items-center gap-x-2 text-xl font-extrabold dark:text-white" href="/"><img class="w-10 h-auto " src="/favicon/apple-touch-icon.png" alt="ColorBliss"><span class="block mr-10">ColorBliss.art</span></a>
                    <p class="mt-1 text-xs sm:text-sm text-gray-600 dark:text-gray-400"> <!-- -->© <!-- -->2024<!-- -->.<!-- --> <a class="hover:underline" href="/">ColorBliss</a> <!-- -->is a product of Marginalia Ventures LLC. All rights reserved.</p>
                </div>
                <div class="space-x-4 flex">
                    <a class="text-gray-500 hover:text-gray-900 dark:hover:text-white" href="https://www.facebook.com/profile.php?id=61551855449896">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a class="text-gray-500 hover:text-gray-900 dark:hover:text-white" href="https://www.instagram.com/colorbliss.art/">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a class="text-gray-500 hover:text-gray-900 dark:hover:text-white" href="https://twitter.com/_colorblissart">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                    <a class="text-gray-500 hover:text-gray-900 dark:hover:text-white" href="https://www.pinterest.com/getcolorbliss/">
                        <svg class="w-5 h-5" fill="currentColor" version="1.1" viewBox="0 0 512 512" width="100%" xmlns="http://www.w3.org/2000/svg">
                            <path d="M255.998,0.001c-141.384,0 -255.998,114.617 -255.998,255.998c0,108.456 67.475,201.171 162.707,238.471c-2.24,-20.255 -4.261,-51.405 0.889,-73.518c4.65,-19.978 30.018,-127.248 30.018,-127.248c0,0 -7.659,-15.334 -7.659,-38.008c0,-35.596 20.632,-62.171 46.323,-62.171c21.839,0 32.391,16.399 32.391,36.061c0,21.966 -13.984,54.803 -21.203,85.235c-6.03,25.482 12.779,46.261 37.909,46.261c45.503,0 80.477,-47.976 80.477,-117.229c0,-61.293 -44.045,-104.149 -106.932,-104.149c-72.841,0 -115.597,54.634 -115.597,111.095c0,22.004 8.475,45.596 19.052,58.421c2.09,2.535 2.398,4.758 1.776,7.343c-1.945,8.087 -6.262,25.474 -7.111,29.032c-1.117,4.686 -3.711,5.681 -8.561,3.424c-31.974,-14.884 -51.963,-61.627 -51.963,-99.174c0,-80.755 58.672,-154.915 169.148,-154.915c88.806,0 157.821,63.279 157.821,147.85c0,88.229 -55.629,159.232 -132.842,159.232c-25.94,0 -50.328,-13.476 -58.674,-29.394c0,0 -12.838,48.878 -15.95,60.856c-5.782,22.237 -21.382,50.109 -31.818,67.11c23.955,7.417 49.409,11.416 75.797,11.416c141.389,0 256.003,-114.612 256.003,-256.001c0,-141.381 -114.614,-255.998 -256.003,-255.998Z" fill-rule="nonzero"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>