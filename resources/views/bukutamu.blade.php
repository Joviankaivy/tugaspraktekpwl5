@extends('layouts.main')

@section('content')

<h1 class="text-red-700 text-3xl text-enter"> Buku Tamu</h1>

<div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
    <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
            <div class="flex flex-wrap mt-0 -mx-3">
                <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                    <h6>Daftar Tamu</h6>
                </div>
                <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                    <div class="relative pr-6 lg:float-right">
                        <a dropdown-trigger class="cursor-pointer" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-slate-400"></i>
                        </a>
                        <p class="hidden transform-dropdown-show"></p>

                        <ul dropdown-menu class="z-100 text-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                            <li class="relative">
                                <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Action</a>
                            </li>
                            <li class="relative">
                                <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Another action</a>
                            </li>
                            <li class="relative">
                                <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-auto p-6 px-0 pb-2">
            <div class="overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                        <tr>
                            <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Hari</th>
                            <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Tamu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-0 text-sm leading-normal">SENIN</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="team1" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Ryan Tompson
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-2.jpg" class="w-full rounded-full" alt="team2" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Romina Hadid
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-3.jpg" class="w-full rounded-full" alt="team3" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Alexander Smith
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="team4" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Jessica Doe
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-0 text-sm leading-normal">SELASA</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-2.jpg" class="w-full rounded-full" alt="team5" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Romina Hadid
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="team6" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Jessica Doe
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-0 text-sm leading-normal">RABU</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-3.jpg" class="w-full rounded-full" alt="team8" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Romina Hadid
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="team9" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Jessica Doe
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-0 text-sm leading-normal">KAMIS</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="user1" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Ryan Tompson
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-3.jpg" class="w-full rounded-full" alt="user2" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Romina Hadid
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="user3" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Alexander Smith
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="user4" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Jessica Doe
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-0 text-sm leading-normal">JUMAT</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="user5" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Ryan Tompson
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-0 text-sm leading-normal">SABTU</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="user6" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Ryan Tompson
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="user7" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Jessica Doe
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-0 text-sm leading-normal">MINGGU</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-3.jpg" class="w-full rounded-full" alt="team8" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Romina Hadid
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                        <img src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="team9" />
                                    </a>
                                    <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                        Jessica Doe
                                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection