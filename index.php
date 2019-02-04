<?php
curl -X POST --header 'Content-Type: application/json' --header 'Accept: application/json' --header 'authorization: bearer F9YFUHUamf8ht8NtX2ALCsEr-dQUvNpnwlJow33haf7XnnEoD7Todj9Wys33StExdGn4A-2mnDKiwdwuk73rpK5hCEwzchlVYGIrMvDNHKwsc2X_qV3-KljiJMDshWVcb8nkhKRtQjXhOkfIE8tO8N3p7CNFZ2smGT8cnYYHMup3KX7tiTuV0a44A1THlMoU_x9Lc29hAM_RttoMSfukEULkn0Dxy3IiIxX6ASBGRAolKWM0uPkuWePtKckRuGO4cJKxxzyLdQmYZuGkyG3SMU9mmNO3-uZYtF-uQul2Z5znjzVZLyWBc5JS3-Q5OKE7tpnExfblAMxJm8uqwI4lo6ABfZCZPeJQPSynJJfVwlHbyo4R6bjrWpAPm-nkKoovUX8n3VbKH8MH7bz-b7qB8FmGdGuAGU6sYS2CSFnoJUURJThyBut9WqAi_sPxqFaGs75bp4wU0f5Kx62qbLYdt1ZGLficHOsUK-tdG94rfq6OvqF9APbDGUH0rXx2iJ6Qq5DyWROO5FpPUW6hfgBsDJaURAfru6Ko7Oaknarb1JhRi0D6mpc_3YO_i_KFFl0j8hTvNYSZQBh9__rM66V3dMGEI3RSexE6cyDrXKhrwPumbc06mrBGIXqV1EcRXOGGApumjw' -d '{ \ 
  "InvoiceValue": 200, \ 
  "CustomerName": "Customer01", \ 
  "CustomerBlock": "", \ 
  "CustomerStreet": "", \ 
  "CustomerHouseBuildingNo": "", \ 
  "CustomerCivilId": "string", \ 
  "CustomerAddress": "string", \ 
  "CustomerReference": "string", \ 
  "CountryCodeId": 1, \ 
  "CustomerMobile": "99999999", \ 
  "CustomerEmail": "test%40test.com", \ 
  "DisplayCurrencyId": 3, \ 
  "SendInvoiceOption": 1, \ 
  "InvoiceItemsCreate": [ \ 
  { \ 
  "ProductId": null, \ 
  "ProductName": "Product01", \ 
  "Quantity": 20, \ 
  "UnitPrice": 10 \ 
  } \ 
  ], \ 
  "CallBackUrl": "https://myfatoorah.com/index?id=10", \ 
  "Language": 1 \ 
 }' 'https://apidemo.myfatoorah.com/ApiInvoices/Create'
