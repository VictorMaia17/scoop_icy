function editarCliente(cod, nome, numero, rua, telefone, bairro, cidade, rg, cpf, complemento, login, email, senha){
    document.getElementById("editCod").value = cod;
    document.getElementById("editNome").value = nome;
    document.getElementById("editNumero").value = numero;
    document.getElementById("editRua").value = rua;
    document.getElementById("editTelefone").value = telefone;
    document.getElementById("editBairro").value = bairro;
    document.getElementById("editCidade").value = cidade;
    document.getElementById("editRg").value = rg;
    document.getElementById("editCpf").value = cpf;
    document.getElementById("editComplemento").value = complemento;
    document.getElementById("editLogin").value = login;
    document.getElementById("editEmail").value = email;
    document.getElementById("editSenha").value = senha;
}
function excluirCliente(cod){
    document.getElementById("excluirCod").value = cod;
}