# Quando usarlo

Quando due sistemi (anche SOA) comunicano, bisogna evitare di utilizzare gli array e questa cosa è già chiara in data-object

Il responsabile della conversione array -> data object e data object -> array è l'hydrator

# Come usarlo

Creare un file chiamato: {Vendor/Name,App}/Hydrator/EntityHydrator

Gli Hydrator devono far parte del service layer (in Api) se devono essere utilizzati dall'esterno

NB

Gli Hydrator non utilizzano la suddivisione in cartelle