<?php 

	$catalan = array(
		'file_tools' => "Eines Fitxers",
	
		'file_tools:file:actions' => 'Accions',
	
		'file_tools:list:sort:type' => 'Tipus',
		'file_tools:list:sort:time_created' => 'Data creaci�',
		'file_tools:list:sort:asc' => 'Ascendent',
		'file_tools:list:sort:desc' => 'Descendent',
	
		// object name
		'item:object:folder' => "Carpeta Fitxers",
	
		// menu items
		'file_tools:menu:mine' => "Teves Carpetes",
		'file_tools:menu:user' => "%s's carpetes",
		'file_tools:menu:group' => "Grup de carpetes de fitxers",
		
		// group tool option
		'file_tools:group_tool_option:structure_management' => "Permetre administraci� de carpetes per membres",
		
		// views
	
		// object
		'file_tools:object:files' => "%s fitxer(s) en aquesta carpeta",
		'file_tools:object:no_files' => "Cap fitxer en aquesta carpeta",
	
		// input - folder select
		'file_tools:input:folder_select:main' => "Carpeta Principal",
	
		// list
		'file_tools:list:title' => "Carpetes llista fitxers",
		
		'file_tools:list:folder:main' => "Carpeta Principal",
		'file_tools:list:files:none' => "Cap fitxer en aquesta carpeta",
		'file_tools:list:select_all' => 'Selecciona tot',
		'file_tools:list:deselect_all' => 'Deselecciona tot',
		'file_tools:list:download_selected' => 'Descarregar seleccionat',
		'file_tools:list:delete_selected' => 'Esborra seleccionat',
		'file_tools:list:alert:not_all_deleted' => 'No tots els fitxers poden ser esborrats',
		'file_tools:list:alert:none_selected' => 'Cap element seleccionat',
		
	
		'file_tools:list:tree:info' => "Sabies que?",
		'file_tools:list:tree:info:1' => "Pots arrossegar i deixar anar els fitxers a les carpetes per organitzar-les!",
		'file_tools:list:tree:info:2' => "Pots fer doble click sobre qualsevol carpeta per expandir totes les seves sub-carpetes!",
		'file_tools:list:tree:info:3' => "Pots reordenar carpetes arrossegant-les al seu nou lloc en el arbre!",
		'file_tools:list:tree:info:4' => "Pots moure estructures completes de carpetes!",
		'file_tools:list:tree:info:5' => "Si esborres una carpeta, pots escollir opcionalment esborrar tots els seus fitxers!",
		'file_tools:list:tree:info:6' => "Quan esborres una carpeta, totes les subcarpetes seran esborrades!",
		'file_tools:list:tree:info:7' => "Aquest missatge �s aleatori!",
		'file_tools:list:tree:info:8' => "Quan esborres una carpeta, per� els seus fitxers, els fitxers
apareixeran a la carpeta de nivel superior!",
		'file_tools:list:tree:info:9' => "Una carpeta recentment afegida pot ser posada directament a la correcta subcarpeta!",
		'file_tools:list:tree:info:10' => "Quan puges o edites un fitxer pots escollir en quina carpeta hauria d'apar�ixer!",
		'file_tools:list:tree:info:11' => "Arrossegar fitxers �s �nicament disponible a la vista de llista, no a la  vista de galeria!",
		'file_tools:list:tree:info:12' => "Pots actualitzar el nivell d'acces a totes les carpetes i fins i tot (opcional) de tots els fitxers durant l'edici� d'una carpeta!",
	
		'file_tools:list:files:options:sort_title' => 'Ordenaci�',
		'file_tools:list:files:options:view_title' => 'Vista',
	
		'file_tools:usersettings:time' => 'Visualitzaci� Hora',
		'file_tools:usersettings:time:description' => 'Canviar com es mostra la data de fitxer/carpeta ',
		'file_tools:usersettings:time:default' => 'Visualitzaci� hora per defecte',
		'file_tools:usersettings:time:date' => 'Data',
		'file_tools:usersettings:time:days' => 'Dies enrere',
		
		// new/edit
		'file_tools:new:title' => "Nova carpeta fitxers",
		'file_tools:edit:title' => "Editar carpeta fitxers",
		'file_tools:forms:edit:title' => "T�tol",
		'file_tools:forms:edit:description' => "Descripci�",
		'file_tools:forms:edit:parent' => "Seleccionar una carpeta pare",
		'file_tools:forms:edit:change_children_access' => "Actualitzar acc�s de totes les subcarpetes",
		'file_tools:forms:edit:change_files_access' => "Actualitzar acces de tots els fitxers en aquesta carpeta (i totes les seves subcarpetes si es selecciona)",
		'file_tools:forms:browse' => 'Navegar..',
		'file_tools:forms:empty_queue' => 'Cua buida',
	
		'file_tools:folder:delete:confirm_files' => "Vols tamb� eliminar tots els arxius en les (sub)carpetes a esborrar",
	
		// actions
		// edit
		'file_tools:action:edit:error:input' => "Entrada incorrecte al crear/editar una carpeta",
		'file_tools:action:edit:error:owner' => "No es pot trobar el propietari de la carpeta",
		'file_tools:action:edit:error:folder' => "Cap carpeta a crear/editar",
		'file_tools:action:edit:error:save' => "Error desconegut al guardar la carpeta",
		'file_tools:action:edit:success' => "Carpeta creada/editada satisfact�riament",
	
		'file_tools:action:move:parent_error' => "No es pot arrosseguar carpeta en si mateixa.",
		
		// delete
		'file_tools:actions:delete:error:input' => "Entrada incorrecte al esborrar una carpeta",
		'file_tools:actions:delete:error:entity' => "El GUID no pot ser trobat",
		'file_tools:actions:delete:error:subtype' => "El GUID no �s una carpeta",
		'file_tools:actions:delete:error:delete' => "Error desconegut al eliminar la carpeta",
		'file_tools:actions:delete:success' => "La carpeta s'ha esborrat satisfact�riament",
	
		'file_tools:upload:new' => 'Pujar fitxer zip',
		'file_tools:upload:form:choose' => 'Escollir fitxer',
		'file_tools:upload:form:info' => 'Clicar navegar per pujar (multiple) fitxers',
		'file_tools:upload:form:zip:info' => "Pots pujar un fitxer zip. S'extreur� i cada un dels fitxers  seran importats separadament. Tamb� si tens carpetes en el teu zip s'importaran en la corresponent carpeta. Tipus de fitxers que no estan permesos seran omesos.",
	
		//errors
		'file_tools:error:pageowner' => 'Error recuperant propietari p�gina.',
		'file_tools:error:nofilesextracted' => 'No s\'ha trobat fitxers per extreure.',
		'file_tools:error:cantopenfile' => 'Fitxer Zip no pot ser obert (revisa si el fitxer pujat �s un fitxar .zip).',
		'file_tools:error:nozipfilefound' => 'Fitxer pujat no �s un fitxer .zip.',
		'file_tools:error:nofilefound' => 'Escull un fitxer a pujar.',
	
		//messages
		'file_tools:error:fileuploadsuccess' => 'Fitxer Zip pujat i extret satisfact�riament.',
		
		// move
		'file_tools:action:move:success:file' => "El fitxer s'ha mogut satisfat�riament",
		'file_tools:action:move:success:folder' => "La carpeta s'ha mogut satisfat�riament",
		
		// buld delete
		'file_tools:action:bulk_delete:success:files' => "Esborrats %s fitxers satisfat�riament",
		'file_tools:action:bulk_delete:error:files' => "Hi ha hagut un error en l'esborrat d'alguns fitxers",
		'file_tools:action:bulk_delete:success:folders' => "Esborrades %s carpetes satisfat�riament",
		'file_tools:action:bulk_delete:error:folders' => "Hi ha hagut un error en l'esborrat d'algunes carpetes",
		
		// reorder
		'file_tools:action:folder:reorder:success' => "Reordenat la(les) carpetes satisfat�riament",
		
		//settings
		'file_tools:settings:allowed_extensions' => 'Extensions permeses (separades per comes)',
		'file_tools:settings:user_folder_structure' => 'Usar estructura carpetes',
		'file_tools:settings:sort:default' => 'Opcions ordenaci� carpetes per defecte',
	
		'file:type:application' => 'Applicaci�',
		'file:type:text' => 'Text',

		// widgets
		// file tree
		'widgets:file_tree:title' => "Carpetes",
		'widgets:file_tree:description' => "Mostrar les teves carpetes",
		
		'widgets:file_tree:edit:select' => "Seleccionar quina(es) carpeta(es) mostrar",
		'widgets:file_tree:edit:show_content' => "Mostrar el contingut de la(les) carpeta(es)",
		'widgets:file_tree:no_folders' => "Cap carpeta configurada",
		'widgets:file_tree:no_files' => "Cap fitxer configurat",
		'widgets:file_tree:more' => "M�s carpetes",
	
		'widget:file:edit:show_only_featured' => 'Mostrar nom�s els fitxers que apareixen',
		
		'widget:file_tools:show_file' => 'Feature file (widget)',
		'widget:file_tools:hide_file' => 'Unfeature file',
	
		'widgets:file_tools:more_files' => 'M�s fitxers',
		
		// Group files
		'widgets:group_files:description' => "Mostrar els �ltims grups fitxers",
		
		// index_file
		'widgets:index_file:description' => "Mostrar els �ltims fitxers de la comunitat",
	
	);
	
	add_translation("ca", $catalan);
	