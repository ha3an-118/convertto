function hafilterportfolio( inputobject ){
  //this function must hide all the element of page exept the showid

  var showid = Number($(inputobject).attr("showid"));
  var portfolioId = $(inputobject).parents("[role=haportfolio]").attr("id");
  var portfolioID = "#"+portfolioId;

  if(showid == 0){
    $(portfolioID).find("[termid]").show();
  }//end if showid ==0
  else{
    var x = $(portfolioID).find("[termid]").not("[termid="+showid+"]").hide();
    console.log(x);

  }

}
