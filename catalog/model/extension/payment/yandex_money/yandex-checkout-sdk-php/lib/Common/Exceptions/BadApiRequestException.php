<?php

/**
 * The MIT License
 *
 * Copyright (c) 2017 NBCO Yandex.Money LLC
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace YandexCheckout\Common\Exceptions;

class BadApiRequestException extends ApiException
{
    const HTTP_CODE = 400;

    public $type;

    public $retryAfter;

    public function __construct($responseHeaders = array(), $responseBody = null)
    {
        $errorData = json_decode($responseBody, true);
        $message   = '';

        if (isset($errorData['description'])) {
            $message .= $errorData['description'] . '. ';
        }

        if (isset($errorData['code'])) {
            $message .= sprintf('Error code: %s. ', $errorData['code']);
        }

        if (isset($errorData['parameter'])) {
            $message .= sprintf('Parameter name: %s. ', $errorData['parameter']);
        }

        if (isset($errorData['retry_after'])) {
            $this->retryAfter = $errorData['retry_after'];
        }

        if (isset($errorData['type'])) {
            $this->type = $errorData['type'];
        }

        parent::__construct(trim($message), self::HTTP_CODE, $responseHeaders, $responseBody);
    }
}