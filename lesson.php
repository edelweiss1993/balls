<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Jquery</title>
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    
    <style>
        
        .box1, .box2, .box3 {
           min-height: 200px;
           min-width: 200px;
           border: 2px solid black;
           display: inline-block;
        }
        
        .box1 {
            background: rgb(225, 50, 50);
          

        }
        
        .box2 {
            background: rgb(50, 50, 225);
            
        }     
        .box3 {
            background: rgb(225, 225, 50);
        }
        
    </style>
    
</head>
<body>
    
    <div class="box1"></div>
    <div class="box2"></div>
    <div class="box3"></div>
     
    <script>
    
 /*   
        console.log( $("body") ); //таким написание получаем элемент jquery
         console.log( $(".box1") );
         console.log( $(".box1, .box2, .box3") );
         console.log( $(".box2")[0] ); // вытаскиваем только HTML-элемент
         
         
         
         let box1 = $(".box1");
         box1.css("background-color", "rgb(225, 50, 225");
         
         let box2 = $(".box2");
         $(box2).css("background-color", "rgb(150, 50, 50");
         
         let box3 = document.querySelector(".box3");
         $(box3).css("background-color", "rgb(150, 225, 50");
         
         
         
         $(".box1").css({
                         borderRadius: "15px",
                         "border-color": "lightblue",
                         "box-shadow": "10px 10px 3px -5px",
                     })
                    .attr({
                        title: "квадрат1",
                    })
                    .html("<span>коробка1</span>");
                    
         
         $(".box1, .box2, box3").css({
                                     "margin": "10px",
                                     })
         
         
         
         $(".box2").prependTo(".box1");
         
         
         $(".box1").addClass("new-class")
         //$(".box1").removeClass("new-class")
         //$(".box1").toggleClass("new-class")
         
         
         
         
         console.log( $(".box2").parent());
         console.log( $(".box2").parents());
         
         
         console.log( $(".box3").siblings());
         console.log( $(".box3").prev());
         console.log( $(".box3").next());
         
         
         console.log( $(".box1").find(".box2") );
         
         
         $(".box3").click(function() {
             alert("Вы нажали на коробку 3");
         })
            
         
         $(".box3").mouseover(function() {
             alert("Вы навелись на коробку3");
         })
         
         
         $(".box3").mouseout( () => {
             alert("Вы убрали мышку с коробки 3");
         })
         
         
         $(".box1").on("click", function handler() {
             alert("Вы нажали на коробку 1")
             $(".box1").off("click", handler);
         })
         */
         
         
         
         
         
         //АНИМАЦИЯ
 /*        
         $(".box1").hide().show(1000);
         //$(".box2").hide().fadeIn(1000);
         
         $(".box3").delay(1000).hide(1000).delay(3000).show(1000);
         
         $(".box2").css({position: "absolute"})
                    .hide()
                    .fadeIn(4000)
                    .delay(1000)
                    .animate({
                        top: "150px",
                        left: "150px",
                    }, 1000)
                    .delay(1000)
                    .animate({
                        "min-width": "300px",
                        "min-height": "300px",
                    }, 1000, showEndMessage);
         
         
         
         function showEndMessage() {
             $(".box2").css("background-color", "rgb(50, 255, 255)")
             //alert("анимация завершена")
         }
         
         */
         
         $(".box1").click(moveOtherBoxes)
         
         function moveOtherBoxes() {
             $(".box2, .box3").css({
                                 "background-color": "rgb(220, 220, 220)",
                                 })
                              .animate({
                                  "margin-left": "100px"
                              }, 1000)
         }
         
         
         
         
    </script>
</body>
</html>