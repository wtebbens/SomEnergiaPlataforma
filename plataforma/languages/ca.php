<?php
/**
 * Core Spanish Language
 *
 * @package Elgg.Core
 * @subpackage Languages.Spanish
 */

$catalan = array( 
/**
 * Sites
 */
	 'item:site'  =>  "Llocs" ,

		
		
		
/**
 * Sessions
 */
		'login' => "Iniciar sessi&oacute;",
		'loginok' => "Has iniciat sessi&oacute;",
		'loginerror' => "Inici de sessi&oacute; incorrecte. Verifica les teves credencials i intenta-ho de nou",
		'login:empty' => "El nom d'usuari i contrasenya s&oacute;n requerits",
		'login:baduser' => "No s'ha pogut carregar el teu compte d'usuari",
		'auth:nopams' => "Error intern. No es troba un m&egrave;tode d'autenticaci&oacute; instal·lat",
		
		'logout' => "Tancar sessi&oacute;",
		'logoutok' => "S'ha tancat la sessi&oacute;",
		'logouterror' => "No s'ha pogut tancar la sessi&oacute;, si us plau intenta-ho de nou",
		
		'loggedinrequired' => "Has d'estar autenticat per poder veure aquesta p&agrave;gina",
		'adminrequired' => "Has de ser un administrador per poder veure aquesta p&agrave;gina",
		'membershiprequired' => "Has de ser membre del grup per poder veure aquesta p&agrave;gina",

	
	
	
/**
 * Errors
 */
	'exception:title' => "Error Fatal",
	
	'actionundefined' => "La acci&oacute; (%s) sol&middot;licitada no est&agrave; definida al sistema",
	'actionnotfound' => "El log d'accions per %s no s'ha trobat",
	'actionloggedout' => "Ho sentim, no es pot realitzar aquesta acci&oacute; sense identificar-se",
	'actionunauthorized' => "No tens els permisos necesaris per realitzar aquesta acci&oacute;",
	
	'InstallationException:SiteNotInstalled' => "No s'ha pogut procesar la sol&middot;licitud. El lloc "
	. " no es troba configurat o la base de dades es troba caiguda",
	'InstallationException:MissingLibrary' => "No s'ha pogut carregar %s",
	'InstallationException:CannotLoadSettings' => "No s'ha pogut carregar l'arxiu de configuraci&oacute;, potser no existeix o hi ha un error de configuraci&oacute; de permisos",
	
	'SecurityException:Codeblock' => "Acc&eacute;s denegat per l'execuci&oacute; de bloc de codi privilegiat",
	'DatabaseException:WrongCredentials' => "No s'ha pugut connectar a la base de dades amb les credencials prove&iuml;des. Verifica l'arxiu de configuraci&oacute;",
	'DatabaseException:NoConnect' => "No es pot consultar la base de dades '%s', si us plau verifica que la base de dades existeix i que hi tens permisos",
	'SecurityException:FunctionDenied' => "Acc&eacute;s denegat a la funci&oacute; privilegiada '%s'",
	'DatabaseException:DBSetupIssues' => "S'han trobat una quantitat d'errors: ",
	'DatabaseException:ScriptNotFound' => "No s'ha pogut trobar l'script de base de dades %s",
	'DatabaseException:InvalidQuery' => "Consulta inv&agrave;lida",
	
	'IOException:FailedToLoadGUID' => "Error al carregar una nova %s de GUID: %d",
	'InvalidParameterException:NonElggObject' => "Passant un no-ElggObject a un constructor ElggObject!",
	'InvalidParameterException:UnrecognisedValue' => "No es reconeix el valor passat al constructor",
	
	'InvalidClassException:NotValidElggStar' => "GUID: %d no és un %s v&agrave;lid",
	
	'PluginException:MisconfiguredPlugin' => "%s (guid: %s) és un plugin desconfigurat que ha estat deshabilitat. Si us plau, revisa la Wiki d'Elgg per m&eacute;s informaci&oacute; (http://docs.elgg.org/wiki/)",
	'PluginException:CannotStart' => "%s (guid: %s) no pot iniciar-se. Motiu: %s",
	'PluginException:InvalidID' => "%s no és un ID de plugin v&agrave;lid",
	'PluginException:InvalidPath' => "%s és un path de plugin inv&agrave;lid",
	'PluginException:InvalidManifest' => "Arxiu de manifest inv&agrave;lid pel plugin %s",
	'PluginException:InvalidPlugin' => "%s no és un plugin v&agrave;lid",
	'PluginException:InvalidPlugin:Details' => "%s no és un plugin v&agrave;lid: %s",
	
	'ElggPlugin:MissingID' => "No es troba l'ID del plugin (guid %s)",
	'ElggPlugin:NoPluginPackagePackage' => "Manca ElggPluginPackage pel plugin amb ID %s (guid %s)",

	'ElggPluginPackage:InvalidPlugin:MissingFile' => "Manca l'arxiu %s al package",
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => "Tipus de depend&egrave;ncia '%s' inv&agrave;lida",
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => "Tipus '%s' provist inv&agrave;lid",
	'ElggPluginPackage:InvalidPlugin:CircularDep' => "Depend&egrave;ncia %s inv&agrave;lida '%s' al plugin %s. Els plugins no poden entrar en conlicte amb altres requerits!",

	'ElggPlugin:Exception:CannotIncludeFile' => "No pot incloure's %s pel plugin %s (guid: %s) a %s. Verifica els permisos!",
	'ElggPlugin:Exception:CannotRegisterViews' => "No pot cargar-se el directori 'views' pel plugin %s (guid: %s) a %s. Verifica els permisos!",
	'ElggPlugin:Exception:CannotRegisterLanguages' => "No poden registrar-se llenguatges pel plugin %s (guid: %s) a %s.  Verifica els permisos!",
	'ElggPlugin:Exception:NoID' => "No s'ha trobat l'ID pel plugin amb guid %s!",

	'PluginException:ParserError' => "Error processant el manifiest amb versi&oacute; d'API %s al plugin %s",
	'PluginException:NoAvailableParser' => "No es troba un processador pel manifest de la versi&oacute; de l'API %s al plugin %s",
	'PluginException:ParserErrorMissingRequiredAttribute' => "Manca l'atribut '%s' al manifest del plugin %s",

	'ElggPlugin:Dependencies:Requires' => 'Requereix',
	'ElggPlugin:Dependencies:Suggests' => 'Suggereix',
	'ElggPlugin:Dependencies:Conflicts' => 'Conflictes',
	'ElggPlugin:Dependencies:Conflicted' => 'En conflicte',
	'ElggPlugin:Dependencies:Provides' => 'Proveeix',
	'ElggPlugin:Dependencies:Priority' => 'Prioritat',

	'ElggPlugin:Dependencies:Elgg' => 'Versi&oacute; Elgg',
	'ElggPlugin:Dependencies:PhpExtension' => 'Extensi&oacute; PHP: %s',
	'ElggPlugin:Dependencies:PhpIni' => 'Configuraci&oacute; PHP ini: %s',
	'ElggPlugin:Dependencies:Plugin' => 'Plugin: %s',
	'ElggPlugin:Dependencies:Priority:After' => 'Despr&eacute;s %s',
	'ElggPlugin:Dependencies:Priority:Before' => 'Abans %s',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s no instal&middot;lat',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Manca',

	'ElggPlugin:InvalidAndDeactivated' => "%s no és un plugin v&agrave;lid i s'ha deshabilitat",

	'InvalidParameterException:NonElggUser' => "Passant un no-ElggUser a un constructor ElggUser!",
	
	'InvalidParameterException:NonElggSite' => "Passant un no-ElggSite a un constructor ElggSite!",

	'InvalidParameterException:NonElggGroup' => "Passant un no-ElggGroup a un constructor ElggGroup!",

	'IOException:UnableToSaveNew' => "No s'ha pogut guardar un nou %s",

	'InvalidParameterException:GUIDNotForExport' => "No s'ha especificat un GUID durant l'exportaci&oacute;, aix&ograve; no hauria de passar",
	'InvalidParameterException:NonArrayReturnValue' => "Funci&oacute; de serialitzaci&oacute; d'entitat passada a un par&agrave;metre de retorn no-array",

	'ConfigurationException:NoCachePath' => "Path de mem&ograve;ria cau seteat en Null!",
	'IOException:NotDirectory' => "%s no és un directori",

	'IOException:BaseEntitySaveFailed' => "No s'ha pogut guardar una nova entitat!",
	'InvalidParameterException:UnexpectedODDClass' => "import() passat a una classe ODD inesperat",
	'InvalidParameterException:EntityTypeNotSet' => "Ha de setear-se el tipus d'entitat",

	'ClassException:ClassnameNotClass' => "%s no és un %s",
	'ClassNotFoundException:MissingClass' => "Classe '%s' no trobada, manca alg&uacute; plugin?",
	'InstallationException:TypeNotSupported' => "No es reconeix el tipus %s. Aix&ograve; indica un error en la instal&middot;laci&oacute;, segurament causat per una actualizaci&oacute; incompleta",

	'ImportException:ImportFailed' => "No s'ha pogut importar l'element %d",
	'ImportException:ProblemSaving' => "S'ha trobat un problema al guardar %s",
	'ImportException:NoGUID' => "S'ha creat una nova entitat sense GUID, aix&ograve; no ha de passar",

	'ImportException:GUIDNotFound' => "No s'ha pogut trobar l'entitat '%d'",
	'ImportException:ProblemUpdatingMeta' => "S'ha produ&iuml;t un error actualitzant '%s' en l'entitat '%d'",

	'ExportException:NoSuchEntity' => "GUID d'entitat inv&agrave;lid: %d",

	'ImportException:NoODDElements' => "No s'han trobat elements OpenDD per la importaci&oacute;, la importaci&oacute; ha fallat",
	'ImportException:NotAllImported' => "No s'han importat tots els elements",

	'InvalidParameterException:UnrecognisedFileMode' => "Mode d'arxiu '%s' no reconegut",
	'InvalidParameterException:MissingOwner' => "L'arxiu %s (guid: %d) (guid del propietari: %d) no t&eacute; propietari!",
	'IOException:CouldNotMake' => "No s'ha pogut realitzar %s",
	'IOException:MissingFileName' => "Has d'especificar un nom abans d'obrir un arxiu",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "No ha pogut carregar-se la classe de repositori %s per l'arxiu %u",
	'NotificationException:NoNotificationMethod' => "No s'ha especificat un m&egrave;tode de notificaci&oacute;",
	'NotificationException:NoHandlerFound' => "No s'ha trobat un controlador '%s' o no és executable",
	'NotificationException:ErrorNotifyingGuid' => "S'ha donat un error al notificar %d",
	'NotificationException:NoEmailAddress' => "No ha pogut carregar-se la adreça de Email pel GUID:%d",
	'NotificationException:MissingParameter' => "Manca par&agrave;metre requerit: '%s'",

	'DatabaseException:WhereSetNonQuery' => "On no contingui WhereQueryComponent",
	'DatabaseException:SelectFieldsMissing' => "Manquen camps en l'estil de consulta",
	'DatabaseException:UnspecifiedQueryType' => "Tipus de consulta no reconegut o no especificat",
	'DatabaseException:NoTablesSpecified' => "No s'han trobat les taules per la consulta",
	'DatabaseException:NoACL' => "No s'ha especificat el control d'acc&eacute;s en la consulta",

	'InvalidParameterException:NoEntityFound' => "No s'ha trobat l'entitat, potser que no existeixi o que no tinguis els permisos necessaris sobre ella",

	'InvalidParameterException:GUIDNotFound' => "No s'ha pugut trobar el GUID: %s, o no tens acc&eacute;s a ella",
	'InvalidParameterException:IdNotExistForGUID' => "Ho sentim, '%s' no existeix pel guid: %d",
	'InvalidParameterException:CanNotExportType' => "Ho sentim, no es troba implementada l'exportaci&oacute; de '%s'",
	'InvalidParameterException:NoDataFound' => "No s'han trobat resultats",
	'InvalidParameterException:DoesNotBelong' => "No pertany a la entitat",
	'InvalidParameterException:DoesNotBelongOrRefer' => "No pertany o es refereix a l'entitat",
	'InvalidParameterException:MissingParameter' => "Manca par&agrave;metre, ha de proveir un GUID",
	'InvalidParameterException:LibraryNotRegistered' => '%s no és una llibreria registrada',

	'APIException:ApiResultUnknown' => "Els resultats de l'API no són coneguts, aix&ograve; no ha de passar",
	'ConfigurationException:NoSiteID' => "No s'ha especificat un ID del lloc",
	'SecurityException:APIAccessDenied' => "Ho sentim, l'acc&eacute;s a l'API ha estat deshabilitat per a l'administrador",
	'SecurityException:NoAuthMethods' => "No s'han trobat m&egrave;todes d'autenticaci&oacute; per a processar la sol&iuml;licitut",
	'SecurityException:UnexpectedOutputInGatekeeper' => "Sortida inesperada en resultat gatekeeper. Aturant l'execuci&oacute; per seguretat. Revisa http://docs.elgg.org/ per m&eacute;s informaci&oacute;",
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "M&egrave;tode o funci&oacute; no especificat en la crida a expose_method()",
	'InvalidParameterException:APIParametersArrayStructure' => "Estructures d'Array són inv&agrave;lides en crides a la funci&oacute; '%s'",
	'InvalidParameterException:UnrecognisedHttpMethod' => "M&egrave;tode http %s no reconegut pel m&egrave;tode '%s' de l'API",
	'APIException:MissingParameterInMethod' => "Manca par&agrave;metre %s en m&egrave;tode %s",
	'APIException:ParameterNotArray' => "%s no és un Array",
	'APIException:UnrecognisedTypeCast' => "Tipus no reconegut en casting %s per a la variable '%s' en el m&egrave;tode '%s'",
	'APIException:InvalidParameter' => "S'ha trobat un par&agrave;metre inv&agrave;lid per '%s' en el m&egravetode '%s'",
	'APIException:FunctionParseError' => "%s(%s) t&eacute; un error de processat",
	'APIException:FunctionNoReturn' => "%s(%s) no ha retornat cap valor",
	'APIException:APIAuthenticationFailed' => "La crida al m&egrave;tode ha fallat en l'autenticaci&oacute; de l'API",
	'APIException:UserAuthenticationFailed' => "La crida al m&egrave;tode ha fallat en l'autenticaci&oacute; de l'usuari",
	'SecurityException:AuthTokenExpired' => "El token d'autenticaci&oacute; no se troba o b&eacute; ha expirat",
	'CallException:InvalidCallMethod' => "%s ha de cridar-se utilizant '%s'",
	'APIException:MethodCallNotImplemented' => "La crida al m&egrave;tode '%s' no es troba implementada",
	'APIException:FunctionDoesNotExist' => "La funci&oacute; pel m&egrave;tode '%s' no es executable",
	'APIException:AlgorithmNotSupported' => "No se soporta o s'ha deshabilitat l'algoritme '%s'",
	'ConfigurationException:CacheDirNotSet' => "Directori de mem&ograve;ria cau 'cache_path' no establert",
	'APIException:NotGetOrPost' => "El m&egrave;tode de Request ha de ser GET o POST",
	'APIException:MissingAPIKey' => "Manca clau API",
	'APIException:BadAPIKey' => "Clau API incorrecta",
	'APIException:MissingHmac' => "Manca capçalera X-Elgg-hmac",
	'APIException:MissingHmacAlgo' => "Manca capçalera X-Elgg-hmac-algo",
	'APIException:MissingTime' => "Manca capçalera X-Elgg-time",
	'APIException:MissingNonce' => "Manca capçalera X-Elgg-nonce",
	'APIException:TemporalDrift' => "X-Elgg-time és molt lluny&agrave; en el passat o en el futur. Fallida Epoch",
	'APIException:NoQueryString' => "No hi han dades en la query string",
	'APIException:MissingPOSTHash' => "Manca capçalera X-Elgg-posthash",
	'APIException:MissingPOSTAlgo' => "Manca capçalera X-Elgg-posthash_algo",
	'APIException:MissingContentType' => "Manca Content type per a post data",
	'SecurityException:InvalidPostHash' => "Hash de POST data inv&agrave;lid - S'esperava %s per&ograve; s'ha rebut %s",
	'SecurityException:DupePacket' => "Signatura de paquet ja vista",
	'SecurityException:InvalidAPIKey' => "Clau API inv&agrave;lida o manca",
	'NotImplementedException:CallMethodNotImplemented' => "La crida al m&egrave;tode '%s' no est&agrave; soportat",
	 
	'NotImplementedException:XMLRPCMethodNotImplemented' => "Crida al m&egrave;tode XML-RPC '%s' no implementada",
	'InvalidParameterException:UnexpectedReturnFormat' => "La crida al m&egrave;tode '%s' ha retornat un resultat inesperat",
	'CallException:NotRPCCall' => "La crida no sembla ser una crida XML-RPC v&agrave;lida",
	 
	'PluginException:NoPluginName' => "No s'ha pugut trobar el nom del plugin",
	 
	'SecurityException:authenticationfailed' => "No s'ha pogut autenticar l'usuari",
	 
	'CronException:unknownperiod' => "%s no és un per&iacute;ode reconeixible",
	 
	'SecurityException:deletedisablecurrentsite' => "No pot eliminar o deshabilitar el lloc que est&agrave; veient en aquest moment!",
	 
	'RegistrationException:EmptyPassword' => "Els camps de contrasenyes s&oacute;n obligatoris",
	'RegistrationException:PasswordMismatch' => "Les contrasenyes han de coincidir",
	'LoginException:BannedUser' => "El teu ingr&eacute;s ha estat bloquejat moment&agrave;neament",
	'LoginException:UsernameFailure' => "No s'ha pogut iniciar la sessi&oacute;. Si us plau, verifica el teu nom d'usuari i contrasenya",
	'LoginException:PasswordFailure' => "No s'ha pogut iniciar la sessi&oacute;. Si us plau, verifica el teu nom d'usuari i contrasenya",
	'LoginException:AccountLocked' => "El teu compte ha estat bloquejat per la quantitat d'intents erronis d'inici de sessi&oacute;",
	 
	'memcache:notinstalled' => "M&ograve;dul memcache del PHP no instal&middot;lat, has d'instal&middot;lar el m&ograve;dul php5-memcache",
	'memcache:noservers' => "No hi han servers memcache definits, si us plau popula la variable $CONFIG->memcache_servers",
	'memcache:versiontoolow' => "Memcache requereix com a m&iacute;nim la versi&oacute; %s per el seu funcionament, s'est&agrave; executant la versi&oacute; %s",
	'memcache:noaddserver' => "Suport per a m&uacute;ltiples servidors deshabilitat, has d'actualitzar la llibreria memcache PECL",
	 
	'deprecatedfunction' => "Precauci&oacute;: Aquest codi utilitza la funci&oacute; obsoleta \"%s\" que no és compatible amb aquesta versi&oacute; d'Elgg",
 
	'pageownerunavailable' => "Precauci&oacute;: L'administrador de p&agrave;gina %d no es troba accesible!",
	'viewfailure' => "S'ha donat un error intern en la vista %s",
	'changebookmark' => "Si us plau, modifica el teu &iacute;ndex per aquesta vista",

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
/**
  * Groups
	*/
	'group' => "Grup",
	'item:group' => "Grups",




/**
	* Users
	*/
	'user' => "Usuari/a",
	'item:user' => "Usuaris/es",
	
	
	

/**
	* Friends
	*/
	'friends' => "Contactes",
	'friends:yours' => "Els teus contactes",
	'friends:owned' => "Contacte de %s",
	'friend:add' => "Nou contacte",
	'friend:remove' => "Esborrar contacte",
	
	'friends:add:successful' => "S'ha afegit a %s com a contacte",
	'friends:add:failure' => "No s'ha pogut afegir a %s com a contacte. Si us plau, intenta-ho de nou",
	
	'friends:remove:successful' => "S'ha esborrat a %s dels teus contactes",
	'friends:remove:failure' => "No s'ha pogut esborrar a %s dels teus contactes. Si us plau intenta-ho de nou",
	
	'friends:none' => "Aquest/a usuari/a encara no t&eacute; contactes",
	'friends:none:you' => "Encara no tens contactes",
	
	'friends:none:found' => "No s'han trobat contactes",
	
	'friends:of:none' => "Ning&uacute; ha afegit encara a aquest/a usuari/a com a contacte",
	'friends:of:none:you' => "Ning&uacute; t'ha afegit encara com a contacte. Pots completar el teu perfil i afegir continguts perque la gent et trobi!",
	
	'friends:of:owned' => "Contactes de %s",
	
	'friends:of' => "Contactes de",
	'friends:collections' => "Col&middot;leccions de contactes",
	'collections:add' => "Nova col&middot;lecci&oacute;",
	'friends:collections:add' => "Nova col&middot;lecci&oacute; de contactes",
	'friends:addfriends' => "Sel&middot;leccionar contactes",
	'friends:collectionname' => "Nom de la col&middot;lecci&oacute;",
	'friends:collectionfriends' => "Contactes en la col&middot;lecci&oacute;",
	'friends:collectionedit' => "Editar aquesta col&middot;lecci&oacute;",
	'friends:nocollections' => "Encara no tens col&middot;leccions",
	'friends:collectiondeleted' => "La col&middot;lecci&oacute; ha estat esborrada",
	'friends:collectiondeletefailed' => "No s'ha pogut eliminar la col&middot;lecci&oacute;",
	'friends:collectionadded' => "La col&middot;lecci&oacute; s'ha creat correctament",
	'friends:nocollectionname' => "Has de posar un nom a la col&middot;lecci&oacute; abans de crear-la",
	'friends:collections:members' => "Membres d'aquesta col&middot;lecci&oacute;",
	'friends:collections:edit' => "Editar col&middot;lecci&oacute;",
	'friends:collections:edited' => "Col&middot;lecci&oacute; guardada",
	'friends:collection:edit_failed' => "No s'ha pogut guardar la col&middot;lecci&oacute;",
	
	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
	
	'avatar' => 'Imatge de perfil',
	'avatar:create' => 'Crea la teva imatge de perfil',
	'avatar:edit' => 'Editar imatge de perfil',
	'avatar:preview' => 'Previsualitzar',
	'avatar:upload' => 'Pujar nova imatge de perfil',
	'avatar:current' => 'Imatge de perfil actual',
	'avatar:crop:title' => "Eina de retall d'imatge de perfil",
	'avatar:upload:instructions' => "La teva imatge de perfil ja es mostra a la plateforma. Podr&agrave;s modificar-la sempre que vulguis (Formats d'arxiu acceptats: GIF, JPG o PNG)",
	'avatar:create:instructions' => "Fes click i arrossega un quadrat per a sel&middot;leccionar la retallada de la imatge. Veur&agrave;s una previsualitzaci&oacute; a la caixa de la dreta. Quan estiguis d'acord amb la previsualitzaci&oacute;, fes click a \'Crea la teva imatge de perfil\'. La versi&oacute; retallada ser&agrave; la utilitzada per a mostrar a la plataforma",
	'avatar:upload:success' => 'Imatge de perfil pujada correctament',
	'avatar:upload:fail' => 'Ha fallat la pujada de la imatge de perfil',
	'avatar:resize:fail' => 'Error al modificar el tamany de la imatge de perfil',
	'avatar:crop:success' => 'Retallada de la imatge de perfil finalitzada correctament',
	'avatar:crop:fail' => 'Error en la retallada de la imatge de perfil',
	
	'profile:edit' => 'Editar perfil',
	'profile:aboutme' => "Sobre mi",
	'profile:description' => "Sobre mi",
	'profile:briefdescription' => "Descripci&oacute; curta",
	'profile:location' => "Ubicaci&oacute;",
	'profile:skills' => "Habilitats",
	'profile:interests' => "Interessos",
	'profile:contactemail' => "Email de contacte",
	'profile:phone' => "Tel&egrave;fon",
	'profile:mobile' => "M&ograve;vil",
	'profile:website' => "Lloc Web",
	'profile:twitter' => "Usuari de Twitter",
	'profile:saved' => "El teu perfil s'ha guardat correctament",
		
	'admin:appearance:profile_fields' => 'Editar camps de perfil',
	'profile:edit:default' => 'Editar camps de perfil',
	'profile:label' => "Etiqueta de perfil",
	'profile:type' => "Tipus de perfil",
	'profile:editdefault:delete:fail' => 'Error en eliminar &iacute;tem de perfil per defecte',
	'profile:editdefault:delete:success' => '&Iacute;tem de perfil per defecte eliminat!',
	'profile:defaultprofile:reset' => 'Reinici de perfil de sistema per defecte',
	'profile:resetdefault' => 'Reiniciar perfil de sistema per defecte',
	'profile:explainchangefields' => "Pots canviar els camps del perfil utilitzant el formulari. \n\n Introdueix un nou nom de camp de perfil, per exemple, 'Tecnologia renovable favorita', despr&eacute;s sel&middot;lecciona el tipus de camp (eg. texte, url, tags), i fes click al bot&oacute; 'Afegir'. Per a endreçar els camps, arrossega el control al costat de l'etiqueta del camp. Per a editar l'etiqueta del camp, fes click en el texte de l'etiqueta per a tornar-ho editable. \n\n Pots tornar a la disposici&oacute; original del perfil en qualsevol moment, per&ograve; perdr&agrave;s la informaci&oacute; creada en els camps personalitzats del perfil",
	'profile:editdefault:success' => 'Element afegit al perfil per defecte correctament',
	'profile:editdefault:fail' => "No s'ha pugut guardar el perfil per defecte",
	
	
	
	

	


	 
	 
	 'aa'  =>  "Afar" , 
	 'ab'  =>  "Abkhazià" , 
	 'af'  =>  "Afrikaans" , 
	 'am'  =>  "Amharic" , 
	 'ar'  =>  "Aràbic" , 
	 'as'  =>  "Assamese" , 
	 'ay'  =>  "Aymara" , 
	 'az'  =>  "Azerbaijani" , 
	 'ba'  =>  "Bashkir" , 
	 'be'  =>  "Bielorus" , 
	 'bg'  =>  "Búlgar" , 
	 'bh'  =>  "bihari" , 
	 'bi'  =>  "Bislama" , 
	 'bn'  =>  "Bengali;Bangla" , 
	 'bo'  =>  "Tibetà" , 
	 'br'  =>  "Bretó" , 
	 'ca'  =>  "Català" , 
	 'co'  =>  "Corsa" , 
	 'cs'  =>  "Xec" , 
	 'cy'  =>  "Galés" , 
	 'da'  =>  "Danès" , 
	 'de'  =>  "Alemà" , 
	 'dz'  =>  "Bhutani" , 
	 'el'  =>  "Grec" , 
	 'en'  =>  "Anglès" , 
	 'eo'  =>  "Esperanto" , 
	 'es'  =>  "Castellà" , 
	 'et'  =>  "Estonià" , 
	 'eu'  =>  "Eusquera" , 
	 'fa'  =>  "Persa" , 
	 'fi'  =>  "Finlandès" , 
	 'fj'  =>  "Fiji" , 
	 'fo'  =>  "Faeroese" , 
	 'fr'  =>  "Francès" , 
	 'fy'  =>  "Frisio" , 
	 'ga'  =>  "Irlandès" , 
	 'gd'  =>  "Gaèlic" , 
	 'gl'  =>  "Gallec" , 
	 'gn'  =>  "Guaraní" , 
	 'gu'  =>  "Gujarati" , 
	 'he'  =>  "Hebreu" , 
	 'ha'  =>  "Haussa" , 
	 'hi'  =>  "Hindú" , 
	 'hr'  =>  "Croat" , 
	 'hu'  =>  "Hongarès" , 
	 'hy'  =>  "Armeni" , 
	 'ia'  =>  "Interllenguatge" , 
	 'id'  =>  "Indonesi" , 
	 'ie'  =>  "Interllenguatge" , 
	 'ik'  =>  "Inupiak" , 
	 'is'  =>  "Islandès" , 
	 'it'  =>  "Italià" , 
	 'iu'  =>  "Inuktitut" , 
	 'iw'  =>  "Hebreu antic" , 
	 'ja'  =>  "Japonès" , 
	 'ji'  =>  "Yiddish" , 
	 'jw'  =>  "Javanès" , 
	 'ka'  =>  "Georgià" , 
	 'kk'  =>  "Kazakh" , 
	 'kl'  =>  "Groenlandia" , 
	 'km'  =>  "Cambotjà" , 
	 'kn'  =>  "Canadenc" , 
	 'ko'  =>  "Coreà" , 
	 'ks'  =>  "Kashmiri" , 
	 'ku'  =>  "Kurd" , 
	 'ky'  =>  "Kirghiz" , 
	 'la'  =>  "Llatí" , 
	 'ln'  =>  "Lingala" , 
	 'lo'  =>  "Laotán" , 
	 'lt'  =>  "Lituà" , 
	 'lv'  =>  "Letó" , 
	 'mg'  =>  "Magaix" , 
	 'mi'  =>  "Maorí" , 
	 'mk'  =>  "Macedoni" , 
	 'ml'  =>  "Mayalam" ,
	 'mn'  =>  "Mongol" ,
	 'mo'  =>  "Moldà" ,
	 'mr'  =>  "Marathi" ,
	 'ms'  =>  "Malay" ,
	 'mt'  =>  "Maltes" ,
	 'my'  =>  "Burmes" ,
	 'na'  =>  "Nauru" ,
	 'ne'  =>  "Nepalí" ,
	 'nl'  =>  "Holandès" ,
	 'no'  =>  "Noruec" ,
	 'oc'  =>  "Occità" ,
	 'om'  =>  "(Afan) Orom" ,
	 'or'  =>  "Oriyà" ,
	 'pa'  =>  "Punjabi" ,
	 'pl'  =>  "Polac" ,
	 'ps'  =>  "Pashto / Pushto" ,
	 'pt'  =>  "Portuguès" ,
	 'qu'  =>  "Quechua" ,
	 'rm'  =>  "Rhaeto-Romance" ,
	 'rn'  =>  "Kirundi" ,
	 'ro'  =>  "Rumà" ,
	 'ru'  =>  "Rus" ,
	 'rw'  =>  "Kinyarwanda" ,
	 'sa'  =>  "Sanskrit" ,
	 'sd'  =>  "Sindhi" ,
	 'sg'  =>  "Sangro" ,
	 'sh'  =>  "Serb-croata" ,
	 'si'  =>  "Singalès" ,
	 'sk'  =>  "Slovak" ,
	 'sl'  =>  "Sloveno" ,
	 'sm'  =>  "Samoan" ,
	 'sn'  =>  "Shona" ,
	 'so'  =>  "Somalí" ,
	 'sq'  =>  "Albanès" ,
	 'sr'  =>  "Serbi" ,
	 'ss'  =>  "Siswati" ,
	 'st'  =>  "Sesotho" ,
	 'su'  =>  "Sondanès" ,
	 'sv'  =>  "Suec" ,
	 'sw'  =>  "Swahili" ,
	 'ta'  =>  "Tamil" ,
	 'te'  =>  "Tegulu" ,
	 'tg'  =>  "Tajik" ,
	 'th'  =>  "Thai" ,
	 'ti'  =>  "Tigrinyà" ,
	 'tk'  =>  "Turc" ,
	 'tl'  =>  "Tagalog" ,
	 'tn'  =>  "Sestswana" ,
	 'to'  =>  "Tonga" ,
	 'tr'  =>  "Turc" ,
	 'ts'  =>  "Tsonga" ,
	 'tt'  =>  "Tatar" ,
	 'tw'  =>  "Twi" ,
	 'ug'  =>  "Uigur" ,
	 'uk'  =>  "Ucranià" ,
	 'ur'  =>  "Urdú" ,
	 'uz'  =>  "Uzbek" ,
	 'vi'  =>  "Vietnamita" ,
	 'vo'  =>  "Volapuk" ,
	 'wo'  =>  "Wolof" ,
	 'xh'  =>  "Xhosa" ,
	 'yi'  =>  "Yiddisha" ,
	 'yo'  =>  "Yoruba" ,
	 'za'  =>  "Zuang" ,
	 'zh'  =>  "Xinès" ,
	 'zu'  =>  "Zulu"
); 

add_translation('ca', $catalan);