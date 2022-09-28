// Map and tooltip
const allhover = document.querySelectorAll(".pin");
const root = document.getElementById("map");
// console.log(allhover);
allhover.forEach((elem,index)=>{
    // console.log(elem.getBoundingClientRect());
    let locate = elem.getBoundingClientRect();
    let x = locate.x;
    let y = locate.y;
    let addname = "test "+index;
    var ids = "building"+index;
    createTooltip(y/2,x,addname,index);
    var allTooltips = document.querySelectorAll(".tooltip");
    elem.addEventListener("click",()=>{
        var coriTooltip = document.getElementById(ids);
        allTooltips.forEach((e)=>{
            if(e.id===ids){
                console.log(e.id);
                coriTooltip.classList.remove("hidden");
            }else{
                console.log("else ",e.id);
                e.classList.add("hidden");
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
 elem.style.top=x+"px";
 elem.style.left=y+"px";
 elem.innerHTML=text;
 elem.appendChild(elemBtn);
 root.appendChild(elem);
}


