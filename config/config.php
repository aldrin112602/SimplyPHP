<?php

return [
    'environment' => [
        'dev' => $_ENV['DEV_ENVIRONMENT'],
    ],
    'app' => [
        // app.baseURL
        // app_baseURL
        // app.forceGlobalSecureRequests
        // app.CSPEnabled
    ],
    'database' => [
        'default' => [
            // database.default.hostname
            // database.default.database
            // database.default.username
            // database.default.password
            // database.default.DBDriver
            // database.default.DBPrefix
            // database.default.port
        ],
        'tests' => [
            'hostname' => $_ENV['database.tests.hostname'],
            'database' => $_ENV['database.tests.database'],
            'username' => $_ENV['database.tests.username'],
            'password' => $_ENV['database.tests.password'],
            'DBDriver' => $_ENV['database.tests.DBDriver'],
            // database.tests.DBPrefix
            'port' => $_ENV['database.tests.port'],
        ],
    ],
    'content_security_policy' => [
        // contentsecuritypolicy.reportOnly
        // contentsecuritypolicy.defaultSrc
        // contentsecuritypolicy.scriptSrc
        // contentsecuritypolicy.styleSrc
        // contentsecuritypolicy.imageSrc
        // contentsecuritypolicy.baseURI
        // contentsecuritypolicy.childSrc
        // contentsecuritypolicy.connectSrc
        // contentsecuritypolicy.fontSrc
        // contentsecuritypolicy.formAction
        // contentsecuritypolicy.frameAncestors
        // contentsecuritypolicy.frameSrc
        // contentsecuritypolicy.mediaSrc
        // contentsecuritypolicy.objectSrc
        // contentsecuritypolicy.pluginTypes
        // contentsecuritypolicy.reportURI
        // contentsecuritypolicy.sandbox
        // contentsecuritypolicy.upgradeInsecureRequests
        // contentsecuritypolicy.styleNonceTag
        // contentsecuritypolicy.scriptNonceTag
        // contentsecuritypolicy.autoNonce
    ],
    'cookie' => [
        // cookie.prefix
        // cookie.expires
        // cookie.path
        // cookie.domain
        // cookie.secure
        // cookie.httponly
        // cookie.samesite
        // cookie.raw
    ],
    'encryption' => [
        // encryption.key
        // encryption.driver
        // encryption.blockSize
        // encryption.digest
    ],
    'honeypot' => [
        // honeypot.hidden
        // honeypot.label
        // honeypot.name
        // honeypot.template
        // honeypot.container
    ],
    'security' => [
        // security.csrfProtection
        // security.tokenRandomize
        // security.tokenName
        // security.headerName
        // security.cookieName
        // security.expires
        // security.regenerate
        // security.redirect
        // security.samesite
    ],
    'session' => [
        // session.driver
        // session.cookieName
        // session.expiration
        // session.savePath
        // session.matchIP
        // session.timeToUpdate
        // session.regenerateDestroy
    ],
    'logger' => [
        // logger.threshold
    ],
    'curl_request' => [
        // curlrequest.shareOptions
    ],
];
