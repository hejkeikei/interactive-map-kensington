// Map and tooltip
const allhover = document.querySelectorAll(".pin");
const root = document.getElementById("map");

allhover.forEach((elem,index)=>{
    // console.log(elem.getBoundingClientRect());
    let locate = elem.getBoundingClientRect();
    let x = locate.x;
    let y = locate.y;
    let addname = "test "+index;
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
 elemBtn.classList.add("btn");
 elemBtn.innerHTML="Show More";
 let link = "/building.php?name="+text;
 elemBtn.setAttribute("href",link);
//  console.log(elemBtn);
 elem.id="building"+index;
 elem.classList.add("tooltip");
 elem.classList.add("hidden");
 elem.style.top=y/2+"px";
 elem.style.left=(x-50)+"px";
 elem.innerHTML=text;
 elem.appendChild(elemBtn);
 root.appendChild(elem);
}


