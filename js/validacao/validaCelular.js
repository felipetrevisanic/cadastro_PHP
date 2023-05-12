const celular = document.getElementById('celular')

//funcao para a mascara para numeros de celular
function maskCelular() {
    let novoWhats = celular.value
    if (novoWhats.length == 2) {
        celular.value += ') '
        celular.value = '(' + celular.value
    }
    if (novoWhats.length == 6) {
        celular.value += '.'
    }
    if (novoWhats.length == 11) {
        celular.value += '-'
    }
}
// escutador para realizar a adicao da mascara no momento da digitação do numero
celular.addEventListener('keypress', () => { maskCelular() }) 

function validaCelular() {
    //verifica se o campo esta vazio
    validacaoVazio(celular) 
    //força que o numero de celular possua todos os caracteres necessários para a validacao do numero junto com os caracteres da mascara
    if (celular.value.length === 16) {
        //realiza a devida troca para a apresentação gráfica da validação ao usuário
        celular.classList.add('is-valid')
        celular.classList.remove('is-invalid')
        //exclui a mensagem de erro caso ela exista...
        excluiMensagemErro(celular)
        //retorno da funcao para que seja averiguado esta validacao funcionou possibilitando que seja gravado no banco de dados 
        return true
    } else {
        //realiza a devida troca para a apresentação gráfica da validação ao usuário
        celular.classList.add('is-invalid')
        celular.classList.remove('is-valid')
        celular.focus()
        //inclui uma mensagem de erro junto com o devido aviso para o campo
        let aviso = 'Por favor insira um número celular válido. Ex: (99)9.9999-9999'
        criaMensagemErro(celular, aviso)
        return false
    }
}
