let apagar = document.querySelectorAll("#btnapagar")

apagar.forEach(element => {
    element.addEventListener('click', function(e){
        e.preventDefault
        id = element.value
        document.querySelector("html").insertAdjacentHTML("beforeend",alertdel(id))
    })
    
});

function no() {
    document.querySelector(".deletepai").remove()
};


function alertdel(id) {
    var alert =
        `<div class="deletepai">
        <div class="deletebox">
          <p class="deletep">
            <span class="deletebolder">Apagar Viagem</span><br>
            <p class="margimp">
            Você tem certeza que deseja apagar esta viagem?
            Ao apagar a viagem, ela será deletada por completo e não será possível restaura-la
            </p>
          </p>
          <div class="btndel">
            <input class="btn btn-primary" type="button" value="Cancelar" onclick="no()">
            <a class="btn btn-danger" href="/produto/delete?id=${id}>">Apagar</a>
          </div>
        </div>
      </div>`
    return alert
}