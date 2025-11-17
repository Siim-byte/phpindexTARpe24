//sirge joon
function sirgeJoon() {
    //maarame tahvli
    const tahvel=document.getElementById('tahvel');
    if (tahvel.getContext){
        let t=tahvel.getContext('2d'); // anname tahvlinime  t
        //joon
        t.beginPath();
        t.strokeStyle="red";
        t.lineWidth = 1;
        t.moveTo(20, 80); //alguspunkt
        t.lineTo(50, 30); // lopppunkt
        t.stroke();
    }
}
//kolmnurk
function kolmnurk() {
    //maarame tahvli
    const tahvel=document.getElementById('tahvel');
    if (tahvel.getContext){
        let t=tahvel.getContext('2d'); // anname tahvlinime  t
        //joon
        t.beginPath();
        t.strokeStyle="red";
        t.fillStyle="red"; //taust
        t.lineWidth = 1;
        t.moveTo(50, 100); //alguspunkt
        t.lineTo(150, 100);
        t.lineTo(150, 200);
        t.lineTo(50, 100); // lopppunkt
        t.stroke();
        t.fill();
    }
}
function puhasta() {
    const tahvel=document.getElementById('tahvel');
    if (tahvel.getContext){
        let t=tahvel.getContext('2d');
        t.clearRect(0,0,300,250); // 0,0 -vasak uleval tahvli nurk, 300-tahvli laius, 250- tahvli korgus
    }
}
//ring
function ring() {
    //maarame tahvli
    const tahvel=document.getElementById('tahvel');
    let r=document.getElementById('raadius');
    if (tahvel.getContext){
        let t=tahvel.getContext('2d'); // anname tahvlinime  t
        //umberjoon
        t.beginPath();
        t.strokeStyle="green";
        t.lineWidth = 1;
        t.arc(50,50, r.value, 0, 2*Math.PI, true); //x, y keskpunktid, R
        t.stroke();
        //ring
        t.beginPath();
        t.fillStyle="green";
        t.lineWidth = 1;
        t.arc(50,120, r.value, 0, 2*Math.PI, true); //x, y keskpunktid, R
        t.fill();
    }
}
function ristkylik() {
    const tahvel=document.getElementById('tahvel');
    if (tahvel.getContext){
        let t=tahvel.getContext('2d');
        t.fillStyle="yellow";
        t.fillRect(50,30,laius.value,korgus.value); // 0,0 -vasak uleval tahvli nurk, 300-tahvli laius, 250- tahvli korgus
    }
}
function  pilt() {
    const tahvel = document.getElementById('tahvel');
    if (tahvel.getContext) {
        let t = tahvel.getContext('2d');

        const fail = new Image();
        fail.src = "https://picsum.photos/200/300/?blur";
        fail.onload = () => {
            t.drawImage(fail, 50, 50, 100, 100);
        }


    }
}
function valgusfoor(){
    const tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d');

        t.fillStyle="black";
        t.fillRect(120,20,60,210);

        t.arc(150,70,20,0,Math.PI*2);
        t.fill();
        t.arc(150,140,20,0,Math.PI*2);
        t.fill();
        t.arc(150,210,20,0,Math.PI*2);
        t.fill();
    }
}

function mine(){
    const tahvel=document.getElementById('tahvel');
    let t=tahvel.getContext('2d');
    puhasta();
    valgusfoor();

    t.fillStyle="green";
    t.arc(150,210,20,0,Math.PI*2);
    t.fill();
}

function oota(){
    const tahvel=document.getElementById('tahvel');
    let t=tahvel.getContext('2d');
    puhasta();
    valgusfoor();

    t.fillStyle="yellow";
    t.arc(150,140,20,0,Math.PI*2);
    t.fill();
}

function seisa(){
    const tahvel=document.getElementById('tahvel');
    let t=tahvel.getContext('2d');
    puhasta();
    valgusfoor();

    t.fillStyle="red";
    t.arc(150,70,20,0,Math.PI*2);
    t.fill();
}