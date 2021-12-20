function checkJuegos(){
    var checkBoxCartas = document.getElementById("Cartas");
    var C = document.getElementById("C");
    var checkBoxAjedrez = document.getElementById("Ajedrez");
    var A = document.getElementById("A");
    var checkBoxParchis = document.getElementById("Parchis");
    var P = document.getElementById("P");
    var checkBoxDardos = document.getElementById("Dardos");
    var DA = document.getElementById("DA");
    var checkBoxDomino = document.getElementById("Domino");
    var D = document.getElementById("D");
    var checkBoxVillar = document.getElementById("Villar");
    var V = document.getElementById("V");
    var checkBoxFutbolin = document.getElementById("Futbolin");
    var F = document.getElementById("F");

    if(checkBoxCartas.checked == true){
        C.style.color = "darkblue";
    }else
        C.style.color = "black";
    if(checkBoxAjedrez.checked == true){
        A.style.color = "darkblue";
    }else
        A.style.color = "black";
    if(checkBoxParchis.checked == true){
        P.style.color = "darkblue";
    }else
        P.style.color = "black";
    if(checkBoxDardos.checked == true){
        DA.style.color = "darkblue";
    }else
        DA.style.color = "black";
    if(checkBoxDomino.checked == true){
        D.style.color = "darkblue";
    }else
        D.style.color = "black";
    if(checkBoxVillar.checked == true){
        V.style.color = "darkblue";
    }else
        V.style.color = "black";
    if(checkBoxFutbolin.checked == true){
        F.style.color = "darkblue";
    }else
        F.style.color = "black";
}