// init controller
var controller = new ScrollMagic.Controller();

var main = function() {
    scroll();
    active();
};



var scroll = function() {
    var image = new ScrollMagic.Scene({triggerElement: "#trigger1", duration : 1000})
                    .setPin("#pin1")
                    //.addIndicators({name: "1 (duration: 1000)"}) // add indicators (requires plugin)
                    .addTo(controller);

 /*   var txt1 = new ScrollMagic.Scene({triggerElement : "#trigTxt1", duration : 300})
                    .setPin("#pintxt1")
                    .addIndicators({name : "2 (duration : 300)"})
                    .addTo(controller); */
}
var triggerlength = 4;

var active = function() {
    for( var i = 1; i < triggerlength + 1; i++ ) {
        var image = new ScrollMagic.Scene({triggerElement: "#trigger" + i, duration : 400})
        .setClassToggle("#txt" + i, "-active")
        //.addIndicators({name: i + "(duration: 300)"})
        .addTo(controller);
    }
}
main();