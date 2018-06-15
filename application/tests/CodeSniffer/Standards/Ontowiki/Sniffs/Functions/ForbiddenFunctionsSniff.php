<?php
/**
 * This file is part of the {@link http://ontowiki.net OntoWiki} project.
 *
 * @copyright Copyright (c) 2011-2016, {@link http://aksw.org AKSW}
 * @license   http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
 */

/**
 * Ontowiki_Sniffs_Function_ForbiddenFunctionsSniff.
 *
 * Test for forbidden functions
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer_Sniff
 * @author    Lars Eidam <lars.eidam@googlemail.com>
 * @link      http://code.google.com/p/ontowiki/
 */

/**
 * Ontowiki_Sniffs_Function_ForbiddenFunctionsSniff.
 * Check for functions, they are not allowed.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer_Sniff
 * @author    Lars Eidam <lars.eidam@googlemail.com>
 * @link      http://code.google.com/p/ontowiki/
 */
class Ontowiki_Sniffs_Functions_ForbiddenFunctionsSniff
    extends Generic_Sniffs_PHP_ForbiddenFunctionsSniff
{
    /**
     * A list of forbidden functions with their alternatives.
     *
     * @var array(string => string|null)
     */
    public $forbiddenFunctions
        = array(
            'var_dump'  => null,
            'error_log' => null,
            'exit'      => 'return',
            'die'       => 'return'
        );

    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        $tokens   = parent::register();
        $tokens[] = T_EXIT;

        return $tokens;
    }
    //end register()

}

//end class

?>
