// $(function () {

//     $("#ImageMeuPerf").mousemove(function () {
//         alert("sou um alerta");
//         console.log("asdfghjkl");
//     });
// });


$(function () {
    $("#ImageMeuPerf").click(function () {
        window.document.getElementById("ImageMeuPerf").style.background = "#32CD32";
        window.document.getElementById("ImageMeuPerf").style.color = "#32CD32";
    });

});

$(function () {
    $("#ImageMeuLog").click(function () {
        window.document.getElementById("ImageMeuLog").style.background = "#32CD32";
        window.document.getElementById("ImageMeuLog").style.color = "#32CD32";
    });

});

$(function () {
    $("#ImageMeuRegis").click(function () {
        window.document.getElementById("ImageMeuRegis").style.background = "#32CD32";
        window.document.getElementById("ImageMeuRegis").style.color = "#32CD32";
    });

});

$(function () {
    $(".CorcadastrarID").click(function () {
        window.document.getElementsByClassName("CorcadastrarID").style.background = "#00BFFF";
        // window.document.getElementById("CorcadastrarID").style.color = "#00BFFF";
    });
});
