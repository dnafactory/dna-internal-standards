# Quando usarlo

Una classe che deve mantenere uno stato (o che non ne ha proprio uno) ovunque venga utilizzato deve essere utilizzato come singleton

# Come usarlo

In Magento 2 ogni classe iniettata tramite Dependency Injection è di base singleton. 

Quando quindi creiamo una classe che necessita di essere creata ogni volta possiamo fare due cose:

- Utilizzare le factory
- Definirla shared=false
  
Un esempio di classe che deve essere sempre iniettata nuova è il Magento\Framework\Api\SearchCriteriaBuilder