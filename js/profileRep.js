/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $(".showRep").hide();
 //   $(".changeImage").hide();
    
    $(".profileRep").click(function(){
        $(".showRep").show();
       // $(".changeImage").hide();
    });
    
    $(".showRep").bind({
        click:function(){
            $(".showRep").hide();},
        mouseleave:function(){
            $(".showRep").hide();}      
    });
       
    $(".changeImage").bind({
        mouseenter:function(){
            $(".changeImage").css("background-color","rgb(83, 35, 113)");},
        mouseleave:function(){
            $(".changeImage").css("background-color","rgba(255,255,255,0.5)"); }
    });
    
    $("iframe").hide();
    $(".profileLink").click(function(){
        $("iframe").show();
    });
    
    $('iframe').contents().find('.photoZone').css("background-color","red");
    
    $("iframe").contents().find(".winClose").click(function(){
        $("iframe").hide();
    })
    $(".winClose").click(function(){
        $("iframe").hide();
    })
});
