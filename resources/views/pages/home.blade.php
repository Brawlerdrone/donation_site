@extends('layout.master')

@section('content')
{{-- TOP CONTAINER --}}

<section class="top-container">
    <div class="showcase">
        <h1>HELPING THE ORPHANS AND THE VULNERABLE</h1>
        <a href="" class="imgbtn">know more 
        <i class="fas fa-arrow-right"></i></a>

    </div>
    
    
</section>

<section class="background">
    <div class="background__details">
        <h2>BACKGROUND</h2>
        <p>Wings of a Dove Community Centre is a Charitable Children Institution (CCI) registered by the Government under the Ministry of Labour and Social Services and also as a Community Based Organization (CBO). The institution is home to 61 orphaned and vulnerable children in our Ruai home of Hope. The organization assists vulnerable children and families through integrated development Programs. We are located off Kangundo Road, 
            Opposite Ruai Health Clinic, Njiru Sub County, Nairobi.
        </p>
        <a href="" class= "btn">READ MORE</a>
    </div>
    <div class ="background__details__image">
        <img src="{{URL::asset('images/image8.jpg')}}" alt="">
    </div>
</section>

<section class="stat__section">
    <div class = "care">
        <h2>We always care for our children</h2>
        <p>Wings of a Dove Centre has facilitated the rehabilitation of vulnerable street children, neglected and abused children, by building a community around them and encouraging close links among the vulnerable children and also, between the outside stakeholder communities. We embrace participatory approach in carrying out our activities as envisioned in the organizational purpose to carry out multifaceted project activities in terms 
            of child rehabilitation and community development</p>
    </div>
    <div class="personell__section children">
        <p class="number">61</p>
        <p>children in our care</p>
    </div>
    <div class="personell__section Volunteers">
        <p class="number">15</p>
        <p>Volunteers</p>

    </div>
    <div class="personell__section years_of_experiencnce">
        <p class="number">10</p>
        <p>years of experience</p>
    </div>
    <div class="personell__section children_intergrated">
        <p class="number">48</p>
        <p>children reintergrated</p>
    </div>
</section>



@endsection