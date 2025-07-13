<?php

namespace App\Services;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class ApiService
{
    private Client $client;

    public function __construct(?Client $client = null)
    {
        $this->client = $client ?? new Client();
    }

    /**
     * Perform a GET request
     *
     * @param string $url
     * @param array $data Query parameters
     * @param array $options Additional Guzzle options
     * @return ResponseInterface
     * @throws \RuntimeException
     */
    public function get(string $url, array $data = [], array $options = []): ResponseInterface
    {
        try {
            return $this->client->request('GET', $url, array_merge([
                'query' => $data,
                'http_errors' => false // Handle errors manually
            ], $options));
        } catch (GuzzleException $e) {
            throw new \RuntimeException('API request failed: ' . $e->getMessage(), 0, $e);
        }
    }

    /**
     * Perform a POST request
     *
     * @param string $url
     * @param array $data
     * @param array $options
     * @return ResponseInterface
     * @throws \RuntimeException
     */
    public function post(string $url, array $data = [], array $options = []): ResponseInterface
    {
        try {
            return $this->client->request('POST', $url, array_merge([
                'json' => $data,
                'http_errors' => false
            ], $options));
        } catch (GuzzleException $e) {
            throw new \RuntimeException('API request failed: ' . $e->getMessage(), 0, $e);
        }
    }

    /**
     * Get JSON response as array
     *
     * @param ResponseInterface $response
     * @return array
     * @throws \RuntimeException
     */
    public function getJson(ResponseInterface $response): array
    {
        $content = $response->getBody()->getContents();
        $data = json_decode($content, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('Failed to parse JSON: ' . json_last_error_msg());
        }

        return $data;
    }
}
