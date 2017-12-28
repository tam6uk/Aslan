
    
    var message = document.querySelector("#message");
    var popup = document.querySelector(".popup-bg");
    var close = document.querySelector(".close-btn");
    var mapshow = document.querySelector("#map-btn");
    var closemap = document.querySelector(".close-map");
    var map = document.querySelector(".maps-inner");
    
    

    message.addEventListener("click", function(event){
        event.preventDefault();
        popup.classList.add("popup-show");
    });

    close.addEventListener("click", function(event){
        event.preventDefault();
        popup.classList.remove("popup-show");
    });

    mapshow.addEventListener("click", function(event){
        event.preventDefault();
        map.classList.add("map-show");
    });

    closemap.addEventListener("click", function(event){
        event.preventDefault();
        map.classList.remove("map-show");
    });

    

