<?php
use KalimahApps\Daleel\Config;

$sidebar = array(
	array(
		'label' => 'Getting Started',
		'items' => array(
			array(
				'label' => 'Installation',
				'link'  => 'installation',
			),
			array(
				'label' => 'Configuration',
				'link'  => 'configuration',
			),
			array(
				'label' => 'Directory Structure',
				'link'  => 'structure',
			),
			array(
				'label' => 'Frontend',
				'link'  => 'frontend',
			),
			array(
				'label' => 'Starter Kits',
				'link'  => 'starter-kits',
			),
			array(
				'label' => 'Deployment',
				'link'  => 'deployment',
			),
		),
	),
	array(
		'label' => 'Architecture Concepts',
		'items' => array(
			array(
				'label' => 'Request Lifecycle',
				'link'  => 'lifecycle',
			),
			array(
				'label' => 'Service Container',
				'link'  => 'container',
			),
			array(
				'label' => 'Service Providers',
				'link'  => 'providers',
			),
			array(
				'label' => 'Facades',
				'link'  => 'facades',
			),
		),
	),
	array(
		'label' => 'Core Concepts',
		'items' => array(
			array(
				'label' => 'Routing',
				'link'  => 'routing',
			),
			array(
				'label' => 'Middleware',
				'link'  => 'middleware',
			),
			array(
				'label' => 'CSRF Protection',
				'link'  => 'csrf',
			),
			array(
				'label' => 'Controllers',
				'link'  => 'controllers',
			),
			array(
				'label' => 'Requests',
				'link'  => 'requests',
			),
			array(
				'label' => 'Responses',
				'link'  => 'responses',
			),
			array(
				'label' => 'Views',
				'link'  => 'views',
			),
			array(
				'label' => 'Blade Templates',
				'link'  => 'blade',
			),
			array(
				'label' => 'Asset Bundling',
				'link'  => 'vite',
			),
			array(
				'label' => 'URL Generation',
				'link'  => 'urls',
			),
			array(
				'label' => 'Session',
				'link'  => 'session',
			),
			array(
				'label' => 'Validation',
				'link'  => 'validation',
			),
			array(
				'label' => 'Error Handling',
				'link'  => 'errors',
			),
			array(
				'label' => 'Logging',
				'link'  => 'logging',
			),
		),
	),
	array(
		'label' => 'Digging Deeper',
		'items' => array(
			array(
				'label' => 'Artisan Console',
				'link'  => 'artisan',
			),
			array(
				'label' => 'Broadcasting',
				'link'  => 'broadcasting',
			),
			array(
				'label' => 'Cache',
				'link'  => 'cache',
			),
			array(
				'label' => 'Collections',
				'link'  => 'collections',
			),
			array(
				'label' => 'Events',
				'link'  => 'events',
			),
			array(
				'label' => 'File Storage',
				'link'  => 'filesystem',
			),
			array(
				'label' => 'Helpers',
				'link'  => 'helpers',
			),
			array(
				'label' => 'HTTP Client',
				'link'  => 'http-client',
			),
			array(
				'label' => 'Localization',
				'link'  => 'localization',
			),
			array(
				'label' => 'Mail',
				'link'  => 'mail',
			),
			array(
				'label' => 'Notifications',
				'link'  => 'notifications',
			),
			array(
				'label' => 'Package Development',
				'link'  => 'packages',
			),
			array(
				'label' => 'Queues',
				'link'  => 'queues',
			),
			array(
				'label' => 'Rate Limiting',
				'link'  => 'rate-limiting',
			),
			array(
				'label' => 'Task Scheduling',
				'link'  => 'scheduling',
			),
		),
	),
	array(
		'label' => 'Security',
		'items' => array(
			array(
				'label' => 'Authentication',
				'link'  => 'authentication',
			),
			array(
				'label' => 'Authorization',
				'link'  => 'authorization',
			),
			array(
				'label' => 'Encryption',
				'link'  => 'encryption',
			),
			array(
				'label' => 'Hashing',
				'link'  => 'hashing',
			),
			array(
				'label' => 'Password Reset',
				'link'  => 'passwords',
			),
		),
	),
	array(
		'label' => 'Database',
		'items' => array(
			array(
				'label' => 'Getting Started',
				'link'  => 'database',
			),
			array(
				'label' => 'Query Builder',
				'link'  => 'queries',
			),
			array(
				'label' => 'Pagination',
				'link'  => 'pagination',
			),
			array(
				'label' => 'Migrations',
				'link'  => 'migrations',
			),
			array(
				'label' => 'Seeding',
				'link'  => 'seeding',
			),
			array(
				'label' => 'Redis',
				'link'  => 'redis',
			),
		),
	),
	array(
		'label' => 'Eloquent ORM',
		'items' => array(
			array(
				'label' => 'Getting Started',
				'link'  => 'eloquent',
			),
			array(
				'label' => 'Relationships',
				'link'  => 'eloquent-relationships',
			),
			array(
				'label' => 'Collections',
				'link'  => 'eloquent-collections',
			),
			array(
				'label' => 'Mutators / Casts',
				'link'  => 'eloquent-mutators',
			),
			array(
				'label' => 'API Resources',
				'link'  => 'eloquent-resources',
			),
			array(
				'label' => 'Serialization',
				'link'  => 'eloquent-serialization',
			),
			array(
				'label' => 'Factories',
				'link'  => 'eloquent-Factories',
			),
		),
	),
	array(
		'label' => 'Testing',
		'items' => array(
			array(
				'label' => 'Getting Started',
				'link'  => 'testing',
			),
			array(
				'label' => 'HTTP Tests',
				'link'  => 'http-tests',
			),
			array(
				'label' => 'Console Tests',
				'link'  => 'console-tests',
			),
			array(
				'label' => 'Browser Tests',
				'link'  => 'dusk',
			),
			array(
				'label' => 'Database',
				'link'  => 'database-testing',
			),
			array(
				'label' => 'Mocking',
				'link'  => 'mocking',
			),
		),
	),
);

$nav = array(
	array(
		'label' => 'Release notes',
		'link'  => 'releases',
	),
	array(
		'label' => 'Upgrade Guide',
		'link'  => 'upgrade',
	),
	array(
		'label' => 'Contribution Guide',
		'link'  => 'contributions',
	),
);

$social_links = array(
	'github'  => array(
		'link' => 'https://github.com/kalimahapps/daleel-laravel',
	),
	'twitter' => array(
		'link' => 'https://twitter.com/KalimahApps',
	),
);

$config = Config::getInstance();
$config->defineConfig(array(
		'output_path'    => './build',
		'title'          => 'Laravel',
		'favicon'        => './media/logo.png',
		'logo'           => './media/logo.png',

		// 'base_path'      => 'laravel',
		'main'           => array(
			'subtitle' => 'Non-official example documentation for Laravel using Daleel',
			'buttons'  => array(
				array(
					'label' => 'Get Started',
					'link'  => '/{{latest_version}}/installation.html',
				),
				array(
					'label' => 'GitHub',
					'link'  => 'https://github.com/kalimahapps/daleel-laravel',
				),
			),
		),
		'latest_version' => 'master',
		'versions'       => array(
			'9.x'    => array(
				'project_path' => array(
					'url' => 'https://github.com/laravel/framework/archive/refs/heads/8.x.zip',
					'dir' => 'src/Illuminate',
				),
				'docs_path'    => array(
					'url' => 'https://github.com/laravel/docs/archive/refs/heads/8.x.zip',
					'dir' => '.',
				),
				'docs_index'   => 'installation',
				'sidebar'      => $sidebar,
				'nav'          => $nav,
				'notice'       => array(
					'message' => 'You are viewing an older version of the documentation. For the latest, please visit <a href="/{{latest_version}}/installation.html">{{latest_version}} documentation</a>.',
					'type'    => 'warning',
				),
				'social_links' => $social_links,
				'edit_url'     => 'https://github.com/laravel/docs/edit/9.x/',
			),
			'10.x'   => array(
				'project_path' => array(
					'url' => 'https://github.com/laravel/framework/archive/refs/heads/10.x.zip',
					'dir' => 'src/Illuminate',
				),
				'docs_path'    => array(
					'url' => 'https://github.com/laravel/docs/archive/refs/heads/10.x.zip',
					'dir' => '.',
				),
				'docs_index'   => 'installation',
				'sidebar'      => $sidebar,
				'nav'          => $nav,
				'social_links' => $social_links,
				'edit_url'     => 'https://github.com/laravel/docs/edit/10.x/',
			),
			'master' => array(
				'project_path' => array(
					'url' => 'https://github.com/laravel/framework/archive/refs/heads/master.zip',
					'dir' => 'src/Illuminate',
				),
				'docs_path'    => array(
					'url' => 'https://github.com/laravel/docs/archive/refs/heads/master.zip',
					'dir' => '.',
				),
				'docs_index'   => 'installation',
				'sidebar'      => $sidebar,
				'nav'          => $nav,
				'notice'       => array(
					'message' => "You're browsing the documentation for an upcoming version of Laravel. The documentation and features of this release are subject to change.",
					'type'    => 'warning',
				),
				'social_links' => $social_links,
				'edit_url'     => 'https://github.com/laravel/docs/edit/master/',
			),
		),
	));