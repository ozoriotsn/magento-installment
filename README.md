# Magento Installment/Parcelamento

Payment method module V1.0 - Magento 1.7.x - 1.9.x

Módulo de parcelamento para exibição na página do produto, esse módulo não influencia o funcionamento do checkout ou regras de promoções, é usado apenas para exibição de parcelas e de preço com desconto ou juros, a aplicação do desconto ou juros dependerá da forma de pagamento configurada.


Instalação Manual:

    Baixe a última versão do módulo.
    Descompacte o arquivo, copie e cole dentro da pasta de instalação do seu Magento.
    Limpe o cache.

Configuração:

    Vá em System > Configuration > Catalog. Haverá uma nova aba chamada Installments (Parcelamento).

    Configure de acordo com a sua loja

    Abra o arquivo view.phtml do seu tema (app/design/frontend/default/seu-tema/template/catalog/product/view.phtml).

    Próximo a linha 100 insira o código abaixo: 

    <?php if($_product->getTypeId() == 'configurable' && Mage::getStoreConfig('parcelamento/parcelamento_general/enabled')): ?>
    <?php echo $this->getChildHtml("valores"); ?>
    <?php endif; ?>



In-installment module for display on product page, this module does not influence checkout operation or promotion rules, it is used only for parcel and discount price display or interest, the application of the discount or interest will depend on the configured payment method .


Manual Installation:

    Download the latest version of the module.
    Unzip the file, copy and paste it inside your Magento installation folder.
    Clear the cache.

Configuration:

    Go to System> Configuration> Catalog. There will be a new tab called Installments.

    Set up according to your store

    Open the view.phtml file for your theme (app / design / frontend / default / your-theme / template / catalog / product / view.phtml).

    Next to line 100 enter the code below:

    <? Php if ($ _ product-> getTypeId () == 'configurable' && Mage :: getStoreConfig ('installment / installment_general / enabled')):?>
    <? Php echo $ this-> getChildHtml ("values"); ?>
    <? Php endif; ?>
    