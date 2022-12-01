
<meta charset="UTF-8"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style> 



</style>


<?php

$sinonimos = ["a segunda-via do boleto","a 2 via do boleto", "o boleto do cartão", "a fatura do cartão"];
$sinonimo = array_rand($sinonimos);

$termo = "Passaí";
$renda = "800,00";
$parcelas = 12;
$anuidade = 12.90;

$metaDescription = "Cartão de Crédito {$termo} Itaucard. Conheça os benefícios e solicite o seu cartão de crédito. Renda mínima de apenas R$ {$renda}";
echo $metaDescription;
echo "<br>";
echo "<hr>";


?>
<h2 class="text-center text-danger"> <?php echo "Cartão de Crédito {$termo}"; ?> Itaucard</h2>

<h2 class="text-success pt-4 pb-3">Como pedir o Cartão de Crédito <?php echo $termo ?></h2>


<p><b>Para solicitar seu Cartão de Crédito <?php echo "{$termo}"; ?>, siga os seguintes passos:</b></p>

<p>1 - Entre no site itaucartoes.com.br</p>

<p>2 - Escolha uma das opções que mais lhe atende (sem anuidade, milhas e viagens, supermercardos e outros)</p>

<p>3 - Escolha a bandeira do cartão (MasterdCard, Visa, Hipercard)</p>

<p>4 - Veja a lista de cartões que o itaucard disponibiliza</p>

<p>5 - Selecione o <b>cartão de crédito <?php echo "{$termo}"; ?></b></p>

<p>6 - Preencha o formulário e acompanhe o seu pedido por e-mail</p>


<h3 class="text-success pt-4 pb-3">Benefícios do Cartão de Crédito <?php echo $termo ?></h3>

<p>Renda Mínima: R$ <?php echo $renda ?></p>
<?php if($anuidade == 0) { ?>

    <p>Anuidade: <?php echo "Sem Anuidade"?></p>

<?php }else { ?>

    <p>Anuidade: <?php echo $parcelas?>x  R$ <?php echo $anuidade ?> = R$ <?php echo round($anuidade*$parcelas)?>.00</p>

<?php } ?>

<h3 class="text-success pt-4 pb-3">Cartão de Crédito 100% Digital <?php echo $termo ?></h3>

<p>Receba a fatura do <?php echo "<b>Cartão de Crédito {$termo}</b>"; ?> por e-mail, com alertas mensais sobre o fechamento e vencimento da sua fatura.</p>

<p>Você pode consultar sua fatura pelo App Itaú Cartões, no site Itaú Cartões ou envie um SMS para 4828 com a palavra "DIGITAL“.</p>

<p>Bem simples e muito mais seguro e ainda contribui para o meio ambiente.</p>




<h3 class="text-success pt-4 pb-3">Como acompanhar a entrega do cartão de crédito?</h3>
<p><b>Você consegue acompanhar a entrega do seu cartão canais digitais:</b></p>

<p>Pelo Site Itaú Cartões: acesse com o Cartão > Senha > Cartões > Consultar > Acompanhar pedidos.</p>

<p>Pelo App Itaú Cartões: Acesse com o cartão > senha > Serviços > Cartões aprovados.</p>

<p>Em caso do não recebimento do cartão  de crédito no prazo estipulado, entre em contato com a central de atendimento do itaucard.</p>



<h3 class="text-success pt-4 pb-3">Preciso ter conta corrente no Itaú para pedir meu cartão de crédito?</h3>

<p>Não, você pode solicitar apenas o cartão Itaú separadamente da conta corrente.</p>



<h3 class="text-success pt-4 pb-3">Qual é o melhor cartão de crédito?</h3>

<p>O melhor <b>cartão de crédito</b> é aquele que melhor se adapta as suas necessidades, confira os benefícios e vantagens que cada cartão de crédito oferece.</p> 
<p>O Itaú tem um cartão para cada perfil de seus clientes. </p>
<p>Você terá opções como: cartão sem anuidade, com ou sem cashback, com descontos em parceiros, milhas e outros benefícios.</p>
<p>As principais bandeiras estão disponíveis (Visa, Mastercard e Hipercard), é escolher o cartão que dá match com você.</p>



<h3 class="text-success pt-4 pb-3">CENTRAL DE ATENDIMENTO ITAUCARD</h3>
<h4>ITAÚ 30 HORAS:</h4>

<p><b>Telefones</b></p>

<p><b>4004 4828</b></p>
<p>Capitais e regiões metropolitanas</p>

<p><b>0800 970 4828</b></p>
<p>Demais localidades

</p><b>55 11 4004 4828</b></p>
<p>Para clientes no exterior</p>

<p>Não são permitidas chamadas a cobrar.</p>

<p>Nosso atendimento está funcionando das 08h às 22h, de segunda a sexta-feira e sábado, 09h às 22h (horário de Brasília).</p>




<p><b>Suporte digital</b></p>

<p>Para dúvidas sobre o acesso e navegação em sua conta na internet ou celular.</p>

<p><b>0300 100 1213</b></p>
<p>Todas as localidades</p>

<p>De segunda a sexta, das 08h às 20h40.</p>
<p>Sábados, das 09h às 15h.</p>