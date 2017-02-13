<?php
/**
* Profile Manager
*
* Czech language
*
* @package profile_manager
* @author ColdTrick IT Solutions
* @copyright Coldtrick IT Solutions 2009
* @link http://www.coldtrick.com/
*/

return [
				
	// entity names
	'item:object:custom_profile_field' => 'Vlastní položky profilu',
	'item:object:custom_profile_field_category' => 'Vlastní kategorie položek profilu',
	'item:object:custom_profile_type' => 'Vlastní typ profilu',
	'item:object:custom_group_field' => 'Vlastní položky skupiny',

	'profile:custom_profile_type' => 'Vlastní typ profilu',
	
	// admin menu
	'admin:appearance:group_fields' => "Upravit položky skupiny",
	'admin:appearance:export_fields' => "Exportovat data profilu",
	
	'admin:groups' => "Skupiny",
	'admin:groups:export' => "Exportovat skupiny",
	
	'admin:users:export' => "Exportovat uživatele",
	'admin:users:inactive' => "Vypsat neaktivní uživatele",

	// plugin settings
	'profile_manager:settings:registration' => 'Registrace',
	'profile_manager:settings:edit_profile' => 'Upravit profil',
	'profile_manager:settings:view_profile' => 'Zobrazit profil',
	'profile_manager:settings:group' => "Upravit profil skupiny",

	'profile_manager:settings:generate_username_from_email' => 'Vytvořit uživatelské jméno z e-mailu',
	'profile_manager:settings:profile_icon_on_register' => 'Na registrační formulář přidat ikonu povinné položky profilu',
	'profile_manager:settings:profile_icon_on_register:option:optional' => 'Volitelně',
	'profile_manager:settings:show_account_hints' => 'U výchozích registračních otázek zobrazovat tipy',
	'profile_manager:settings:simple_access_control' => 'Ve formuláři úpravy profilu zobrazovat pouze jeden společný prvek řízení přístupu',
	'profile_manager:settings:default_profile_type' => "Výchozí typ profilu v registračním formuláři",
	'profile_manager:settings:hide_profile_type_default' => "Na registračním formuláři skrýt typ profilu 'Výchozí'",

	'profile_manager:settings:edit_profile_mode' => "Jak zobrazovat stránku 'Upravit profil'",
	'profile_manager:settings:edit_profile_mode:list' => "Seznam",
	'profile_manager:settings:edit_profile_mode:tabbed' => "V kartách",

	'profile_manager:settings:show_profile_type_on_profile' => "V profilu uživatele zobrazovat typ profilu",

	'profile_manager:settings:display_categories' => 'Zvolte jak budou v profilu zobrazeny různé kategorie',
	'profile_manager:settings:display_categories:option:plain' => 'Obyčejně',
	'profile_manager:settings:display_categories:option:accordion' => 'Harmonika',

	'profile_manager:settings:display_system_category' => 'V profilu zobrazovat kategorii se systémovými daty (pouze pro správce)',

	'profile_manager:settings:profile_type_selection' => 'Kdo může změnit typ profilu?',
	'profile_manager:settings:profile_type_selection:option:user' => 'Uživatel',
	'profile_manager:settings:profile_type_selection:option:admin' => 'Pouze správce',

	'profile_manager:settings:enable_profile_completeness_widget' => "Povolit udělátko úplnosti profilu",
	'profile_manager:settings:enable_username_change' => "Povolit uživatelům měnit v nastavení jejich uživatelské jméno",
	'profile_manager:settings:enable_username_change:option:admin' => "Pouze správce",
	'profile_manager:settings:enable_site_join_river_event' => "Do aktivity stránek přidávat záznamy o nových členech",
	
	'profile_manager:settings:registration:terms' => "Pokud na registrační stránce chcete položku 'Přijmout podmínky', zadejte prosím URL těchto podmínek",
	'profile_manager:settings:registration:extra_fields' => "Kde zobrazovat zobrazovat další položky profilu",
	'profile_manager:settings:registration:extra_fields:extend' => "Pod standardním registračním formulářem",
	'profile_manager:settings:registration:extra_fields:beside' => "Vedle registračního formuláře",
	'profile_manager:settings:registration:free_text' => "Pokud na registrační stránce chcete nějaký další text, zadejte ho zde",
	
	
	'profile_manager:settings:group:group_limit_name' => "Maximální povolený počet změn jména skupiny",
	'profile_manager:settings:group:group_limit_description' => "Maximální povolený počet změn popisu skupiny",
	'profile_manager:settings:group:limit:unlimited' => "Bez omezení",
	'profile_manager:settings:group:limit:info' => "Tato omezení se nevztahují na správce stránek",
	
	// Field Configuration
	'profile_manager:admin:metadata_name' => 'Jméno',
	'profile_manager:admin:metadata_label' => 'Popisek',
	'profile_manager:admin:metadata_input_label' => 'Popisek během úprav',
	'profile_manager:admin:metadata_input_label:help' => 'Použito místo popisku při registraci a úpravě profilu',
	'profile_manager:admin:metadata_hint' => 'Tip',
	'profile_manager:admin:metadata_placeholder' => 'Předvyplnění',
	'profile_manager:admin:metadata_options' => 'Volby (oddělené čárkou)',
	'profile_manager:admin:field_type' => "Typ položky",
	'profile_manager:admin:options:dropdown' => 'Roletka',
	'profile_manager:admin:options:radio' => 'Přepínač',
	'profile_manager:admin:options:tel' => 'Telefon',
	'profile_manager:admin:options:multiselect' => 'Více voleb',
	'profile_manager:admin:options:file' => 'Soubor',
	'profile_manager:admin:options:pm_rating' => 'Ohodnocení',
	'profile_manager:admin:options:pm_twitter' => 'Twitter',
	'profile_manager:admin:options:pm_facebook' => 'Facebook',
	'profile_manager:admin:options:pm_linkedin' => 'LinkedIn',
	
	'profile_manager:admin:additional_options' => 'Doplňkové volby',
	'profile_manager:admin:show_on_register' => 'Zobrazovat při registraci',
	'profile_manager:admin:mandatory' => 'Povinná',
	'profile_manager:admin:user_editable' => 'Uživatel ji může měnit',
	'profile_manager:admin:output_as_tags' => 'Zobrazovat jako štítky',
	'profile_manager:admin:admin_only' => 'Položka pouze pro správce',
	'profile_manager:admin:count_for_completeness' => 'Započítávat tuto položku v udělátku úplnosti profilu',
	'profile_manager:admin:blank_available' => 'Položka má obsahovat prázdnou možnost',
	'profile_manager:admin:option_unavailable' => 'Volba není k dispozici',

	// field options additionals description
	'profile_manager:admin:show_on_register:description' => "Chcete-li mít v registračním formuláři tuto položku.",
	'profile_manager:admin:mandatory:description' => "Chcete-li mít tuto položku povinnou (platí pouze v registračním formuláři).",
	'profile_manager:admin:user_editable:description' => "Pokud nastavíte na 'Ne', uživatelé tuto položku nebudou moci měnit (hodí se pro data spravovaná externím systémem).",
	'profile_manager:admin:output_as_tags:description' => "Data budou zpracována jako štítky (platí pouze v profilu uživatele).",
	'profile_manager:admin:admin_only:description' => "Nastavením 'Ano' bude položka dostupná pouze správcům.",
	'profile_manager:admin:blank_available:description' => "Nastavením 'Ano' bude ve volbách dostupná prázdná možnost.",

	// profile fields
	'profile_manager:profile_fields:list:title' => "Položky profilu",

	'profile_manager:profile_fields:no_fields' => "Momentálně nejsou tímto doplňkem nastaveny žádné položky. Přidejte vlastní nebo je naimportujte příslušnými tlačítky.",
	
	'profile_manager:profile_fields:add' => "Přidat novou položku profilu",
	'profile_manager:profile_fields:edit' => "Upravit položku profilu",
	'profile_manager:profile_fields:add:description' => "Zde můžete nastavit jaké položky mohou uživatelé vyplnit na svých profilech",

	// group fields
	'profile_manager:group_fields:list:title' => "Položky profilu skupiny",

	'profile_manager:group_fields:add:description' => "Zde můžete nastavit jaké položky budou zobrazeny v profilu skupiny",
	'profile_manager:group_fields:add' => "Přidat novou položku profilu skupiny",
	'profile_manager:group_fields:edit' => "Upravit položku profilu skupiny",

	// Custom fields categories
	'profile_manager:categories:add' => "Přidat novou kategorii",
	'profile_manager:categories:edit' => "Upravit kategorii",
	'profile_manager:categories:edit:related_types' => "Související typy profilů",
	'profile_manager:categories:list:title' => "Kategorie",
	'profile_manager:categories:list:default' => "Výchozí",
	'profile_manager:categories:list:system' => "Systém (pouze správce)",
	'profile_manager:categories:list:view_all' => "Zobrazit všechny položky",
	'profile_manager:categories:list:no_categories' => "Nejsou žádné kategorie",
	'profile_manager:categories:delete:confirm' => "Jste si jistý/á, že chcete smazat tuto kategorii?",
	
	// Custom Profile Types
	'profile_manager:profile_types:add' => "Přidat nový typ profilu",
	'profile_manager:profile_types:edit' => "Upravit typ profilu",
	'profile_manager:profile_types:edit:related_categories' => "Související kategorie",
	'profile_manager:profile_types:edit:metadata_label:singular' => "Popisek (singulár)",
	'profile_manager:profile_types:edit:metadata_label:plural' => "Popisek (plurál)",
	'profile_manager:profile_types:list:title' => "Typy profilů",
	'profile_manager:profile_types:list:no_types' => "Nejsou žádné typy profilů",
	'profile_manager:profile_types:delete:confirm' => "Jste si jistý/á, že chcete smazat tento typ profilu?",
	'profile_manager:user_details:profile_type' => "Typ profilu",
		
	// profile manager inactive users
	'profile_manager:admin:users:inactive:last_login' => "Poslední přihlášení před",
	'profile_manager:admin:users:inactive:list' => "Neaktivní úživatelé",

	// admin actions
	'profile_manager:actions:title' => 'Akce',

	// Reset
	'profile_manager:actions:reset:description' => 'Odebere všechny položky profilu',
	'profile_manager:actions:reset:confirm' => 'Jste si jistý/á, že chcete smazat všechny položky profilu?',
	'profile_manager:actions:reset:error:unknown' => 'Během nulování všech položek profilu nastala neznámá chyba',
	'profile_manager:actions:reset:error:wrong_type' => 'Špatný typ položky (skupiny nebo profilu)',
	'profile_manager:actions:reset:success' => 'Vynulování bylo úspěšné',

	// import from custom
	'profile_manager:actions:import:from_custom' => 'Importovat uživatelské položky',
	'profile_manager:actions:import:from_custom:description' => 'Importuje položky profilu dříve vytvořené pomocí základních funkcí projektu Elgg',
	'profile_manager:actions:import:from_custom:confirm' => 'Jste si jistý/á, že chcete importovat uživatelské položky?',
	'profile_manager:actions:import:from_custom:no_fields' => 'Pro import nejsou k dispozici žádné uživatelské položky',
	'profile_manager:actions:import:from_custom:new_fields' => 'Bylo úspěšně naimportováno <b>%s</b> nových položek',

	// import from default
	'profile_manager:actions:import:from_default' => 'Importovat výchozí položky',
	'profile_manager:actions:import:from_default:description' => "Importuje výchozí položky projektu Elgg",
	'profile_manager:actions:import:from_default:confirm' => 'Jste si jistý/á, že chcete importovat výchozí položky?',
	'profile_manager:actions:import:from_default:no_fields' => 'Pro import nejsou k dispozici žádné výchozí položky',
	'profile_manager:actions:import:from_default:new_fields' => 'Bylo úspěšně naimportováno <b>%s</b> nových položek',
	'profile_manager:actions:import:from_default:error:wrong_type' => 'Špatný typ položky (skupiny nebo profilu)',

	// Export
	'profile_manager:actions:export:description' => "Exportuje data profilu do souboru csv",
	'profile_manager:export:title' => "Export dat profilu",
	'profile_manager:export:description:custom_profile_field' => "Tato funkce vyexportuje všechna <b>uživatelská</b> metadata podle zvolených položek.",
	'profile_manager:export:description:custom_group_field' => "Tato funkce vyexportuje všechna <b>skupinová</b> metadata podle zvolených položek.",
	'profile_manager:export:list:title' => "Zvolte jaké položky chcete exportovat",
	'profile_manager:export:list:include_group_membership' => "Včetně členství ve skupině",
	'profile_manager:export:nofields' => "K exportu nejsou dostupné žádné položky profilu",

	// Group Edit
	'profile_manager:group:edit:limit' => "Počet zbývajících povolených změn této položky: %s",
	
	// Configuration Backup and Restore
	'profile_manager:actions:configuration:backup' => "Záloha",
	'profile_manager:actions:configuration:backup:description' => "Zazálohuje nastavení těchto položek (kategorie a typy se nezálohují)",
	'profile_manager:actions:configuration:restore' => "Obnovit",
	'profile_manager:actions:configuration:restore:description' => "Obnoví dříve zazálohovaný soubor s konfigurací (<b>přijdete o vazbu mezi položkami a kategoriemi</b>)",
	
	'profile_manager:actions:configuration:restore:upload' => "Obnovit",

	'profile_manager:actions:restore:success' => "Obnova byla úspěšná",
	'profile_manager:actions:restore:error:deleting' => "Během obnovy nastala chyba: nemohu smazat současné položky",
	'profile_manager:actions:restore:error:fieldtype' => "Během obnovy nastala chyba: typy položek si neodpovídají",
	'profile_manager:actions:restore:error:corrupt' => "Během obnovy nastala chyba: soubor se zálohou se zdá být poškozený nebo chybí informace",
	'profile_manager:actions:restore:error:json' => "Během obnovy nastala chyba: chybný json soubor",
	'profile_manager:actions:restore:error:nofile' => "Během obnovy nastala chyba: nebyl nahrán soubor",

	// new
	'profile_manager:actions:new:success' => 'Nová položka profilu byla úspěšně přidána',
	'profile_manager:actions:new:error:metadata_name_missing' => 'Nebyla zadána metadata',
	'profile_manager:actions:new:error:metadata_name_invalid' => 'Jméno metadat není platné',
	'profile_manager:actions:new:error:metadata_options' => 'Při použití tohoto typu musíte zadat volby',
	'profile_manager:actions:new:error:unknown' => 'Během ukládání nové položky profilu nastala neznámá chyba',
	'profile_manager:action:new:error:type' => 'Špatný typ položky (skupiny nebo profilu)',
	
	// edit
	'profile_manager:actions:edit:error:unknown' => 'Chyba při získávání dat položky profilu',

	//delete
	'profile_manager:actions:delete:confirm' => 'Jste si jistý/á, že chcete smazat tuto položku?',
	'profile_manager:actions:delete:error:unknown' => 'Během mazání nastala neznámá chyba',

	// toggle option
	'profile_manager:actions:toggle_option:error:unknown' => 'Během změny volby nastala neznámá chyba',

	// category to field
	'profile_manager:actions:change_category:error:unknown' => "Během změny kategorie nastala neznámá chyba",

	// add category
	'profile_manager:action:category:add:error:name' => "Kategorie má prázdné nebo neplatné jméno",
	'profile_manager:action:category:add:error:object' => "Během vytváření objektu kategorie nastala chyba",
	'profile_manager:action:category:add:error:save' => "Během ukládání objektu kategorie nastala chyba",
	'profile_manager:action:category:add:succes' => "Kategorie byla úspěšně vytvořena",

	// delete category
	'profile_manager:action:category:delete:error:guid' => "Nebylo zadáno GUID",
	'profile_manager:action:category:delete:error:type' => "Zadané GUID není kategorie položky profilu",
	'profile_manager:action:category:delete:error:delete' => "Během mazání kategorie nastala chyba",
	'profile_manager:action:category:delete:succes' => "Kategorie byla úspěšně smazána",

	// add profile type
	'profile_manager:action:profile_types:add:error:name' => "Typ profilu má prázdné nebo neplatné jméno",
	'profile_manager:action:profile_types:add:error:object' => "Během vytváření typu profilu nastala chyba",
	'profile_manager:action:profile_types:add:error:save' => "Během ukládání typu profilu nastala chyba",
	'profile_manager:action:profile_types:add:succes' => "Typ profilu byl úspěšně vytvořen",
	
	// delete profile type
	'profile_manager:action:profile_types:delete:error:guid' => "Nebylo zadáno GUID",
	'profile_manager:action:profile_types:delete:error:type' => "Zadané GUID není typ profilu",
	'profile_manager:action:profile_types:delete:error:delete' => "Během mazání typu profilu nastala chyba",
	'profile_manager:action:profile_types:delete:succes' => "Typ profilu byl úspěšně smazán",
	
	// change username action
	'profile_manager:action:username:change:succes' => "Vaše uživatelské jméno bylo úspěšně změněno",

	// Tooltips
	'profile_manager:tooltips:profile_field' => "
		<b>Položky profilu</b><br />
		Zde můžete přidat novou položku profilu.<br /><br />
		Ponecháním prázdného pole Popisek můžete udělat popisek překladatelný (<i>profile:[jméno]</i>).<br /><br />
		Pomocí pole Tip můžete do vstupních formulářů (registrační a úprava profilu/skupiny) přidat ikonu, která pod kurzorem zobrazí popis pole.
		Ponecháním prázdného pole Tip můžete udělat tip překladatelný (<i>profile:hint:[jméno]</i>).<br /><br />
		Volby jsou povinné pouze pro typy položek <i>Roletka, Přepínač a Více voleb</i>.
	",
	'profile_manager:tooltips:profile_field_additional' => "
		<b>Zobrazovat při registraci</b><br />
		Chcete-li mít v registračním formuláři tuto položku.<br /><br />
		
		<b>Povinná</b><br />
		Chcete-li mít tuto položku povinnou (platí pouze v registračním formuláři).<br /><br />
		
		<b>Uživatel ji může měnit</b><br />
		Pokud nastavíte na 'Ne', uživatelé tuto položku nebudou moci měnit (hodí se pro data spravovaná externím systémem).<br /><br />
		
		<b>Zobrazovat jako štítky</b><br />
		Data budou zpracována jako štítky (platí pouze v profilu uživatele).<br /><br />
		
		<b>Položka pouze pro správce</b><br />
		Nastavením 'Ano' bude položka dostupná pouze správcům.
	",
	'profile_manager:tooltips:category' => "
		<b>Kategorie</b><br />
		Zde můžete přidat novou kategorii profilu.<br /><br />
		Ponecháním prázdného pole Popisek můžete udělat popisek překladatelný (<i>profile:categories:[jméno]</i>).<br /><br />
		
		Pokud máte vytvořeny Typy profilů, můžete zvolit k jakému tato kategorie náleží. Pokud není zvolen žádný typ profilu, kategorie náleží ke všem (i k těm ještě nevytvořeným).
	",
	'profile_manager:tooltips:category_list' => "
		<b>Kategorie</b><br />
		Zobrazuje seznam všech nastavených kategorií.<br /><br />
		
		Kategorie <i>Výchozí</i> platí pro všechny profily.<br /><br />
		
		Položku do kategorie přidáte přetažením a puštěním.<br /><br />
		
		Kliknutím na název kategorie zobrazíte pouze její položky. Kliknutím na Vše zobrazíte všechny položky.<br /><br />
		
		Kategoriím můžete změnit pořadí jejich přetažením na požadované místo (<i>Výchozí není možné přesouvat</i>. <br /><br />
		
		Nastavení kategorie můžete měnit po kliknutí na příslušnou ikonu nastavení.
	",
	'profile_manager:tooltips:profile_type' => "
		<b>Typ profilu</b><br />
		Zde můžete přidat nový typ profilu.<br /><br />
		Ponecháním prázdného pole Popisek můžete udělat popisek překladatelný (<i>profile:types:[jméno]</i>).<br /><br />
		Zadejte popis zobrazovaný uživatelům při výběru typu profilu nebo ponechte prázdné pro překladatelný popis (<i>profile:types:[jméno]:description</i>).<br /><br />
		
		Pokud máte vytvořené Kategorie, můžete zvolit jaké kategorie k tomuto typu profilu náleží.
	",
	'profile_manager:tooltips:profile_type_list' => "
		<b>Typy profilů</b><br />
		Zobrazuje seznam všech nastavených typů profilů.<br /><br />
		Nastavení profilu můžete měnit po kliknutí na příslušnou ikonu nastavení.
	",
	'profile_manager:tooltips:actions' => "
		<b>Akce</b><br />
		Různé akce související s těmito položkami profilu.
	",
	
	// custom input/output views
	'profile_manager:pm_twitter:input:placeholder' => "Sem zadejte vaše uživatelské jméno na Twitteru",
	'profile_manager:pm_twitter:output:follow' => "Sledovat @%s",
	'profile_manager:pm_facebook:input:placeholder' => "Sem zadejte URL vašeho profilu na Facebooku",
	'profile_manager:pm_linkedin:input:placeholder' => "Sem zadejte URL vašeho profilu na LinkedIn",

	// widgets
	'widgets:profile_completeness:title' => 'Úplnost profilu',
	'widgets:profile_completeness:description' => 'Zobrazuje úplnost profilu',
	'widgets:profile_completeness:view:tips' => 'Tip! Pro zvýšení úplnosti profilu vyplňte položku %s.',
	'widgets:profile_completeness:view:complete' => 'Gratulujeme! Váš profil je 100% vyplněný!',
	
	'widgets:register:title' => "Registrace",
	'widgets:register:description' => "Zobrazuje registrační okénko",
	'widgets:register:loggedout' => "Pro použití toho udělátka musíte být odhlášeni",

	'profile_manager:input:multi_select:empty_text' => 'Vyberte prosím ...',
	'profile_manager:input:multi_select:selected_text' => 'počet vybraných: #',

	// Edit profile => profile type selector
	'profile_manager:profile:edit:custom_profile_type:label' => "Zvolte typ svého profilu",
	'profile_manager:profile:edit:custom_profile_type:description' => "Popis zvoleného typu profilu",
	'profile_manager:profile:edit:custom_profile_type:default' => "Výchozí",

	// register form mandatory notice
	'profile_manager:register:mandatory' => "Položky označené * jsou povinné",

	// register account field hints
	'profile_manager:register:hints:name' => "Zadané jméno bude zobrazeno u vašeho profilu",
	'profile_manager:register:hints:username' => "Uživatelské jméno můžete použít k přihlášení",
	'profile_manager:register:hints:email' => "Na tuto e-mailovou adresa vám budou posílány zprávy. Ostatní uživatelé tuto adresu neuvidí.",
	'profile_manager:register:hints:password' => "K přihlášení na tyto stránky potřebujete heslo",
	'profile_manager:register:hints:passwordagain' => "Zadejte stejné heslo znovu pro ověření",
	
	// register profile icon
	'profile_manager:register:profile_icon' => 'Tyto stránky požadují nahrání portrétu',
	
	// register accept terms
	'profile_manager:registration:accept_terms' => "Četl jsem %sPodmínky služby%s a souhlasím s nimi",

	// simple access control
	'profile_manager:simple_access_control' => 'Zvolte kdo může vidět informace z vašeho profilu',

	// register pre check
	'profile_manager:register_pre_check:missing' => 'Následující položka musí být vyplněna: %s',
	'profile_manager:register_pre_check:terms' => 'Pro dokončení registrace musíte souhlasit s podmínkami služby',
	'profile_manager:register_pre_check:profile_icon:error' => 'Při nahrávání vašeho portrétu se vyskytla chyba (pravděpodobně souvisí s velikostí souboru)',
	'profile_manager:register_pre_check:profile_icon:nosupportedimage' => "Nemůžeme zpracovat váš portrét. Možná není správného typu (jpg, gif, png)?",

	// Admin add user form
	'profile_manager:admin:adduser:notify' => "Oznámit uživateli",
	'profile_manager:admin:adduser:use_default_access' => "Vytvořit dodatečná metadata založená na výchozí úrovni sdílení stránek",
	'profile_manager:admin:adduser:extra_metadata' => "Přidat další data profilu",
	
	// change username form
	'profile_manager:account:username:button' => "Změna uživatelského jména",
	'profile_manager:account:username:info' => "Změňte své uživatelské jméno. Ikonka vám prozradí jestli je platné a k dispozici.",
	
	// river events
	'river:join:site:default' => 'Uživatel/ka %s se stal/a členem těchto stránek',

	// login history
	'profile_manager:account:login_history' => "Historie přihlášení",
	'profile_manager:account:login_history:date' => "Datum",
	'profile_manager:account:login_history:ip' => "IP adresa",

];
