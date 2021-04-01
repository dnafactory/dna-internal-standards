# Quando usarlo

Quando implementiamo una funzionalità di manipolazione del database che può essere utilizzata da più punti del codice o che potrebbe essere utilizzata da altri moduli bisogna implementare un Repository

# Come usarlo

Creare un file chiamato: {Vendor/Name,App}/Repository/EntityRepository

I Repository devono SEMPRE far parte del service layer (in Api)