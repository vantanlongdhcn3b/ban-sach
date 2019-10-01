<?php
use \yii\web\Request;
$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
         'request'=>[
            'baseUrl'=>$baseUrl
        ],
        'urlManager' => [
            'baseUrl'=>$baseUrl,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                    // '<controller:\w+>/<action:\w+>/page/<page:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<type:\w+>/<value:\w+>'=>'<controller>/<action>',
            ],
            
        ],
        

        'authClientCollection' => [
              'class' => 'yii\authclient\Collection',
              'clients' => [
                'facebook' => [
                  'class' => 'yii\authclient\clients\Facebook',
                  'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
                  'clientId' => '216084928883683',
                  'clientSecret' => '28070c1dd505aa767a32991dead72c99',
                  'attributeNames' => ['name', 'email', 'first_name', 'last_name'],
                ],
                'google' => [
                    'class' => 'yii\authclient\clients\Google',
                    'clientId' => '790577604880-tfms22a5jrt2vc67ev9foesvr2ur65qt.apps.googleusercontent.com',
                    'clientSecret' => 'Gpnk-tTGcd33vR7Oal_cTdif ',
                    // 'returnUrl' => 'http://localhost/hocphp/datn/site/auth?authclient=google'
                ],

              ],
        ],

        
    ],
    'params' => $params,
     
];
