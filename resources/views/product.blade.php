@extends('layout.main')
@section('content')
<!-- cards -->
<div class="flex-none w-full max-w-full px-3 mt-6">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6 class="mb-1">Produk</h6>
                <p class="leading-normal text-sm">Architects design houses</p>
              </div>
              <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                  <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                    <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                      <div class="relative">
                        <a class="block shadow-xl rounded-2xl">
                          <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                        </a>
                      </div>
                      <div class="flex-auto px-1 pt-6">
                        <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Produk #2</p>
                        <a href="javascript:;">
                          <h5>Modern</h5>
                        </a>
                        <p class="mb-6 leading-normal text-sm">As Uber works through a huge amount of internal management turmoil.</p>
                        <div class="flex items-center justify-between">
                          <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">View Produk</button>
                          <div class="mt-2">
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img class="w-full rounded-circle" alt="Image placeholder" src="../assets/img/team-1.jpg" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                              Elena Morison
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img class="w-full rounded-circle" alt="Image placeholder" src="../assets/img/team-2.jpg" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                              Ryan Milly
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img class="w-full rounded-circle" alt="Image placeholder" src="../assets/img/team-3.jpg" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                              Nick Daniel
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img class="w-full rounded-circle" alt="Image placeholder" src="../assets/img/team-4.jpg" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                              Peterson
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                    <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                      <div class="relative">
                        <a class="block shadow-xl rounded-2xl">
                          <img src="../assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-xl" />
                        </a>
                      </div>
                      <div class="flex-auto px-1 pt-6">
                        <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Produk #1</p>
                        <a href="javascript:;">
                          <h5>Scandinavian</h5>
                        </a>
                        <p class="mb-6 leading-normal text-sm">Music is something that every person has his or her own specific opinion about.</p>
                        <div class="flex items-center justify-between">
                          <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">View Produk</button>
                          <div class="mt-2">
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img class="w-full rounded-circle" alt="Image placeholder" src="../assets/img/team-3.jpg" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                              Nick Daniel
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img class="w-full rounded-circle" alt="Image placeholder" src="../assets/img/team-4.jpg" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                              Peterson
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img class="w-full rounded-circle" alt="Image placeholder" src="../assets/img/team-1.jpg" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                              Elena Morison
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img class="w-full rounded-circle" alt="Image placeholder" src="../assets/img/team-2.jpg" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                              Ryan Milly
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                    <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                      <div class="relative">
                        <a class="block shadow-xl rounded-2xl">
                          <img src="../assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                        </a>
                      </div>
                      <div class="flex-auto px-1 pt-6">
                        <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Produk #3</p>
                        <a href="javascript:;">
                          <h5>Minimalist</h5>
                        </a>
                        <p class="mb-6 leading-normal text-sm">Different people have different taste, and various types of music.</p>
                        <div class="flex items-center justify-between">
                          <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">View Produk</button>
                          <div class="mt-2">
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img class="w-full rounded-circle" alt="Image placeholder" src="../assets/img/team-4.jpg" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                              Peterson
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img class="w-full rounded-circle" alt="Image placeholder" src="../assets/img/team-3.jpg" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                              Nick Daniel
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img class="w-full rounded-circle" alt="Image placeholder" src="../assets/img/team-2.jpg" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                              Ryan Milly
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img class="w-full rounded-circle" alt="Image placeholder" src="../assets/img/team-1.jpg" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                              Elena Morison
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                    <div class="relative flex flex-col h-full min-w-0 break-words bg-transparent border border-solid shadow-none rounded-2xl border-slate-100 bg-clip-border">
                      <div class="flex flex-col justify-center flex-auto p-6 text-center">
                        <a href="javascript:;">
                          <i class="mb-4 fa fa-plus text-slate-400"></i>
                          <h5 class="text-slate-400">New Produk</h5>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

  <footer class="pt-4">
    <div class="w-full px-6 mx-auto">
      <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
          <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
            ©
            <script>
              document.write(new Date().getFullYear() + ",");
            </script>
            made with <i class="fa fa-heart"></i> by
            <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
            for a better web.
          </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
          <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div>
<!-- end cards -->
@endsection
