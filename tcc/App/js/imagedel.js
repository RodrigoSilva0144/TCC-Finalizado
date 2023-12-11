let img = document.querySelectorAll("#imgdel")

img.forEach(element => {

    element.addEventListener('click', function (event) {
        event.preventDefault
        let imgclick = event.target;
        let idimg = element.name;
        document.querySelector("html").insertAdjacentHTML("beforeend",alertdel())
        
        document.querySelector("#apagar").addEventListener('click', function(){
         fetch('http://localhost:8000/produto/deleteimg?id=' + idimg, {
            method: 'DELETE',
        })
            .then(res => res.text()) // or res.json()
            .then(res => console.log(res))
            document.querySelector(".deletepai").remove()
            location. reload()
        })
    })

});

function no() {
    document.querySelector(".deletepai").remove()
};

function alertdel() {
    var alert =
        `<div class="deletepai">
        <div class="deletebox">
          <p class="deletep">
            <span class="deletebolder">Apagar Imagem</span><br>
            <p class="margimp">
            Você tem certeza que deseja apagar esta Imagem?
            Ao apagar a imagem, ela será deletada por completo e não será possível restaura-la
            </p>
          </p>
          <div class="btndel">
            <input class="btn btn-primary" type="button" value="Cancelar" onclick="no()">
            <button type="button" id="apagar" class="btn btn-danger">Apagar</button>
          </div>
        </div>
      </div>`
    return alert
}

let file = document.querySelector("#files");

file.addEventListener('change', (e) => {

    if(file.files.length <= 0){
        return;
    }

    let reader = new FileReader();

    reader.onload = () => {

        document.querySelector(".teste").innerHTML += addfoto(reader.result);
    }

    reader.readAsDataURL(file.files[0])

})

function addfoto(imagem){
    var foto = 
    `<img id="imgdel" name="<?= $img->id ?>" class="imgatualizar" src="${imagem}">`
    return foto
}