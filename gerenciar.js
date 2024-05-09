function editarCliente(cod, nome, cnpj, email, senha, numero, rua, bairro, cidade, complemento, login, status, descricao, dias, instagram, facebook, taxa_entrega, telefone){
    document.getElementById("editCod").value = cod;
    document.getElementById("editNome").value = nome;
    document.getElementById("editCnpj").value = cnpj;
    document.getElementById("editEmail").value = email;
    document.getElementById("editSenha").value = senha;
    document.getElementById("editNumero").value = numero;
    document.getElementById("editRua").value = rua;
    document.getElementById("editBairro").value = bairro;
    document.getElementById("editCidade").value = cidade;
    document.getElementById("editComplemento").value = complemento;
    document.getElementById("editLogin").value = login;
    document.getElementById("editStatus").value = status;
    document.getElementById("editDescricao").value = descricao;
    document.getElementById("editDias").value = dias;
    document.getElementById("editInstagram").value = instagram;
    document.getElementById("editFacebook").value = facebook;
    document.getElementById("editTaxa_entrega").value = taxa_entrega;
    document.getElementById("editTelefone").value = telefone;
}
function excluirCliente(cod){
    document.getElementById("excluirCod").value = cod;
}