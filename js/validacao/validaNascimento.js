const dataNascimento = document.getElementById('data__nascimento')

function validaIdade() {
    //data atual
    const data = new Date()
    //data de nascimento inserido pelo usuario
    const dadoNascimento = new Date(dataNascimento.value)

    //idade da pessoa, realizando o calculo ano atual menos ano de nascimento
    let idade = data.getFullYear() - dadoNascimento.getFullYear()
    //calcula o mes atual menos o mes da pessoa retornando um numero que sera usado pra precisao do calcula da idade da pessoa
    let mes = data.getMonth() - dadoNascimento.getMonth()
    //calcula o mes atual menos o mes da pessoa retornando um numero que sera usado pra precisao do calcula da idade da pessoa
    let dia = data.getDay() - dadoNascimento.getDay() -2
    //calculo que verifica a idade da pessoa conferindo o mes e dia de nascimento dela em relação ao dia atual
    if (dia < 0 || (dia === 0 && data.getDate() < dadoNascimento.getDate())) {
        mes--;
    }
    if (mes < 0 || (mes === 0 && data.getDate() < dadoNascimento.getDate())) {
        idade--;
    }
    
    //valida se tem espaço vazio  e se a pessoa é maior de idade 
    validacaoVazio(dataNascimento)
    if(idade < 0) {
        let aviso = 'Por favor insira uma data de nascimento válida'
        dataNascimento.classList.remove('is-valid')
        dataNascimento.classList.add('is-invalid')
        dataNascimento.focus()
        criaMensagemErro(dataNascimento,aviso)
        return false
    }else if (idade >= 18) {
        dataNascimento.classList.add('is-valid')
        dataNascimento.classList.remove('is-invalid')
        excluiMensagemErro(dataNascimento)
        return true
    } else {
        let aviso = 'Por favor insira uma data de nascimento válida. OBS: A pessoa deve ser maior de idade'
        dataNascimento.classList.remove('is-valid')
        dataNascimento.classList.add('is-invalid')
        dataNascimento.focus()
        criaMensagemErro(dataNascimento, aviso)
        return false
    }

}

