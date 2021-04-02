# Quando usarlo

Quando c'è un'attività asincrona da eseguire bisogna creare un Job (ad esempio in ascolto su AMQP)

# Come usarlo

{Vendor/Name}/Job/ImperatieActionJobWorker <-- il Job che effettua l'attività
{Vendor/Name}/Job/ImperatieActionJobScheduler <-- (opzionale) il Job che schedula l'attività (stesso identico nome del Worker con Scheduler finale)