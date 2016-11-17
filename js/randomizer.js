    <!--Variabel Global-->

    var angka=[];
    var answer=[];
    var score=0;
    var checkanswer=[];
    var timelimit=300;//in seconds
    var interval=setInterval('count()' , 1000);
    function count() {
        timelimit--;
        if(timelimit >=0) { 
            document.getElementById('time').innerHTML = + timelimit + " seconds";
        }
        else {
            alert("TIMEOUT!");
            hasil();
        }
    }
    function randomize(level,operator){
        if(level == "easy"){
            easy();
            document.getElementById('difficult').innerHTML="Easy";
        }
        else if (level == "medium") {
            medium();
            document.getElementById('difficult').innerHTML="Medium";
        }
        else{
            insane();
            document.getElementById('difficult').innerHTML="Insane";
        }
        if(operator == "add" || operator == "multiply"){
            for(i=0;i<20;i++){
                angka[i] = Math.floor(Math.random() * (maximum - minimum + 1)) + minimum;
            }
        }
        else if(operator=="minus"){
            for(i=0;i<20;i++){
                if(i%2==1){
                    angka[i] = Math.floor(Math.random() * (angka[i-1] - minimum + 1));
                }
                else{
                    angka[i] = Math.floor(Math.random() * (maximum - minimum + 1)) + minimum;
                }
            }
        }
        output(operator);
    }
    function output(operator){
        for(i=0;i<20;i++){
            document.getElementById("question"+i).innerHTML=angka[i];
        }
        if(operator == "add"){
            for(i=0;i<10;i++){
                document.getElementsByName("oper")[i].innerHTML="+";
            }
            answer[0] = angka[0] + angka[1];
            answer[1] = angka[2] + angka[3];
            answer[2] = angka[4] + angka[5];
            answer[3] = angka[6] + angka[7];
            answer[4] = angka[8] + angka[9];
            answer[5] = angka[10] + angka[11];
            answer[6] = angka[12] + angka[13];
            answer[7] = angka[14] + angka[15];
            answer[8] = angka[16] + angka[17];
            answer[9] = angka[18] + angka[19];
        }
        else if(operator=="minus"){
            for(i=0;i<10;i++){
                document.getElementsByName("oper")[i].innerHTML="-";
            }
            answer[0] = angka[0] - angka[1];
            answer[1] = angka[2] - angka[3];
            answer[2] = angka[4] - angka[5];
            answer[3] = angka[6] - angka[7];
            answer[4] = angka[8] - angka[9];
            answer[5] = angka[10] - angka[11];
            answer[6] = angka[12] - angka[13];
            answer[7] = angka[14] - angka[15];
            answer[8] = angka[16] - angka[17];
            answer[9] = angka[18] - angka[19];
        }
        else if(operator=="multiply"){
            for(i=0;i<10;i++){
                document.getElementsByName("oper")[i].innerHTML="*";
            }
            answer[0] = angka[0] * angka[1];
            answer[1] = angka[2] * angka[3];
            answer[2] = angka[4] * angka[5];
            answer[3] = angka[6] * angka[7];
            answer[4] = angka[8] * angka[9];
            answer[5] = angka[10] * angka[11];
            answer[6] = angka[12] * angka[13];
            answer[7] = angka[14] * angka[15];
            answer[8] = angka[16] * angka[17];
            answer[9] = angka[18] * angka[19];
        }
    }
    function easy(){
        minimum=1;
        maximum=10;
    }
    function medium(){
        minimum=20;
        maximum=50;
    }
    function insane(){
        minimum=40;
        maximum=100;
    }
    function hasil(){
        clearInterval(interval);
        for(i=0;i<10;i++){
            if (document.getElementById("answer"+i).value == answer[i]) {
                score+=10;
            } else {
                score+=0;
            }
            document.getElementById("answer"+i).disabled=true;
        }
        document.getElementById("score").value=score;
        document.getElementById("cekscore").disabled=true;  
        document.getElementById("savescore").disabled=false;
    }