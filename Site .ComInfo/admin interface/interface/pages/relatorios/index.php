
<?php	
	include_once("conexao.php");
	$html = '<table width=100% border= none>';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Marca/Componentes</th>';
	$html .= '<th>Tarefa</th>';
	$html .= '<th>Estado</th>';
	$html .= '<th>Preço</th>';
	$html .= '<th>Administradores</th>';
	$html .= '<th>Id Cliente</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_transacoes ="SELECT e.*, a. `nome` AS administradores FROM `equipamento` AS e
	INNER JOIN `administradores` AS a ON e.`id_Administradores` = a.`id`";
	$resultado_trasacoes = mysqli_query($conexao, $result_transacoes);
	while($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){
		$html .= '<tr><td style="text-align:center;">'.$row_transacoes['id'] . "</td>";
		$html .= '<td style="text-align:center">'.$row_transacoes['marca'] . "</td>";
		$html .= '<td style="text-align:center">'.$row_transacoes['requisitos'] . "</td>";
		$html .= '<td style="text-align:center">'.$row_transacoes['descricao'] . "</td>";
		$html .= '<td style="text-align:center;">R$ '.$row_transacoes['preco'] . "</td>";
		$html .= '<td style="text-align:center">'.$row_transacoes['administradores'] . "</td>";
		$html .= '<td style="text-align:center">'.$row_transacoes['id_Cliente'] . "</td></tr>";
	
		
	} 
	
	//Mostrando o Resultado
	
	

	$html .= '</tbody>';
	$html .= '</table><br>';
	$html .= '<center>';
	$html .='<table>';
	$html .= '<tr>';
	//$html .= '<th>_______________________________________</th>';
	$html .= '<th>Valor Total Em R$:</th>';
	$html .= '</tr>';
	$pesquisa ="SELECT sum(preco) FROM equipamento";
	$total= mysqli_query($conexao, $pesquisa);
	while($sum = mysqli_fetch_array($total)){

	
	$html .='<tr><td style="text-align:center"> R$ '.$soma = $sum['sum(preco)'].'</td></tr>';
	};
	$html .='</table>';
	$html .= '</center>';
                  
	

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">.ComInformática - Relatório</h1><p style="text-align: center; color: gray">
			.ComInformática o Melhor Lugar Para o Seu Equipamento </p>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_ComInformatica.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>
<style>
table : td{
	text-align:center;
	margin:3px;
}</style>