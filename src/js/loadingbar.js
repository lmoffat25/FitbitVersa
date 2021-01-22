document.addEventListener('DOMContentLoaded', function() {

    var bar = document.querySelector('.loader__fill');

    window.addEventListener('scroll', function() {

        progress = (document.body.scrollTop / ( document.body.scrollHeight - window.innerHeight ) ) * 100;
        bar.style.height = progress + "%";
        
    });
});