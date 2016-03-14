$(document).ready(function(){
/*helmet base drop-down selection details*/	
	$("#baseBtn").click(function(e){
		if ($("#wrapWrap").css("display") == "block" ){
			$("#wrapWrap").slideToggle();}
		if ($("#visorWrap").css("display") == "block" ){
			$("#visorWrap").slideToggle();}	
		if ($("#flareWrap").css("display") == "block" ){
			$("#flareWrap").slideToggle();}	
		if ($("#techWrap").css("display") == "block" ){
			$("#techWrap").slideToggle();}	
		$("#baseWrap").slideToggle();
		});
	/*helmet visor drop-down selection details*/	
	$("#wrapBtn").click(function(e){
		if ($("#baseWrap").css("display") == "block" ){
			$("#baseWrap").slideToggle();}
		if ($("#visorWrap").css("display") == "block" ){
			$("#visorWrap").slideToggle();}	
		if ($("#flareWrap").css("display") == "block" ){
			$("#flareWrap").slideToggle();}	
		if ($("#techWrap").css("display") == "block" ){
			$("#techWrap").slideToggle();}
		$("#wrapWrap").slideToggle();	
		});	
	/*helmet visor drop-down selection details*/	
	$("#visorBtn").click(function(e){
		if ($("#wrapWrap").css("display") == "block" ){
			$("#wrapWrap").slideToggle();}
		if ($("#baseWrap").css("display") == "block" ){
			$("#baseWrap").slideToggle();}	
		if ($("#flareWrap").css("display") == "block" ){
			$("#flareWrap").slideToggle();}	
		if ($("#techWrap").css("display") == "block" ){
			$("#techWrap").slideToggle();}
		$("#visorWrap").slideToggle();	
		console.log("BM MouseOver");
		});
		
	/*helmet flare drop-down selection details*/	
	$("#flareBtn").click(function(e){
		if ($("#wrapWrap").css("display") == "block" ){
			$("#wrapWrap").slideToggle();}
		if ($("#visorWrap").css("display") == "block" ){
			$("#visorWrap").slideToggle();}	
		if ($("#baseWrap").css("display") == "block" ){
			$("#baseWrap").slideToggle();}	
		if ($("#techWrap").css("display") == "block" ){
			$("#techWrap").slideToggle();}
		$("#flareWrap").slideToggle();	
		console.log("BM MouseOver");
		});
	
	/*helmet visor drop-down selection details*/	
	$("#techBtn").click(function(e){
		if ($("#wrapWrap").css("display") == "block" ){
			$("#wrapWrap").slideToggle();}
		if ($("#visorWrap").css("display") == "block" ){
			$("#visorWrap").slideToggle();}	
		if ($("#flareWrap").css("display") == "block" ){
			$("#flareWrap").slideToggle();}	
		if ($("#baseWrap").css("display") == "block" ){
			$("#baseWrap").slideToggle();}
		$("#techWrap").slideToggle();	
		console.log("BM MouseOver");
		});
///	  Price object used to store price value of each selection ///////		
	var TTLPriceObj={
		bp: 0,
		wp: 0,
		vp: 0,
		fp: 0,
		tp: 0,
		};	
///	  Helmet Image object used to store values of each selection ///////		
	var helmetImageObj={
		bi: 0,
		wi: 0,
		vi: 0,
		fi: 0,
		ti: 0,
		};			
////////	Base Button Event Handlers ///////////
	var checkBase = true;		
	$('#baseWrap input').click(function() {
		if (checkBase == ($(this).attr("checked"))){
			checkBase = false;
				
	var BBName =($(this).attr("data-name")); 
	var BBPrice =($(this).attr("data-price"));
	var BBImage =($(this).attr("data-image"));
	$("#BBName").empty().append("<p>" + BBName + "</p>");
	$("#BBPrice").empty().append("<p>$" + BBPrice + "</p>");
		TTLPriceObj["bp"] = (BBPrice);
		updateTotalPrice(BBPrice);
		helmetImageObj["bi"] = (BBImage);
		updateHelmetImage();
	}else{
		  ($(this).attr("checked", false));
		  checkBase = true;
		  $("#BBName").empty();
		  $("#BBPrice").empty(); 
		  TTLPriceObj["bp"] = (0);
		  updateTotalPrice();
		  helmetImageObj["bi"] = (0);
		  updateHelmetImage();
			}
	});
////////	Wrap Button Event Handlers ///////////
	var checkWrap = true;
	$('#wrapWrap input').click(function() {	
		if (checkWrap == ($(this).attr("checked"))){
			checkWrap = false;	
			
	var WBName =($(this).attr("data-name")); 
	var WBPrice =($(this).attr("data-price"));
	var WBImage =($(this).attr("data-image"));
	$("#WBName").empty().append("<p>" + WBName + "</p>");
	$("#WBPrice").empty().append("<p>$" + WBPrice + "</p>"); 
		TTLPriceObj["wp"] = (WBPrice);
		updateTotalPrice(WBPrice);
		 helmetImageObj["wi"] = (WBImage);
		 updateHelmetImage();
	}else{
		  ($(this).attr("checked", false));
		  checkWrap = true;
			
		  $("#WBName").empty();
		  $("#WBPrice").empty(); 
		  TTLPriceObj["wp"] = (0);
		  updateTotalPrice();
		  helmetImageObj["wi"] = (0);
		  updateHelmetImage();
			}
	});
////////	Visor Button Event Handlers ///////////
	var checkVisor = true;
	$('#visorWrap input').click(function() {
		if (checkVisor == ($(this).attr("checked"))){
			checkVisor = false;	
				
	var VBName =($(this).attr("data-name")); 
	var VBPrice =($(this).attr("data-price"));
	var VBImage =($(this).attr("data-image"));
	$("#VBName").empty().append("<p>" + VBName + "</p>");
	$("#VBPrice").empty().append("<p>$" + VBPrice + "</p>"); 
		TTLPriceObj["vp"] = (VBPrice);
		updateTotalPrice(VBPrice);
		helmetImageObj["vi"] = (VBImage);
		updateHelmetImage();
	}else{
		  ($(this).attr("checked", false));
		  checkVisor = true;
			
		  $("#VBName").empty();
		  $("#VBPrice").empty(); 
		  TTLPriceObj["vp"] = (0);
		  updateTotalPrice();
		  helmetImageObj["vi"] = (0);
		  updateHelmetImage();
			}	
	});
////////	Flare Button Event Handlers ///////////	
	var checkFlare = true;
	$('#flareWrap input').click(function() {
		if (checkFlare == ($(this).attr("checked"))){
			checkFlare = false;	
			
	var FBName =($(this).attr("data-name")); 
	var FBPrice =($(this).attr("data-price"));
	var FBImage =($(this).attr("data-image"));
	$("#FBName").empty().append("<p>" + FBName + "</p>");
	$("#FBPrice").empty().append("<p>$" + FBPrice + "</p>");
		TTLPriceObj["fp"] = (FBPrice);
		updateTotalPrice(FBPrice);
		helmetImageObj["fi"] = (FBImage);
		updateHelmetImage();
	}else{
		  ($(this).attr("checked", false));
		  checkFlare = true;
			
		  $("#FBName").empty();
		  $("#FBPrice").empty(); 
		  TTLPriceObj["fp"] = (0);
		  updateTotalPrice();
		  helmetImageObj["fi"] = (0);
		  updateHelmetImage();
			}	
	});
////////	Tech Button Event Handlers ///////////
	var checkTech = true;
	$('#techWrap input').click(function() {
		if (checkTech == ($(this).attr("checked"))){
			checkTech = false;
		
	var TBName =($(this).attr("data-name")); 
	var TBPrice =($(this).attr("data-price"));
	var TBImage =($(this).attr("data-image"));
		  $("#TBName").empty().append("<p>" + TBName + "</p>");
		  $("#TBPrice").empty().append("<p>$" + TBPrice + "</p>"); 
		  TTLPriceObj["tp"] = (TBPrice);
		  updateTotalPrice(TBPrice);
		  helmetImageObj["ti"] = (TBImage);
		  updateHelmetImage();
	}else{
		  ($(this).attr("checked", false));
		  checkTech = true;
			
		  $("#TBName").empty();
		  $("#TBPrice").empty(); 
		  TTLPriceObj["tp"] = (0);
		  updateTotalPrice();
		  helmetImageObj["ti"] = (0);
		  updateHelmetImage();
			}
	});
	
	function updateTotalPrice(price){
		console.log(TTLPriceObj["bp"]);
		console.log(price);
		var BPAdd = parseInt(TTLPriceObj["bp"]);
		var WPAdd = parseInt(TTLPriceObj["wp"]);
		var VPAdd = parseInt(TTLPriceObj["vp"]);
		var FPAdd = parseInt(TTLPriceObj["fp"]);
		var TPAdd = parseInt(TTLPriceObj["tp"]);
		var TOTAL = BPAdd + WPAdd + VPAdd + FPAdd + TPAdd;
		$("#totalBuild").empty().append("<p>$" + TOTAL + "</p>");
		console.log(TOTAL);
	}
	function updateHelmetImage() {
		var helmetImageString = 
		helmetImageObj["bi"] +
		helmetImageObj["wi"] +
		helmetImageObj["vi"] +
		helmetImageObj["fi"];
		console.log(helmetImageString);
		$("#hemlmetPreview").css('background-image', 'url("images/' + helmetImageString + '.png")');  
	}
});
