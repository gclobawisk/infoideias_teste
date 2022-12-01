
<meta charset="UTF-8"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style> 



</style>


<?php

$sinonimos = ["a segunda-via do boleto","a 2 via do boleto", "o boleto do cartão", "a fatura do cartão"];
$sinonimo = array_rand($sinonimos);

$termo = "Cagece";
$opcoes = 2;
$metaDescription = "Saiba como emitir a 2 via do boleto {$termo} de forma simples e rápida. Basta seguir os passos e emitir a {$termo} 2 via. ";
echo $metaDescription;


?>

<h2 class="text-center text-danger"> Título <?php echo "{$termo} 2 via"; ?></h2>


<p>A empresa disponibiliza um portal para emissão da 2 via <?php echo $termo ?>.</p>
<p>o cliente terá <?php echo strtoupper($opcoes) ?> opções para emitir a segunda via da conta.</p>
<p>Confira as opções disponíveis e siga os passos abaixo: </p>

<h3 class="text-danger pt-4 pb-3">2 via <?php echo $termo ?> Pelo Site</h3>

<p>1 - Acesse o site:</p>

<p>a 2 via da fatura Cagece foi descontinuado e todas as solicitações deverão ser feitas por meio da Gesse, a Assistente Virtual da Cagece, ou pelo seu smartphone ou tablet, no Cagece App.</p>
<p>Sugerimos que você já busque se familiarizar com a nova versão do Cagece App. Para fazer o download, utilize o link abaixo relativo ao seu sistema operacional:</p>


<h3 class="text-danger pt-4 pb-3">2 via <?php echo strtoupper($termo) ?> Pela Atendente Virtual:</h3>
<p>A atendente virtual gesse vai te ajudar com os seguintes serviços: </p>

<h3 class="text-danger pt-4 pb-3"> APLICATIVO <?php echo strtoupper($termo) ?> </h3>

Baixar aplicativo pelo Google Play
Baixar aplicativo pela App Store

<h3 class="text-danger pt-4 pb-3"> SOBRE A EMPRESA <?php echo strtoupper($termo) ?> </h3>




<h3 class="text-danger pt-4 pb-3"> CENTRAL DE ATENDIMENTO <?php echo strtoupper($termo) ?> </h3>
Em caso de dúvida consulte a central de atendimento <?php echo "{$termo}."; ?>