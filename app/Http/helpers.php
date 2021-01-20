<?php

/**
 * @param $message
 * @param $location
 * @param $errorMessage
 * @param $params
 * @param array $errorTrace
 */
function commonLogError($location, $errorMessage, $params, $errorTrace = [], $message = 'error')
{
    \Log::error([
        $message => [
            'location' => $location,
            'message' => $errorMessage,
            'params' => $params,
            'trace' => $errorTrace,
        ],
    ]);
}

/**
 * @param $error
 * @param $message
 * @param $location
 * @param array $params
 */
function logError($error, $message, $location, $params = [])
{
    commonLogError($location, $error->getMessage(), $params, $error->getTraceAsString(), $message);
}
