<?php
/**
 * IncomeStatementApi
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * (v1.0) Dynamics 365 Business Central
 *
 * (v1.0) Business Central Standard APIs
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * IncomeStatementApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IncomeStatementApi
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
     * Operation getIncomeStatement
     *
     * Retrieve the properties and relationships of an object of type incomeStatement for Dynamics 365 Business Central.
     *
     * @param  string $company_id (v1.0) id for company (required)
     * @param  int $income_statement_line_number (v1.0) lineNumber for incomeStatement (required)
     * @param  string[] $select (v1.0) Selected properties to be retrieved (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\IncomeStatement
     */
    public function getIncomeStatement($company_id, $income_statement_line_number, $select = null)
    {
        list($response) = $this->getIncomeStatementWithHttpInfo($company_id, $income_statement_line_number, $select);
        return $response;
    }

    /**
     * Operation getIncomeStatementWithHttpInfo
     *
     * Retrieve the properties and relationships of an object of type incomeStatement for Dynamics 365 Business Central.
     *
     * @param  string $company_id (v1.0) id for company (required)
     * @param  int $income_statement_line_number (v1.0) lineNumber for incomeStatement (required)
     * @param  string[] $select (v1.0) Selected properties to be retrieved (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\IncomeStatement, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIncomeStatementWithHttpInfo($company_id, $income_statement_line_number, $select = null)
    {
        $request = $this->getIncomeStatementRequest($company_id, $income_statement_line_number, $select);

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
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
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
                    if ('\OpenAPI\Client\Model\IncomeStatement' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\IncomeStatement', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\IncomeStatement';
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
                        '\OpenAPI\Client\Model\IncomeStatement',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getIncomeStatementAsync
     *
     * Retrieve the properties and relationships of an object of type incomeStatement for Dynamics 365 Business Central.
     *
     * @param  string $company_id (v1.0) id for company (required)
     * @param  int $income_statement_line_number (v1.0) lineNumber for incomeStatement (required)
     * @param  string[] $select (v1.0) Selected properties to be retrieved (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIncomeStatementAsync($company_id, $income_statement_line_number, $select = null)
    {
        return $this->getIncomeStatementAsyncWithHttpInfo($company_id, $income_statement_line_number, $select)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getIncomeStatementAsyncWithHttpInfo
     *
     * Retrieve the properties and relationships of an object of type incomeStatement for Dynamics 365 Business Central.
     *
     * @param  string $company_id (v1.0) id for company (required)
     * @param  int $income_statement_line_number (v1.0) lineNumber for incomeStatement (required)
     * @param  string[] $select (v1.0) Selected properties to be retrieved (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIncomeStatementAsyncWithHttpInfo($company_id, $income_statement_line_number, $select = null)
    {
        $returnType = '\OpenAPI\Client\Model\IncomeStatement';
        $request = $this->getIncomeStatementRequest($company_id, $income_statement_line_number, $select);

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
     * Create request for operation 'getIncomeStatement'
     *
     * @param  string $company_id (v1.0) id for company (required)
     * @param  int $income_statement_line_number (v1.0) lineNumber for incomeStatement (required)
     * @param  string[] $select (v1.0) Selected properties to be retrieved (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getIncomeStatementRequest($company_id, $income_statement_line_number, $select = null)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getIncomeStatement'
            );
        }
        // verify the required parameter 'income_statement_line_number' is set
        if ($income_statement_line_number === null || (is_array($income_statement_line_number) && count($income_statement_line_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $income_statement_line_number when calling getIncomeStatement'
            );
        }

        $resourcePath = '/companies({company_id})/incomeStatement({incomeStatement_lineNumber})';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($select)) {
            $select = ObjectSerializer::serializeCollection($select, 'form', true);
        }
        if ($select !== null) {
            $queryParams['$select'] = $select;
        }


        // path params
        if ($company_id !== null) {
            $resourcePath = str_replace(
                '{' . 'company_id' . '}',
                ObjectSerializer::toPathValue($company_id),
                $resourcePath
            );
        }
        // path params
        if ($income_statement_line_number !== null) {
            $resourcePath = str_replace(
                '{' . 'incomeStatement_lineNumber' . '}',
                ObjectSerializer::toPathValue($income_statement_line_number),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listIncomeStatement
     *
     * Returns a list of incomeStatement
     *
     * @param  string $company_id (v1.0) id for company (required)
     * @param  int $top (v1.0) Number of items to return from the top of the list (optional)
     * @param  int $skip (v1.0) Number of items to skip from the list (optional)
     * @param  int $limit (v1.0) Number of items to return from the list (optional)
     * @param  string $filter (v1.0) Filtering expression (optional)
     * @param  string[] $select (v1.0) Selected properties to be retrieved (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\InlineResponse20039
     */
    public function listIncomeStatement($company_id, $top = null, $skip = null, $limit = null, $filter = null, $select = null)
    {
        list($response) = $this->listIncomeStatementWithHttpInfo($company_id, $top, $skip, $limit, $filter, $select);
        return $response;
    }

    /**
     * Operation listIncomeStatementWithHttpInfo
     *
     * Returns a list of incomeStatement
     *
     * @param  string $company_id (v1.0) id for company (required)
     * @param  int $top (v1.0) Number of items to return from the top of the list (optional)
     * @param  int $skip (v1.0) Number of items to skip from the list (optional)
     * @param  int $limit (v1.0) Number of items to return from the list (optional)
     * @param  string $filter (v1.0) Filtering expression (optional)
     * @param  string[] $select (v1.0) Selected properties to be retrieved (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\InlineResponse20039, HTTP status code, HTTP response headers (array of strings)
     */
    public function listIncomeStatementWithHttpInfo($company_id, $top = null, $skip = null, $limit = null, $filter = null, $select = null)
    {
        $request = $this->listIncomeStatementRequest($company_id, $top, $skip, $limit, $filter, $select);

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
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
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
                    if ('\OpenAPI\Client\Model\InlineResponse20039' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse20039', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\InlineResponse20039';
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
                        '\OpenAPI\Client\Model\InlineResponse20039',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listIncomeStatementAsync
     *
     * Returns a list of incomeStatement
     *
     * @param  string $company_id (v1.0) id for company (required)
     * @param  int $top (v1.0) Number of items to return from the top of the list (optional)
     * @param  int $skip (v1.0) Number of items to skip from the list (optional)
     * @param  int $limit (v1.0) Number of items to return from the list (optional)
     * @param  string $filter (v1.0) Filtering expression (optional)
     * @param  string[] $select (v1.0) Selected properties to be retrieved (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listIncomeStatementAsync($company_id, $top = null, $skip = null, $limit = null, $filter = null, $select = null)
    {
        return $this->listIncomeStatementAsyncWithHttpInfo($company_id, $top, $skip, $limit, $filter, $select)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listIncomeStatementAsyncWithHttpInfo
     *
     * Returns a list of incomeStatement
     *
     * @param  string $company_id (v1.0) id for company (required)
     * @param  int $top (v1.0) Number of items to return from the top of the list (optional)
     * @param  int $skip (v1.0) Number of items to skip from the list (optional)
     * @param  int $limit (v1.0) Number of items to return from the list (optional)
     * @param  string $filter (v1.0) Filtering expression (optional)
     * @param  string[] $select (v1.0) Selected properties to be retrieved (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listIncomeStatementAsyncWithHttpInfo($company_id, $top = null, $skip = null, $limit = null, $filter = null, $select = null)
    {
        $returnType = '\OpenAPI\Client\Model\InlineResponse20039';
        $request = $this->listIncomeStatementRequest($company_id, $top, $skip, $limit, $filter, $select);

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
     * Create request for operation 'listIncomeStatement'
     *
     * @param  string $company_id (v1.0) id for company (required)
     * @param  int $top (v1.0) Number of items to return from the top of the list (optional)
     * @param  int $skip (v1.0) Number of items to skip from the list (optional)
     * @param  int $limit (v1.0) Number of items to return from the list (optional)
     * @param  string $filter (v1.0) Filtering expression (optional)
     * @param  string[] $select (v1.0) Selected properties to be retrieved (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listIncomeStatementRequest($company_id, $top = null, $skip = null, $limit = null, $filter = null, $select = null)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling listIncomeStatement'
            );
        }

        $resourcePath = '/companies({company_id})/incomeStatement';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($top !== null) {
            if('form' === 'form' && is_array($top)) {
                foreach($top as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['$top'] = $top;
            }
        }
        // query params
        if ($skip !== null) {
            if('form' === 'form' && is_array($skip)) {
                foreach($skip as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['$skip'] = $skip;
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['$limit'] = $limit;
            }
        }
        // query params
        if ($filter !== null) {
            if('form' === 'form' && is_array($filter)) {
                foreach($filter as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['$filter'] = $filter;
            }
        }
        // query params
        if (is_array($select)) {
            $select = ObjectSerializer::serializeCollection($select, 'form', true);
        }
        if ($select !== null) {
            $queryParams['$select'] = $select;
        }


        // path params
        if ($company_id !== null) {
            $resourcePath = str_replace(
                '{' . 'company_id' . '}',
                ObjectSerializer::toPathValue($company_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
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
