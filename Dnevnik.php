<?php

namespace arkhipovandrei\authclient;

use yii\authclient\BaseOAuth;
use yii\authclient\OAuth2;

/**
 * Class Dnevnik
 * @package frontend\components\authclient
 */

class Dnevnik extends OAuth2
{
    public $version = '0.1.1';
    public $staging = false;

    public $authUrl = 'https://login.dnevnik.ru/oauth2';
    public $apiBaseUrl = 'https://api.dnevnik.ru/v1';
    private $_tokenMethodSuffix = '/authorizations';

    public function init()
    {
        parent::init();

        if($this->staging) {
            $this->authUrl = 'https://login.staging.dnevnik.ru/oauth2';
            $this->apiBaseUrl = 'https://api.staging.dnevnik.ru/v1';
        }

        $this->setTokenUrl();
    }

    /**
     * @inheritdoc
     */
    public $scope = null;

    protected function setTokenUrl()
    {
        $this->tokenUrl = $this->apiBaseUrl . $this->_tokenMethodSuffix;
    }

    /**
     * @param array $tokenConfig
     * @return \yii\authclient\OAuthToken
     */
    protected function createToken(array $tokenConfig = [])
    {
        $tokenConfig['tokenParamKey'] = 'accessToken';
        return BaseOAuth::createToken($tokenConfig);
    }


    protected function initUserAttributes()
    {
        $params = [];
        return $this->api('users/me', 'GET', $params);
    }


    /**
     * @param $accessToken
     * @param $url
     * @param $method
     * @param array $params
     * @param array $headers
     * @return array
     */
    protected function apiInternal($accessToken, $url, $method, array $params, array $headers)
    {

        $params['access_token'] = $accessToken->getToken();
        $params['application_key'] = $this->clientId;
        $params['method'] = str_replace('/', '.', str_replace('api/', '', $url));
        //$params['sig'] = $this->sig($params, $params['access_token'], $this->clientSecret);

        return $this->sendRequest($method, $url, $params, $headers);
    }

    /**
     * @inheritdoc
     */
    protected function defaultName()
    {
        return 'dnevnik';
    }

    /**
     * @inheritdoc
     */
    protected function defaultTitle()
    {
        return 'Dnevnik';
    }
}
