<?php

namespace Kernel\Exceptions;

/**
 * @brief This exception is throw when something bad occurs about request.
 *
 * @see Kernel::Core::Request.
 */
class RequestException extends \Exception
{
    /**
     * @brief Constructor.
     * @param String $message The exception message.
     * @param Int $code The exception code.
     */
    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }
}

?>