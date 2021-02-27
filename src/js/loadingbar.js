document.addEventListener('DOMContentLoaded', function() {

    var bar = document.querySelector('.loader__fill');

    window.addEventListener('scroll', function() {

        progress = (document.body.scrollTop / ( document.body.scrollHeight - window.innerHeight ) );
        bar.style.transform = "scaleY(" + progress + ")";
        console.log(progress);
    });
});