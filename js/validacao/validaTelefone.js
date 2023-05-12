const telefone = document.getElementById('telefone')

//mascara para o telefone
function maskTelefone() {
    let novoTelefone = telefone.value
    if (novoTelefone.length == 2) {
        telefone.value += ') '
        telefone.value = '(' + telefone.value
    }
    if (novoTelefone.length == 9) {
        telefone.value += '-'
    }
}
//adicona a mascara no momento em que o usuario esta digitando
telefone.addEventListener('keypress', () => { maskTelefone() })

function validaTelefone() {

    validacaoVazio(telefone)
    //valida se o telefone possui todos os caracteres necessário
    if (telefone.value.length === 14) {
        telefone.classList.add('is-valid')
        telefone.classList.remove('is-invalid')
        excluiMensagemErro(telefone)
        return true
    } else {
        telefone.classList.add('is-invalid')
        telefone.classList.remove('is-valid')
        telefone.focus()
        let aviso = 'Por favor insira um número celular válido. Ex: (99)9999-9999'
        criaMensagemErro(telefone, aviso)
        return false
    }
}
