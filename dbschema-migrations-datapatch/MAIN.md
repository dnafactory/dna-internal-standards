# Quando usarlo

Quando dobbiamo creare una tabella, dobbiamo utilizzare una migration (db_schema in Magento 2)

Quando dobbiamo fare una manipolazione del database (inserimento elementi di default, inserimento attributi, inserimento righe in una tabella) dobbiamo utilizzare i seeder (data patch)

# Come usarlo

Il nome della tabella dovrà essere:

vendorname_modulename_xxx_yyy_entity per l'entità XXX/YYY/Entity

ad esempio:

dnafactory_example_order per l'entità Order
dnafactory_example_order_item per l'entità Order/Item

NB
il database di Magento2 EE è splittato in 3 parti

Il nome della patch dovrà essere:

{Vendor/Name}/Setup/Patch/Data/ImperativeAction

ad esempio:

{Vendor/Name}/Setup/Patch/Data/InstallDefaultCategories
{Vendor/Name}/Setup/Patch/Data/EnableDefaultCategory
{Vendor/Name}/Setup/Patch/Data/AddSizeAttributeToProduct