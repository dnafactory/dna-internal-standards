# Quando usarlo

La responsabilità di creazione di una classe non singleton o che necessita di configurazione particolare deve essere sempre demandata ad una factory

# Come usarlo

Per il file: {Vendor/Name,App}/Path/To/File/Entity
Creare il file: {Vendor/Name,App}/Path/To/File/EntityFactory

In Magento 2 le factory vengono autogenerate dal sistema
Per le factory non standard, semplicemente bisogna implementare il metodo create e richiamare l'object manager

Vedere data-object/esempio