<?php 
	require_once("header/header.php");


$link= 'https://matrix.djiant.com/api/markers.php?network=4';

	$url = curl_init();
curl_setopt($url, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
curl_setopt($url, CURLOPT_URL, $link);
$result = curl_exec($url);
curl_close($url);

$url= $_SERVER['SERVER_NAME'];

if ($url =='djiant.com' ) {
 echo'      <script type="text/javascript">
    $(window).on("load",function(){
        $("#Djiant-racine-popup").modal("show");
    });
</script>';
}

 ?>
<body>
  
        <div class="sideMenu" >
        <ul class="mr-1">
          <li  class="mt-2 ml-2 " id="popupInfo-li" > <img  id="popupInfo-btn" width="22px" src="assets/new-icons/Acceuil-Reseau.svg" alt="" ></li>
          <li  class="mt-2 ml-2 "> <img   data-toggle="popover" data-placement="bottom" data-content="Voir le profil complet de Meryem ABDELLI dans D-Contacts" width="22px" id="btnFullscreen" src="assets/new-icons/Full-Screen.svg"  alt="" ></li>
          <li  class="mt-2 ml-2"> <img id="zoomin" width="22px" src="assets/new-icons/Zoomplus.svg" alt="" style="filter: invert(1);" ></li>
          <li  class="mt-2 ml-2"><img id="zoomout" width="22px" src="assets/new-icons/ZoomMinus.svg" alt="" style="filter: invert(1);" ></li>
          <!-- here-->
          <li   class="mt-2 ml-2 selected-menu" > <a id="myBtn"><img  width="22px" src="assets/new-icons/SearchTree.svg" alt="" > 
          </li>
          <li  class="mt-2 ml-2 "  <?php if ($url =='djiant.com' ) {echo'btn-selectedd';} ?> data-target="#Djiant-racine-popup" data-toggle=""><img id="popupRacine-btn"   width="22px" src="assets/new-icons/MenuDomains.svg" alt=""  class=" disable"></li>
          <li   class="mt-2 ml-2 " data-target="#Djiant-addserver-popup" data-toggle=""><img width="22px" src="assets/new-icons/IconServerPlus.svg" alt="" class=" disable"></li>
          <li  class="mt-2 ml-2 " data-target="#Djiant-about-popup" data-toggle=""><img  width="22px" src="assets/new-icons/AboutDjiant.svg" alt="" class=" disable"></li>
          

        </ul>

    </div>
            <div class="rightMenu" >
        <ul class="mr-1">
        	        

          
        </ul>

    </div>
    <div   class="popupInfo ">
      <div  class="body"> 
        <div class="thumbnail">
           
        </div>

    </div>
  </div> 
  <div id="myModal"  style="margin-left:40px;height:1000px; width:500px; border: 1px solid transparent;">

<!-- Modal -->

			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div  style=" font-family:calibri;font-weight:700;font-size:17px;border-bottom: 1px solid #dddddd4d;">
						<img style="margin-right: 6px;margin-left:15px;margin-bottom:20px;margin-top:15px;" src="assets/new-icons/SearchTree.svg" width="22px"> 
            Search and navigate in : Technoparks

          </div> 
          

       
<div class="tabbable-line " style=" padding-left:40px;">
							
								<ul class="nav nav-tabs " id="tabContent">
								
                <li style="display: none;" >
										<a id="tab_3" data-toggle="tab">
										<h4 style="margin:0px; font-weight: 400;">Home</h4> </a>
									</li>
									<li  class="tabss activve" onclick="blue_tabs(this)" style="margin-right:10px;">
										<a   class="tablinks" tab-toggle="tab" onclick="openCity(event, 'tab_1')">
										<h4 style="margin:0px;font-family:calibri  ! important; font-weight: 400;" >Naviguer</h4> </a>
									</li>
									
									<li class="tabss" onclick="blue_tabs(this)" >
										<a  class="tablinks" onclick="openCity(event, 'tab_2')">
									<h4 style="margin:0px; font-weight: 400;font-family:calibri !important;" > Rechercher</h4>	 </a>
									</li>
									
								</ul>
								
							
		
	</div>
		
	
<!-- END HEADER -->
<div class="clearfix ">
</div>


          
         

				</div>
        
        <div class="modal-body" style="	padding: 15px 15px 80px;">
        <div class="tab-content">
        <div id="tab_1" class="tabcontent"> 
      
        <div  style=" font-family:calibri light;" >
						<img style="margin-right: 6px;margin-bottom:10px;margin-top:10px;" src="icons/Icone 1.svg" width="22px"> 
            Technoparks
        </div>  
         
         <ul id="racine"  style="margin-left:20px;">	
							
              <li  style="padding:0px 0px 5px 0px;" >	
                <div class="row racine1" style="margin: 0px;padding: 0px;">
                <div class="col-md-9 racine racine-down " href="#demo1" data-toggle="collapse"  style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
                   <img src="icons/Icone 2.svg" style="height: 22px;margin-right:6px;">Europe (CEE)
                </div>
                <div class="col-md-1"style="margin: 0px 0px 0px 70px;padding: 0px;">
                  358
                </div>
                 </div>
            
            
              <ul style="margin-left: 25px;" id="demo1"  class="collapse">

                <li  style="padding:5px 0px 5px 0px;">

                <ul id="racine">						
        
        <li  style="padding:0px;" >
      <div class="row" style="margin: 0px;padding: 0px;">
        
        <div class="col-md-9 "style="margin: 0px 0px 0px 0px;padding: 0px;">
          <span class="racine "> <img src="icons/Icone 3.svg" style="height: 22px;margin-right:6px;">Allemagne
</span>	
        </div>
        <div class="col-md-1"style="margin: 0px 0px 0px 60px;padding: 0px;">
                  15
                </div>
       
     
      
      
         </li>
      
  
     </ul>
                  
                 </li>  
                  
                <li id="2 "  style="padding:5px 0px 5px 0px;">
                  
                <ul id="racine">						
        
                    <li  style="padding:0px;" >
                  <div class="row" style="margin: 0px;padding: 0px;">
                    
                    <div class="col-md-9 "style="margin: 0px 0px 0px 0px;padding: 0px;">
                      <span class="racine racine-down " href="#demo2" data-toggle="collapse"> <img src="icons/Icone 3.svg" style="height: 22px;margin-right:6px;">France</span>	
                    </div>

                    <div class="col-md-1"style="margin: 0px 0px 0px 60px;padding: 0px;">
                  12
                    </div>
                    <ul   id="demo2"   class=" collapse"> 
                    <li id="1"  class="domaine-list" style="padding:5px 0px 5px 0px;" onclick="dodajAktywne(this)">
	
  <div class="row" style="margin: 0px;padding: 0px;">
    <div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:280px;">
      <img class="" src="icons/Icone 5.svg" style=" width:22px; margin-right: 6px;" >Technopole Sophia Anpolis

    </div>
   
  </div>
  
  </li>

  

  <li id="1"  class="domaine-list "style="padding:5px 0px 5px 0px;" onclick="dodajAktywne(this)" >
	
 
	
  <div class="row" style="margin: 0px;padding: 0px;">
    <div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:280px;">
      <img class="" src="icons/Icone 5.svg" style=" width:22px; margin-right: 6px;" >Technopole Laval


    </div>
   
  </div>
  
  </li>

  <li id="1"  class="domaine-list"style="padding:5px 0px 5px 0px;" onclick="dodajAktywne(this)">
	
 
	
  <div class="row" style="margin: 0px;padding: 0px;">
    <div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:280px;">
      <img class="" src="icons/Icone 5.svg" style=" width:22px; margin-right: 6px;" >Atalante


    </div>
   
  </div>
  
  </li>

  <li id="1"  class="domaine-list"style="padding:5px 0px 5px 0px;" onclick="dodajAktywne(this)">
	
 
	
  <div class="row" style="margin: 0px;padding: 0px;">
    <div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:280px;">
      <img class="" src="icons/Icone 5.svg" style=" width:22px; margin-right: 6px;" >Eurallile 


    </div>
   
  </div>
  
  </li>

  <li id="1"  class="domaine-list"style="padding:5px 0px 5px 0px;" onclick="dodajAktywne(this)">
	
 
	
  <div class="row" style="margin: 0px;padding: 0px;">
    <div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:280px;">
      <img class="" src="icons/Icone 5.svg" style=" width:22px; margin-right: 6px;" >Paris - Saclay


    </div>
   
  </div>
  
  </li>



    
  


  

  

  
                    </ul>
</div>
                 
                  
                  
                     </li>
                  
              
                 </ul>
                 <li  style="padding:5px 0px 5px 0px;">

<ul id="racine">						

<li  style="padding:0px;" >
<div class="row" style="margin: 0px;padding: 0px;">

<div class="col-md-9 "style="margin: 0px 0px 0px 0px;padding: 0px;">
<span class="racine "> <img src= "icons/Icone 3.svg"style="height: 22px;margin-right:6px;">Espagne
</span>	
</div>
<div class="col-md-1"style="margin: 0px 0px 0px 60px;padding: 0px;">
  15
</div>




</li>


</ul>
  
 </li>  

 <li  style="padding:5px 0px 5px 0px;">

<ul id="racine">						

<li  style="padding:0px;" >
<div class="row" style="margin: 0px;padding: 0px;">

<div class="col-md-9 "style="margin: 0px 0px 0px 0px;padding: 0px;">
<span class="racine "> <img src="icons/Icone 3.svg" style="height: 22px;margin-right:6px;">Italie
</span>	
</div>
<div class="col-md-1"style="margin: 0px 0px 0px 60px;padding: 0px;">
  15
</div>




</li>


</ul>
  
 </li>  
                  
                    </li>
                                 
                  
                 
                  </ul>
                  </li>
            </ul>


                      
                  <ul id="racine"  style="margin-left:20px;">						
        
                    <li  style="padding:0px;" >
                  <div class="row" style="margin: 0px;padding: 0px;">
                    
                    <div class="col-md-9 "style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
                      <span class="racine "> <img src="icons/Icone 2.svg" style="height: 22px;margin-right:6px;">Afrique du Nord et Moyen-Orient 
</span>	
                        </div>
                    <div class="col-md-1"style="margin: 0px 0px 0px 61px;">
                      45
                    </div>
                 
                  
                  
                </li>
                  
              
            </ul>

          
          
        
          


        <ul id="racine"  style="margin-left:20px;">						
          
              
              <div class="row" style="margin: 0px;padding: 0px;">
                <li  style="padding:5px 0px 5px 0px;" >
                <div class="col-md-9"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
                  <span class="racine "> 	<img src="icons/Icone 2.svg" style="height: 22px;margin-right:6px;">Afrique
</span>	
                </div>									
                  <div class="col-md-1"style="margin: 0px 0px 0px 61px;">
                    67
                </div>
              
              </li>
              </div>						
              
          
        </ul>

        <ul id="racine"  style="margin-left:20px;">						
          
              
          <div class="row" style="margin: 0px;padding: 0px;">
            <li   >
            <div class="col-md-9"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
              <span class="racine "> 	<img src="icons/Icone 2.svg" style="height: 22px;margin-right:6px;">Amérique du Sud

</span>	
            </div>									
              <div class="col-md-1"style="margin: 0px 0px 0px 70px;padding: 0px;width:100px">
                122
            </div>
          
          </li>
          </div>						
          
      
    </ul>

    <ul id="racine"  style="margin-left:20px;">						
          
              
          <div class="row" style="margin: 0px;padding: 0px;">
            <li  style="padding:5px 0px 5px 0px;"  >
            <div class="col-md-9"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
              <span class="racine "> 	<img src="icons/Icone 2.svg" style="height: 22px;margin-right:6px;">Amérique du Nord

</span>	
            </div>									
              <div class="col-md-1"style="margin: 0px 0px 0px 70px;padding: 0px;width:100px">
                243
            </div>
          
          </li>
          </div>						
          
      
    </ul>

    <ul id="racine" style="margin-left:20px;" >						
          
              
          <div class="row" style="margin: 0px;padding: 0px;">
            <li  style="padding:0px 0px 5px 0px;" >
            <div class="col-md-9"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
              <span class="racine "> 	<img src="icons/Icone 2.svg"style="height: 22px;margin-right:6px;">Asie
</span>	
            </div>									
              <div class="col-md-1"style="margin: 0px 0px 0px 70px;padding: 0px;width:100px">
                336
            </div>
          
          </li>
          </div>						
          
      
    </ul>


    <ul id="racine" style="margin-left:20px;" >						
          
              
          <div class="row" style="margin: 0px;padding: 0px;">
            <li   >
            <div class="col-md-9"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
              <span class="racine "> 	<img src="icons/Icone 2.svg" style="height: 22px;margin-right:6px;">Oceanie
</span>	
            </div>									
              <div class="col-md-1"style="margin: 0px 0px 0px 74px;padding: 0px;width:100px">
                25
            </div>
          
          </li>
          </div>						
          
      
    </ul>
       
  
          
        
      </div>




        
        <div class="tabcontent" id="tab_2">
          <div class="row">
        <div class="col-md-6 localisation" style="margin-left:15px;" >
		<input class="search" type="search" placeholder="Your key words" id="search" onkeyup="myFunctionSearch()"><i class="fa fa-search" style="float: right;margin-top: 6px;color: #383838;" id="clickSearch"></i> 
       </div> 
        <div class="col-md-4 "  style="margin-top:3px;" >
        Résultat : 8 réponses
	      </div> 
          </div> 
          <h1 style="family-font:calibri !important;font-size:15px;padding-top:10px;">Communautés actives sur Djiant</h1>
					<ul class="domaine active" >
						<li id="1" style="padding:5px 0px 5px 0px;" class="domaine-list "onclick="dodajAktywne(this);whiteimg(this)" >				
							<div class="row" style="margin: 0px;padding: 0px; width: 800px;">
								<div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
                   <img class="white-img" src="icons/Icone 6.svg" style="height:22px;margin-right:6px;">Technopole Laval Mayenne <br> 
                  <div style="margin-left:30px;font-size:13px;color:gray;"> Laval - France </div>
                </div>
             
							
							</div>
						</li>				
						 <li id="2 " style="padding:5px 0px 5px 0px;" class="domaine-list " onclick="dodajAktywne(this)"> 
							<div class="row" style="margin: 0px;padding: 0px; width: 800px;">
								<div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
									<img class="" src="icons/Icone 6.svg" style="height:22px;margin-right: 6px;">Technopole de Chateau Gombert Marseille provence
                  <div style="margin-left:30px;font-size:13px;color:gray;"> Marseille - France </div>
								</div>
							
							</div>
            </li>
            <li id="2 " style="padding:5px 0px 5px 0px;" class="domaine-list " onclick="dodajAktywne(this)"> 
							<div class="row" style="margin: 0px;padding: 0px; width: 800px;">
								<div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
									<img class="" src="icons/Icone 6.svg" style="height:22px;margin-right: 6px;">Novation City
                  <div style=margin-left:30px;font-size:13px;color:gray;> Sousse - Tunisie </div>
								</div>
							
							</div>
            </li>
</ul> 
<h1 style="family-font:calibri;font-size:15px;">Communautés référencées</h1>
					<ul class="domaine active" >
						<li id="1-" style="padding:5px 0px 5px 0px;" class="domaine-list " onclick="dodajAktywne(this)" >				
							<div class="row" style="margin: 0px;padding: 0px; width: 800px;">
								<div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
									 <img class="" src="icons/Icone 7.svg" style="height: 22px;margin-right: 6px;">Le Gazala
                   <div style=margin-left:30px;font-size:13px;color:gray;> Tunis - Tunisie </div>
								</div>
							
							</div>
						</li>				
						 <li id="2 " style="padding:5px 0px 5px 0px;" class="domaine-list " onclick="dodajAktywne(this)"> 
							<div class="row" style="margin: 0px;padding: 0px; width: 800px;">
								<div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
									<img class="" src="icons/Icone 7.svg" style="height: 22px;margin-right: 6px;">Sofia Anpolis
                  <div style=margin-left:30px;font-size:13px;color:gray;> Sophia Antipolis - France </div>
								</div>
							
							</div>
            </li>
            <li id="2 " style="padding:5px 0px 5px 0px;" class="domaine-list " onclick="dodajAktywne(this)"> 
							<div class="row" style="margin: 0px;padding: 0px; width: 800px;">
								<div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
									<img class="" src="icons/Icone 7.svg" style="height: 22px;margin-right: 6px;">TVT - Toulon Var Technologies
                  <div style=margin-left:30px;font-size:13px;color:gray;> Toulon - France </div>

								</div>
							
							</div>
            </li>
            <li id="2 " style="padding:5px 0px 5px 0px;" class="domaine-list " onclick="dodajAktywne(this)" > 
							<div class="row" style="margin: 0px;padding: 0px; width: 800px;">
								<div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
									<img class="" src="icons/Icone 7.svg" style="height: 22px;margin-right: 6px;">Technoparc Maroc
                  <div style=margin-left:30px;font-size:13px;color:gray;> Casablanca - Maroc </div>
								</div>
							
							</div>
            </li>
            <li id="2 " style="padding:5px 0px 5px 0px;" class="domaine-list " onclick="dodajAktywne(this)" > 
							<div class="row" style="margin: 0px;padding: 0px; width: 800px;">
								<div class="col-md-8"style="margin: 0px 0px 0px 0px;padding: 0px;width:400px;">
									<img class="" src="icons/Icone 7.svg" style="height: 22px;margin-right: 6px;">Technopole Sidi Abdallah
                  <div style=margin-left:30px;font-size:13px;color:gray;> Alger - Algérie </div>
								</div>
							
							</div>
            </li>
</ul>
      </div> 


       
</div>
			
      
				</div>

			</div><!-- modal-content -->



</div>  
<style> 
/* Style the tab content */
#tab_2{
  display: none;

}  
.selected {
  color: #FFF!important;
    text-decoration: none;
    background-color: #008DD2;
    border-radius: 4px !important;
    /* border: 1px solid #fff; */
} 
.activee { 
  color: white !important;
  text-decoration: none;
  background-color: #008DD2;
  border-radius: 4px !important;
} 
.activve {
  border-bottom: 4px solid #008DD2;
  position: relative;
}
.white-img{ 

}

</style>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
} 


function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
  
}

function dodajAktywne(elem) {
    var a = document.getElementsByClassName('domaine-list')
    for (i = 0; i < a.length; i++) {
        a[i].classList.remove('activee')
    }
    elem.classList.add('activee');
   
  
   
    
    
} 





function blue_tabs(elem) {
    var a = document.getElementsByClassName('tabss')
    for (i = 0; i < a.length; i++) {
        a[i].classList.remove('activve')
    }
    elem.classList.add('activve');
} 







</script>
  
  
  
<div class="body" >
    <div id="map"></div>
</div>
<div id="Djiant-racine-popup" class="modal  "  >
              <div class="modal-header ">
                  <button type="button" id="popupClose" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <div class=" d-flex line1" style="margin-left: 20px;"><img src="assets/image/logo-djiant.svg" class="icon mr-2"><h4>Djiant  </h4></div>
              </div>
               <div class="modal-header ">
               	 <div class=" row d-flex line1" style="margin-left: 10px;">
               	 	 <div class="col-md-3 ">
			<div class=" note-header">Domaines</div>
               	 </div>
               	 <div class="col-md-9 ">
			<div class=" note-header">Réseaux</div>
               	 </div>
              
		</div>
              </div>
              <div class="modal-body">
              	<div class="row">
              		<div class="col-md-3" style="padding-left: 24px;padding-right: 0px;">
              			<ul id="racine">						
				  			  <li style="padding: 0px 0px;"><span class="racine racine-down"> Domaines</span>
				  			  	<ul class="domaine active">
				  			  		
				  			  						      				<li id="1 " class="domaine-list selected">
				      				 <img class="" src="assets/image/All.svg" style=" width:22px; margin-right: 6px;">  All networks </li>  
                       <li id="1 " class="domaine-list ">
                       <img class="" src="assets/image/Local.svg" style=" width:22px; margin-right: 6px;"> Local economies </li>  
				      				
				      							      				<li id="2 " class="domaine-list ">
				      				 <img src="assets/image/Digital.svg" style=" width:22px; margin-right: 6px;"> Digital </li>  
				      				
				      							      				<li id="3 " class="domaine-list">
				      				 <img class="" src="assets/image/Education.svg" style=" width:22px; margin-right: 6px;"> Education </li>  
				      				
				      							      				<li id="4 " class="domaine-list">
				      				 <img class="" src="assets/image/Entrepreneurship.svg" style=" width:22px; margin-right: 6px;"> Entrepreneurship </li>  
				      				
				      							      				<li id="13 " class="domaine-list">
				      				 <img class="" src="assets/image/Industry.svg" style=" width:22px; margin-right: 6px;"> Industry </li>  
				      				
				      			
   			   					</ul>
				  			  </li>
							</ul>
              		</div>
              		<div class="col-md-9" style="padding-left: 28px;">
              		 <div class="row">
                <div class=" col-md-4" >
                  <a href="https://technopark.djiant.com/" target="_blanck" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-Technoparks.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Technoparks </p >
                  </div>
                  </a>
                </div>
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-Chambworks.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Chamb.works </p >
                  </div>
                  </a>
                </div>
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-ITcommunities.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >IT Communities </p >
                  </div>
                  </a>
                </div>
                
              </div>
              <div class="row">
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-Biotech.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Biotechs </p >
                  </div>
                  </a>
                </div>
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-BusinessSchools.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Business Schools </p >
                  </div>
                  </a>
                </div>
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-Food.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Food </p >
                  </div>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-Industry.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Industry </p >
                  </div>
                  </a>
                </div>
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                  <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-ITHealth.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" > IT Health </p >
                  </div>
                  </a>
                </div>
                <div class=" col-md-4" >
                  <a href="javascript:;" class="Djiant-racine-thumbnail ">
                 <div class="caption  ">
                  <span class="icon ">
                    <img src="assets/image/Miniature-generique-Regional.png" alt="">
                  </span>
                    <p style="padding-top: 10px; font-size: 13px; padding-bottom: 0px; text-align: center;" >Regional </p >
                  </div>
                  </a>
                </div>
                
              </div>  
              		</div>
              		
              	</div>
   
              </div>
            </div>
<div id="DFiles-popup" style="left: 55%;" class="modal container fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
                <div class="modal-header container-full-width">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <div class=" d-flex line1" style="margin-left: 3px;"><img src="assets/new-icons/DFiles.svg" class="icon mr-2"><p class="title">D-Files  </p></div>
                </div>
                <div class="modal-body" style="padding-top: 1px; padding-right: 0px; ">
                  <div class="col-md-4 ">
                    <h3 style="font-size: 20px; margin-bottom: 20px; font-weight: 700;">OFFER IN YOUR SPECIALITY OR REGION A RELEVANCE AND QUALITY OF DATA THAT GENERALIST SEARCH ENGINES CANNOT PROVIDE.  </h3>
                    <p>
                      D - Files is a Djiant service that allows you to propose a powerful and relevant research tool on the actors and resources of your regional or sectoral community:
                    </p>
                    <ul style="list-style-type: disc; padding-left: 15px;" >
                      <li class="module-argument" >
                      Offer companies and professionals from your community - but also from other Djiant communities - to publish and promote their know-how and messages in D - Files: company profile, products, services, job offers, commercial successes, nominations...</li>
                      <li class="module-argument">
                      Enable millions of users concerned by your community to search and locate information with a new relevance: search by keywords, thematic and geographic filters…</li>
                      <li class="module-argument">
                        Bring back to you the traffic and revenues from the search for information related to your thematic or geographical area.    
                      </li>
                    </ul>
                    <br>
                    <p>
                     Available on: November 2020.
                    </p>
                    
                    <button disabled style="border-radius: 3px !important;font-size: 14px;  " type="button" class="btn btn-default" id="voir_maquette">See the mock-up</button>
                  </div>


                  <div class="col-md-8 " style="padding-right: 0px;">
                               <div class="slideshow-container">

                                      <div class="mySlides-DFiles fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Files-page-1.png" style="width: 100%; border-radius: 3px !important;"  alt="">
                                        <div class="text"></div>
                                      </div>

                                      <div class="mySlides-DFiles fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Files-page-2.png" style="width: 100%; border-radius: 3px !important;" alt="">
                                        <div class="text"></div>
                                      </div>

                                      <div class="mySlides-DFiles fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Files-page-3.png" style="width: 100%; border-radius: 3px !important;" alt="">
                                        <div class="text"></div>
                                      </div>

                                      <a class="prev" onclick="plusSlides_DFiles(-1)">&#10094;</a>
                                      <a class="next" onclick="plusSlides_DFiles(1)">&#10095;</a>

                            </div>
                                      

                                      <div style="text-align:left">
                                        <span class="dot-DFiles" onclick="currentSlide_DFiles(1)"></span> 
                                        <span class="dot-DFiles" onclick="currentSlide_DFiles(2)"></span> 
                                        <span class="dot-DFiles" onclick="currentSlide_DFiles(3)"></span> 
                                      </div>
                  </div>

                      
                </div>
                
              </div>
              <div id="DPages-popup" style="left: 55%;" class="modal container fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
                <div class="modal-header container-full-width">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <div class=" d-flex line1" style="margin-left: 3px;"><img src="assets/new-icons/DPages.svg" class="icon mr-2"><p class="title">D-Pages  </p></div>
                </div>
                <div class="modal-body" style="padding-top: 1px; padding-right: 0px; ">
                  <div class="col-md-4 ">
                    <h3 style="font-size: 20px; margin-bottom: 20px; font-weight: 700;">OFFER IN YOUR SPECIALITY OR REGION A RELEVANCE AND QUALITY OF DATA THAT GENERALIST SEARCH ENGINES CANNOT PROVIDE.  </h3>
                    <p>
                      D - Files is a Djiant service that allows you to propose a powerful and relevant research tool on the actors and resources of your regional or sectoral community:
                    </p>
                    <ul style="list-style-type: disc; padding-left: 15px;" >
                      <li class="module-argument" >
                      Offer companies and professionals from your community - but also from other Djiant communities - to publish and promote their know-how and messages in D - Files: company profile, products, services, job offers, commercial successes, nominations...</li>
                      <li class="module-argument">
                      Enable millions of users concerned by your community to search and locate information with a new relevance: search by keywords, thematic and geographic filters…</li>
                      <li class="module-argument">
                        Bring back to you the traffic and revenues from the search for information related to your thematic or geographical area.    
                      </li>
                    </ul>
                    <br>
                    <p>
                     Available on: November 2020.
                    </p>
                    
                    <button disabled style="border-radius: 3px !important;font-size: 14px;  " type="button" class="btn btn-default" id="voir_maquette">See the mock-up</button>
                  </div>


                  <div class="col-md-8 " style="padding-right: 0px;">
                               <div class="slideshow-container">

                                      <div class="mySlides-DPages fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Pages-page-1.png" style="width: 100%; border-radius: 3px !important;"  alt="">
                                        <div class="text"></div>
                                      </div>

                                      <div class="mySlides-DPages fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Pages-page-2.png" style="width: 100%; border-radius: 3px !important;" alt="">
                                        <div class="text"></div>
                                      </div>

                                      <div class="mySlides-DPages fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Pages-page-3.png" style="width: 100%; border-radius: 3px !important;" alt="">
                                        <div class="text"></div>
                                      </div>

                                      <a class="prev" onclick="plusSlides_DPages(-1)">&#10094;</a>
                                      <a class="next" onclick="plusSlides_DPages(1)">&#10095;</a>

                            </div>
                                      

                                      <div style="text-align:left">
                                        <span class="dot-DPages" onclick="currentSlide_DPages(1)"></span> 
                                        <span class="dot-DPages" onclick="currentSlide_DPages(2)"></span> 
                                        <span class="dot-DPages" onclick="currentSlide_DPages(3)"></span> 
                                      </div>
                  </div>

                      
                </div>
                
              </div>
                      <div id="DFigures-popup" style="left: 55%;" class="modal container fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
                <div class="modal-header container-full-width">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <div class=" d-flex line1" style="margin-left: 3px;"><img src="assets/new-icons/DFigures.svg" class="icon mr-2"><p class="title">D-Figures  </p></div>
                </div>
                <div class="modal-body" style="padding-top: 1px; padding-right: 0px; ">
                  <div class="col-md-4 ">
                    <h3 style="font-size: 20px; margin-bottom: 20px; font-weight: 700;">REALTIME AND HIGHLY TARGETED MARKET RESEARCH FOR YOUR COMMUNITY   </h3>
                    <p>
                      D - Figures is the first "Research Engine" on the market. It revolutionizes market research by offering real-time analysis simply by typing a keyword.
                    </p>
                    <ul style="list-style-type: disc; padding-left: 15px;" >
                      <li class="module-argument" >
                      Produce market studies related to your community (a region, sector of activity...) with a great precision and offer them in free or paid access according to your commercial policy.</li>
                      <li class="module-argument">
                      Propose real-time and continuous analysis with an unprecedented level of precision: company population, competition, job market, level of training, innovation intensity...</li>
                      <li class="module-argument">
                        Expand your attractiveness and your revenues by creating a vast collection of exclusive market studies.   
                      </li>
                    </ul>
                    <br>
                    <p>
                     Available on: November 2020.
                    </p>
                    
                    <button disabled style="border-radius: 3px !important;font-size: 14px;  " type="button" class="btn btn-default" id="voir_maquette">See the mock-up</button>
                  </div>


                  <div class="col-md-8 " style="padding-right: 0px;">
                               <div class="slideshow-container">

                                      <div class="mySlides-DFigures fade-slide">
                                        <div class="numbertext"></div>
                                        <img src="assets/image/modules/D-Figures.png" style="width: 100%; border-radius: 3px !important;"  alt="">
                                        <div class="text"></div>
                                      </div>

                                      

                                      

                                      <a class="prev" onclick="plusSlides_DFigures(-1)">&#10094;</a>
                                      <a class="next" onclick="plusSlides_DFigures(1)">&#10095;</a>

                            </div>
                                      

                                      <div style="text-align:left">
                                        <span class="dot-DFigures" onclick="currentSlide_DFigures(1)"></span> 
                                       
                                      </div>
                  </div>

                      
                </div>
                
              </div>
<div id="Djiant-addserver-popup" class="modal" >
              <div class="modal-header ">
                  <button type="button" id="popupClose" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <div class=" d-flex line1" style="margin-left: 20px;"><img src="assets/new-icons/IconServerPlus.svg" class="icon mr-2"><h4>Create a community </h4></div>
              </div>
               
              <div class="modal-body scrollable " style="padding-left:50px; padding-top: 20px; ">
              	<div class="row" style="margin-top: 20px;">
              		<div class="col-md-5 ">
              		<H4 style="font-size: 14px; color: #008DD2; margin-top: 0px;">COMMUNITY LEADERS</H4>
              		<h4 style="font-size: 20px; margin-top: 0px;">COME BACK TO THE FOREFRONT</h4>	
              		</div>
              	</div>
              	<div class="row" >
              		
              		<div class="col-md-6" >
              		<p class="create-communety" >CREATE YOUR COMMUNITY WITH DJIANT, NETWORK AND TAKE BACK THE LEAD ON THE WEB. TOGETHER.</p>
              		<p style=" color: #008DD2">Learn more</p>
              			
              		</div>
              	</div>
              	<div class="row" style="margin-top: 80px;">
              		<div class="col-md-5 ">
              	<h4 style="font-size: 20px;">	Create a professional community</h4>
              		</div>
              		
              	</div>
              	<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 " style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png" alt="">	
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png"   alt="">	
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png"   alt="">	
              		</div>
              	</div>
              	<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>	
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px;">BUSINESS ASSOCIATIONS</H4>
              		<p class="djiant-for">Loyalize and value members of your association from only 99€ per month.</p>
              		<p style=" color: #008DD2">Coming soon</p>
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>		
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px;">EDUCATION</H4>
              		<p class="djiant-for">Higher education institutions, enhance your ecosystem (Alumni, partners companies...) to recruit internationally.</p>
              		<p style=" color: #008DD2">Coming soon</p>
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>		
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px;">LOCAL COMMUNITIES</H4>
              		<p class="djiant-for">Chambers of commerce, development agencies, technopoles... Actors of Territorial Marketing, expand on the web together and come back to the forefront.</p>
              		<p style=" color: #008DD2">Learn more</p>
              		</div>
              	</div>
              	<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png" alt="">	
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png"   alt="">	
              		</div>
              	</div>
              	<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>	
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px; ">NEWSPAPERS</H4>
              		<p class="djiant-for">Specialized press and regional press book your Djiant Cluster and make sure to be unmissable in your field.</p>
              		<p style=" color: #008DD2">Coming soon</p>
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>		
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px;">BRANDS</H4>
              		<p class="djiant-for">Make your ecosystem the first source of web traﬁc and marketing analytics for your products, your messages, your job oﬀers...</p>
              		<p style=" color: #008DD2">Coming soon</p>
              		</div>
              	</div>
   				<div class="row" style="margin-top: 80px;">
              		<div class="col-md-5 ">
              	<h4 style="font-size: 20px;">	Build an engaged community</h4>
              		</div>
              	</div>
              	              	<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png" alt="">	
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<img src="assets/image/60x60.png"   alt="">	
              		</div>
              		
              	</div>
              	<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>	
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px;">SCIENCE</H4>
              		<p class="djiant-for">The Djiant platform made available for scientiﬁc communities.</p>
              		<p style=" color: #008DD2">Coming soon</p>
              		</div>
              		<div class="col-md-3 "style="flex: 0 0 29%;max-width: 29%;">
              		<h4>DJIANT FOR</h4>		
              		<H4 style="font-size: 17px; color: #008DD2; margin-top: 0px;">THE PLANET</H4>
              		<p class="djiant-for">Djiant's contribution to help communities working to protect environment and nature. </p>
              		<p style=" color: #008DD2">Coming soon</p>
              		</div>
              		
              	</div>
              </div>
            </div>
<div id="Djiant-about-popup" class="modal" >
              <div class="modal-header ">
                  <button type="button" id="popupClose" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <div class=" d-flex line1" style="margin-left: 20px;"><img src="assets/image/logo-djiant.svg" class="icon mr-2"><h4>About Djiant  </h4></div>
              </div>
               
              <div class="modal-body" style="padding-left:50px;">
              	<div class="row" style="margin-top: 20px;">
              		<div class="col-md-6">
              			<H4 style=" color: #008DD2; margin-top: 0px;">ABOUT DJIANT</H4>
              			<H4 style="font-size: 20px;  margin-top: 0px;">THE WEB. BY THE MANY. FOR THE MANY</H4>
              			LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA. CILLUM DOLORE EU FUGIAT NULLA PARIATUR. 
              		</div>
              		
              	</div>
   				<div class="row" style="margin-top: 30px;">
              		<div class="col-md-3 "style="flex: 0 0 31%;max-width: 31%;">
              		<h4>Lorem</h4>	
              		
              		<p class="djiant-for">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cillum dolore eu fugiat nulla pariatur. </p>
              		</div>
              		
              	</div>
              </div>
            </div>
<script>
	        /**
         * Create new map
         */
        var infowindow;
        var map;
        var gray_icon =  'assets/markers/MarkerGris.svg' ;
        var blue_icon =  'assets/markers/MarkerBleu.svg' ;
        var locations = <?php echo $result ?>;
        var myOptions = {
          mapTypeControl: false,
          streetViewControl: false,
          zoomControl:false,
          fullscreenControl: false,
          zoom: 3,
          center: new google.maps.LatLng(33.8445935,2.325165),
          mapTypeId: 'roadmap',
          styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative",
    "stylers": [
      {
        "visibility": "on"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#a4a4a4"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "administrative.province",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#a4a4a4"
      }
    ]
  },
  {
    "featureType": "landscape",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#e3e3e3"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]

        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);
        /**
         * loop through (Mysql) dynamic locations to add markers to map.
         */
        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][2], locations[i][3]),
                map: map,
                icon :   locations[i][11] === '0' ?  gray_icon : blue_icon ,
                zIndex:   locations[i][11] === '0' ?  0 : 1 ,
                html: locations[i][11] === '0' ?  '  <div class="container-full-width"><div class="header"><div class=""><div class="row" > <div class="col-md-10" > <div class="container d-flex line1" style="padding-left: 5px;"><img src="assets/new-icons/Server.svg" class="icon mr-2 disable"><p class="title" style="font-weight: 600; padding-bottom: 2px;">'+locations[i][1]+'</p>  </div></div> <div class="col-md-2" > <div class="title-right" > <img src="assets/image/IconPIN.svg" style="width: 13px; margin: 6px 9px 0px 0px;"> <img src="assets/image/IconSHARE.svg" style="width: 13px; margin-top: 6px "></div></div></div><hr><img class="Imag-fond" src="assets/image/generic-fond-gris.png" alt="Technoparks Djiant"><img class="Logo-Fentre" src="assets/image/generic-logo-gris.png" alt="Technoparks Djiant"><div class="container titles row line2"><div style="padding-left: 17px;" class="border-left-1 padding-left-0 col-5"><p class="title">About</p></div><div class="border-left-1 padding-left-0 col-7"><p class="title">Ressources</p></div></div></div></div> <div class="content"> <div class="container row"> <div class="padding-left-0 col-5"><div class="tab-titles">  <h5 style="" class="title5">'+locations[i][1]+', '+locations[i][12]+'</h5><p> Local newspaper, chambers of commerce, business associaons... <br>Become partner, become unique. <br>Book this server and build with<br> Djiant a thriving Business <br>Community</p></div> </div> <div class="padding-left-0 col-7"> <div class="row" style="margin-left: 0px;"> <div class="col-md-8 djiant-block-hoverd"><a class="djiant-link"href="https://info.djiant.com/" target="_blank"> <div class="col-xs-4 "><img src="assets/image/Icone-Website.svg" width="75px"></div><div class="col-xs-8" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >Djiant for Communies</h4> <p class="djiant-block">Clic here to discover why and how to build a Business Community with Djiant.</p></div></a></div> </div>  </div> </div> </div></div>'  :  '<div class="container-full-width"><div class="header"><div class=""><div class="row" > <div class="col-md-10" > <div class="container d-flex line1" style="padding-left: 5px;"><img src="assets/new-icons/Server.svg" class="icon mr-2"><p class="title" style="font-weight: 600; padding-bottom: 2px;">'+locations[i][1]+'</p>  </div></div> <div class="col-md-2" > <div class="title-right" > <img src="assets/image/IconPIN.svg" style="width: 13px; margin: 6px 9px 0px 0px;"> <img src="assets/image/IconSHARE.svg" style="width: 13px; margin-top: 6px "></div></div></div><hr><img class="Imag-fond" src="assets/image/generic-fond-gris.png" alt="Technoparks Djiant"><img class="Logo-Fentre" src="assets/image/generic-logo-gris.png" alt="Technoparks Djiant"><div class="container titles row line2"><div style="padding-left: 17px;" class="border-left-1 padding-left-0 col-4"><p class="title">About</p></div><div  class="border-left-1 padding-left-0 col-8"><p class="title">Ressources</p></div></div></div></div> <div class="content"> <div class="container row" style="padding-right: 0px;"> <div class="padding-left-0 col-4"><div class="tab-titles">    <h5 style="" class="title5">'+locations[i][1]+'</h5><p>Server already booked. Coming soon.</p></div> </div> <div class="padding-left-0 col-8 scrollable-srv"> <div class="row" style="margin-left: 0px; margin-bottom: 14px;"> <div class="col-md-5 djiant-block-nothoverd" style="flex: 0 0 48%; max-width: 48%; margin-right: 7px;"><a class="djiant-link"href="#" > <div class="col-xs-4 "><img src="assets/image/Icone-Website.svg" width="63px"></div><div class="col-xs-8 disabled-network" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >Website</h4> <p class="djiant-block">Clic to connect to community Website. </p></div></a></div> <div class="col-md-5 djiant-block-nothoverd" style="flex: 0 0 48%; max-width: 48%; margin-right: 7px;"><a class="djiant-link"href="#"  > <div class="col-xs-4 "><img src="assets/image/Icone-D-Directory.svg" width="65px"></div><div class="col-xs-8 disabled-network" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >D - Directory</h4> <p class="djiant-block">5000 companies listed. </p></div></a></div></div>     <div class="row" style="margin-left: 0px;"> <div class="col-md-5 djiant-block-nothoverd" style="flex: 0 0 48%; max-width: 48%; margin-right: 7px;"><a class="djiant-link"href="#" > <div class="col-xs-4 "><img src="assets/image/IconFigures.svg" width="66px"></div><div class="col-xs-8 disabled-network" style =""><h4 style="margin-top:0px; margin-bottom:0px;" >D - Figures</h4> <p class="djiant-block">Stats of the community. </p></div></a></div> </div>       </div> </div> </div></div>',
              
            });
            infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
          google.maps.event.addDomListener(document.getElementById('zoomin'), 'click', function() {
   var currentZoomLevel = map.getZoom();
   if(currentZoomLevel != 21){
     map.setZoom(currentZoomLevel + 1);}
  });   

  google.maps.event.addDomListener(document.getElementById('zoomout'), 'click', function() {
   var currentZoomLevel = map.getZoom();
   if(currentZoomLevel != 0){
     map.setZoom(currentZoomLevel - 1);}     
  });

  $(document).on("click",".body",function(){
    $('.popupInfo').hide();
    $('#popupInfo-li').removeClass('selected-menu');
    $('.side-Menu').removeClass('selected-menu');


});
  $(document).on("click",".modal-scrollable",function(){
    $('.side-Menu').removeClass('selected-menu');


});
  $(document).on("click","#popupClose",function(){
    $('#popupRacine-btn').removeClass('btn-selectedd');
    $('.side-Menu').removeClass('selected-menu');


}); 
  $(document).on("click","#popupInfo-btn",function(){
        $('.popupInfo').show();
    $('#popupInfo-li').addClass('selected-menu');

});
  $(document).on("click","#popupRacine-btn",function(){
        
    $('#popupRacine-btn').addClass('btn-selectedd');

});


    var $side_Menu = $('.side-Menu').on('click', function(e) {
    $side_Menu.removeClass('selected-menu');
    $(this).addClass('selected-menu'); });


</script>
<script>
// $j optional alias to jQuery noConflict()
var $j = jQuery.noConflict();

$j(document).ready(function() {
	$j('[data-toggle="popover"]').popover();
});
</script>
<script>
var slideIndex_DFiles = 1;
showSlides_DFiles(slideIndex_DFiles);

function plusSlides_DFiles(n) {
  showSlides_DFiles(slideIndex_DFiles += n);
}

function currentSlide_DFiles(n) {
  showSlides_DFiles(slideIndex_DFiles = n);
}

function showSlides_DFiles(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides-DFiles");
  var dots = document.getElementsByClassName("dot-DFiles");
  if (n > slides.length) {slideIndex_DFiles = 1}    
  if (n < 1) {slideIndex_DFiles = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-dot-DFiles", "");
  }
  slides[slideIndex_DFiles-1].style.display = "block";  
  dots[slideIndex_DFiles-1].className += " active-dot-DFiles";
}

var slideIndex_DPages = 1;
showSlides_DPages(slideIndex_DPages);

function plusSlides_DPages(n) {
  showSlides_DPages(slideIndex_DPages += n);
}

function currentSlide_DPages(n) {
  showSlides_DPages(slideIndex_DPages = n);
}

function showSlides_DPages(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides-DPages");
  var dots = document.getElementsByClassName("dot-DPages");
  if (n > slides.length) {slideIndex_DPages = 1}    
  if (n < 1) {slideIndex_DPages = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-dot-DPages", "");
  }
  slides[slideIndex_DPages-1].style.display = "block";  
  dots[slideIndex_DPages-1].className += " active-dot-DPages";
}

var slideIndex_DFigures = 1;
showSlides_DFigures(slideIndex_DFigures);

function plusSlides_DFigures(n) {
  showSlides_DFigures(slideIndex_DFigures += n);
}

function currentSlide_DFigures(n) {
  showSlides_DFigures(slideIndex_DFigures = n);
}

function showSlides_DFigures(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides-DFigures");
  var dots = document.getElementsByClassName("dot-DFigures");
  if (n > slides.length) {slideIndex_DFigures = 1}    
  if (n < 1) {slideIndex_DFigures = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-dot-DFigures", "");
  }
  slides[slideIndex_DFigures-1].style.display = "block";  
  dots[slideIndex_DFigures-1].className += " active-dot-DFigures";
}
</script>
<script>
  $(function() {

  // open in fullscreen
  $('#fullscreen .requestfullscreen').click(function() {
    $('#fullscreen').fullscreen();
    return false;
  });
  // exit fullscreen
  $('#fullscreen .exitfullscreen').click(function() {
    $.fullscreen.exit();
    return false;
  });
  // document's event
  $(document).bind('fscreenchange', function(e, state, elem) {
    // if we currently in fullscreen mode
    if ($.fullscreen.isFullScreen()) {
      $('#fullscreen .requestfullscreen').hide();
      $('#fullscreen .exitfullscreen').show();
    } else {
      $('#fullscreen .requestfullscreen').show();
      $('#fullscreen .exitfullscreen').hide();
    }

  });
});
</script>
<script>
function toggleFullscreen(elem) {
  elem = elem || document.documentElement;

  if (!document.fullscreenElement && !document.mozFullScreenElement &&
    !document.webkitFullscreenElement && !document.msFullscreenElement) {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.msRequestFullscreen) {
      elem.msRequestFullscreen();
    } else if (elem.mozRequestFullScreen) {
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
      elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}

document.getElementById('btnFullscreen').addEventListener('click', function() {
  toggleFullscreen();
});

</script>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->


<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="assets/global/plugins/racine/racine.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>

<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<!-- MAP SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
<!-- END JAVASCRIPTS -->
</body>
</html>