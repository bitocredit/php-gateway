<?php


namespace Reza\Bitocredit;

trait Request
{
    function sendRequest($url, $method, $headers = [], $parameter = [], $hasAuth = false)
    {
        try {
            // open channel
            $ch = curl_init();

            // check if api need authentication token
            $url = $this->hasAuth($hasAuth, $url);


            if ($method == "get" && $parameter != []) {

                // add query parameter to url
                $url = $url . "?" . http_build_query($parameter);

            }

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);

            if ($method == "post") {

                // add post data to request body
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameter));
                curl_setopt($ch, CURLOPT_POST, true);

            }
            $response = curl_exec($ch);

            // decode response and return
            return json_decode($response, true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    function hasAuth($auth, $url)
    {
        return $auth ? $this->baseURL . $url . $this->token : $baseURL . $url;
    }
}
