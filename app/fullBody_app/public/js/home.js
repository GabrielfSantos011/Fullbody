document.cookie = "cookieName=cookieValue; SameSite=None; Secure";

$(document).ready(function () {
    carregarVideos();
})

function carregarVideos() {
    $.ajax({
        url: '/video?action=carregarVideo', // Substitua pelo URL do endpoint
        type: 'GET',
        success: function (data) {
            var exercicios = JSON.parse(data)
            var html = "";
            for (i = 0; i < exercicios.length; i++) {
                let exercicio = exercicios[i]
                console.log(exercicio);

                    html += `
                                <li class="videos__item col-4 mt-3">
                                    <div class="video">
                                        <iframe width="100%" height="72%" "
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/too0Y7pNZFY?si=_lBV2JiAvzgwVrXX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                    <div class="descricao-video">
                                        <h3 class="text-center" style="color: white;">`+exercicio.Nome_Exercicio+`</h3>
                                        <p class="text mt-3">`+exercicio.Descricao_Exercicio+`</p>
                                    </div>
                                </li>` 

                  /*   html += `<div class="card col-6 " style="width: 18rem;">
                    <iframe width="100%" height="72%" "
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/too0Y7pNZFY?si=_lBV2JiAvzgwVrXX" title="YouTube video player" frameborder="0" allow="accelerometer;
                            autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="card-body">
                      <h5 class="card-title">`+exercicio.Nome_Exercicio+`</h5>
                      <p class="card-text">`+exercicio.Descricao_Exercicio+`</p>
                    </div>
                  </div>`   */  

            }
            $("#videoList").append(html)
        },
        error: function () {
            $('#resultado').text('Ocorreu um erro ao carregar os dados.');
        }
    });
}