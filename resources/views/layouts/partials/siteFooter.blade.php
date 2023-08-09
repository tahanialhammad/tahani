    {{-- Footer --}}
    <footer class="bg-slate-900 mt-8">
        <div class="container flex flex-col md:flex-row mx-auto px-5 py-10 text-white justify-between space-y-8">
  
            <div class="flex flex-col items-center justify-between space-y-12 md:justify-start md:space-y-2 w-1/3">
                <div class="flex">
                    <img class="h-10 me-4" src="{{ Vite::asset('resources/images/svglogo.svg') }}">
                    <h1 class="font-bold">TAHANI</h1>
                </div>

                <div class="flex space-x-4">
                    {{-- https://fontawesomeicons.com/svg/icons --}}
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16" id="IconChangeColor">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                                id="mainIconPathAttribute" fill="#ffffff"></path>
                        </svg>
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-linkedin" viewBox="0 0 16 16" id="IconChangeColor">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"
                                id="mainIconPathAttribute" fill="#ffffff"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-around space-x-32">
                <div class="flex flex-col space-y-2">
                    <a href="" class="hover:text-slate-300">Site home</a>
                    <a href="" class="hover:text-slate-300">About</a>
                    <a href="" class="hover:text-slate-300"> Contact</a>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="" class="hover:text-slate-300">Dashboard</a>
                    <a href="" class="hover:text-slate-300">Register</a>
                    <a href="" class="hover:text-slate-300"> Privacy</a>
                </div>
            </div>
            <div class="flex flex-col justify-between">
                <form action="">
                    <input type="text" placeholder="Subscribe to Newsletter" class="flex-1 py-2 px-6 rounded-full">
                    <button type="submit"
                        class="py-2 px-6 rounded-full self-center md:self-start bg-red-500 text-white hover:bg-slate-500">
                        Send
                    </button>
                </form>
                <div class="hidden md:block">
                    <p>Copyright &copy; 2023 tahanina.nl</p>
                </div>
            </div>
        </div>
    </footer>