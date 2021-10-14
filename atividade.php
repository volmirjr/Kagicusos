<?php
//Temos 3 intervalos de CEP são eles:   '09000001', até '09399999',  '09600001' até '09899999' e '09500001' até '09599999'. Precisa identificar se o CEP informado está entre um dos 3 intervalos. Criar uma classe em PHP que retorne True ou False para o CEP definido na hora de instanciar o objeto.
class Cep{

 //public $cep = '09000002'; 

 public function Intervalo($cep){

 if (($cep >= '09000001') &&( $cep <= '09399999')) {
	return  true;
		}elseif (($cep >= '09500001') && ($cep <= '09599999')) {
			return  true;
			}elseif (($cep >= '09600001') && ($cep <= '09899999' )){
				return  true;
				}else{
					return  false;
					}

		$pesquisa = Intervalo('09000001');
		echo $pesquisa ;

	}//var_dump($cep);

}
?>