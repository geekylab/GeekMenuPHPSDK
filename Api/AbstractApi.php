<?php
/**
 * Created by PhpStorm.
 * User: johna
 * Date: 14/08/23
 * Time: 17:37
 */

namespace GeekMenu\Api;


use GeekMenu\Client;
use Zend\Http\Client as HttpClient;

abstract class AbstractApi
{

    private $uri = "http://192.168.56.101";
    private $httpClient = null;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->httpClient = new HttpClient();
    }

    public function get($path)
    {
        $headers = new \Zend\Http\Headers();
        $typeHeader = \Zend\Http\Header\UserAgent::fromString('User-Agent: GeekMenu/1.0.0');
        $headers->addHeader($typeHeader);
        $typeHeader = \Zend\Http\Header\Accept::fromString('Accept: application/json');
        $headers->addHeader($typeHeader);
//        $typeHeader = \Zend\Http\Header\Authorization::fromString('Authorization: Bearer ' . $access_token);
//        $headers->addHeader($typeHeader);
        $uri = $this->uri;
        $client = $this->httpClient;
        $client->setUri($uri . $path);
        $client->setMethod('GET');
        $client->setHeaders($headers);
        $response = $client->send();
        if ($response->isSuccess()) {
            return json_decode($response->getBody());
        }
        return false;
    }
} 