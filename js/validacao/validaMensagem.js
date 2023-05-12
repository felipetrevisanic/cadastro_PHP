const mensagem = document.getElementById('mensagem')

//valida se o campo esta vazio
function validaMensagem(){
    if (mensagem.value == '') {
        mensagem.focus()
        mensagem.classList.add('is-invalid')
        let aviso = 'Por favor insira uma mensagem'
        criaMensagemErro(mensagem, aviso)
        return false
    } else {
        mensagem.classList.remove('is-invalid')
        mensagem.classList.add('is-valid')
        excluiMensagemErro(mensagem)
        return true
    }
}
