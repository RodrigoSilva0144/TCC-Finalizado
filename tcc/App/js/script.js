document.querySelector("#btnadd").addEventListener('click', function(){
    let modal = document.querySelectorAll('.modal')
    modal.forEach(element => {
        element.style.display = 'none'
        
    });
})