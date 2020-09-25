<?php
$config = [
	// Warning shown below the new wiki form (allows HTML formatting)
	'newWikiWarning' => '',
	// Allow any user to delete wikis, e.g. on a private installation
	'allowDelete' => false,
	// Require that patches are V+2 before building the wiki
	'requireVerified' => true,
	// OAuth config. When enabled only authenticated users can create
	// wikis, and can delete their own wikis.
	'oauth' => [
		'url' => null,
		'callback' => null,
		'key' => null,
		'secret' => null,
		// OAuth admins can delete any wiki
		'admins' => []
	],
	// Conduit API key for bot cross-posting to Phabricator
	'conduitApiKey' => null,
];
