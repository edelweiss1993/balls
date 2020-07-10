let game = {
    state: 'idle', // т.е. не играет сейчас и 'play' - играетю всего  2 состояния
    score: 0,
    level: 1,
    scoreElem: $(".score"), //document.querySelector(".score")
    levelElem: $(".level"), 
    skippedBalloons: 0,
    skippedElem: $(".skipped"),
    
    balloonSkipped() {
        this.skippedBalloons++;
        this.skippedElem.html(this.skippedBalloons);
        
         switch(this.skippedBalloons) {
            case 1:
                $(".five").css("background", "white");
            break;
            case 2:
                $(".four").css("background", "white");
            break;
            case 3:
                $(".three").css("background", "white");
            break;
            case 4:
                $(".two").css("background", "white");
            break;
            case 5:
                $(".one").css("background", "white");
            break;
         }
        if (this.skippedBalloons == 5) {
        this.loose();
        }
    }, 

    
    loose() {
        alert("вы проиграли");
        this.refresh();
    },
        
   /* addSkippedBalloon() {
        $(this.skippedElem).html(this.skippedBalloons);
    },*/
        
        
        
    
    start() {
        if (this.state == "idle") {
        startBalloons();
        this.state = "game";
        }
    },
    
    refresh() {
        if (this.state == "game") {
        clearInterval(balloonInterval);
        $(".balloons").html("");
        this.refreshScore(); // подвесили метод из этого же объекта
        this.skippedBalloons = 0; // чтобы колличество сброшенных шаров сбрасывалось после обновления
        this.skippedElem.html(0);
        $(".round").css("background", "maroon");
        this.setLevel(1); // для изменения уровня
        this.state = "idle";
        }
    },
    
    
    
    setLevel(level) {
        this.level = level;
        $(this.levelElem).html(level);
        if (level == 7) {
            this.win();
        }
    },
    
    
    win() {
        alert("вы выиграли");
        this.refresh();
    },
    
    addScore(amount) {
        this.score += amount;
        $(this.scoreElem).html(this.score);
        this.setLevel( Math.floor( (this.score + 1000) / 1000));
    },
    
    
    refreshScore() {
        this.score = 0;
        $(this.scoreElem).html(this.score);
    },
    
};




$(".btn-start").on("click", () => {
    game.start();
});

$(".btn-refresh").on("click", () => {
    game.refresh();
});




$(".balloons").css({
                overflow: "hidden",
                position: "absolute",
                width: "100%",
                height: document.documentElement.clientHeight + "px",
            })
            
            
            
            
         let balloonInterval;
         function startBalloons() {
             balloonInterval = setInterval( () => {
                 createBalloon();
                 }, 900) // частотность появления шаров. чем выше число, тем реже летят
         }
            
            
            
            
            

function createBalloon() {
    let balloonColor = ["img/blueballoon.png", "img/greenballoon.png", "img/orangeballoon.png", "img/pinkballoon.png"];
    let randomNumber = Math.floor(Math.random() * 4);
    let balloonSrc = balloonColor[randomNumber];
   
   let randomLeft = Math.floor(Math.random() * ($(".balloons").width() - 50));
   
   let balloonSpeed = (7000 + Math.floor(Math.random() * 3000) - (game.level - 1)*1000) +"ms";
   
   let balloon = document.createElement("img");
   $(balloon).attr({src: balloonSrc})
             .css({
                 position: "absolute",
                 top: "100%",
                 left: randomLeft + "px",
                 width: "50px",
                 transition: `top ${balloonSpeed} ease-in`,
                 userSelect: "none", // чтобы пользователь не мог выделить шары как картинку
                 zIndex: "20",
                 //cursor: crosshair,
             })
             .appendTo($(".balloons"))
             
    setTimeout(() => {
        let balloonHeight = $(balloon).height();
        $(balloon).css({ top: `-300px` })
        
        $(balloon).on("transitionend", () => {
            game.balloonSkipped()
            $(balloon).remove();
        })
        
    }, 10);
    
    
    $(balloon).on("click", () => {
        popBalloon(balloon);
    })
    
    $(balloon).on("mousedown", (event) => event.preventDefault()) //убираем призраков
}



function popBalloon(balloon) {
    game.addScore(100); // подвешиваем метод из объекта, чтоб при нажатии на шарик добавлялись очки
    let balloonTop = $(balloon).css("top");
    let balloonLeft = $(balloon).css("left");
    let confetti = document.createElement("img");
    $(confetti).attr({src: "img/confetti.gif"})
                .css({
                    width: "100px",
                    position: "absolute",
                    top: balloonTop,
                    left: balloonLeft,
                    opacity: 1,
                    transition: "opacity 5s",
                    zIndex: "10",
                })
                .appendTo( $(".balloons"));
                
                
    setTimeout( () => {
        $(confetti).css({ opacity: 0})
        $(confetti).on("transitionend", () => {
            $(confetti).remove();
        })
    }, 10);
    
    $(balloon).remove();
}







