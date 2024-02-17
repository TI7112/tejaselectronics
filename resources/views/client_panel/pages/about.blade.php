@extends('client_panel.component.layout')

@section('title' , 'Home')

@section('content')

<div class="md:px-20">
    <div class="py-5">
        <p class="text-center text-3xl font-semibold font-mono tracking-loose py-5">About US</p>
        <div class="flex flex-col-reverse md:flex-row px-4 justify-center gap-10 items-center">
            <div class="md:w-3/4 pt-2">
                <p class="font-mono">TEJAS is India’s one of the largest indigenous manufacturer of consumer products, as we specialize in the development of affordable Consumer Durable Electronic products, Electric Vehicles (E.V.) and Solar Power products. Our Team’s from multiple departments work together to support all our consumers/clients during the process of production, assembling, testing, dispatch, delivery and service, etc. Also parallel to the same we work upon developing new products after a deep analysis with the help of our technical and research development team’s. Our policies and vision are based on three principles of Integrity, Innovation, and Dedication. Considering the same we work towards the goal of providing people with better and sustainable standard of living. In order to deliver that, we develop a relation of trust as we are available for them 24*7, to deliver what we promise. Our company has an aim to make a positive difference in the society with the help of our products and services that can increase the productivity of people.</p>
            </div>
            <div class="md:w-2/4">
                <img class="rounded-xl " src="{{asset('public/static/about-us.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="py-5">
        <p class="text-center text-3xl font-semibold font-mono tracking-loose py-5">Our Mission</p>
        <div class="flex flex-col md:flex-row justify-center gap-10 items-center px-4">
            <div class="md:w-2/4">
                <img class="rounded-xl" src="{{asset('public/static/our-mission.jpg')}}" alt="">
            </div>
            <div class="md:w-3/4 md:pt-1">
                <p class="font-mono">Our companies mission and vision is to initiate a revolution in the field of technology with reference to our products. We want to offer people with our vast range of Electric Vehicles as we will help to shift to the model of sustainable mobility. We want to contribute to a future in which everyone has access to a environment friendly transportation resulting in a cleaner and greener planet. We want to convert our customer and clients home’s into a sustainable abode conserving environment along with relations. Our commitment to excellence is based on the fact that we are committed towards the needs of our customers and we are in a continues process of learning for the same. We follow a strict process of multiple quality check’s and certification’s, in order to maintain the longitivity of our product’s. We are a reliable brand as we have a state of the art machinery and team with expertise in order to deliver a dependable product’s to our customers.</p>
            </div>
        </div>
    </div>
    <div class="py-5 pb-10"> 
        <p class="text-center text-3xl font-semibold font-mono tracking-loose py-5">Our Team</p>
        <div class="flex flex-col-reverse md:flex-row justify-center gap-10 items-center px-4">
            <div class="md:w-3/4">
                <p class="font-mono">We have a team of highly trained professionals who share the same vision and enthusiasm with us. Our team examines numerous aspects from the scratch when the product is in the stage of inception and till the time it is delivered to the client/customer. Our team's mission, roles , responsibilities, communication, tactics, cooperation, decision-making, performance evaluation, and goal setting is done in a strategic manner in order to get the complete output from them . A well-defined objective provides the team with clarity and gives them a purpose. It defines the team's key goals and steer’s its members forward toward’s a common goal. Everyone understands their role in achieving success by clearly outlining the team’s collective goal and by bringing together a diverse team of people with complementary skills enables a diverse variety of perspectives, also it encourages innovation. By Understanding individual abilities and personalities we promote teamwork, which leads to a positive team atmosphere. We are a cohesive team sharing common values, trust and a sense of belongingness, as it is a guiding force for all of us.</p>
            </div>
            <div class="md:w-2/4">
                <img class="rounded-xl" src="{{asset('public/static/our-team.jpg')}}" alt="">
                <p class="text-center font-bold font-mono tracking-loose py-2">"Individual dedication in a team effort is what makes a company, a community, a Nation or a civilization work."</p>
            </div>
        </div>
    </div>
</div>
<div class="bg-slate-950 text-white">
    <p class="text-center text-3xl text-center font-semibold font-mono tracking-loose pt-6">Contact Us</p>
    <p class="text-center font-bold text-center font-mono  text-xs  md:text-basetracking-loose pb-8">If you have any question please reach us.</p>
    <div class="flex flex-col md:flex-row px-4 justify-center text-white gap-10 pb-10">
        <div class="flex flex-col justify-center rounded bg-slate-900 text-center px-16 py-4">
            <p class="text-xl font-semibold">Our Address</p>
            <p class="text-sm">TC-34 V/2, 4th floor, Cyber tower</p>
            <p class="text-sm">Vibhuti Khand, Gomti Nagar, Lucknow</p>
        </div>
        <div class="flex flex-col justify-center rounded bg-slate-900 text-center px-16 py-4">
            <p class="text-xl font-semibold">Email Us</p>
            <a href="mailto:sales@kamakhyabusinessgroup.com" class="text-sm">sales@kamakhyabusinessgroup.com</a>
        </div>
        <div class="flex flex-col justify-center rounded bg-slate-900 text-center px-16 py-4">
            <p class="text-xl font-semibold">Call Us</p>
            <a href="tel:+917311154913" class="text-sm">+91 7311 1549 13</a>
        </div>

    </div>
</div>
@endsection