@extends('layout.master')

@section('content')
<section class="top-container">
    <div class="showcase">
        
        <h1>PROJECTS</h1>

    </div>
    
</section>   

<section class="projects ">
    <div class="top_section card">
        <h1>Projects</h1>
        <p>The Wings of a dove Community Centre (WDCC) was established in 2001 AS community day care in Dandora. 
            The day care served the vulnerable inhabitants of Dandora Gitaramarigo slums who were working in the dumpsite.

            The main focus of Wings of a Dove Centre is to provide care for destitute children, street children, abandoned children and orphans as a result of HIV/AIDS. The children’s home provides
            care to 61 children. The services at the home include; medical care, education, life skill, day care and vocational skills.
            
            The wings of a dove Community Centre is a shining light, a haven to the vulnerable children drawn from  Ruai, Dandora, Kayole, Mukuru  korogocho  and Soweto slums The wings of a dove Community Centre is situated in  Njiru sub county of Nairobi, in Ruai</p>
    </div>
    <div class="bottom_section_a card">
        <p>The main projects at the children’s home are;</p>

            <p>Adult education literacy improvements</p> 
            <p>Life skills training to the youth out of school</p>
            <p>Dairy goat keeping</p>
            <p>Poultry keeping</p>
            <p>Bead work and mat making</p>
            <p>Community library</p>
            <p>Mentorship programs</p>
            <p>Sports training and recreational activities</p>
            <p>Modern home construction fundraising ongoing</p>
        <img src="{{URL::asset('images/image10.jpg')}}" alt="">


    </div>
    <div class="bottom_section_b card">
        <img src="{{URL::asset('images/image11.jpg')}}" alt="">
    </div>

</section>


    
@endsection