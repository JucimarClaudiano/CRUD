function FazerAlteracao()
{
  //armazenando o nome do elemento em uma variável
  var area  = document.getElementById("area");
  // armazenando o conteudo digitado pelo o usuario
  var texto = prompt("Qual sua finalidade");

  //trocando o conteudo dentro do elemento
  area.innerHTML = texto;

}