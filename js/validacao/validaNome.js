const nome = document.getElementById("nome")


//verifica se o campo esta vazio para a validação
function validaNome(){
    if (nome.value == '') {
        nome.focus()
        nome.classList.add('is-invalid')
        nome.classList.remove('d-none')
        let aviso = "Por favor insira um nome no campo"
        criaMensagemErro(nome, aviso)
        return false
    } if(nome.value != '') {
        nome.classList.remove('is-invalid')
        nome.classList.add('is-valid')
        excluiMensagemErro(nome)
        return true
    }
}

    
    

