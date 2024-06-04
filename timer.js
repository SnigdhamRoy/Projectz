const text=document.getElementById("get");
const num=document.getElementById("num").value;
let start=new Date().getTime();
let avg;
let total=0;


function makeShapeAppear(){
    let width = (Math.random() * 50)+50;
    let height = (Math.random() * 50)+50;
    let top = Math.random() * 150;
    let left =Math.random() * 400;

    document.getElementById("shape").style.borderRadius="50%";
    document.getElementById("shape").style.width = width + "px";
    document.getElementById("shape").style.top = top + "px";
    document.getElementById("shape").style.height = height + "px";
    document.getElementById("shape").style.left = left + "px";
    document.getElementById("shape").style.display = "block";
    start=new Date().getTime();
}

function Textdisappear(){
    setTimeout(()=>{text.style.display="none";},10000000)
    }
    Textdisappear();

function AppearafterDelay(){
setTimeout(makeShapeAppear, Math.random(),5000);
}
AppearafterDelay();


document.getElementById("get").onclick = function(){
    document.getElementById("get").style.display="none";
    document.getElementById("shape").onclick = function(){
            document.getElementById("shape").style.display="none";
            let end = new Date().getTime();
            let timetaken = (end - start)/1000;
            document.getElementById("timeTaken").innerHTML = timetaken + "s";
            AppearafterDelay();
            }
        }
