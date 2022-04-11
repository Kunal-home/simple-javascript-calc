let screen = document.getElementById("screen");
let buttons =document.querySelectorAll("button");
var screenvalue="";
for(item of buttons){
item.addEventListener('click', (e) => {
   var buttontext = e.target.innerText;
  
    if(buttontext == 'C'){
        screenvalue="";
        screen.value=screenvalue;
    }
   else if( buttontext == "x"){
          buttontext= '*';
          screenvalue= screenvalue+buttontext;
        screen.value= screenvalue;

    }
    else if(buttontext == "=")
    {
        screenvalue= eval(screenvalue);
        screen.value= screenvalue;
        screenvalue="";
    }
    else {
        screenvalue= screenvalue + buttontext;
        screen.value = screenvalue;
    }
 
    })
}
document.addEventListener('keydown', function(event) {

   var text =event.which;
   
  if (event.key<=9){
    screenvalue = screenvalue + event.key;
    screen.value= screenvalue;
  }
  else if(event.key=="Delete")
  {
    screenvalue="";
    screen.value=screenvalue;
    console.clear();
  }
  else if(event.key=="+"||event.key=="-"||event.key=="*"||event.key=="/")
  {
    screenvalue=screenvalue+event.key;
    screen.value=screenvalue;
  }
  else if(event.key=="Enter"){
    screenvalue=eval(screenvalue);
    screen.value=screenvalue;
    screenvalue="";
 
 }
 else if(event.key=="Backspace")
{
 screenvalue= screenvalue.slice(0,-1);
 screen.value=screenvalue;
}
else if(event.key=="r")
{
  this.location.reload();
  screenvalue="";
  screen.value=screenvalue;
    console.clear();
}
}
)
window.onerror= function(){

  alert("plese enter valid input");
  screenvalue=""
  screen.value=screenvalue;
  console.clear();
}

        


