@extends('layout.master')

@section('content')

<section class="top-container">
    <div class="showcase">
        
        <h1>Mission</h1>

    </div>
    
</section>   

<section class="background">
    <div class="background__details">
        <h2>Mission</h2>
        <p>The primary goal of the project is to restore hope and provision of basic needs to orphans and vulnerable children in  care and of destitute, orphaned and abandoned children.

            The objectives are to rehabilitate the children with interpersonal development skills through education, medical care, building of their self-esteem and social living skills. We equip children with psychosomatic skills that will enable them live responsibly in the community. We provide a nutritional diet to all children to help eradicate malnutrition and encourage healthy body and mind growth. We also provide a child friendly living atmosphere for the children.
            Furthermore we initiate income-generating activities for sustain the Home and we empower local families with small business skills so that they can improve their income in readiness for the reintegration of the children back into the community.
        </p>
        {{-- <a href="" class= "btn">READ MORE</a> --}}
    </div>
    <div class ="background__details__image">
        <img src="{{URL::asset('images/image8.jpg')}}" alt="">
    </div>
</section>

<section class="v_p_c">
    <div class="vision">
        <h1>Vision</h1>
        <p>Our vision is to have a society where vulnerable 
            children are enjoying their basic 
            rights and living a dignified life in their social spheres.
        </p>
        <img src="{{URL::asset('images/image9.jpg')}}" alt="">
    </div>
    <div class="purpose">
        <h1>Purpose</h1>
        <p>Wings of a Dove Community Centre exists to provide a holistic development to the orphaned and vulnerable children (OVC) and reintegrating them back to the community after 
            they have successfully gone through the rehabilitation process.
        </p>
    </div>
    <div class="core_values">
        <h1>Core Values</h1>
        <p>We have organizational CORE VALUES that guide our every action and moderates our engagement with stakeholders and community. The core values are as follows;
            <p>i.) Commitment: We value our services to the needy children, and pledge our support to the like-minded partners. </p>
            <p> ii.) Partnership: we share responsibilities with our stakeholders of kind. </p>
            <p> iii.) Responsiveness: we are responsive to charity calls anytime. </p>
            <p> iv.) Caring: we care for and support vulnerable children at our centers .</p>
            <p> v.) Transparency and Accountability: we practice accountability to both beneficiaries and funding stakeholders. </p>
            <p> vi.) Respect for People: we respect the rights of every child individually </p>
            
            </p>

    </div>
</section>

@endsection