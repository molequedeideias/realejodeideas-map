<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-09-28 00:05+0000
// PO revision date:  2012-09-20 12:02+0000
$lang = array(
	'actions' => array(
		'add_to_category' => 'Esto agrega el reporte a categorías adicional. Si aquí selecciona Categoría 1 y el reporte ya tiene Categoría 2 agregado a él, el reporte entonces tendrá Categoría 1 y Categoría 2.',
		'approve' => 'Aprueba un reporte o no. Zi aprueba, ',
		'assign_badge' => 'Será capaz de asignar una medalla al usuario siendo activado.  Indique la medalla que será asignada aquí.',
		'between_times' => 'Este es un rango de horas y/o minutos entre dos tiempos en format 24 horas. Si ingresa un tiempo anterior en el segundo campo, este será intercambiado con el primero. Este tiempo deberá estar en un simple día. Además, este tiempo es chequeado nuevamente la veces que haya configurado en el área de ajustes de su sitio y <strong>no</strong> necesariamente la zona horaria del usuario interactuando con su instalación. Dejar esto en 00:00 a 00:00 para ignorar este cualificador.',
		'email_body' => 'El cuerpo del email que será enviado.',
		'email_subject' => 'Título del email que será enviado.',
		'report_title' => 'Este es el título por defecto para agregar al reporte.',
		'verify' => 'Marque un reporte como verificado o no.',
	) ,
	'default_value' => 'Separe cada valor con una coma. Ejemplo: valor1, valor2.',
	'radio_choices' => 'Separe cada valor con una coma. Ejemplo: valor1, valor2. En caso que quiera establecer una valor por defecto, finalice la lista de opciones con ::. Ejemplo: Si quiere hacer valor3 el valor por defecto, entonces deberá ser: valor1, valor2, valor3::valor3',
	'dropdown_choices' => 'Serpare cada item de elección con coma. Ejemplo Item 1, Item 2, etc.',
	'private_to' => 'Comenzar escribiendo la lista de miembros.',
	'private_subject' => 'Título del mensaje privado',
	'private_message' => 'Mensaje Privado',
	'profile_email' => 'Su dirección de correo electrónico',
	'profile_name' => 'Su nombre completo',
	'profile_notify' => 'Seleccionado YES le permite recibir alertas por correo electrónico cuando nuevos reportes o comentarios sean publicados en su sitio web',
	'profile_password' => 'Su contraseña. Deje este campo en blanco si desea mantener su contraseña actual',
	'profile_public_url' => 'Esta es la dirección donde su perfil público puede ser encontrado.',
	'profile_username' => 'Su nombre de usuario no puede ser modificado',
	'settings_alert_email' => 'Esta es la dirección de correo electrónico que será usada para enviar alertas.',
	'settings_allow_alerts' => 'Permite a los usuarios suscribirse a alertas vía la web.',
	'settings_allow_clustering' => 'Esto permite agrupar reportes similares en un único punto en el mapa',
	'settings_allow_comments' => 'Permite a los usuarios comentar en los reportes del sitio principal',
	'settings_allow_feed' => 'Permite mostrar feeds de noticias RSS en el sitio principal ',
	'settings_allow_reports' => 'Permite a los usuarios enviar información a través de un formulario web.',
	'settings_api_default_record_limit' => 'Número predeterminado de registros que serán devueltos en cada llamado a la API ',
	'settings_api_max_record_limit' => 'Número máximo de registros que serán devueltos en cada llamado a la API ',
	'settings_api_max_requests_per_ip' => 'Número máximo de llamados a la API por dirección IP',
	'settings_blocks_per_row' => 'Número de columnas Bloques que será desplegado en cada fila.',
	'settings_cache_pages' => 'Habilita o deshabilita el caché. Esto acelera la carga de página reduciendo los tiempos de respuesta. Recomendamos usar caché en sitios con alto tráfico. **Recuerde que los reportes serán cargados en el front end en base al tiempo que fije más abajo (Tiempo de vida del caché)',
	'settings_cache_pages_lifetime' => 'Configura el tiempo de vida del caché.',
	'settings_configure_map' => 'Configura el mapa para cubrir un lugar en particular',
	'settings_default_category_colors' => 'Establecer un código de color para todas las categorías en el sitio.',
	'settings_default_category_icons' => 'Establecer un ícono para todas las categorías en el sitio.',
	'settings_default_location' => 'País en que el sitio está funcionando',
	'settings_display_contact' => 'Muestra o no la pestaña de Contacto en el sitio principal.',
	'settings_display_howtohelp' => 'Muestra o no la pestaña de Ayuda en el sitio principal.',
	'settings_display_items_per_page' => 'Número de reportes mostrados por página en el sitio principal.',
	'settings_display_items_per_page_admin' => 'Número de reportes mostrados por página en el Back End de administración.',
	'settings_flsms_download' => 'Este es el hub para mensajes entrantes.',
	'settings_flsms_synchronize' => 'Sincroniza los mensajes en el hub con la plataforma Ushahidi.',
	'settings_flsms_text_1' => 'Números de teléfonos donde los mensajes de texto son recibidos.',
	'settings_google_analytics' => 'Sigue a los visitantes de su sitio. Obtenga estadísticas detalladas de los visitantes',
	'settings_locale' => 'Configura el idioma que será usado en el sitio.',
	'settings_map_provider' => 'Define qué mapa será usado en el sitio',
	'settings_map_timeline' => 'Muestra la línea de tiempo basada en la fecha y hora en que los reportes fueron entregados.',
	'settings_private_deployment' => 'Configurando este valor como true o yes hará que el sitio sea privado, de manera que sólo usuarios con cuentas podrán acceder al sitio.',
	'settings_server_host' => 'Esto es donde los e-mails residen.',
	'settings_server_password' => 'Contraseña de la dirección de correo electrónico que recibe los reportes',
	'settings_server_port' => 'Requerido para poder aceptar conexiones entrantes desde la dirección de correo electrónico',
	'settings_server_ssl_support' => 'Requerido para permitir una conexión segura',
	'settings_server_type' => 'Esto es requerido para recibir e-mails desde el servidor.',
	'settings_server_username' => 'Dirección de correo electrónico que recibe los reportes',
	'settings_share_site_stats' => 'Las estadísticas de visitas son almacenadas en un servidor controlado por Ushahidi. Al habilitar esta opción, usted podrá ver las estadísticas directamente en el panel de administración. Deshabilitándola, dejará de poder ver las estadísticas de tráfico.',
	'settings_site_copyright_statement' => 'Siempre es una buena idea reclamar derechos de autor sobre su trabajo. Visite http://creativecommons.org/choose/ para determinar la licencia adecuada.',
	'settings_site_email' => 'Dirección de correo electrónico que recibirá los reportes y los mensajes del formulario de contacto.',
	'settings_site_message' => 'Texto que aparecerá sobre el mapa en la página de inicio. Esto es útil para entregar información importante a los visitantes del sitio. Para eliminar la caja, simplemente borre este mensaje.',
	'settings_site_name' => 'Este es el nombre del sitio que aparece en la parte superior del sitio principal',
	'settings_site_tagline' => 'Explique en pocas palabras de que se trata este sitio.',
	'settings_twitter_configuration' => 'Configure el hashtag de twitter que será usado en los tweets',
);
