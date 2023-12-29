@extends('client_panel.component.layout')

@section('title' , 'Home')

@section('content')

<div class="min-h-96 flex flex-col justify-center bg-slate-200">
    <p class="text-center text-3xl text-center font-semibold font-mono tracking-loose pt-6">Contact Us</p>
    <p class="text-center text-xs md:text-base font-bold text-center font-mono tracking-loose pb-8">If you have any question please reach us.</p>
    <div class="flex flex-col md:flex-row justify-center gap-10 pb-10 px-4">
        <div class="flex flex-col justify-center rounded bg-white text-center px-16 py-4">
            <p class="text-xl font-semibold">Our Address</p>
            <p class="text-sm">TC-34 V/2, 4th floor, Cyber tower</p>
            <p class="text-sm">Vibhuti Khand, Gomti Nagar, Lucknow</p>
        </div>
        <div class="flex flex-col justify-center rounded bg-white text-center px-16 py-4">
            <p class="text-xl font-semibold">Email Us</p>
            <a href="mailto:sales@kamakhyabusinessgroup.com" class="text-sm">sales@kamakhyabusinessgroup.com</a>
        </div>
        <div class="flex flex-col justify-center rounded bg-white text-center px-16 py-4">
            <p class="text-xl font-semibold">Call Us</p>
            <a href="tel:+917311154913" class="text-sm">+91 7311 1549 13</a>
        </div>

    </div>
</div>

@endsection