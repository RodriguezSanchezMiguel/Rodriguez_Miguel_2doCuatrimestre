<?php

// Segundo parcial

//Manejo de formularios en php

//Dos metodos para enviar datos desde un formulario HTML a un script en php:
    //1.- Metodo Get: El metodo Get envia los datos a traves de una URL, por ejemplo:http://example.com/form.php?name=mario&age=30. Es util para enviar datos que no son sensibles y para realizar busquedas o consultas.
    // - Ventajas:
    //   - Facil de usar y entender.
    //   - Permite compartir enlaces con los datos incluidos en la URL.
    // - Desventajas:
    //   - No es seguro para enviar datos sensibles, ya que los datos se muestran en la URL.
    //   - Tiene limitaciones de longitud de datos, ya que las URL tienen un limite de caracteres.
    // Caracteristicas:
    //   - Los datos se envian a traves de la URL.
    //   - Los datos se pueden ver en la barra de direcciones del navegador.
    //Cuando usarlo:
    // El metodo Get es adecuado para:
    //   - Realizar busquedas o consultas.
    //   - Enviar datos que no son sensibles, como preferencias de usuario o filtros de busqueda.

    //2.-Metodo Post: El metodo Post envia los datos a traves del cuerpo de la solicitud HTTP, esto hace que el envio de informacion sea mas seguro, pues los datos no son mostrados en la URL. Es adecuado para enviar datos sensibles, como contraseñas o informacion personal, y para enviar grandes cantidades de datos. Por ejemplo: http://example.com/from.php, donde los datos se envian en el cueró de la solicitud.
    // - Ventajas:
    //   - Es mas seguro para enviar datos sensibles, ya que los datos no se muestran en la URL.
    //   - No tiene limitaciones de longitud de datos, ya que los datos se envian en el cuerpo de la solicitud.
    //   - Adecuado para enviar datos sensibles, como contraseñas o informacion personal.
    // - Desventajas:
    //   - No es tan facil de usar como el metodo Get, ya que los datos no se pueden ver en la URL.
    // Caracteristicas:
    //   - Los datos se envian a traves del cuerpo de la solicitud HTTP.
    //   - Los datos no se pueden ver en la barra de direcciones del navegador.
    //Cuando usarlo:
    // El metodo Post es adecuado para:
    //   - Enviar datos sensibles, como contraseñas o informacion personal.
    //   - Enviar grandes cantidades de datos, como archivos o formularios con muchos campos.
    //   - Realizar acciones que modifican el estado del servidor, como crear o actualizar recursos.
   
    // Nota: (Una solicitud http es un mensaje enviado por un cliente a un servidor para solicitar un recurso o realizar una accion. Contiene informacion como el metodo de solicitud,(GET, POST, PUT, DELETE,etc.) la URL, los encabezados y el cuerpo de la solicitud.). Por ejemplo:Cuando un usuario hace clic en un enlace o envia un formulario, se genera una solicitud HTTP que se envia al servidor para procesar la peticion solicitada, para darle una respuesta adecuada.

    // Ejemplo de uso de metodo Get de un formulario HTML:
    // Ejemplo 1: Realiza un programa que permita al usuario ingresar su nombre y edad a traves de un formulario HTML utilizando el metodo Get, y luego muestre un mensaje de bienvenida con la informacion ingresada.
    //Archivos que vamos a utilzar:
    // 1.- ejemplo.html: Este archivo contiene el formulario HTML que permite al usuario ingresar su nombre y edad utilizando el metodo Get.
    // 2.- ejemplo.php: Este archivo procesa los datos enviados desde el formulario HTML y muestra un mensaje de bienvenida con la informacion ingresada.
    ?>