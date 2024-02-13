// Certifique-se de que o jQuery está incluído antes deste script

// Abrir a modal ao clicar no botão "Editar"
$('.btn-editar').click(function() {
  // Obter a linha da tabela correspondente
  var linhaDaTabela = $(this).closest('tr');

  // Obter dados da sala da linha da tabela
  var idSala = linhaDaTabela.find('td:eq(0)').text();
  var nome = linhaDaTabela.find('td:eq(1)').text();
  var cargo = linhaDaTabela.find('td:eq(2)').text();
  var numeros = linhaDaTabela.find('td:eq(3)').text();
  var status = linhaDaTabela.find('td:eq(4)').text();

  // Adicionar um log para verificar o conteúdo da célula de Observações
  var obs = linhaDaTabela.find('td:eq(5)').html();
  console.log('Conteúdo da Célula de Observações:', obs);

  // Tentar acessar diretamente a textarea dentro da célula de Observações
  var obs = linhaDaTabela.find('td:eq(5) textarea').val();

  // Se a tentativa acima falhar, tentar acessar qualquer elemento de entrada dentro da célula
  if (!obs) {
      obs = linhaDaTabela.find('td:eq(5) :input').val();
  }

  // Preencher os campos da modal com os dados da sala
  $('#idSala').val(idSala);
  $('#nome').val(nome);
  $('#cargo').val(cargo);
  $('#numeros').val(numeros);
  $('#status').val(status);
  $('#obs').val(obs);

  // Adicionar um log no console para verificar os dados antes de exibir a modal
  console.log('Dados da Observação:', obs);

  // Exibir a modal
  $('#modalEditar').show();
});
