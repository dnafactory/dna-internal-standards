# Quando usarlo

Quando implementiamo una funzionalità che può essere utilizzata da più punti del codice o che potrebbe essere utilizzata da altri moduli bisogna implementare un Management

# Come usarlo

Creare un file chiamato: {Vendor/Name,App}/Management/EntityManagement

I Management devono SEMPRE far parte del service layer (in Api)

# Note integrative

Potete scegliere la granularità del Management a vostra scelta, analizziamo questi due casi:

- importazione prodotti
- esportazione prodotti
- associazione prodotti a categorie

Possiamo o creare un solo Management:

- ProductManagement

oppure due Management:

- CategoryProductManagement
- ImportExportProductManagement

Il PRO principale della soluzione uno è quello di riuscire a trovare facilmente le funzionalità
Il CONTRO principale della soluzione uno è che al crescere delle funzionalità cresce la complessità della classe Management, e c'è il rischio che diventi una god classes

Usate il dovuto buon senso

L'ideale sarebbe di ragionare come keep simplicity in mind in caso di moduli o progetti piccoli e di dividere per domini in caso di moduli o progetti più grandi

NB

i Management non utilizzano la suddivisione in cartelle