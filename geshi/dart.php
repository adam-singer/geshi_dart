<?php
/*************************************************************************************
 * dart.php
 * --------
 * Author: Nigel McNie (nigel@geshi.org)
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.7.20
 * Date Started: 2004/07/10
 * 
 * Author: Adam (financeCoding@gmail.com)
 * Copyright: 
 * Release Version: 
 * Date Started: 
 *
 * Dart language file for GeSHi.
 *
 * CHANGES
 * -------
 * 02/22/2012
 *  - Exported from java.php
 *
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
	'LANG_NAME' => 'Dart',
	'COMMENT_SINGLE' => array(1 => '//', 2 => '#import'),
	'COMMENT_MULTI' => array('/*' => '*/'),
	'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
	'QUOTEMARKS' => array("'", '"'),
	'ESCAPE_CHAR' => '\\',
	'KEYWORDS' => array(
		1 => array(
			'for', 'foreach', 'if', 'else', 'while', 'do',
			'switch', 'case', 'in'
			),
		2 => array(
			'null', 'return', 'false', 'final', 'true', 'public',
			'extends', 'break', 'class',
			'new', 'try', 'catch', 'throws', 'finally', 'implements',
			'interface', 'throw', 'native', 'this',
            'assert', 'continue',
            'default', 'static', 'super',
            'volatile', 'const'
			),
		3 => array(
			// common objects
			'window','print'
			),
		4 => array(
			'void', 'double', 'int', 'bool', 'num','var'
			)
		),
	'SYMBOLS' => array(
		1 => array('(', ')', '[', ']', '{', '}', '*', '&', '%', '!', ';', '<', '>', '?')
		),
	'CASE_SENSITIVE' => array(
		GESHI_COMMENTS => true,
		1 => false,
		2 => false,
		3 => true,
		4 => true
		),
	'STYLES' => array(
		'KEYWORDS' => array(
			1 => 'color: #0055FF;',
			2 => 'color: #0055FF; font-weight: bold;',
			3 => 'color: #FF00FF; font-weight: bold;',
			4 => 'color: #0055FF;'
			),
		'COMMENTS' => array(
			1=> 'color: #808080; font-style: italic;',
			2=> 'color: #000000;',
			'MULTI' => 'color: #808080; font-style: italic;'
			),
		'ESCAPE_CHAR' => array(
			0 => 'color: #000099; font-weight: bold;'
			),
		'BRACKETS' => array(
			0 => 'color: #000033;'
			),
		'STRINGS' => array(
			0 => 'color: #ff0000;'
			),
		'NUMBERS' => array(
			0 => 'color: #cc66cc;'
			),
		'METHODS' => array(
			//1 => 'color: #000000;',
			//2 => 'color: #000000;'
			),
		'SYMBOLS' => array(
			1 => 'color: #FF00FF; font-weight: bold;'
			),
		'SCRIPT' => array(
			),
		'REGEXPS' => array(
			)
		),
	'URLS' => array(
		1 => '',
		2 => '',
		3 => '',
		4 => ''
		),
	'OOLANG' => true,
	'OBJECT_SPLITTERS' => array(
		1 => '.'
		),
	'REGEXPS' => array(
		),
	'STRICT_MODE_APPLIES' => GESHI_NEVER,
	'SCRIPT_DELIMITERS' => array(
		),
	'HIGHLIGHT_STRICT_BLOCK' => array(
		)
);

?>
