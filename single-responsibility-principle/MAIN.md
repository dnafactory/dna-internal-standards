# Quando usarlo

Il principio di singola responsabilità (single responsibility principle, abbreviato con SRP) afferma che ogni elemento di un programma (classe, metodo, variabile) deve avere una sola responsabilità, e che tale responsabilità debba essere interamente incapsulata dall'elemento stesso. Tutti i servizi offerti dall'elemento dovrebbero essere strettamente allineati a tale responsabilità.

# Come usarlo

E' possibile definire una granularità arbitratia a questo principio, facendo riferimento ai management:

- importazione prodotti
- esportazione prodotti
- associazione prodotti a categorie

Possiamo o creare un solo Management:

- ProductManagement

oppure due Management:

- CategoryProductManagement
- ImportExportProductManagement

La classe ProductManagement ha la responsabilità di gestire i Prodotti

ma la classe CategoryProductManagement ha la responsabilità di gestire le Categorie e i Prodotti e la classe ImportExportProductManagement ha la responsabilità di gestire l'import export dei prodotti

Alcuni addirittura sono della teoria che una classe dovrebbe efettuare una singola azione, ad esempio:

CategoryProductManagement potrebbe diventare:

- AssocProductToCategoriesManagement (con solo il metodo execute)
- CountProductInCategoryManagement (con solo il metodo execute)
- e così via