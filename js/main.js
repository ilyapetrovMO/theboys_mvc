function tableSubmit(){
    var xmlh = new XMLHttpRequest();
    xmlh.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
            var response = this.responseText;
            document.getElementById('numberAjax').innerHTML = response.slice(0,1);
            document.getElementById('tableAjax').innerHTML = this.responseText;
        }
    };
    xmlh.open("GET",'localhost/dolgi',true);
    xmlh.send();
}

function delShit(){
    document.getElementById('numberDolg').innerHTML = "123";
}

