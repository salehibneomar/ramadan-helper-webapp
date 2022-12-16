
 function id(param){
     return document.getElementById(param);
 }

 function menuOpen(){
     id('blur').style.display = 'block';
     id('sidebar').style.display = 'block';
     id('sidebar').className = id('sidebar').className.replace("slideOutRight", "slideInRight");
 }

 id('open').addEventListener('click' ,menuOpen);

 function menuClose(){
    id('sidebar').className = id('sidebar').className.replace("slideInRight", "slideOutRight");
    setTimeout(function(){ 
        id('blur').style.display = 'none';
        id('sidebar').style.display = 'none';
    },700);

 }

 id('close').addEventListener('click' ,menuClose);


