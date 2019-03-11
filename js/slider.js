$(document).ready(function(){

  initSliders();

  //add event listener

  //add action for next slide
  $("[role=sliderNextPrev] [role=nextslide]").click(function(){

      sliderId=$(this).parents("[role=slider]").attr("id");
      sliderSlideNext(sliderId);

  });
  //add action for previous slide
  $("[role=sliderNextPrev] [role=prevslide]").click(function(){

      sliderId=$(this).parents("[role=slider]").attr("id");
      sliderSlidePre(sliderId);

  });
  //add action for change slide to special slide
  $("[role=sliderPaginations] li").click(function(){

    sliderId = $(this).parents("[role=slider]").attr("id");

    slideIndex = $(this).attr("sliderIndex");
    sliderSlideSpecial(sliderId,slideIndex);

  });




});

function initSliders(){

  // step1: hide all slideritems;
  // step2 show the first slide of sliders
  // step3 show next and repat it

  //step1
  $("[role=slider] [role=sliderItemHolder]").hide();
  //step2
  var sliders=$("[role=slider]");

  for(i=0;i<sliders.length;i++){
    //show the 1st slide of each slider
    //step 1 must get the slides of each sliders
    //step 2 show the first of the slide
    slidesOfSlider=$(sliders[i]).find("[role=sliderItemHolder]");
    $(slidesOfSlider[0]).show();
    $(sliders[i]).attr("showingslidenum","0");

    //check if have sycle attr must active the sycle

    if($(sliders[i]).attr("cycle")) {
      sliderId=$(sliders[i]).attr("id");
      timeInterval = $(sliders[i]).attr("cycle");
      sliderCycle(sliderId,timeInterval);
    }
    //for any slider that have pagination attr must add pagination

      if($(sliders[i]).attr("pagination")) {
          $(sliders[i]).find("[role=sliderPaginations]").append("<ul></ul>");

          slides=$(sliders[i]).find("[role=sliderItemHolder]");

          for(slideCounter=0;slideCounter<slides.length;slideCounter++){

            //if want to add content can add it in the listElemnt
            listElement='<li sliderIndex="'+slideCounter+'" class="">'+'</li>';
              $(sliders[i]).find("[role=sliderPaginations] ul").append(listElement);
          }

          sliderPaginations= $(sliders[i]).find("[role=sliderPaginations] li");

          $(sliderPaginations[0]).addClass("activeslide");

      }


  }

}
//end of init sliders
function sliderSlideNext(sliderid){
  //get the slider id and show the next slide
  sliderID = "#"+sliderid; //make the sliderid as real ID

  //get the what's slide is showing now  number
  var showingSlideNum=$(sliderID).attr("showingslidenum");
  showingSlideNum = Number(showingSlideNum);//convert to integer

  //get the slide number
  lengthOfSlider=$(sliderID).find("[role=sliderItemHolder]");
  sliderLength=$(lengthOfSlider).length;

  //if have n slide than the showingSlideNum can not be grater than n-1
  //therefor must check it and change it
  if(sliderLength-1 <= showingSlideNum){
    nextSlide=0;
  }
  else{
    nextSlide=showingSlideNum+1;
  }


  var showingSlide=$(sliderID).find("[role=sliderItemHolder]");
  $(showingSlide[showingSlideNum]).hide();
  $(showingSlide[nextSlide]).show();
  //if pagination is active than must change active class to it
  if( $(sliderID).attr("pagination") ){
        //get the pagination li remove the active class and add active calss
        sliderPaginations = $(sliderID).find("[role=sliderPaginations] li");
        $(sliderPaginations[showingSlideNum]).removeClass("activeslide");
        $(sliderPaginations[nextSlide]).addClass("activeslide");
  }

  $(sliderID).attr("showingslidenum",nextSlide);

}

function sliderSlidePre(sliderid){
  //get the slider id and show the next slide
  sliderID = "#"+sliderid; //make the sliderid as real ID

  //get the what's slide is showing now  number
  var showingSlideNum=$(sliderID).attr("showingslidenum");
  showingSlideNum = Number(showingSlideNum);//convert to integer

  //get the slide number
  lengthOfSlider=$(sliderID).find("[role=sliderItemHolder]");
  sliderLength=$(lengthOfSlider).length;

  //if have n slide than the showingSlideNum can not be grater than n-1
  //therefor must check it and change it
  if( 0 >= showingSlideNum){
    preSlide=sliderLength-1;
  }
  else{
    preSlide=showingSlideNum-1;
  }


  var showingSlide=$(sliderID).find("[role=sliderItemHolder]");
  $(showingSlide[showingSlideNum]).hide();
  $(showingSlide[preSlide]).show();
  //if pagination is active than must change active class to it
  if( $(sliderID).attr("pagination") ){
        //get the pagination li remove the active class and add active calss
        sliderPaginations = $(sliderID).find("[role=sliderPaginations] li");
        $(sliderPaginations[showingSlideNum]).removeClass("activeslide");
        $(sliderPaginations[preSlide]).addClass("activeslide");
  }




  $(sliderID).attr("showingslidenum",preSlide);

}

function sliderSlideSpecial(sliderid,slideNum){

  sliderID = "#"+sliderid; //make the sliderid as real ID
  slideNum = Number(slideNum);

  var showingSlideNum=$(sliderID).attr("showingslidenum");
  showingSlideNum = Number(showingSlideNum);//convert to integer

  var showingSlide=$(sliderID).find("[role=sliderItemHolder]");

  $(showingSlide[showingSlideNum]).hide();
  $(showingSlide[slideNum]).show();
  //if pagination is active than must change active class to it
  if( $(sliderID).attr("pagination") ){
        //get the pagination li remove the active class and add active calss
        sliderPaginations = $(sliderID).find("[role=sliderPaginations] li");
        $(sliderPaginations[showingSlideNum]).removeClass("activeslide");
        $(sliderPaginations[slideNum]).addClass("activeslide");
  }

  $(sliderID).attr("showingslidenum",slideNum);


}

function sliderCycle(sliderid,time){
  //this function make sycle on slider
  //need slider id and time for sycle

  //step 1 - make next to slider
  //step 2 - make time interval for sliding

  //convert time from string to nomber
  time = Number(time);

  sliderSlideNext(sliderid);
  setTimeout(function(){sliderCycle(sliderid,time)},time);


}
