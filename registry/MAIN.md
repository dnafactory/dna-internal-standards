# Quando usarlo

Quando hai bisogno di condividere una variabile globale devi utilizzare il pattern registry

# Come usarlo

Facendo riferimento al registry principale di Magento:

/**
* Registry model. Used to manage values in registry
*
* Registry usage as a shared service introduces temporal, hard to detect coupling into system.
* It's usage should be avoid. Use service classes or data providers instead.
*
* @api
* @deprecated 102.0.0
* @since 100.0.2
*/
  
Bisogna implementare una Service Class o un Data Provider adhoc per iniettare variabili

Come esempio fare riferimento a: https://github.com/dnafactory/magento2-module-core/blob/master/Registry/CurrentProduct.php