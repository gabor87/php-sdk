<?php

namespace Crewsense;

/**
 * Description of Client
 *
 * @author gabor
 */
class Client extends \GuzzleHttp\Client {
    
    const API_BASE_URI = 'http://crewsense.local';

    public $guestMode = true;
    public $credentials;
    public $access_token;

    public function __construct($configuration, $autoConnect = true) 
    {
        $this->credentials = $configuration['credentials'];
        unset($configuration['credentials']);
        
        if (!isset($configuration['base_uri'])) {
            $configuration['base_uri'] = self::API_BASE_URI;
        }
        
        parent::__construct($configuration);
        
        $this->tryObtainTheToken();
    }
    
    public function tryObtainTheToken()
    {
        if (!file_exists('crewsense_api.token')) {
            $response = parent::request('POST', '/oauth/access_token', [
                'form_params' => [
                    'client_id' => $this->credentials['client_id'], // '8fkmab4vzx',
                    'client_secret' => $this->credentials['client_secret'], // '2eoccd9z5ohks1ot9hsd6winlysj85g1',
                    'grant_type' => 'client_credentials',
                ],
            ]);

            $jsonResponse = (string) $response->getBody();
            $json = json_decode($jsonResponse);
            
            @file_put_contents('crewsense_api.token', $json->access_token);
            
            $this->access_token = $json->access_token;
        } else {
            $this->access_token = @file_get_contents('crewsense_api.token');
        }
    }
    
    public function tokenIsValid() 
    {
        var_dump(parent::request('GET', '/v1/me', [
            'headers' => [
                'Authorization' => "Bearer {$this->access_token}",
            ],
        ]));

        die;
    }
    
}
