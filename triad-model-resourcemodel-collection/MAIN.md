# Quando usarlo

Dopo aver creato una tabella nel database dopo una migrations, bisogna creare la triade: Model, Resource Model e Collection

La Model, semplicemente è il "Data Object" del database
La Collection, semplicemente è l'array di "Data Object" del database
La Resource Model è la responsabile della manipolazione delle Model nel database

# Come usarlo

Data una tabella: vendorname_modulename_xxx_yyy_entity

Bisogna creare:

{Vendor/Name}/Model/Xxx/Yyy/Entity <-- Model
{Vendor/Name}/Model/ResourceModel/Xxx/Yyy/Entity <-- Resource Model
{Vendor/Name}/Model/ResourceModel/Xxx/Yyy/Entity/Collection <-- Collection

Facendo riferimento ai due esempi di migrations:

dnafactory_example_order per l'entità Order
dnafactory_example_order_item per l'entità Order/Item

Bisogna creare:

{Vendor/Name}/Model/Order
{Vendor/Name}/Model/ResourceModel/Order
{Vendor/Name}/Model/ResourceModel/Order/Collection

{Vendor/Name}/Model/Order/Item
{Vendor/Name}/Model/ResourceModel/Order/Item
{Vendor/Name}/Model/ResourceModel/Order/Item/Collection

Le model devono far parte sempre del service layer (in Api/Data)

NB

internamente viene utilizzata la suddivisione in cartelle, cose che non deve mai accadere in Api o Api/Data

{Vendor/Name}/Model/ResourceModel/Order/Item implementa {Vendor/Name}\Api\Data\OrderItemInterface

NB

le costanti bisogna metterle nelle concrete e non nelle interfacce