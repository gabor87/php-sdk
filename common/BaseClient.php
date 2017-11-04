<?php

namespace Crewsense\apisdk\common;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

/**
 * Description of Client
 *
 * @author gabor
 * 
 * @method type methodName(type $paramName) Description
 */
abstract class BaseClient extends Client {
    
    public static $API_BASE_URI = 'http://crewsense.local';
    public static $AUTH_TOKEN_FILE_PATH = 'crewsense_api.token';

    public $guestMode = true;
    public $credentials;
    public $access_token;
    
    protected $version = null;

    public function __construct($configuration) 
    {
        $this->credentials = $configuration['credentials'];
        unset($configuration['credentials']);
        
        if (!isset($configuration['base_uri'])) {
            $configuration['base_uri'] = self::$API_BASE_URI;
        }
        
        parent::__construct($configuration);
        
        $this->tryObtainTheToken();
    }
    
    public function tryObtainTheToken()
    {
        if (!file_exists(static::$AUTH_TOKEN_FILE_PATH)) {
            $response = parent::request('POST', '/oauth/access_token', [
                'form_params' => [
                    'client_id' => $this->credentials['client_id'], // '8fkmab4vzx',
                    'client_secret' => $this->credentials['client_secret'], // '2eoccd9z5ohks1ot9hsd6winlysj85g1',
                    'grant_type' => 'client_credentials',
                ],
            ]);

            $jsonResponse = (string) $response->getBody();
            $json = json_decode($jsonResponse);
            
            @file_put_contents(static::$AUTH_TOKEN_FILE_PATH, $json->access_token);
            
            $this->access_token = $json->access_token;
        } else {
            $this->access_token = @file_get_contents(static::$AUTH_TOKEN_FILE_PATH);
        }
    }
    
    public function tokenIsValid() 
    {
        $response = $this->get('/me', [
            'headers' => [
                'Authorization' => "Bearer {$this->access_token}",
            ],
        ]);
        
        
    }
    
    private function getVersionUri($path)
    {
        return $this->version . $path;
    }
    
    public function __call($method, $args)
    {
        if (count($args) < 1) {
            throw new \InvalidArgumentException('Magic request methods require a URI and optional options array');
        }
        
        $args[0] = $this->getVersionUri($args[0]);
        
        return parent::__call($method, $args);
    }
    
}
