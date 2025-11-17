//checkbox valikud
function valiAnsambel(){
    let abba=document.getElementById('abba');
    let the=document.getElementById('the');
    let system=document.getElementById('system');
    let lemon=document.getElementById('lemon');
    let vastus=document.getElementById('vastus');

    let valik="";

    if(abba.checked){
        valik+=abba.value+", ";
    }
    if(the.checked){
        valik+=the.value+", ";
    }
    if(system.checked){
        valik+=system.value+", ";
    }
    if(lemon.checked){
        valik+=lemon.value+", ";
    }


    vastus.innerHTML="Sinu valitud muusikud:"+valik;
    vastus.style.color="red";
}
function minuArvamus(){
    let arvamus=document.getElementById('arvamus');
    let vastus2=document.getElementById('vastus2');

    vastus2.innerHTML="Sinu arvamus:"+arvamus.value;
    vastus2.style.color="red";


}
function tundiMuusika(){
    let tundi=document.getElementById('tundi');
    let vastus3=document.getElementById('vastus3');
    vastus3.innerHTML="Sa kuulad muusikat  "+tundi.value+"  tundi päevas";
    vastus3.style.color="red";
}
function radioValik() {
    let ja = document.getElementById('ja');
    let ei = document.getElementById('ei');
    let vastus4 = document.getElementById('vastus4');

    if (ja.checked) {
        vastus4.innerHTML = "Raadio kuulamine: Jah";
    } else if (ei.checked) {
        vastus4.innerHTML = "Raadio kuulamine: Ei";
    } else {
        vastus4.innerHTML = "Tee oma valiku!";
    }

    vastus4.style.color = "red";
}
function nimetatudJaamad() {
    let jaamad = document.getElementById('nimetada').value;
    let vastus5 = document.getElementById('vastus5');

    if (jaamad.trim() !== "") {
        vastus5.innerHTML = "Sinu nimetatud jaamad: " + jaamad;
    } else {
        vastus5.innerHTML = "";
    }
    vastus5.style.color = "red";
}
function muusikaStiilSelect() {
    let muusika = document.getElementById('muusika').value;
    let vastus6 = document.getElementById('vastus6');

    if (muusika !== "") {
        vastus6.innerHTML = "Sinu vastus: " + muusika;
    } else {
        vastus6.innerHTML = "Palun vali muusikastiil!";
    }
    vastus6.style.color = "red";
}

function puhasta(){
    document.getElementById('abba').checked=false;
    document.getElementById('the').checked=false;
    document.getElementById('system').checked=false;
    document.getElementById('lemon').checked=false;
    document.getElementById('vastus').innerText="";

    document.getElementById('arvamus').value="";
    document.getElementById('vastus2').innerText="";

    document.getElementById('tundi').value=0;
    document.getElementById('vastus3').innerText="";

    document.getElementById('ja').checked=false;
    document.getElementById('ei').checked=false;
    document.getElementById('vastus4').innerText="";

    document.getElementById('nimetada').value="";
    document.getElementById('vastus5').innerText="";

    document.getElementById('muusika').value="";
    document.getElementById('vastus6').innerText="";

    document.getElementById('kokkuvote').innerHTML="";
}
function saada(){
    let abba = document.getElementById('abba');
    let the = document.getElementById('the');
    let system = document.getElementById('system');
    let lemon = document.getElementById('lemon');
    let arvamus = document.getElementById('arvamus');
    let tundi = document.getElementById('tundi');
    let ja = document.getElementById('ja');
    let ei = document.getElementById('ei');
    let nimetada = document.getElementById('nimetada');
    let muusika = document.getElementById('muusika');
    let kokkuvote = document.getElementById('kokkuvote');

    let valik = "";
    if (abba.checked) valik += abba.value + ", ";
    if (the.checked) valik += the.value + ", ";
    if (system.checked) valik += system.value + ", ";
    if (lemon.checked) valik += lemon.value + ", ";

    let raadio = "";
    if (ja.checked) raadio = ja.value;
    if (ei.checked) raadio = ei.value;

    kokkuvote.innerHTML =
        "Muusikud: " + valik +""+
        "Arvamus: " + arvamus.value + ", " +
        "Kuulad muusikat: " + tundi.value + " tundi päevas, " +
        "Raadio kuulamine: " + raadio + ", " +
        "Raadiojaamad: " + nimetada.value + ", " +
        "Lemmikmuusika: " + muusika.value;

    kokkuvote.style.color = "red";
}