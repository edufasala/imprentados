@extends('layouts.app')
@section('head')
<title>Mi Perfil - Imprenta</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page">Mi Perfil</li>
@endsection

@section('content')
<!-- BEGIN: Profile Info -->
<div class="intro-y box px-5 py-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <img alt="Midone - HTML Admin Template" class="rounded-full"
                    src="{{ asset('build/assets/images/' . $fakers[0]['photos'][0]) }}">
                <div
                    class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-primary rounded-full p-2">
                    <i class="w-4 h-4 text-white" data-lucide="camera"></i>
                </div>
            </div>
            <div class="ml-5">
                <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ Auth::user()->name }}</div>
                <div class="text-slate-500">
                    Rol:
                    @foreach (Auth::user()->roles as $item)
                    {{ $item->name }}
                    @endforeach
                </div>
            </div>
        </div>
        <div
            class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-3">Detalles de Contacto</div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> 27-28033514-8
                </div>
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i data-lucide="mail" class="w-4 h-4 mr-2"></i> {{ Auth::user()->email }}
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
