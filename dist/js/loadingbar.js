document.addEventListener("DOMContentLoaded",(function(){var e=document.querySelector(".loader__fill");window.addEventListener("scroll",(function(){progress=document.body.scrollTop/(document.body.scrollHeight-window.innerHeight)*100,e.style.height=progress+"%"}))}));