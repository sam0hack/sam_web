// JavaScript Document

function changecolor()
					{
						
						document.getElementById('change').style.backgroundColor='#999999';
					}
					
					

function display_intro(menuid)
				{
					var dispdiv= new Array( "int", "exp", "edu", "ach" );
					for(var i=0; i<dispdiv.length; i++)
						{
							if(dispdiv[i]==menuid)
							{
							document.getElementById(menuid).style.display="block";
							}
								else
								{
									document.getElementById(dispdiv[i]).style.display="none";
								}
							}
					}
				
				
				
				
				
function display(menuid)
				{
					var dispdiv= new Array( "type1", "type2", "type3", "type4","type5","type6" );
					for(var i=0; i<dispdiv.length; i++)
						{
							if(dispdiv[i]==menuid)
							{
							document.getElementById(menuid).style.display="block";
							}
								else
								{
									document.getElementById(dispdiv[i]).style.display="none";
								}
							}
					}
				
				
function display_events(menuid)
				{
					var dispdiv= new Array( "type1", "type2", "type3", "type4" );
					for(var i=0; i<dispdiv.length; i++)
						{
							if(dispdiv[i]==menuid)
							{
							document.getElementById(menuid).style.display="block";
							}
								else
								{
									document.getElementById(dispdiv[i]).style.display="none";
								}
							}
					}
					
					
					
function display_gallery(menuid)
				{
					var dispdiv= new Array( "type1", "type2", "type3", "type4","type5","type6" );
					for(var i=0; i<dispdiv.length; i++)
						{
							if(dispdiv[i]==menuid)
							{
							document.getElementById(menuid).style.display="block";
							}
								else
								{
									document.getElementById(dispdiv[i]).style.display="none";
								}
							}
					}
					
					
					
					
$(document).ready(function(){
   
    $(".k").mouseover(function () {
		$("#kai").show("slow");  
		$("#kai").css({"background-color":"white","font-size":"12px",
	"font-face":"Arial", "line-height":"2"});
		 $("#apo").hide();
		$("#med").hide();
		 $("#ojj").hide();
        });
	
	
   $(".a").mouseover(function () {
		$("#kai").hide("slow");
		 $("#apo").show("slow");
		 $("#apo").css({"background-color":"white","font-size":"12px",
	"font-face":"Arial","line-height":"2"});

		$("#med").hide();
		 $("#ojj").hide();
        });
	
    $(".m").mouseover(function () {
		$("#kai").hide();  
		 $("#apo").hide("slow");
		$("#med").show("slow");
		$("#med").css({"background-color":"white","font-size":"12px",
	"font-face":"Arial","line-height":"2"});

		 $("#ojj").hide();
        });
	
    $(".o").mouseover(function () {
		 $("#ojj").show("slow")
		 $("#ojj").css({"background-color":"white","font-size":"12px",
	"font-face":"Arial","line-height":"2"});

		$("#kai").hide();  
		 $("#apo").hide("slow");
		$("#med").hide("slow");
		
        });
	
$("#provelous1").click(function(){ 
								  $("#aboutus-slide").show();

								  $("#homepage_slide").hide();
								   $("#prov_adv1").hide();
								  
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  
								     $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
								  
								  								  
							  });


$("#prov_adv").click(function(){ 
								  $("#prov_adv1").show();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  
								     $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
								  
								  								  
							  });


$("#single_pass").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").show();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  
								     $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
								  
								  								  
							  });

$("#feather_touch").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").show();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  
								     $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
								  
								  								  
							  });


$("#rapid_grow").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").show();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  
								     $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
								  
								  								  
							  });


$("#pricing").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").show();
								  $("#homepage_slide1").hide();
								  
								   $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
								  
								  								  
							  });

$("#folli_surgery").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  $("#folli_surgery1").show();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
							  });




$("#folli_ext").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  $("#folli_surgery1").hide();
								  $("#folli_ext1").show();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
							  });


$("#body_ext").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").show();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
							  });

$("#facial_trans").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").show();
								  $("#repair_trans1").hide();
							  });



$("#repair_trans").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").show();
							  });



$("#current_home").click(function(){ 
								  $("#aboutus-slide").hide();

								  $("#homepage_slide").show();
								  								  
							  });






/*bottom menu jquery code*/


$("#provelous1_btm").click(function(){ 
								  $("#aboutus-slide").show();

								  $("#homepage_slide").hide();
								   $("#prov_adv1").hide();
								  
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  
								     $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
								  
								  								  
							  });


$("#prov_adv_btm").click(function(){ 
								  $("#prov_adv1").show();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  
								     $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
								  
								  								  
							  });


$("#single_pass_btm").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").show();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  
								     $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
								  
								  								  
							  });

$("#feather_touch_btm").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").show();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  
								     $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
								  
								  								  
							  });


$("#rapid_grow_btm").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").show();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  
								     $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
								  
								  								  
							  });


$("#pricing_btm").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").show();
								  $("#homepage_slide1").hide();
								  
								   $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
								  
								  								  
							  });

$("#folli_surgery_btm").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  $("#folli_surgery1").show();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
							  });




$("#folli_ext_btm").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  $("#folli_surgery1").hide();
								  $("#folli_ext1").show();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
							  });


$("#body_ext_btm").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").show();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").hide();
							  });

$("#facial_trans_btm").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").show();
								  $("#repair_trans1").hide();
							  });



$("#repair_trans_btm").click(function(){ 
								  $("#prov_adv1").hide();
								  $("#aboutus-slide").hide();
								  $("#single_pass1").hide();
								  $("#feather_touch1").hide();
								  $("#rapid_grow1").hide();
								  $("#pricing1").hide();
								  $("#homepage_slide1").hide();
								  $("#folli_surgery1").hide();
								  $("#folli_ext1").hide();
								  $("#body_ext1").hide();								  								  
								  $("#facial_trans1").hide();
								  $("#repair_trans1").show();
							  });




});	



/*readmore	coding	for	ask	me	menu*/




$(document).ready(function(){
 		 $("#readmore1").click(function(){
	     $("#first").append("hi i m succed front end programming because i know  HTML 5 ,CSS3, JQUERY, JAVASCRIPT, AJAX, XML, AND SQL SERVER, XHTML");
  });




 		 $("#readmore2").click(function(){
    	 $("#second").append("hi i m succed front end programming because i know  HTML 5 ,CSS3, JQUERY, JAVASCRIPT, AJAX, XML, AND SQL SERVER, XHTML");
  });




 		 $("#readmore3").click(function(){
         $("#third").append("hi i m succed front end programming because i know  HTML 5 ,CSS3, JQUERY, JAVASCRIPT, AJAX, XML, AND SQL SERVER, XHTML");
  });



 		 $("#readmore4").click(function(){
         $("#four").append("hi i m succed front end programming because i know  HTML 5 ,CSS3, JQUERY, JAVASCRIPT, AJAX, XML, AND SQL SERVER, XHTML");
  });


 		 $("#readmore5").click(function(){
         $("#five").append("hi i m succed front end programming because i know  HTML 5 ,CSS3, JQUERY, JAVASCRIPT, AJAX, XML, AND SQL SERVER, XHTML");
		 
  });
		 
		  $("#choose").mouseover(function () {
							$("#why").toggle("slow");
										   });
		  
		  
		  
		  
		  
		  
		  	$("#current_hover").click(function(){
									   
									   $("this").css("background-color","aqua");
								 alert("hiiii");
								 
								  });
		  
	});


					
					
			function display_samplead(menuid)
				{
					var dispdiv= new Array( "first_sample_add", "second_sample_add" );
					for(var i=0; i<dispdiv.length; i++)
						{
							if(dispdiv[i]==menuid)
							{
							document.getElementById(menuid).style.display="block";
							}
								else
								{
									document.getElementById(dispdiv[i]).style.display="none";
								}
							}
					}
