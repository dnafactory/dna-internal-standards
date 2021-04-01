# Quando usarlo

Quando bisogna implementare un servizio esterno, bisogna implementare il Proxy/Skeleton (in realtà noi implementiamo solo il Proxy)

# Come usarlo

Creare un file chiamato: {Vendor/Name,App}/Proxy/Xxx/Yyy/ApiNameProxy

I proxy se utilizzati all'esterno devono far parte del service layer (in Api)

Prendiamo come esempio https://github.com/dnafactory/teamwork-api/tree/1.1.2/Projects (non è Magento, ma è un esempio pratico)

Per ogni Endpoint c'è una classe:

- Clock
- People
- Projects
- Tags
- TaskLists

Che hanno una corrispondenza uno ad uno alle aree semantiche descritte nella documentazione: https://developer.teamwork.com/projects/api-v1

Clock ha i metodi:

- getAllClocksIns
- clockMeIn
- clockMeOut

che sono rispettivamente gli endpoints di Clock e ritornano semplicemente i data object (già Hydrated)

Qualora servisse un client adhoc, creare un file chiamato: {Vendor/Name,App}/Client/Xxx/Yyy/SomethinClient