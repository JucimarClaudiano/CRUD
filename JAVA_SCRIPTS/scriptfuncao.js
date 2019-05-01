function FazerAlteracao(var1)
{
  //armazenando o nome do elemento em uma variável
  var area = document.getElementById("area");
  // armazenando o conteudo digitado pelo o usuario
  var texto = prompt("Complete a frase");

  //trocando o conteudo dentro do elemento
  area.innerHTML = texto+" "+var1;

}