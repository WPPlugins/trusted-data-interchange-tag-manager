<?php
require_once 'IGrantType.php';

/**
 * Password Parameters
 */
class Mezzobit_OAuth2_GrantType_Password implements Mezzobit_OAuth2_GrantType_IGrantType
{
    /**
     * Defines the Grant Type
     *
     * @var string  Defaults to 'password'.
     */
    const GRANT_TYPE = 'password';

    /**
     * Adds a specific Handling of the parameters
     *
     * @return array of Specific parameters to be sent.
     * @param  mixed  $parameters the parameters array (passed by reference)
     */
    public function validateParameters(&$parameters)
    {
        if (!isset($parameters['username']))
        {
            throw new Mezzobit_OAuth2_InvalidArgumentException(
                'The \'username\' parameter must be defined for the Password grant type',
                Mezzobit_OAuth2_InvalidArgumentException::MISSING_PARAMETER
            );
        }
        elseif (!isset($parameters['password']))
        {
            throw new Mezzobit_OAuth2_InvalidArgumentException(
                'The \'password\' parameter must be defined for the Password grant type',
                Mezzobit_OAuth2_InvalidArgumentException::MISSING_PARAMETER
            );
        }
    }
}
