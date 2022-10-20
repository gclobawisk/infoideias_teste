<?php

namespace SRC;

class Funcoes
{
    /*
    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.
	Exemplos para teste:
	Ano 1905 = século 20
	Ano 1700 = século 17
     * */
    public function SeculoAno(int $ano): int {
        $seculos = 0;

        if ($ano <= 100){
            return 1;
        } 
        else {
            
            if (($ano % 100) == 0)  {
                $seculos = $ano / 100;
                return $seculos;
    
            }else{
                $seculos = $ano / 100;
                return $seculos + 1;
            }
        }
    }
   	

    

	
	
	/*
    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido
    Exemplo para teste:
    Numero = 10 resposta = 7
    Número = 29 resposta = 23
     * */
    public function PrimoAnterior(int $numero): int {

        $array = [];

        for ($i = 1; $i <= $numero-1; $i++){
            $divisores = 0;

            for ($j = 1; $j <= $numero-1; $j++){
                
                if (($i % $j) == 0){
                    $divisores = $divisores + 1;
                } 

            } 

            if ($divisores <= 2 && $i != 1){
                array_push($array, $i);
            }
        }

        $ultimo = $array[ count($array) - 1 ];

        return $ultimo;
        
    }










    /*
    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.
    Exemplo para teste:
	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);
	resposta = 25
     * */
    public function SegundoMaior(array $arr): int {

        $maior = $arr[0][0];
        $segundo_maior = $arr[0][0];


        #Percorri o array multidimensional para encontrar o maior
        foreach ($arr as $i){
            
            
            foreach ($i as $j){

                if ($j >= $maior) {
                    $maior = $j;
                }

            }

        }

        #Percorri novamente o array multidimensional para encontrar o menor
        foreach ($arr as $i){

            foreach ($i as $j){
                if ($j < $maior && $j >= $segundo_maior){
                    $segundo_maior = $j;

                }
            }

        
        }


        return $segundo_maior;
        
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.
	Exemplos para teste 
	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes
    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true
     * */
    
	public function SequenciaCrescente(array $arr): bool {
        $erros = 0;

        $i = 0;
        # WHILE PARA REMOVER O PRIMEIRO ERRO SEQUENCIAL ENCONTRADO
        while ($i < count($arr)){

            if ($arr[$i] >= $arr[$i+1]){
                unset($arr[$i]);
                $erros = $erros + 1;
                break;  
            }
            $i++;
        }

        #REINDEXAÇAÇÃO POR CONTA DO ELEMENTO REMOVIDO DO ÍNDICE
        $arr = array_values($arr);

        #FOR ATÉ O COMPRIMENTO DO ARRAY - ERROS E VERIFICAR SE HÁ ERROS SEQUENCIAIS
        for ($i = 0; $i < count($arr)-$erros; $i++){

            if ($arr[$i] >= $arr[$i+1]){
                
                $erros = $erros + 1;
            }
                    
        }

    
        
        if ($erros <= 1){
            return True; 

        }else{
            return False; 

        }
            
    }
   

}

echo 'Retorno da Função 1→ ';
$funcao1 = new Funcoes();
echo $funcao1->Seculoano(1700);
echo '<br>';

echo 'Retorno da Função 2 → ';
$funcao2 = new Funcoes();
echo $funcao2->PrimoAnterior(101);
echo '<br>';


echo 'Retorno da Função 3 → ';
$funcao3 = new Funcoes();
$arr = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);
echo $funcao3->SegundoMaior($arr);
echo '<br>';



echo 'Retorno da Função 4 → ';
$funcao4 = new Funcoes();
echo $funcao4->SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]);


