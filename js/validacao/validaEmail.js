const email = document.getElementById("email")


//confere se o email esta com os devidos caracteres e espaço através de um regex
function confereEmail(email) {
    return dadoEmail = /^[\w+.]+@\w+\.\w{2,}(?:\.\w{2})?$/.test(email)
}

function validaEmail() {
    //valida se o campo esta vazio
    validacaoVazio(email)
    //utiliza a funcao confereEmail para validar a formatação do email
    if (confereEmail(email.value)) {
        //realiza a devida troca para a apresentação gráfica da validação ao usuário
        email.classList.add('is-valid')
        email.classList.remove('is-invalid')
        //exclui a mensagem de erro caso ela exista...
        excluiMensagemErro(email)
        //retorno da funcao para que seja averiguado esta validacao funcionou possibilitando que seja gravado no banco de dados 
        return true
    } else {
        //realiza a devida troca para a apresentação gráfica da validação ao usuário
        email.classList.add('is-invalid')
        email.classList.remove('is-valid')
        email.focus()
         //inclui uma mensagem de erro junto com o devido aviso para o campo
        let aviso = "Por favor insira um e-mail válido. Ex: usuario@email.com"
        criaMensagemErro(email, aviso)
        //retorno da funcao para que seja averiguado esta validacao 
        return false
    }
}
