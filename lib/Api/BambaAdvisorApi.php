<?php
/**
 * BambaAdvisorApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Bamba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Bamba API
 *
 * SDK for Bamba API
 *
 * The version of the OpenAPI document: 1.2.9
 * Contact: desarrollo@vivebamba.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bamba\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Bamba\ApiException;
use Bamba\Configuration;
use Bamba\HeaderSelector;
use Bamba\ObjectSerializer;

/**
 * BambaAdvisorApi Class Doc Comment
 *
 * @category Class
 * @package  Bamba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BambaAdvisorApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation v1AdvisorMessagePost
     *
     * Send messages to the Bamba Advisor
     *
     * @param  \Bamba\Model\AdvisorMessageRequest $advisorMessageRequest advisorMessageRequest (optional)
     *
     * @throws \Bamba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bamba\Model\InlineResponse2001|\Bamba\Model\ErrorResponse|\Bamba\Model\ErrorResponse|\Bamba\Model\ErrorResponse|\Bamba\Model\ErrorResponse|\Bamba\Model\InlineResponse422|\Bamba\Model\ErrorResponse
     */
    public function v1AdvisorMessagePost($advisorMessageRequest = null)
    {
        list($response) = $this->v1AdvisorMessagePostWithHttpInfo($advisorMessageRequest);
        return $response;
    }

    /**
     * Operation v1AdvisorMessagePostWithHttpInfo
     *
     * Send messages to the Bamba Advisor
     *
     * @param  \Bamba\Model\AdvisorMessageRequest $advisorMessageRequest (optional)
     *
     * @throws \Bamba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bamba\Model\InlineResponse2001|\Bamba\Model\ErrorResponse|\Bamba\Model\ErrorResponse|\Bamba\Model\ErrorResponse|\Bamba\Model\ErrorResponse|\Bamba\Model\InlineResponse422|\Bamba\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1AdvisorMessagePostWithHttpInfo($advisorMessageRequest = null)
    {
        $request = $this->v1AdvisorMessagePostRequest($advisorMessageRequest);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bamba\Model\InlineResponse2001' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bamba\Model\InlineResponse2001', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Bamba\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bamba\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Bamba\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bamba\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Bamba\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bamba\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\Bamba\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bamba\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Bamba\Model\InlineResponse422' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bamba\Model\InlineResponse422', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Bamba\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bamba\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bamba\Model\InlineResponse2001';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bamba\Model\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bamba\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bamba\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bamba\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bamba\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bamba\Model\InlineResponse422',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bamba\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1AdvisorMessagePostAsync
     *
     * Send messages to the Bamba Advisor
     *
     * @param  \Bamba\Model\AdvisorMessageRequest $advisorMessageRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1AdvisorMessagePostAsync($advisorMessageRequest = null)
    {
        return $this->v1AdvisorMessagePostAsyncWithHttpInfo($advisorMessageRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1AdvisorMessagePostAsyncWithHttpInfo
     *
     * Send messages to the Bamba Advisor
     *
     * @param  \Bamba\Model\AdvisorMessageRequest $advisorMessageRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1AdvisorMessagePostAsyncWithHttpInfo($advisorMessageRequest = null)
    {
        $returnType = '\Bamba\Model\InlineResponse2001';
        $request = $this->v1AdvisorMessagePostRequest($advisorMessageRequest);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1AdvisorMessagePost'
     *
     * @param  \Bamba\Model\AdvisorMessageRequest $advisorMessageRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function v1AdvisorMessagePostRequest($advisorMessageRequest = null)
    {

        $resourcePath = '/v1/advisor/message';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($advisorMessageRequest)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($advisorMessageRequest));
            } else {
                $httpBody = $advisorMessageRequest;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
