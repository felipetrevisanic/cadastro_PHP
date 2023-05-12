const formulario = document.getElementById('formulario')
const MensagemErro = document.querySelectorAll('.alert')

//cria uma mensagem de erro 
function criaMensagemErro(data, aviso){
    
    let divMaster = data.parentNode
    let nMax = divMaster.children.length
    let div = document.createElement('div')
    let elemento = document.createElement('span')

    if(nMax < 3){
        div.className ="alert alert-danger div"
        elemento.innerHTML = aviso
        divMaster.appendChild(div)
        div.appendChild(elemento)
    }

}

//exclue a mensagem de erro se ela existir
function excluiMensagemErro(data){
    let divMaster = data.parentNode
    let nMax = divMaster.children.length
    let div = document.querySelector('.div')
    if(nMax > 2){
        div.remove()
    }

}

//valida se o espaço esta vazio
function validacaoVazio(dado) {
    if (dado.value == '') {
        dado.focus()
        dado.classList.add('is-invalid')
        return false
    } else {
        dado.classList.remove('is-invalid')
        dado.classList.add('is-valid')
        return true
    }
}

//solicita que seja realizado todas as validações antes de qualquer outro movimento
function validacao(){
    validaNome()
    validaIdade()
    validaEmail()
    validaTelefone()
    validaCelular()
    validaMensagem()

}

//verifica se todas as validações foram atendidas e retorna true or false para que possa se encaminha para a proxima pagina
function retornoValidacao(){
    if(validaNome() && validaIdade() && validaEmail() && validaTelefone() && validaCelular() && validaMensagem()){
        return true
    }else{
        return false
    }
}

//escutador do formulario, ativado no momento que é enviado algo atraves do botao 
formulario.addEventListener("submit", (e) => {
    e.preventDefault()
    //realiza as validacoes
    validacao()
    if(retornoValidacao()){
        //envia os dados do formulario para a proxima pagina PHP dando continuidade ao POST
        formulario.submit()
    }
    
})
