# Quando usarlo

Quando due sistemi (anche SOA) comunicano, bisogna evitare di utilizzare gli array, questo perché:

- è difficile ricordare i nomi dell'indice dell'array
- un cambio di nome dell'array implica un refactor massivo in più punti con relativi test di più punti

Bisogna quindi utilizzare una classe Data Object che contiene dei manipolatori per i dati

# Come usarlo

Creare un file chiamato: {Vendor/Name,App}/Data/Entity

I Data Object devono far parte del service layer (in Api/Data) se possibile utilizzarli in altri moduli