<?php

return [
    'environment' => [
        'dev' => $_ENV[ 'DEV_ENVIRONMENT' ],
    ],
    'app_baseURL' => $_ENV[ 'app_baseURL' ],
    'app' => [
        'baseURL' => $_ENV[ 'app.baseURL' ],
        'forceGlobalSecureRequests' => $_ENV[ 'app.forceGlobalSecureRequests' ],
        'CSPEnabled' => $_ENV[ 'app.CSPEnabled' ]
    ],
    'database' => [
        'default' => [
            'hostname' =>  $_ENV[ 'database.default.hostname' ],
            'database' =>  $_ENV[ 'database.default.database' ],
            'username' =>  $_ENV[ 'database.default.username' ],
            'password' =>  $_ENV[ 'database.default.password' ],
            'DBDriver' =>  $_ENV[ 'database.default.DBDriver' ],
            'DBPrefix' =>  $_ENV[ 'database.default.DBPrefix' ],
            'port' =>  $_ENV[ ' database.default.port' ]
        ],
        'tests' => [
            'hostname' => $_ENV[ 'database.tests.hostname' ],
            'database' => $_ENV[ 'database.tests.database' ],
            'username' => $_ENV[ 'database.tests.username' ],
            'password' => $_ENV[ 'database.tests.password' ],
            'DBDriver' => $_ENV[ 'database.tests.DBDriver' ],
            'DBPrefix' => $_ENV[ 'database.tests.DBPrefix' ],
            'port' => $_ENV[ 'database.tests.port' ],
        ],
    ],
    'contentsecuritypolicy' => [
        'reportOnly' => $_ENV[ 'contentsecuritypolicy.reportOnly' ],
        'defaultSrc' => $_ENV[ 'contentsecuritypolicy.defaultSrc' ],
        'scriptSrc' => $_ENV[ 'contentsecuritypolicy.scriptSrc' ],
        'styleSrc' => $_ENV[ 'contentsecuritypolicy.styleSrc' ],
        'imageSrc' => $_ENV[ 'contentsecuritypolicy.imageSrc' ],
        'baseURI' => $_ENV[ 'contentsecuritypolicy.baseURI' ],
        'childSrc' => $_ENV[ 'contentsecuritypolicy.childSrc' ],
        'connectSrc' => $_ENV[ 'contentsecuritypolicy.connectSrc' ],
        'fontSrc' => $_ENV[ 'contentsecuritypolicy.fontSrc' ],
        'formAction' => $_ENV[ 'contentsecuritypolicy.formAction' ],
        'frameAncestors' => $_ENV[ 'contentsecuritypolicy.frameAncestors' ],
        'frameSrc' => $_ENV[ 'contentsecuritypolicy.frameSrc' ],
        'mediaSrc' => $_ENV[ 'contentsecuritypolicy.mediaSrc' ],
        'objectSrc' => $_ENV[ 'contentsecuritypolicy.objectSrc' ],
        'pluginTypes' => $_ENV[ 'contentsecuritypolicy.pluginTypes' ],
        'reportURI' => $_ENV[ 'contentsecuritypolicy.reportURI' ],
        'sandbox' => $_ENV[ 'contentsecuritypolicy.sandbox' ],
        'upgradeInsecureRequests' => $_ENV[ 'contentsecuritypolicy.upgradeInsecureRequests' ],
        'scriptNonceTag' => $_ENV[ 'contentsecuritypolicy.scriptNonceTag' ],
        'styleNonceTag' => $_ENV[ 'contentsecuritypolicy.styleNonceTag' ],
        'autoNonce' => $_ENV[ 'contentsecuritypolicy.autoNonce' ],
    ],
    'cookie' => [
        'prefix' =>  $_ENV[ 'cookie.prefix' ],
        'expires' =>  $_ENV[ 'cookie.expires' ],
        'path' =>  $_ENV[ 'cookie.path' ],
        'domain' =>  $_ENV[ 'cookie.domain' ],
        'secure' =>  $_ENV[ 'cookie.secure' ],
        'httponly' =>  $_ENV[ 'cookie.httponly' ],
        'samesite' =>  $_ENV[ 'cookie.samesite' ],
        'raw' =>  $_ENV[ 'cookie.raw' ]
    ],
    'encryption' => [
        'key' => $_ENV[ 'encryption.key' ],
        'driver' => $_ENV[ 'encryption.driver' ],
        'blockSize' => $_ENV[ ' encryption.blockSize' ],
        'digest' => $_ENV[ 'encryption.digest' ],
    ],
    'honeypot' => [
        'hidden' => $_ENV[ 'honeypot.hidden' ],
        'label' => $_ENV[ 'honeypot.label' ],
        'name' => $_ENV[ 'honeypot.name' ],
        'template' => $_ENV[ 'honeypot.template' ],
        'container' => $_ENV[ 'honeypot.container' ],
    ],
    'security' => [
        'csrfProtection' => $_ENV[ 'security.csrfProtection' ],
        'tokenRandomize' => $_ENV[ 'security.tokenRandomize' ],
        'tokenName' => $_ENV[ 'security.tokenName' ],
        'headerName' => $_ENV[ 'security.headerName' ],
        'cookieName' => $_ENV[ 'security.cookieName' ],
        'expires' => $_ENV[ 'security.expires' ],
        'regenerate' => $_ENV[ 'security.regenerate' ],
        'redirect' => $_ENV[ 'security.redirect' ],
        'samesite' => $_ENV[ 'security.samesite' ]
    ],
    'session' => [
        'driver' => $_ENV[ 'session.driver' ],
        'cookieName' => $_ENV[ 'session.cookieName' ],
        'expiration' => $_ENV[ 'session.expiration' ],
        'savePath' => $_ENV[ 'session.savePath' ],
        'matchIP' => $_ENV[ 'session.matchIP' ],
        'timeToUpdate' => $_ENV[ 'session.timeToUpdate' ],
        'regenerateDestroy' => $_ENV[ 'session.regenerateDestroy' ]
    ],
    'logger' => [
        'threshold' => $_ENV[ 'logger.threshold' ]
    ],
    'curl_request' => [
        'shareOptions' => $_ENV[ 'curlrequest.shareOptions' ]
    ],
];
