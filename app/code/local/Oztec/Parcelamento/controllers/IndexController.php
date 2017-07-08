<?php

class Oztec_Parcelamento_IndexController extends Mage_Core_Controller_Front_Action {

public function indexAction() {

$preco_inicial = $this->getRequest()->get('preco');
$preco = str_replace(array('R','$','.'), '', $preco_inicial);
$quantidade_parcelas = Mage::getStoreConfig('parcelamento/parcelamento_general/parcelamento_xparcelas');
$desconto = Mage::getStoreConfig('parcelamento/parcelamento_general/parcelamento_desconto');
$valor_parcela = number_format($preco/$quantidade_parcelas,2,',','.');
$preco_avista = ($preco/100)*(100-$desconto);

echo 'R$ '.number_format($preco,2,',','.').' em até '.$quantidade_parcelas.'x de R$ '.$valor_parcela.' no cartão <br/>R$ '.number_format($preco_avista,2,',','.').' à vista com '.$desconto.'% de desconto';

		}
	}
?>
