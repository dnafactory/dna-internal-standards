# Quando usarlo

Qualsiasi configurazione di sistema deve essere wrappato sempre da una classe di configuration

Questo per evitare di dover ricordare path di configurazioni a memoria e per semplificare il refactor di nomi di configurazioni

# Come usarlo

Creare un file chiamato: {Vendor/Name,App}/Configuration/ConfigurationParentNameConfiguration

le configuration devono far parte SEMPRE del service layer (in Api)