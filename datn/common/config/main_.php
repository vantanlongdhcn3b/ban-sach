<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],

    'modules' => [
       'gridview' =>  [
            'class' => '\kartik\grid\Module'
            // enter optional module parameters below - only if you need to  
            // use your own export download action or custom translation 
            // message source
            // 'downloadAction' => 'gridview/export/download',
            // 'i18n' => []
        ],
        'datecontrol' =>  [
            'class' => '\kartik\datecontrol\Module'
        ],
            'dynagrid'=> [
            'class'=>'\kartik\dynagrid\Module',
            // other module settings
        ],

        'social' => [
        // the module class
            'class' => 'kartik\social\Module',
     
            // the global settings for the Disqus widget
            'disqus' => [
                'settings' => ['shortname' => 'DISQUS_SHORTNAME'] // default settings
            ],
     
            // the global settings for the Facebook plugins widget
            'facebook' => [
                'appId' => '216084928883683',
                'secret' => '28070c1dd505aa767a32991dead72c99',
            ],
     
            // the global settings for the Google+ Plugins widget
            'google' => [
                'clientId' => '790577604880-tfms22a5jrt2vc67ev9foesvr2ur65qt.apps.googleusercontent.com',
                 // 'pageId' => '1-636304321030746906-1972186992',
                // 'profileId' => 'GOOGLE_PLUS_PROFILE_ID',
            ],
     
            // the global settings for the Google Analytics plugin widget
            'googleAnalytics' => [
                'id' => 'TRACKING_ID',
                'domain' => 'TRACKING_DOMAIN',
            ],
     
            // the global settings for the Twitter plugin widget
            'twitter' => [
                'screenName' => 'TWITTER_SCREEN_NAME'
            ],
     
            // the global settings for the GitHub plugin widget
            'github' => [
                'settings' => ['user' => 'GITHUB_USER', 'repo' => 'GITHUB_REPO']
            ],
        ],
        
    
    ],


];
