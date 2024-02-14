$(function () {
    // alert("Ola mundo");

    var parar = document.getElementById("Video1");
    var para = document.getElementById("Video3");

    $("#video").hide();
    $("#Div2").hide();
    $("#Section2").hide();

    $("#btAssiste").click(function () {
        $("#oculto").hide();
        $("#video").show();
    })

    $("#Button1").click(function () {
        $("#Article1").hide();
        $("#Div2").show();
    })

    $(".volta").click(function () {
        $("#oculto").show();
        $("#video").hide();

        $("#Article1").show();
        $("#Div2").hide();


        parar.pause();
        para.pause();
    })

    $("#assalto").click(function () {
        sessionStorage.nome = "Assalto";
        window.location.assign("baixar.html");
        
    })

    if ((sessionStorage.nome == "Assalto")) {
        $("#Section1").hide();
        $("#Section2").show();
    }

    sessionStorage.clear();

})
/*
navigator.mediaDevices.getUserMedia({video:true}).then(stream =>{
    const videoElement = document.querySelector("#video")
    videoElement.srcObject = stream
}).catch(error=>{console.log(error)})
*/