@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->

<div id="mainContent">
  <h1>Remax 1st Class Realty Agents</h1>
  <hr/>
  <ul class="small-block-grid-3 ulagents">
    @foreach($allAgents as $agent)
    <li  class="liAgents"><a class="th radius" data-reveal-id="{{$agent['id']}}" href="#"><img src="{{url('comp/img/agents/'.$agent['id'].'.jpg')}}" alt="RE/MAX FIRST CLASS agent profile"><a/><br/>
      <a class="agentLink" data-reveal-id="{{$agent['id']}}" href="#">
        {{$agent['firstname']}}  {{$agent['lastname']}}
      </a>
    </li> 
    @endforeach

  </ul>


</div>
@stop



</div>
@stop

@section('agent_thumb')
@foreach($allAgents as $agent)

<div id="{{$agent['id']}}" class="reveal-modal small adminAuth2 createAccount panel">
 {{Form::open(array('url' => '#'))}}
 <a class="close-reveal-modal">&#215;</a>
 <div class="row">
  <div class="large-12 columns profileContent">
    <div class="navPanel">
      <nav class="top-bar min">
        <div class="large-2 columns">

          <a class="logoS" href="{{URL::route('home')}}" title="Home Page">
           <img src="{{url('comp/img/REMAX1LogoS.png')}}" alt="RE/MAX FIRST CLASS Logo">
         </a> 
       </div>

       <div class="large-10 columns"> <ul class="title-area right">
        <!-- Title Area -->
        <li class="name">
          <h1>
            {{link_to_route('home', 'REMAX FIRST CLASS');}}
          </h1>
        </li>
      </ul>
    </div>
  </nav>
</div>



<div class="row">
 <div class="large-4 columns">
  <div class="row">
   <div class="large-12 columns left">
    <br/>
    <ul class="ulAgentName">
     <h3 class="subheader agentName">{{$agent['firstname']}} {{$agent['lastname']}}</h3>
     <a class="label has-tip-left specialist" title="Accredited Buyers Representative">ABR</a> 
     <a class="label has-tip-left specialist" title="Certified Residential Specialist">CRS</a>
   </ul>
 </div>                           
</div>

<div class="row">
 <div class="large-12 columns">
   <div class="th agentPic"><img src="{{url('comp/img/agentsL/'. $agent['id'].'.jpg')}}" alt="{{$agent['firstname']}} {{$agent['lastname']}}, RE/MAX FIRST CLASS Agent">
   </div>
 </div>
</div>  

<div class="row"> 
 <div class="large-12 columns agentPropSale"> 
   

 </div>
</div> 

<div class="row"> 
  <div class="large-12 columns agentPropRent">
    
  </div> 

</div>
</div>

<div class="large-8 columns left">
  <div class="panel info">
   <br/>
   <ul class="vcard innerInfo">
     <h5>Associate:</h5>
     <li class="subheader">Year Joined: {{$agent['yearjoined']}}</li>
     <li class="subheader">Year Licensed: {{$agent['yearlicenced']}}</li>
     <hr/>
     <h6>Contact Information:</h6>
     <li class="subheader">Main: (847) 674-9797</li>
     <li class="subheader">Fax: (847) 674-0411</li>
     <li class="subheader">Direct:  {{$agent['directphone']}} </li>
     <li class="subheader">Languages: {{$agent['languages']}} </li>
   </ul>
 </div>
</div>

</div>



<div class="row">
  <div class="large-12 columns agentInfoContent">
    <dl>                              
      <dt><h5>Specialties</h5></dt>
      <hr/>
      <dd class="specialties"><p>{{$agent['specialties']}}</p>
      </dd>  
      <dt><h5>Service Area Information</h5></dt>
      <hr/>
      <dd class="specialties">
        <h6>Office Area:</h6>
        <p>Skokie IL, Chicago IL, Glenview IL, Morton Grove IL, Evanston IL, Wilmette IL, Niles IL, Lincolnwood IL</p>                            
        <h6>Agent Area:</h6>
        <p>{{$agent['agentarea']}}</p>  
      </dd>
    </div>
  </div>

</div>
</div>
</div>
@endforeach
@stop