# InstApi
Ejemplo de uso de la API de Instapago
---

#### Punto de Entrada del API
Todas las interacciones con Instapago se realizan a través de la siguiente dirección:

```
https://api.instapago.com
```

#### Crear Pago
Este método consta del envío de los datos de un pago con tarjeta de crédito a Instapago
para su autorización:
```
https://api.instapago.com/payment
Método: POST
```


#### FormData:
* KeyId (Requerido): Llave generada desde Instapago.
* PublicKeyId (Requerido): Llave compartida Enviada por correo al crear una cuenta
en instapago.
* Amount (Requerido): Monto a Debitar, utilizando punto “.” Como separador decimal.
Por ejemplo: 200.00.
* Description (Requerido): Cadena de caracteres con la descripción de la operación.
* CardHolder (Requerido): Nombre del Tarjeta habiente.
* CardHolderID (Requerido): Cédula o RIF del Tarjeta habiente.
* CardNumber (Requerido): Numero de la tarjeta de crédito, sin espacios ni
separadores.
* CVC (Requerido): Código secreto de la Tarjeta de crédito.
* ExpirationDate (Requerido): Fecha de expiración de la tarjeta en el formato mostrado
en la misma MM/YYYY. Por Ejemplo: 10/2014.
* StatusId (Requerido): Estatus en el que se creará la transacción.
	* "1": Retener (pre-autorización).
	* "2": Pagar (autorización).
* IP (Requerido): Dirección IP del cliente.
* OrderNumber (Opcional): Numero de orden del pago según el comercio.
* Address (Opcional): Dirección asociada a la tarjeta, Utilizada por algunos bancos
para mayor seguridad.
* City (Opcional): Ciudad asociada a la tarjeta, Utilizada por algunos bancos para
mayor seguridad.
* ZipCode (Opcional): Código Postal asociada a la tarjeta, Utilizada por algunos
bancos para mayor seguridad.
* State (Opcional): Estado o provincia asociada a la tarjeta, Utilizada por algunos
bancos para mayor seguridad.

#### Respuesta:
  
* Tipo: ```application/json```.
* Valor:

```
{
	"success": Indica si fue procesado el pago (true o false),
	"message": Descripción de la respuesta (Máx. 200 caracteres),
	"id": Código del pago (Máx. 8 caracteres),
	"code": Código del respuesta del pago (Máx. 3 caracteres),
	"reference": Código de referencia bancaria (Máx. 6 caracteres),
	"voucher": HTML que contiene el recibo del pago,
	"ordernumber": Número de orden indicado por el comercio
}
```

#### Completar pago
Este método funciona para procesar un bloqueo o pre-autorización, para así procesarla y
hacer el cobro respectivo.

```
https://api.instapago.com/complete
Método: POST
```

#### FormData:
* KeyId (Requerido): Llave generada desde Instapago.
* PublicKeyId (Requerido): Llave compartida Enviada por correo al crear una cuenta
en Instapago.
* Id (Requerido): Identificador único del pago.
* Amount (Requerido): Monto por el cual se desea procesar el pago final.
Documento propiedad de Tecnología Instapago C.A. Prohibida su reproducción total o parcial.
	

Respuesta
* Tipo: ```application/json```
* Valor:

```
{
	"success": Indica si fue procesado el pago (true o false),
	"message": Descripción de la respuesta (Máx. 200 caracteres),
	"id": Código del pago (Máx. 8 caracteres),
	"code": Código del respuesta del pago (Máx. 3 caracteres),
	"reference": Código de referencia bancaria (Máx. 6 caracteres),
	"voucher": HTML que contiene el recibo del pago,
	"ordernumber": Número de orden indicado por el comercio 
}
```
#### Anular Pago
Este método funciona para procesar una anulación de un pago, ya sea un pago o un
bloqueo.

```
https://api.instapago.com/payment
Método: DELETE
```

#### FormData:
* KeyId (Requerido): Llave generada desde Instapago.
* PublicKeyId (Requerido): Llave compartida Enviada por correo al crear una cuenta
en Instapago.
* Id (Requerido): Identificador único del pago.

Respuesta
* Tipo: ```application/json```
* Valor:

```
{
	"success": Indica si fue procesado el pago (true o false),
	"message": Descripción de la respuesta (Máx. 200 caracteres),
	"id": Código del pago (Máx. 8 caracteres),
	"code": Código del respuesta del pago (Máx. 3 caracteres),
	"reference": Código de referencia bancaria (Máx. 6 caracteres),
	"ordernumber": Número de orden indicado por el comercio 
}
```
