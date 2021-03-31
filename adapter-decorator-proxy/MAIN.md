# Quando usarlo

Quando si intende modificare / aggiungere una funzionalità ad un elemento senza toccare l'elemento stesso

# Come usarlo

Individuare il nome dell'entità, ad esempio {Vendor/Name,App}/Xxx/Yyy/Entity

Creare un file chiamato: {Vendor/Name,App}/Adapter/[{Vendor/Name,App}]/Xxx/Yyy/EntityAdapter
Creare un file chiamato: {Vendor/Name,App}/Adapter/[{Vendor/Name,App}]/Xxx/Yyy/EntityAdapterFactory che si occuperà di instanziare l'adapter

Per modificare il comportamento di un metodo, bisogna mantenere lo stesso nome per il metodo
Per aggiungere un metodo è possibile utilizzare il nome che si preferisce