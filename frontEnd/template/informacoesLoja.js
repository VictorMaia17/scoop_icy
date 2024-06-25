let cod;
let nome;
let cnpj;
let email;
let senha;
let numero;
let rua;
let bairro;
let cidade;
let complemento;
let login;
let statusLoja;
let logo;
let descricao;
let dias;
let instagram;
let facebook;
let taxa_entrega;
let telefone;

function setLojas(cod, nome, cnpj, email, senha, numero, rua, bairro, cidade, complemento, login, statusLoja, logo, descricao, dias, instagram, facebook, taxa_entrega, telefone){
    localStorage.setItem('loja', JSON.stringify({
        cod, nome, cnpj, email, senha, numero, rua, bairro, cidade, complemento, login, statusLoja, logo, descricao, dias, instagram, facebook, taxa_entrega, telefone
    }));
    console.log("Dados da loja salvos no localStorage");
}

/*function adicionarLojas(){
    document.getElementById("logoLoja").src = logo;
    document.getElementById("emailLoja").value = email;
    document.getElementById("atendimentoLoja").value = statusLoja;
    document.getElementById("taxa_entregaLoja").value = taxa_entrega;
    document.getElementById("telefoneLoja").value = telefone;
    console.log("deu certo");
}*/