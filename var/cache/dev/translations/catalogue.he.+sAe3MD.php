<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('he', array (
  'validators' => 
  array (
    'This value should be false.' => 'הערך צריך להיות שקר.',
    'This value should be true.' => 'הערך צריך להיות אמת.',
    'This value should be of type {{ type }}.' => 'הערך צריך להיות מסוג {{ type }}.',
    'This value should be blank.' => 'הערך צריך להיות ריק.',
    'The value you selected is not a valid choice.' => 'הערך שבחרת אינו חוקי.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'אתה צריך לבחור לפחות {{ limit }} אפשרויות.|אתה צריך לבחור לפחות {{ limit }} אפשרויות.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'אתה צריך לבחור לכל היותר {{ limit }} אפשרויות.|אתה צריך לבחור לכל היותר {{ limit }} אפשרויות.',
    'One or more of the given values is invalid.' => 'אחד או יותר מהערכים אינו חוקי.',
    'This field was not expected.' => 'שדה זה לא היה צפוי',
    'This field is missing.' => 'שדה זה חסר.',
    'This value is not a valid date.' => 'הערך אינו תאריך חוקי.',
    'This value is not a valid datetime.' => 'הערך אינו תאריך ושעה חוקיים.',
    'This value is not a valid email address.' => 'כתובת המייל אינה תקינה.',
    'The file could not be found.' => 'הקובץ לא נמצא.',
    'The file is not readable.' => 'לא ניתן לקרוא את הקובץ.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'הקובץ גדול מדי ({{ size }} {{ suffix }}). הגודל המרבי המותר הוא {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'סוג MIME של הקובץ אינו חוקי ({{ type }}). מותרים סוגי MIME {{ types }}.',
    'This value should be {{ limit }} or less.' => 'הערך צריל להכיל {{ limit }} תווים לכל היותר.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'הערך ארוך מידי. הוא צריך להכיל {{ limit }} תווים לכל היותר.|הערך ארוך מידי. הוא צריך להכיל {{ limit }} תווים לכל היותר.',
    'This value should be {{ limit }} or more.' => 'הערך צריך להכיל {{ limit }} תווים לפחות.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'הערך קצר מידיץ הוא צריך להכיל {{ limit }} תווים לפחות.|הערך קצר מידיץ הוא צריך להכיל {{ limit }} תווים לפחות.',
    'This value should not be blank.' => 'הערך לא אמור להיות ריק.',
    'This value should not be null.' => 'הערך לא אמור להיות ריק.',
    'This value should be null.' => 'הערך צריך להיות ריק.',
    'This value is not valid.' => 'הערך אינו חוקי.',
    'This value is not a valid time.' => 'הערך אינו זמן תקין.',
    'This value is not a valid URL.' => 'זאת אינה כתובת אתר תקינה.',
    'The two values should be equal.' => 'שני הערכים צריכים להיות שווים.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'הקובץ גדול מדי. הגודל המרבי המותר הוא {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'הקובץ גדול מדי.',
    'The file could not be uploaded.' => 'לא ניתן לעלות את הקובץ.',
    'This value should be a valid number.' => 'הערך צריך להיות מספר חוקי.',
    'This file is not a valid image.' => 'הקובץ הזה אינו תמונה תקינה.',
    'This is not a valid IP address.' => 'זו אינה כתובת IP חוקית.',
    'This value is not a valid language.' => 'הערך אינו שפה חוקית.',
    'This value is not a valid locale.' => 'הערך אינו אזור תקף.',
    'This value is not a valid country.' => 'הערך אינו ארץ חוקית.',
    'This value is already used.' => 'הערך כבר בשימוש.',
    'The size of the image could not be detected.' => 'לא ניתן לקבוע את גודל התמונה.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'רוחב התמונה גדול מדי ({{ width }}px). הרוחב המקסימלי הוא {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'רוחב התמונה קטן מדי ({{ width }}px). הרוחב המינימלי הוא {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'גובה התמונה גדול מדי ({{ height }}px). הגובה המקסימלי הוא {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'גובה התמונה קטן מדי ({{ height }}px). הגובה המינימלי הוא {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'הערך צריך להיות סיסמת המשתמש הנוכחי.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'הערך צריך להיות בדיוק {{ limit }} תווים.|הערך צריך להיות בדיוק {{ limit }} תווים.',
    'The file was only partially uploaded.' => 'הקובץ הועלה באופן חלקי.',
    'No file was uploaded.' => 'הקובץ לא הועלה.',
    'No temporary folder was configured in php.ini.' => 'לא הוגדרה תיקייה זמנית ב php.ini.',
    'Cannot write temporary file to disk.' => 'לא ניתן לכתוב קובץ זמני לדיסק.',
    'A PHP extension caused the upload to fail.' => 'סיומת PHP גרם להעלאה להיכשל.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'האוסף אמור להכיל {{ limit }} אלמנטים או יותר.|האוסף אמור להכיל {{ limit }} אלמנטים או יותר.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'האוסף אמור להכיל {{ limit }} אלמנטים או פחות.|האוסף אמור להכיל {{ limit }} אלמנטים או פחות.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'האוסף צריך להכיל בדיוק {{ limit }} אלמנטים.|האוסף צריך להכיל בדיוק {{ limit }} אלמנטים.',
    'Invalid card number.' => 'מספר הכרטיס אינו חוקי.',
    'Unsupported card type or invalid card number.' => 'סוג הכרטיס אינו נתמך או לא חוקי.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'This form should not contain extra fields.' => 'הטופס לא צריך להכיל שדות נוספים.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'הקובץ שהועלה גדול מדי. נסה להעלות קובץ קטן יותר.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'אסימון CSRF אינו חוקי. אנא נסה לשלוח שוב את הטופס.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Este valor no es un UUID válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'applicant.name' => 'Tu nombre debe tener mas de 3 letras y menos de 21.',
    'applicant.lastname' => 'Tu apellido debe tener mas de 3 letras y menos de 21.',
    'applicant.nif' => 'Tu NIF/NIE parece ser incorrecto.',
    'applicant.zipcode' => 'Tu código postal parece incorrecto, necesita tener 5 números.',
    'applicant.hobbies' => 'Tus intereses necesitan tener una longitud mínima de 10 letras.',
    'applicant.cvtxt' => 'Tu CV en texto plano necesita tener una longitud mínima de 1 letras y máxima de 1500.',
    'applicant.birthdate' => 'Debes ser mayor de edad.',
    'applicant.mainphone' => 'Tu teléfono fijo parece incorrecto.',
    'applicant.mobilephone' => 'Tu número de teléfoino móvil parece incorrecto',
    'applicant.email' => 'La dirección de email que has introducido no es válida.',
    'applicant.pais' => 'Tu país parece erroneo. Debe contener entre 3 y 21 letras.',
    'applicant.availability' => 'Tu disponibilidad no puede ser anterior al día de hoy.',
    'school.name' => 'El nombre del centro debe tener mas de 3 letras y menos de 40.',
    'school.cif' => 'Tu CIF parece no ser válido.',
    'school.phone' => 'Tu teléfono parece no ser válido.',
    'school.zip' => 'Tu código postal parece ser incorrecto.',
    'school.email' => 'La dirección de email que has introducido no es válida.',
    'school.web' => 'La url que has escrito parece incorrecta.',
    'offer.title' => 'El título de la oferta no parece correcto, necesita tener entre 3 y 21 letras.',
    'offer.description' => 'La descripción de la oferta no parece correcta, necesita tener entre 20 y 200 letras.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Crear %entity_name%',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => 'Modificar %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} No se han encontrado resultados|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    'search.no_results' => 'No se han encontrado resultados.',
    'list.row_actions' => 'Acciones',
    'paginator.first' => 'Primera',
    'paginator.previous' => 'Anterior',
    'paginator.next' => 'Siguiente',
    'paginator.last' => 'Última',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
    'label.true' => 'Si',
    'label.false' => 'No',
    'label.empty' => 'Vacío',
    'label.null' => 'Null',
    'label.nullable_field' => 'Dejar vacío',
    'label.object' => 'Objecto PHP',
    'label.inaccessible' => 'Inaccesible',
    'label.inaccessible.explanation' => 'Este campo no tiene un método getter o la propiedad asociada no es pública',
    'user.logged_in_as' => 'Conectado/a como',
    'user.unnamed' => 'Usuario sin nombre',
    'user.anonymous' => 'Usuario anónimo',
    'user.signout' => 'Cerrar sesión',
    'toggle_navigation' => 'Turnar navegación',
    'delete_modal.title' => '¿Realmente quieres borrar este elemento?',
    'delete_modal.content' => 'Esta acción no se puede deshacer.',
    'delete_modal.action' => 'Borrar',
    'action.add_new_item' => 'Añadir un elemento',
    'action.add_another_item' => 'Añadir otro elemento',
    'action.remove_item' => 'Eliminar este elemento',
    'errors' => 'Error|Errores',
    'form.are_you_sure' => 'No has guardado los cambios realizados en este formulario.',
    'show.remaining_items' => '{1} existe otro elemento que no se muestra en este listado|]1,Inf] existen otros %count% elementos que no se muestran en este listado',
    'exception.entity_not_found' => 'Este elemento ya no está disponible.',
    'exception.entity_remove' => 'Este elemento no se puede eliminar porque otros elementos dependen de él.',
    'exception.forbidden_action' => 'No se puede realizar la acción solicitada en este elemento.',
    'exception.no_entities_configured' => 'La aplicación no está configurada correctamente.',
    'exception.undefined_entity' => 'La aplicación no está configurada correctamente para este tipo de elementos.',
  ),
  'messages' => 
  array (
    'action.new' => 'Crear %entity_name%',
    'action.show' => 'Ver',
    'action.edit' => 'Modificar',
    'action.search' => 'Buscar',
    'action.delete' => 'Borrar',
    'action.save' => 'Guardar cambios',
    'action.cancel' => 'Cancelar',
    'action.list' => 'Volver al listado',
    'label.form.empty_value' => 'Ninguno',
    '__name__label__' => '__name__label__',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
