$(document).ready(main);

var contador = 1;

function main(){
   $('.pier').click(function(){
       // $('nav').toggle(); 

       if(contador == 1){
           $('.sercompl').animate({
               top: '0'
           });
           contador = 0;
       } else {
           contador = 1;
           $('.sercompl').animate({
               top: '-100%'
           });
       }

   });


};