// Map and tooltip
const allhover = document.querySelectorAll(".pin");
const root = document.getElementById("map");
console.log(namelist);
allhover.forEach((elem,index)=>{
    // console.log(elem.getBoundingClientRect());
    let locate = elem.getBoundingClientRect();
    let x = locate.x;
    let y = locate.y;
    let addname = namelist[index];
    var ids = "building"+index;
    
    createTooltip(x,y,addname,index);
    // show corresponding tooltip and hide the others
    elem.addEventListener("click",()=>{
        var allTooltips = document.querySelectorAll(".tooltip");
        var coriTooltip = document.getElementById(ids);
        coriTooltip.classList.remove("hidden");
        allTooltips.forEach((tip,key)=>{
            // console.log(key," ",index)
            if(key-index!=0){
                tip.classList="tooltip hidden";
            }else{
                console.log("don't hide this");
            }
        });
    });
});

// create a corresponding tooltip according to path's coordinate
function createTooltip(x,y,text,index){
 let elem = document.createElement("div");
 let elemBtn = document.createElement("a");
 let container = document.createElement("div");
 container.classList.add("pa-sm");
 let closeBtn = document.createElement("button");
 closeBtn.innerHTML="x";
 closeBtn.classList="closeBtn";
 let buildingName = document.createElement("h3");
 let desc = document.createElement("p");
 elemBtn.classList.add("btn");
 elemBtn.innerHTML="Show More";
 var linkVar =index+1;
 let link = "./building.php?name="+linkVar;
 elemBtn.setAttribute("href",link);
//  console.log(elemBtn);
 elem.id="building"+index;
 elem.classList.add("tooltip");
 elem.classList.add("hidden");

//  the coordinates are only for desktop
let screenwide = window.innerWidth;
if(screenwide>600){
    elem.style.top=y/2+"px";
    elem.style.left=(x-50)+"px";
}
//  the coordinates are only for desktop
  
    buildingName.innerHTML=text;
    desc.innerHTML="text";
    container.appendChild(buildingName);
    container.appendChild(desc);
    elem.appendChild(closeBtn);
    elem.appendChild(container);
    elem.appendChild(elemBtn);
    root.appendChild(elem);
}
// the tooltips closing button
let closeBtn = document.querySelectorAll(".closeBtn");
closeBtn.forEach(item=>item.addEventListener("click",(e)=>e.target.parentElement.classList.add("hidden")));


// Responsive
// if screen width > 600px show full map -->> <svg width unset>
function sizeSvg(){
    let windWidth =window.innerWidth;
    var svgViewbox = document.querySelector("svg");
    if(windWidth>600){
        svgViewbox.removeAttribute("width");
    }else{
        svgViewbox.setAttribute("width",900);
    }
}
sizeSvg();
window.addEventListener("resize",()=>sizeSvg());

// Responsive
// if screen width > 600px show full map -->> <svg width unset>



