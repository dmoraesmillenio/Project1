<?php
$runnerProjectSettings = array(
	'restAPIReturnEncodedBinary' => true,
	'restAPIAuthType' => 'basic',
	'menuIds' => array( 
		'main' 
	),
	'tablesAdvSecurity' => array(
		'public.actor' => array(
			'table' => 2527 
		),
		'public.actor_info' => array(
			'table' => 2562 
		),
		'public.address' => array(
			'table' => 2606 
		),
		'public.city' => array(
			'table' => 2645 
		),
		'public.category' => array(
			'table' => 2672 
		),
		'public.film' => array(
			'table' => 2696 
		),
		'film view' => array(
			'table' => 2753 
		) 
	),
	'phpSpreadsheet' => false,
	'ext' => 'php',
	'security' => array(
		'projectName' => '',
		'loginDataSource' => '',
		'loginForm' => 3,
		'dynamicPermissions' => false,
		'dpTablePrefix' => '',
		'dpTableConnId' => '',
		'providers' => array( 
			 
		),
		'enabled' => false,
		'advancedSecurityAvailable' => false,
		'userGroupsAvailable' => false,
		'hardcodedLogin' => false,
		'defaultProviderCode' => '',
		'adOnlyLogin' => false,
		'sessionControl' => array(
			'lifeTime' => 15,
			'sessionName' => 'HU5XPz4ZT2YE95iarIlq',
			'JWTSecret' => 'dbtACCbuacSdU2FVdp1o' 
		),
		'registration' => array(
			'remindMethod' => 0,
			'hashAlgorithm' => 0,
			'passwordValidation' => array(
				'strong' => false,
				'minimumLength' => 8,
				'uniqueCharacters' => 4,
				'digitsAndSymbols' => 2,
				'upperAndLowerCase' => false 
			),
			'registerPage' => false 
		),
		'captchaSettings' => array(
			'captchaType' => 0,
			'siteKey' => '',
			'secretKey' => '',
			'passesCount' => 5 
		),
		'emailSettings' => array(
			'fromEmail' => '',
			'usePHPDefinedSMTP' => false,
			'useBuiltInMailer' => false,
			'SMTPServer' => 'localhost',
			'SMTPPort' => 25,
			'SMTPUser' => '',
			'SMTPPassword' => '',
			'securityProtocol' => 0,
			'provider' => 0,
			'oauthUserEmail' => '',
			'oauthSettingsJson' => '',
			'oauthClientId' => '',
			'oauthClientSecret' => '',
			'oauthTenantId' => '' 
		),
		'advancedSecurity' => array(
			'allowGuestLogin' => false 
		),
		'auditAndLocking' => array(
			'loggingMode' => 0,
			'loggingTable' => array(
				'connId' => '',
				'table' => '' 
			),
			'loggingFile' => 'audit.log',
			'logSecurityActions' => false,
			'lockAfterUnsuccessfulLogin' => false,
			'enableLocking' => false,
			'lockingTable' => array(
				'connId' => '',
				'table' => '' 
			),
			'tables' => array(
				 
			) 
		),
		'twoFactorSettings' => array(
			'available' => false,
			'required' => false,
			'enable' => true,
			'remember' => true,
			'types' => array(
				 
			),
			'twoFactorField' => '',
			'emailField' => '',
			'phoneField' => '',
			'codeField' => '',
			'projectName' => '' 
		),
		'staticPermissions' => array(
			'groups' => array(
				 
			) 
		),
		'adAdminGroups' => array( 
			 
		),
		'showUserSource' => false,
		'dbProviderCodes' => array( 
			 
		) 
	),
	'notifications' => array(
		'enabled' => false,
		'table' => array(
			'connId' => '',
			'table' => '' 
		) 
	),
	'allTables' => array(
		'public.actor' => array(
			'gid' => 2527,
			'name' => 'public.actor',
			'shortName' => 'actor',
			'type' => 0,
			'caption' => array(
				'English' => 'Actor' 
			),
			'connId' => 'conn',
			'color' => 'e67349',
			'originalTable' => 'public.actor' 
		),
		'public.actor_info' => array(
			'gid' => 2562,
			'name' => 'public.actor_info',
			'shortName' => 'actor_info',
			'type' => 0,
			'caption' => array(
				'Portuguese(Brazil)' => 'Actor Info' 
			),
			'connId' => 'conn',
			'color' => 'cd853f',
			'originalTable' => 'public.actor_info' 
		),
		'public.address' => array(
			'gid' => 2606,
			'name' => 'public.address',
			'shortName' => 'address',
			'type' => 0,
			'caption' => array(
				'Portuguese(Brazil)' => 'Address' 
			),
			'connId' => 'conn',
			'color' => '6b8e23',
			'originalTable' => 'public.address' 
		),
		'public.city' => array(
			'gid' => 2645,
			'name' => 'public.city',
			'shortName' => 'city',
			'type' => 0,
			'caption' => array(
				'Portuguese(Brazil)' => 'City' 
			),
			'connId' => 'conn',
			'color' => '8fbc8b',
			'originalTable' => 'public.city' 
		),
		'public.category' => array(
			'gid' => 2672,
			'name' => 'public.category',
			'shortName' => 'category',
			'type' => 0,
			'caption' => array(
				'Portuguese(Brazil)' => 'Category' 
			),
			'connId' => 'conn',
			'color' => '7b68ee',
			'originalTable' => 'public.category' 
		),
		'public.film' => array(
			'gid' => 2696,
			'name' => 'public.film',
			'shortName' => 'film',
			'type' => 0,
			'caption' => array(
				'Portuguese(Brazil)' => 'Film' 
			),
			'connId' => 'conn',
			'color' => 'dc143c',
			'originalTable' => 'public.film' 
		),
		'film view' => array(
			'gid' => 2753,
			'name' => 'film view',
			'shortName' => 'film1',
			'type' => 1,
			'caption' => array(
				'Portuguese(Brazil)' => 'Film View' 
			),
			'connId' => 'conn',
			'color' => 'dc143c',
			'originalTable' => 'public.film' 
		) 
	),
	'tablesByShort' => array(
		'actor' => 'public.actor',
		'actor_info' => 'public.actor_info',
		'address' => 'public.address',
		'city' => 'public.city',
		'category' => 'public.category',
		'film' => 'public.film',
		'film1' => 'film view' 
	),
	'tablesByGood' => array(
		'public_actor' => 'public.actor',
		'public_actor_info' => 'public.actor_info',
		'public_address' => 'public.address',
		'public_city' => 'public.city',
		'public_category' => 'public.category',
		'public_film' => 'public.film',
		'film_view' => 'film view' 
	),
	'events' => array( 
		 
	),
	'languages' => array( 
		array(
			'name' => 'Portuguese(Brazil)',
			'nativeName' => 'Português(Brasil)',
			'rtl' => false,
			'filename' => 'Portuguese.lng' 
		) 
	),
	'languageNames' => array( 
		'Portuguese(Brazil)' 
	),
	'defaultLanguage' => 'Portuguese(Brazil)',
	'detectDefaultLanguage' => true,
	'charset' => 'utf-8',
	'codepage' => 65001,
	'defaultConnID' => 'conn',
	'wrConnectionID' => '',
	'wizardBuild' => '44307',
	'projectBuild' => 'nNj868ZNnSlU',
	'projectTheme' => 'default',
	'projectSize' => 'normal',
	'customErrorMsg' => array(
		'text' => 'Error occured.',
		'type' => 0 
	),
	'cloudSettings' => array(
		'cloudAmazonRegion' => '',
		'cloudAmazonBucket' => '',
		'cloudAmazonAccessKey' => '',
		'cloudAmazonSecretKey' => '',
		'cloudWasabiRegion' => '',
		'cloudWasabiBucket' => '',
		'cloudWasabiAccessKey' => '',
		'cloudWasabiSecretKey' => '',
		'cloudGDriveClientId' => '',
		'cloudGDriveClientSecret' => '',
		'cloudOneDriveClientId' => '',
		'cloudOneDriveClientSecret' => '',
		'cloudOneDriveDrive' => '',
		'cloudOneDriveAccountType' => 0,
		'cloudOneDriveDirectoryId' => '',
		'cloudDropboxClientId' => '',
		'cloudDropboxClientSecret' => '',
		'cloudGoogleCloudAccessKey' => '',
		'cloudGoogleCloudSecret' => '',
		'cloudGoogleCloudBucket' => '' 
	),
	'mapSettings' => array(
		'embed' => true,
		'provider' => 0,
		'apikey' => '' 
	),
	'viewPluginsWithJS' => array( 
		 
	),
	'rtlLanguages' => array(
		'Portuguese(Brazil)' => false 
	),
	'smsSettings' => array(
		'smsProvider' => 4,
		'iBusername' => '',
		'iBpassword' => '',
		'iBsender' => '',
		'essUsername' => '',
		'essPassword' => '',
		'essSender' => '',
		'gwApiToken' => '',
		'gwSender' => '',
		'mbAuth' => '',
		'mbSender' => '',
		'twilioSID' => '',
		'twilioAuth' => '',
		'twilioNumber' => '',
		'phoneField' => '',
		'counryCode' => '+1',
		'wauUsername' => '',
		'wauPassword' => '',
		'wauSender' => '' 
	) 
);

?>