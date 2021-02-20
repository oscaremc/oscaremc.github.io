$(document).ready(main);

var contador = 1;

function main(){
   $('.kroc').click(function(){
       // $('nav').toggle(); 

       if(contador == 1){
           $('.krac').animate({
               top: '0'
           });
           contador = 0;
       } else {
           contador = 1;
           $('.krac').animate({
               top: '-100%'
           });
       }

   });


};