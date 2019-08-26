<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config {

    /**
     * Database host
     * @var string
     */
    const DB_HOST = '_YOUR_DB_HOST_';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = '_YOUR_DB_NAME_';

    /**
     * Database user
     * @var string
     */
    const DB_USER = '_YOUR_DB_USER_';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '_YOUR_DB_PASSWORD_';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    /**
     * secret key for hashing
     * @var boolean
     */
    const SECRET_KEY = "Q9cmCVfJdcwhJVaUjZWN6DgN9ZHFH28d";

    /**
     * Mailgun api key
     *
     * @var string
     */
    const MAILGUN_API_KEY = "_YOUR_MAILGUN_API_KEY_"; // For using mailgun api

    /**
     * Mailgun domain
     *
     * @var string
     */
    const MAILGUN_DOMAIN = "_YOUR_MAILGUN_DOMAIN_"; // For using mailgun api
}
