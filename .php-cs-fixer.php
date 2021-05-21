<?php

/**
 * Each line of multi-line DocComments must have an asterisk [PSR-5] and must be aligned with the first one.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:align_multiline_comment
 */
$align_multiline_comment = [
    'align_multiline_comment' => [
        'comment_type' => 'phpdocs_only',
    ],
];

/**
 * Each element of an array must be indented exactly once.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:array_indentation
 */
$array_indentation = [
    'array_indentation' => true,
];

/**
 * PHP arrays should be declared using the configured syntax.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:array_syntax
 */
$array_syntax = [
    'array_syntax' => [
        'syntax' => 'short',
    ],
];

/**
 * Converts backtick operators to shell_exec calls.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:backtick_to_shell_exec
 */
$backtick_to_shell_exec = [
    'backtick_to_shell_exec' => true,
];

/**
 * Binary operators should be surrounded by space as configured
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:binary_operator_spaces
 */
$binary_operator_spaces = [
    'binary_operator_spaces' => [
        'default' => 'single_space',
    ],
];

/**
 * There MUST be one blank line after the namespace declaration.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:blank_line_after_namespace
 */
$blank_line_after_namespace = [
    'blank_line_after_namespace' => true,
];

/**
 * Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
 * Used in presets @PhpCsFixer @Symfony
 *
 */
$blank_line_after_opening_tag = [
    'blank_line_after_opening_tag' => true,
];

/**
 * An empty line feed must precede any configured statement.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:blank_line_before_statement
 */
$blank_line_before_statement = [
    'blank_line_before_statement' => [
        'statements' => [
            'break',
            'case',
            'continue',
            'declare',
            'default',
            'die',
            'do',
            'exit',
            'for',
            'foreach',
            'goto',
            'if',
            'include',
            'include_once',
            'require',
            'require_once',
            'return',
            'switch',
            'throw',
            'try',
            'while',
            'yield',
        ],
    ],
];

/**
 * The body of each structure MUST be enclosed by braces.
 * Braces should be properly placed. Body of braces should be properly indented.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:braces
 */
$braces = [
    'braces' => [
        'allow_single_line_closure' => false,
        'position_after_anonymous_constructs' => 'same',
        'position_after_control_structures' => 'same',
        'position_after_functions_and_oop_constructs' => 'next',
    ],
];

/**
 * A single space or none should be between cast and variable.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:cast_spaces
 */
$cast_spaces = [
    'cast_spaces' => [
        'space' => 'single',
    ],
];

/**
 * Class, trait and interface elements must be separated with one blank line.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:class_attributes_separation
 */
$class_attributes_separation = [
    'class_attributes_separation' => [
        'elements' => [
            //'const',
            'method',
            'property',
        ],
    ],
];

/**
 * Whitespace around the keywords of a class, trait or interfaces definition should be one space.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:class_definition
 */
$class_definition = [
    'class_definition' => [
        'multi_line_extends_each_single_line' => false,
        'single_item_single_line' => false,
        'single_line' => false,
    ],
];

/**
 * Converts ::class keywords to FQCN strings.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:class_keyword_remove
 */
$class_keyword_remove = [
    'class_keyword_remove' => false,
];

/**
 * Using isset($var) && multiple times should be done in one call.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:combine_consecutive_issets
 */
$combine_consecutive_issets = [
    'combine_consecutive_issets' => false,
];

/**
 * Calling unset on multiple items should be done in one call.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:combine_consecutive_unsets
 */
$combine_consecutive_unsets = [
    'combine_consecutive_unsets' => false,
];

/**
 * Replace multiple nested calls of dirname by only one call with second $level parameter. Requires PHP >= 7.0.
 * Used in presets @PHP70Migration:risky @PHP71Migration:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:combine_nested_dirname
 */
$combine_nested_dirname = [
    'combine_nested_dirname' => false,
];

/**
 * Comments with annotation should be docblock when used on structural elements.
 * Used in presets @PhpCsFixer:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:comment_to_phpdoc
 */
$comment_to_phpdoc = [
    'comment_to_phpdoc' => false,
];

/**
 * Remove extra spaces in a nullable typehint.
 * Rule is applied only in a PHP 7.1+ environment.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:compact_nullable_typehint
 */
$compact_nullable_typehint = [
    'compact_nullable_typehint' => true,
];

/**
 * Concatenation should be spaced according configuration.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:concat_space
 */
$concat_space = [
    'concat_space' => [
        'spacing' => 'one',
    ],
];

/**
 * Class DateTimeImmutable should be used instead of DateTime.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:date_time_immutable
 */
$date_time_immutable = [
    'date_time_immutable' => false,
];

/**
 * Equal sign in declare statement should be surrounded by spaces or not following configuration.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:declare_equal_normalize
 */
$declare_equal_normalize = [
    'declare_equal_normalize' => [
        'space' => 'none',
    ],
];

/**
 * Force strict types declaration in all files. Requires PHP >= 7.0.
 * Used in presets @PHP70Migration:risky @PHP71Migration:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:declare_strict_types
 */
$declare_strict_types = [
    'declare_strict_types' => true,
];

/**
 * Replaces dirname(__FILE__) expression with equivalent __DIR__ constant.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:dir_constant
 */
$dir_constant = [
    'dir_constant' => false,
];

/**
 * Doctrine annotations must use configured operator for assignment in arrays.
 * Used in presets @DoctrineAnnotation
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:doctrine_annotation_array_assignment
 */
$doctrine_annotation_array_assignment = [
    'doctrine_annotation_array_assignment' => [
        'operator' => '='
    ],
];

/**
 * Doctrine annotations without arguments must use the configured syntax.
 * Used in presets @DoctrineAnnotation
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:doctrine_annotation_braces
 */
$doctrine_annotation_braces = [
    'doctrine_annotation_braces' => [
        'syntax' => 'without_braces',
    ],
];

/**
 * Doctrine annotations must be indented with four spaces.
 * Used in presets @DoctrineAnnotation
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:doctrine_annotation_indentation
 */
$doctrine_annotation_indentation = [
    'doctrine_annotation_indentation' => [
        'indent_mixed_lines' => false,
    ],
];

/**
 * Fixes spaces in Doctrine annotations.
 * Used in presets @DoctrineAnnotation
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:doctrine_annotation_spaces
 */
$doctrine_annotation_spaces = [
    'doctrine_annotation_spaces' => [
        'after_argument_assignments' => false,
        'after_array_assignments_colon' => true,
        'after_array_assignments_equals' => true,
        'around_argument_assignments' => true,
        'around_array_assignments' => true,
        'around_commas' => true,
        'around_parentheses' => true,
        'before_argument_assignments' => false,
        'before_array_assignments_colon' => true,
        'before_array_assignments_equals' => true,
    ],
];

/**
 * The keyword elseif should be used instead of else if so that all control keywords look like single words.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:elseif
 */
$elseif = [
    'elseif' => true,
];

/**
 * PHP code MUST use only UTF-8 without BOM (remove BOM).
 * Used in presets @PSR1 @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:encoding
 */
$encoding = [
    'encoding' => true
];

/**
 * Replace deprecated ereg regular expression functions with preg.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:ereg_to_preg
 */
$ereg_to_preg = [
    'ereg_to_preg' => false,
];

/**
 * Error control operator should be added to deprecation notices and/or removed from other cases.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:error_suppression
 */
$error_suppression = [
    'error_suppression' => [
        'mute_deprecation_error' => true,
        'noise_remaining_usages' => false,
        'noise_remaining_usages_exclude' => [],
    ],
];

/**
 * Escape implicit backslashes in strings and heredocs to ease the understanding of which are special chars interpreted by PHP and which not.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:escape_implicit_backslashes
 */
$escape_implicit_backslashes = [
    'escape_implicit_backslashes' => [
        'double_quoted' => true,
        'heredoc_syntax' => true,
        'single_quoted' => false,
    ]
];

/**
 * Add curly braces to indirect variables to make them clear to understand. Requires PHP >= 7.0.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:explicit_indirect_variable
 */
$explicit_indirect_variable = [
    'explicit_indirect_variable' => false,
];

/**
 * Converts implicit variables into explicit ones in double-quoted strings or heredoc syntax.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:explicit_string_variable
 */
$explicit_string_variable = [
    'explicit_string_variable' => true,
];

/**
 * All classes must be final, except abstract ones and Doctrine entities.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:final_class
 */
$final_class = [
    'final_class' => false,
];

/**
 * Internal classes should be final.
 * Used in presets @PhpCsFixer:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:final_internal_class
 */
$final_internal_class = [
    'final_internal_class' => [
        'annotation-black-list' => [
            '@final',
            '@Entity',
            '@ORM\\Entity',
        ],
        'annotation-white-list' => [
            '@internal',
        ],
        'consider-absent-docblock-as-internal-class' => false,
    ],
];

/**
 * Order the flags in fopen calls, b and t must be last.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:fopen_flag_order
 */
$fopen_flag_order = [
    'fopen_flag_order' => false,
];

/**
 * The flags in fopen calls must omit t, and b must be omitted or included consistently.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:fopen_flags
 */
$fopen_flags = [
    'fopen_flags' => [
        'b_mode' => true,
    ],
];

/**
 * PHP code must use the long <?php tags or short-echo <?= tags and not other tag variations.
 * Used in presets @PSR1 @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:full_opening_tag
 */
$full_opening_tag = [
    'full_opening_tag' => true,
];

/**
 * Transforms imported FQCN parameters and return types in function arguments to short version.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:fully_qualified_strict_types
 */
$fully_qualified_strict_types = [
    'fully_qualified_strict_types' => true,
];

/**
 * Spaces should be properly placed in a function declaration.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:function_declaration
 */
$function_declaration = [
    'function_declaration' => [
        'closure_function_spacing' => 'one',
    ],
];

/**
 * Replace core functions calls returning constants with the constants.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:function_to_constant
 */
$function_to_constant = [
    'function_to_constant' => [
        'functions' => [
            'get_class',
            'sapi_name',
            'phpversion',
            'pi',
        ],
    ],
];

/**
 * Ensure single space between function's argument and its typehint.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:function_typehint_space
 */
$function_typehint_space = [
    'function_typehint_space' => true,
];

/**
 * Configured annotations should be omitted from PHPDoc.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:general_phpdoc_annotation_remove
 */
$general_phpdoc_annotation_remove = [
    'general_phpdoc_annotation_remove' => [
        'annotations' => [],
    ],
];

/**
 * Add, replace or remove header comment.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:header_comment
 */
$header_comment = [
    'header_comment' => [
        'comment_type' => [
            'comment',
        ],
        'header' => 'string',
        'location' => [
            'after_declare_strict',
        ],
        'separate' => [
            'both',
        ],
    ],
];

/**
 * Heredoc/nowdoc content must be properly indented. Requires PHP >= 7.3.
 * Used in presets @PHP73Migration
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:heredoc_indentation
 */
$heredoc_indentation = [
    'heredoc_indentation' => true,
];

/**
 * Convert heredoc to nowdoc where possible.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:heredoc_to_nowdoc
 */
$heredoc_to_nowdoc = [
    'heredoc_to_nowdoc' => true,
];

/**
 * Function implode must be called with 2 arguments in the documented order.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:implode_call
 */
$implode_call = [
    'implode_call' => true,
];

/**
 * Include/Require and file path should be divided with a single space. File path should not be placed under brackets.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:include
 */
$include = [
    'include' => true,
];

/**
 * Pre- or post-increment and decrement operators should be used if possible.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:increment_style
 */
$increment_style = [
    'increment_style' => [
        'style' => 'pre',
    ],
];

/**
 * Code MUST use configured indentation type.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:indentation_type
 */
$indentation_type = [
    'indentation_type' => true,
];

/**
 * Replaces is_null($var) expression with null === $var.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:is_null
 */
$is_null = [
    'is_null' => true,
];

/**
 * All PHP files must use same line ending.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:line_ending
 */
$line_ending = [
    'line_ending' => true,
];

/**
 * Ensure there is no code on the same line as the PHP open tag.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:linebreak_after_opening_tag
 */
$linebreak_after_opening_tag = [
    'linebreak_after_opening_tag' => true,
];

/**
 * List (array destructuring) assignment should be declared using the configured syntax. Requires PHP >= 7.1.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:list_syntax
 */
$list_syntax = [
    'list_syntax' => [
        'syntax' => 'short',
    ],
];

/**
 * Use && and || logical operators instead of and and or
 * Used in presets @PhpCsFixer:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:logical_operators
 */
$logical_operators = [
    'logical_operators' => true,
];

/**
 * Cast should be written in lower case.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:lowercase_cast
 */
$lowercase_cast = [
    'lowercase_cast' => true,
];

/**
 * The PHP constants true, false, and null MUST be in lower case.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:lowercase_constants
 */
$lowercase_constants = [
    'lowercase_constants' => true,
];

/**
 * PHP keywords MUST be in lower case.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:lowercase_keywords
 */
$lowercase_keywords = [
    'lowercase_keywords' => true,
];

/**
 * Class static references self, static and parent MUST be in lower case.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:lowercase_static_reference
 */
$lowercase_static_reference = [
    'lowercase_static_reference' => true,
];

/**
 * Magic constants should be referred to using the correct casing.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:magic_constant_casing
 */
$magic_constant_casing = [
    'magic_constant_casing' => true,
];

/**
 * Magic method definitions and calls must be using the correct casing.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:magic_method_casing
 */
$magic_method_casing = [
    'magic_method_casing' => true,
];

/**
 * Replace non multibyte-safe functions with corresponding mb function.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:mb_str_functions
 */
$mb_str_functions = [
    'mb_str_functions' => true,
];

/**
 * In method arguments and method call, there MUST NOT be a space before each comma and there MUST be one space after each comma.
 * Argument lists MAY be split across multiple lines, where each subsequent line is indented once.
 * When doing so, the first item in the list MUST be on the next line, and there MUST be only one argument per line.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:method_argument_space
 */
$method_argument_space = [
    'method_argument_space' => [
        'after_heredoc' => false,
        'ensure_fully_multiline' => false,
        'keep_multiple_spaces_after_comma' => false,
        'on_multiline' => 'ignore',
    ],
];

/**
 * Method chaining MUST be properly indented. Method chaining with different levels of indentation is not supported.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:method_chaining_indentation
 */
$method_chaining_indentation = [
    'method_chaining_indentation' => true,
];

/**
 * Replaces intval, floatval, doubleval, strval and boolval function calls with according type casting operator.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:modernize_types_casting
 */
$modernize_types_casting = [
    'modernize_types_casting' => true,
];

/**
 * DocBlocks must start with two asterisks, multiline comments must start with a single asterisk, after the opening slash.
 * Both must end with a single asterisk before the closing slash.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:multiline_comment_opening_closing
 */
$multiline_comment_opening_closing = [
    'multiline_comment_opening_closing' => true,
];

/**
 * Forbid multi-line whitespace before the closing semicolon or move the semicolon to the new line for chained calls.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:multiline_whitespace_before_semicolons
 */
$multiline_whitespace_before_semicolons = [
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line',
    ],
];

/**
 * Add leading \ before constant invocation of internal constant to speed up resolving. Constant name match is
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:native_constant_invocation
 */
$native_constant_invocation = [
    'native_constant_invocation' => [
        'exclude' => [
            'null',
            'false',
            'true',
        ],
        'fix_built_in' => true,
        'include' => [],
        'scope' => 'all',
    ],
];

/**
 * Function defined by PHP should be called using the correct casing.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:native_function_casing
 */
$native_function_casing = [
    'native_function_casing' => true,
];

/**
 * Add leading \ before function invocation to speed up resolving.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:native_function_invocation
 */
$native_function_invocation = [
    'native_function_invocation' => [
        'exclude' => [],
        'include' => ['@internal'],
        'scope' => 'all',
        'strict' => false,
    ],
];

/**
 * Native type hints for functions should use the correct case.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:native_function_type_declaration_casing
 */
$native_function_type_declaration_casing = [
    'native_function_type_declaration_casing' => true,
];

/**
 * All instances created with new keyword must be followed by braces.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:new_with_braces
 */
$new_with_braces = [
    'new_with_braces' => true,
];

/**
 * Master functions shall be used instead of aliases.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 */
$no_alias_functions = [
    'no_alias_functions' => [
        '@internal',
        '@IMAP',
    ],
];

/**
 * Replace control structure alternative syntax to use braces.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_alternative_syntax
 */
$no_alternative_syntax = [
    'no_alternative_syntax' => true,
];

/**
 * There should not be a binary flag before strings.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_binary_string
 */
$no_binary_string = [
    'no_binary_string' => true,
];

/**
 * There should be no empty lines after class opening brace.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_blank_lines_after_class_opening
 */
$no_blank_lines_after_class_opening = [
    'no_blank_lines_after_class_opening' => true,
];

/**
 * There should not be blank lines between docblock and the documented element.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_blank_lines_after_phpdoc
 */
$no_blank_lines_after_phpdoc = [
    'no_blank_lines_after_phpdoc' => true,
];

/**
 * There should be no blank lines before a namespace declaration.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_blank_lines_before_namespace
 */
$no_blank_lines_before_namespace = [
    'no_blank_lines_before_namespace' => true,
];

/**
 * There must be a comment when fall-through is intentional in a non-empty case body.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_break_comment
 */
$no_break_comment = [
    'no_break_comment' => [
        'comment_text' => 'no break',
    ],
];

/**
 * The closing ?> tag MUST be omitted from files containing only PHP.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_closing_tag
 */
$no_closing_tag = [
    'no_closing_tag' => true,
];

/**
 * There should not be any empty comments.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_empty_comment
 */
$no_empty_comment = [
    'no_empty_comment' => true,
];

/**
 * There should not be empty PHPDoc blocks.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_empty_phpdoc
 */
$no_empty_phpdoc = [
    'no_empty_phpdoc' => true,
];

/**
 * Remove useless semicolon statements.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_empty_statement
 */
$no_empty_statement = [
    'no_empty_statement' => true,
];

/**
 * Removes extra blank lines and/or blank lines following configuration.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_extra_blank_lines
 */
$no_extra_blank_lines = [
    'no_extra_blank_lines' => [
        'tokens' => [
            'break',
            'continue',
            'curly_brace_block',
            'extra',
            'parenthesis_brace_block',
            'return',
            'square_brace_block',
            'throw',
            'use',
            'use_trait',
            'switch',
            'case',
            'default',
        ],
    ],
];

/**
 * Renames classes and cannot rename the files. You might have string references to renamed code ($$name).
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_homoglyph_names
 */
$no_homoglyph_names = [
    'no_homoglyph_names' => true,
];

/**
 * Remove leading slashes in use clauses.
 * Used in presets @PhpCsFixer @Symfony
 */
$no_leading_import_slash = [
    'no_leading_import_slash' => true,
];

/**
 * The namespace declaration line shouldn't contain leading whitespace.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_leading_namespace_whitespace
 */
$no_leading_namespace_whitespace = [
    'no_leading_namespace_whitespace' => true,
];

/**
 * Either language construct print or echo should be used.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_mixed_echo_print
 */
$no_mixed_echo_print = [
    'no_mixed_echo_print' => [
        'use' => 'echo',
    ],
];

/**
 * Operator => should not be surrounded by multi-line whitespaces.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_multiline_whitespace_around_double_arrow
 */
$no_multiline_whitespace_around_double_arrow = [
    'no_multiline_whitespace_around_double_arrow' => true,
];

/**
 * Properties MUST not be explicitly initialized with null.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_null_property_initialization
 */
$no_null_property_initialization = [
    'no_null_property_initialization' => true,
];

/**
 * Convert PHP4-style constructors to __construct.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_php4_constructor
 */
$no_php4_constructor = [
    'no_php4_constructor' => true,
];

/**
 * Short cast bool using double exclamation mark should not be used.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_short_bool_cast
 */
$no_short_bool_cast = [
    'no_short_bool_cast' => true,
];

/**
 * Replace short-echo <?= with long format <?php echo syntax.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_short_echo_tag
 */
$no_short_echo_tag = [
    'no_short_echo_tag' => true,
];

/**
 * Single-line whitespace before closing semicolon are prohibited.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_singleline_whitespace_before_semicolons
 */
$no_singleline_whitespace_before_semicolons = [
    'no_singleline_whitespace_before_semicolons' => true,
];

/**
 * When making a method or function call, there MUST NOT be a space between the method or function name and the opening parenthesis.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_spaces_after_function_name
 */
$no_spaces_after_function_name = [
    'no_spaces_after_function_name' => true,
];

/**
 * There MUST NOT be spaces around offset braces.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_spaces_around_offset
 */
$no_spaces_around_offset = [
    'no_spaces_around_offset' => [
        'positions' => [
            'inside',
            'outside',
        ],
    ],
];

/**
 * There MUST NOT be a space after the opening parenthesis. There MUST NOT be a space before the closing parenthesis.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_spaces_inside_parenthesis
 */
$no_spaces_inside_parenthesis = [
    'no_spaces_inside_parenthesis' => true,
];

/**
 * Replaces superfluous elseif with if.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_superfluous_elseif
 */
$no_superfluous_elseif = [
    'no_superfluous_elseif' => true,
];

/**
 * Removes @param and @return tags that don't provide any useful information.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_superfluous_phpdoc_tags
 */
$no_superfluous_phpdoc_tags = [
    'no_superfluous_phpdoc_tags' => [
        'allow_mixed' => false,
    ],
];

/**
 * Remove trailing commas in list function calls.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_trailing_comma_in_list_call
 */
$no_trailing_comma_in_list_call = [
    'no_trailing_comma_in_list_call' => true,
];

/**
 * PHP single-line arrays should not have trailing comma.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_trailing_comma_in_singleline_array
 */
$no_trailing_comma_in_singleline_array = [
    'no_trailing_comma_in_singleline_array' => true,
];

/**
 * Remove trailing whitespace at the end of non-blank lines.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_trailing_whitespace
 */
$no_trailing_whitespace = [
    'no_trailing_whitespace' => true,
];

/**
 * There MUST be no trailing spaces inside comment or PHPDoc.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_trailing_whitespace_in_comment
 */
$no_trailing_whitespace_in_comment = [
    'no_trailing_whitespace_in_comment' => true,
];

/**
 * Removes unneeded parentheses around control statements.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_unneeded_control_parentheses
 */
$no_unneeded_control_parentheses = [
    'no_unneeded_control_parentheses' => [
        'statements' => [
            'break',
            'clone',
            'continue',
            'echo_print',
            'return',
            'switch_case',
            'yield',
        ],
    ],
];

/**
 * Removes unneeded curly braces that are superfluous and aren't part of a control structure's body.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_unneeded_curly_braces
 */
$no_unneeded_curly_braces = [
    'no_unneeded_curly_braces' => true,
];

/**
 * A final class must not have final methods.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_unneeded_final_method
 */
$no_unneeded_final_method = [
    'no_unneeded_final_method' => true,
];

/**
 * In function arguments there must not be arguments with default values before non-default ones.
 * Used in presets @PhpCsFixer:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_unreachable_default_argument_value
 */
$no_unreachable_default_argument_value = [
    'no_unreachable_default_argument_value' => true,
];

/**
 * Variables must be set null instead of using (unset) casting.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_unset_cast
 */
$no_unset_cast = [
    'no_unset_cast' => true,
];

/**
 * Properties should be set to null instead of using unset.
 * Used in presets @PhpCsFixer:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_unset_on_property
 */
$no_unset_on_property = [
    'no_unset_on_property' => true,
];

/**
 * Unused use statements must be removed.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_unused_imports
 */
$no_unused_imports = [
    'no_unused_imports' => true,
];

/**
 * There should not be useless else cases.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_useless_else
 */
$no_useless_else = [
    'no_useless_else' => true,
];

/**
 * There should not be an empty return statement at the end of a function.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_useless_return
 */
$no_useless_return = [
    'no_useless_return' => true,
];

/**
 * In array declaration, there MUST NOT be a whitespace before each comma.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_whitespace_before_comma_in_array
 */
$no_whitespace_before_comma_in_array = [
    'no_whitespace_before_comma_in_array' => [
        'after_heredoc' => false,
    ],
];

/**
 * Remove trailing whitespace at the end of blank lines.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:no_whitespace_in_blank_line
 */
$no_whitespace_in_blank_line = [
    'no_whitespace_in_blank_line' => true,
];

/**
 * Remove Zero-width space (ZWSP), Non-breaking space (NBSP) and other invisible unicode symbols.
 * Used in presets @PHP70Migration:risky @PHP71Migration:risky @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:non_printable_character
 */
$non_printable_character = [
    'non_printable_character' => [
        'use_escape_sequences_in_strings' => false,
    ],
];

/**
 * Array index should always be written by using square braces.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:normalize_index_brace
 */
$normalize_index_brace = [
    'normalize_index_brace' => true,
];

/**
 * Logical NOT operators (!) should have leading and trailing whitespaces.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:not_operator_with_space
 */
$not_operator_with_space = [
    'not_operator_with_space' => true,
];

/**
 * Logical NOT operators (!) should have one trailing whitespace.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:not_operator_with_successor_space
 */
$not_operator_with_successor_space = [
    'not_operator_with_successor_space' => true,
];

/**
 * There should not be space before or after object T_OBJECT_OPERATOR ->.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:object_operator_without_whitespace
 */
$object_operator_without_whitespace = [
    'object_operator_without_whitespace' => true,
];

/**
 * Orders the elements of classes/interfaces/traits.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:ordered_class_elements
 */
$ordered_class_elements = [
    'ordered_class_elements' => [
        'order' => [
            'use_trait',
            'constant_public',
            'constant_protected',
            'constant_private',
            'property_public',
            'property_protected',
            'property_private',
            'construct',
            'destruct',
            'magic',
            'phpunit',
            'method_public',
            'method_protected',
            'method_private',
        ],
        'sortAlgorithm' => 'none',
    ],
];

/**
 * Ordering use statements.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:ordered_imports
 */
$ordered_imports = [
    'ordered_imports' => [
        'imports_order' => null,
        'sort_algorithm' => 'alpha',
    ],
];

/**
 * Orders the interfaces in an implements or interface extends clause.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:ordered_interfaces
 */
$ordered_interfaces = [
    'ordered_interfaces' => [
        'direction' => 'ascend',
        'order' => 'alpha',
    ],
];

/**
 * PHPUnit assertion method calls like ->assertSame(true, $foo) should be written with dedicated method like ->assertTrue($foo).
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_construct
 */
$php_unit_construct = [
    'php_unit_construct' => [
        'assertions' => [
            'assertEquals',
            'assertSame',
            'assertNotEquals',
            'assertNotSame',
        ],
    ],
];

/**
 * PHPUnit assertions like assertInternalType, assertFileExists, should be used over assertTrue.
 * Used in presets @PHPUnit30Migration:risky
 * @PHPUnit32Migration:risky
 * @PHPUnit35Migration:risky
 * @PHPUnit43Migration:risky
 * @PHPUnit48Migration:risky
 * @PHPUnit50Migration:risky
 * @PHPUnit52Migration:risky
 * @PHPUnit54Migration:risky
 * @PHPUnit55Migration:risky
 * @PHPUnit56Migration:risky
 * @PHPUnit57Migration:risky
 * @PHPUnit60Migration:risky
 * @PHPUnit75Migration:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_dedicate_assert
 */
$php_unit_dedicate_assert = [
    'php_unit_dedicate_assert' => [
        'functions' => null,
        'target' => '5.0',

    ],
];

/**
 * PHPUnit assertions like assertIsArray should be used over assertInternalType.
 * Used in presets @PHPUnit75Migration:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_dedicate_assert_internal_type
 */
$php_unit_dedicate_assert_internal_type = [
    'php_unit_dedicate_assert_internal_type' => [
        'target' => 'newest',
    ],
];

/**
 * Usages of ->setExpectedException* methods MUST be replaced by ->expectException* methods.
 * Used in presets @PHPUnit52Migration:risky
 * @PHPUnit54Migration:risky
 * @PHPUnit55Migration:risky
 * @PHPUnit56Migration:risky
 * @PHPUnit57Migration:risky
 * @PHPUnit60Migration:risky
 * @PHPUnit75Migration:risky
 */
$php_unit_expectation = [
    'php_unit_expectation' => [
        'target' => 'newest',
    ],
];

/**
 * PHPUnit annotations should be a FQCNs including a root namespace.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_fqcn_annotation
 */
$php_unit_fqcn_annotation = [
    'php_unit_fqcn_annotation' => true,
];

/**
 * All PHPUnit test classes should be marked as internal.
 * Used in presets @PhpCsFixer
 */
$php_unit_internal_class = [
    'php_unit_internal_class' => [
        'normal',
        'final',
    ],
];

/**
 * Enforce camel (or snake) case for PHPUnit test methods, following configuration.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_method_casing
 */
$php_unit_method_casing = [
    'php_unit_method_casing' => [
        'case' => 'camel_case',
    ],
];

/**
 * Usages of ->getMock and ->getMockWithoutInvokingTheOriginalConstructor methods MUST be replaced by ->createMock or ->createPartialMock methods.
 * Used in presets @PHPUnit54Migration:risky
 * @PHPUnit55Migration:risky
 * @PHPUnit56Migration:risky
 * @PHPUnit57Migration:risky
 * @PHPUnit60Migration:risky
 * @PHPUnit75Migration:risky
 */
$php_unit_mock = [
    'php_unit_mock' => [
        'target' => 'newest',
    ],
];

/**
 * Usage of PHPUnit's mock e.g. ->will($this->returnValue(..)) must be replaced by its shorter equivalent such as ->willReturn(...).
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_mock_short_will_return
 */
$php_unit_mock_short_will_return = [
    'php_unit_mock_short_will_return' => true,
];

/**
 * PHPUnit classes MUST be used in namespaced version, e.g. \PHPUnit\Framework\TestCase instead of \PHPUnit_Framework_TestCase.
 * Used in presets @PHPUnit48Migration:risky
 * @PHPUnit50Migration:risky
 * @PHPUnit52Migration:risky
 * @PHPUnit54Migration:risky
 * @PHPUnit55Migration:risky
 * @PHPUnit56Migration:risky
 * @PHPUnit57Migration:risky
 * @PHPUnit60Migration:risky
 * @PHPUnit75Migration:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_namespaced
 */
$php_unit_namespaced = [
    'php_unit_namespaced' => [
        'target' => 'newest',
    ],
];

/**
 * Usages of @expectedException* annotations MUST be replaced by ->setExpectedException* methods.
 * Used in presets @PHPUnit32Migration:risky
 * @PHPUnit35Migration:risky
 * @PHPUnit43Migration:risky
 * @PHPUnit48Migration:risky
 * @PHPUnit50Migration:risky
 * @PHPUnit52Migration:risky
 * @PHPUnit54Migration:risky
 * @PHPUnit55Migration:risky
 * @PHPUnit56Migration:risky
 * @PHPUnit57Migration:risky
 * @PHPUnit60Migration:risky
 * @PHPUnit75Migration:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_no_expectation_annotation
 */
$php_unit_no_expectation_annotation = [
    'php_unit_no_expectation_annotation' => [
        'target' => 'newest',
    ],
];

/**
 * Order @covers annotation of PHPUnit tests.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_ordered_covers
 */
$php_unit_ordered_covers = [
    'php_unit_ordered_covers' => true,
];

/**
 * Changes the visibility of the setUp() and tearDown() functions of PHPUnit to protected, to match the PHPUnit TestCase.
 * Used in presets @PhpCsFixer:risky
 */
$php_unit_set_up_tear_down_visibility = [
    'php_unit_set_up_tear_down_visibility' => true,
];

/**
 * All PHPUnit test cases should have @small, @medium or @large annotation to enable run time limits.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_size_class
 */
$php_unit_size_class = [
    'php_unit_size_class' => [
        'group' => 'small',
    ],
];

/**
 * PHPUnit methods like assertSame should be used instead of assertEquals.
 * Used in presets @PhpCsFixer:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_strict
 */
$php_unit_strict = [
    'php_unit_strict' => [
        'assertions' => [
            'assertAttributeEquals',
            'assertAttributeNotEquals',
            'assertEquals',
            'assertNotEquals',
        ],
    ],
];

/**
 * Adds or removes @test annotations from tests, following configuration.
 * Used in presets @PhpCsFixer:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_test_annotation
 */
$php_unit_test_annotation = [
    'php_unit_test_annotation' => [
        'case' => 'camel',
        'style' => 'annotation',
    ]
];

/**
 * Calls to PHPUnit\Framework\TestCase static methods must all be of the same type, either $this->, self:: or static::.
 * Used in presets @PhpCsFixer:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_test_case_static_method_calls
 */
$php_unit_test_case_static_method_calls = [
    'php_unit_test_case_static_method_calls' => [
        'call_type' => 'static',
        'methods' => []
    ]
];

/**
 * Adds a default @coversNothing annotation to PHPUnit test classes that have no @covers* annotation.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:php_unit_test_class_requires_covers
 */
$php_unit_test_class_requires_covers = [
    'php_unit_test_class_requires_covers' => true,
];

/**
 * PHPDoc should contain @param for all params.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_add_missing_param_annotation
 */
$phpdoc_add_missing_param_annotation = [
    'phpdoc_add_missing_param_annotation' => [
        'only_untyped' => true,
    ],
];

/**
 * All items of the given phpdoc tags must be either left-aligned or (by default) aligned vertically.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_align
 */
$phpdoc_align = [
    'phpdoc_align' => [
        'align' => 'left',
        'tags' => [
            'param',
            'return',
            'throws',
            'type',
            'var',
        ],
    ],
];

/**
 * PHPDoc annotation descriptions should not be a sentence.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_annotation_without_dot
 */
$phpdoc_annotation_without_dot = [
    'phpdoc_annotation_without_dot' => true,
];

/**
 * Docblocks should have the same indentation as the documented subject.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_indent
 */
$phpdoc_indent = [
    'phpdoc_indent' => true,
];

/**
 * Fix PHPDoc inline tags, make @inheritdoc always inline.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_inline_tag
 */
$phpdoc_inline_tag = [
    'phpdoc_inline_tag' => true,
];

/**
 * @access annotations should be omitted from PHPDoc.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_no_access
 */
$phpdoc_no_access = [
    'phpdoc_no_access' => true,
];

/**
 * No alias PHPDoc tags should be used.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_no_alias_tag
 */
$phpdoc_no_alias_tag = [
    'phpdoc_no_alias_tag' => [
        'replacements' => [
            'property-read' => 'property',
            'property-write' => 'property',
            'type' => 'var',
            'link' => 'see',
        ],
    ],
];

/**
 * @return void and @return null annotations should be omitted from PHPDoc.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_no_empty_return
 */
$phpdoc_no_empty_return = [
    'phpdoc_no_empty_return' => true,
];

/**
 * @package and @subpackage annotations should be omitted from PHPDoc.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_no_package
 */
$phpdoc_no_package = [
    'phpdoc_no_package' => true,
];

/**
 * Classy that does not inherit must not have @inheritdoc tags.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_no_useless_inheritdoc
 */
$phpdoc_no_useless_inheritdoc = [
    'phpdoc_no_useless_inheritdoc' => true,
];

/**
 * Annotations in PHPDoc should be ordered so that @param annotations come first, then @throws annotations, then @return annotations.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_order
 */
$phpdoc_order = [
    'phpdoc_order' => true,
];

/**
 * The type of @return annotations of methods returning a reference to itself must the configured one.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_return_self_reference
 */
$phpdoc_return_self_reference = [
    'phpdoc_return_self_reference' => [
        'replacements' => [
            'this' => '$this',
            '@this' => '$this',
            '$self' => 'self',
            '@self' => 'self',
            '$static' => 'static',
            '@static' => 'static',
        ]
    ]
];

/**
 * Scalar types should always be written in the same form. int not integer, bool not boolean, float not real or
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_scalar
 */
$phpdoc_scalar = [
    'phpdoc_scalar' => [
        'types' => [
            'boolean',
            'double',
            'integer',
            'real',
            'str',
        ],
    ],
];

/**
 * Annotations in PHPDoc should be grouped together so that annotations of the same type immediately follow each other, and annotations of a different type are separated by a single blank line.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_separation
 *
 */
$phpdoc_separation = [
    'phpdoc_separation' => true,
];

/**
 * Single line @var PHPDoc should have proper spacing.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_single_line_var_spacing
 */
$phpdoc_single_line_var_spacing = [
    'phpdoc_single_line_var_spacing' => true,
];

/**
 * PHPDoc summary should end in either a full stop, exclamation mark, or question mark.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_summary
 */
$phpdoc_summary = [
    'phpdoc_summary' => true,
];

/**
 * Docblocks should only be used on structural elements.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_to_comment
 */
$phpdoc_to_comment = [
    'phpdoc_to_comment' => true,
];

/**
 * EXPERIMENTAL: Takes @return annotation of non-mixed types and adjusts accordingly the function signature. Requires PHP >= 7.0.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_to_return_type
 */
$phpdoc_to_return_type = [
    'phpdoc_to_return_type' => true,
];

/**
 * PHPDoc should start and end with content, excluding the very first and last line of the docblocks.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_trim
 */
$phpdoc_trim = [
    'phpdoc_trim' => true,
];

/**
 * Removes extra blank lines after summary and after description in PHPDoc.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_trim_consecutive_blank_line_separation
 */
$phpdoc_trim_consecutive_blank_line_separation = [
    'phpdoc_trim_consecutive_blank_line_separation' => true,
];

/**
 * The correct case must be used for standard PHP types in PHPDoc.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_types
 */
$phpdoc_types = [
    'phpdoc_types' => [
        'groups' => [
            'simple',
            'alias',
            'meta',
        ]
    ]
];

/**
 * Sorts PHPDoc types.
 * Used in presets @PhpCsFixer @Symfony
 */
$phpdoc_types_order = [
    'phpdoc_types_order' => [
        'null_adjustment' => 'always_first',
        'sort_algorithm' => 'none',
    ],
];

/**
 * @var and @type annotations must have type and name in the correct order.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_var_annotation_correct_order
 */
$phpdoc_var_annotation_correct_order = [
    'phpdoc_var_annotation_correct_order' => true,
];

/**
 * @var and @type annotations should not contain the variable name.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:phpdoc_var_without_name
 */
$phpdoc_var_without_name = [
    'phpdoc_var_without_name' => true,
];

/**
 * Converts pow to the ** operator.
 * Used in presets @PHP56Migration:risky @PHP70Migration:risky @PHP71Migration:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:pow_to_exponentiation
 */
$pow_to_exponentiation = [
    'pow_to_exponentiation' => true,
];

/**
 * Converts protected variables and methods to private where possible.
 * Used in presets @PhpCsFixer@Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:protected_to_private
 */
$protected_to_private = [
    'protected_to_private' => true,
];

/**
 * Classes must be in a path that matches their namespace, be at least one namespace deep and the class name should match the file name.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:psr0
 */
$psr0 = [
    'psr0' => [
        'dir' => '',
    ],
];

/**
 * Class names should match the file name.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:psr4
 */
$psr4 = [
    'psr4' => true,
];

/**
 * Replaces rand, srand, getrandmax functions calls with their mt_* analogs.
 * Used in presets @PHP70Migration:risky @PHP71Migration:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:random_api_migration
 */
$random_api_migration = [
    'random_api_migration' => [
        'replacements' => [
            'getrandmax' => 'mt_getrandmax',
            'rand' => 'mt_rand',
            'srand' => 'mt_srand',
        ],
    ],
];

/**
 * Local, dynamic and directly referenced variables should not be assigned and directly returned by a function or method.
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:return_assignment
 */
$return_assignment = [
    'return_assignment' => true,
];

/**
 * There should be one or no space before colon, and one space after it in return type declarations, according to configuration.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:return_type_declaration
 */
$return_type_declaration = [
    'return_type_declaration' => [
        'space_before' => 'none',
    ],
];

/**
 * Inside class or interface element self should be preferred to the class name itself.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:self_accessor
 */
$self_accessor = [
    'self_accessor' => true,
];

/**
 * Instructions must be terminated with a semicolon.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:semicolon_after_instruction
 */
$semicolon_after_instruction = [
    'semicolon_after_instruction' => true,
];

/**
 * Cast shall be used, not settype.
 * Used in presets @PhpCsFixer:risky @Symfony:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:set_type_to_cast
 */
$set_type_to_cast = [
    'set_type_to_cast' => true,
];

/**
 * Cast (boolean) and (integer) should be written as (bool) and (int), (double) and (real) as (float), (binary) as (string).
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:short_scalar_cast
 */
$short_scalar_cast = [
    'short_scalar_cast' => true,
];

/**
 * Converts explicit variables in double-quoted strings and heredoc syntax from simple to complex format (${ to {$).
 * Used in presets @PhpCsFixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:simple_to_complex_string_variable
 */
$simple_to_complex_string_variable = [
    'simple_to_complex_string_variable' => true,
];

/**
 * A return statement wishing to return void should not return null.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:simplified_null_return
 */
$simplified_null_return = [
    'simplified_null_return' => true,
];

/**
 * A PHP file without end tag must always end with a single empty line feed.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:single_blank_line_at_eof
 */
$single_blank_line_at_eof = [
    'single_blank_line_at_eof' => true,
];

/**
 * There should be exactly one blank line before a namespace declaration.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:single_blank_line_before_namespace
 */
$single_blank_line_before_namespace = [
    'single_blank_line_before_namespace' => true,
];

/**
 * There MUST NOT be more than one property or constant declared per statement.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:single_class_element_per_statement
 */
$single_class_element_per_statement = [
    'single_class_element_per_statement' => [
        'elements' => [
            'const',
            'property',
        ],
    ],
];

/**
 * There MUST be one use keyword per declaration.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:single_import_per_statement
 */
$single_import_per_statement = [
    'single_import_per_statement' => true,
];

/**
 * Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:single_line_after_imports
 */
$single_line_after_imports = [
    'single_line_after_imports' => true,
];

/**
 * Single-line comments and multi-line comments with only one line of actual content should use the // syntax.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:single_line_comment_style
 */
$single_line_comment_style = [
    'single_line_comment_style' => [
        'comment_types' => [
            'asterisk',
            'hash',
        ],
    ],
];

/**
 * Convert double quotes to single quotes for simple strings.
 * Used in presets @PhpCsFixer @Symfony
 */
$single_quote = [
    'single_quote' => [
        'strings_containing_single_quote_chars' => false,
    ],
];

/**
 * Each trait use must be done as single statement.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:single_trait_insert_per_statement
 */
$single_trait_insert_per_statement = [
    'single_trait_insert_per_statement' => true,
];

/**
 * Fix whitespace after a semicolon.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:space_after_semicolon
 */
$space_after_semicolon = [
    'space_after_semicolon' => true,
];

/**
 * Increment and decrement operators should be used if possible.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:standardize_increment
 */
$standardize_increment = [
    'standardize_increment' => true,
];

/**
 * Replace all <> with !=.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:standardize_not_equals
 */
$standardize_not_equals = [
    'standardize_not_equals' => true,
];

/**
 * Lambdas not (indirect) referencing $this must be declared static.
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:static_lambda
 */
$static_lambda = [
    'static_lambda' => true,
];

/**
 * Comparisons should be strict.
 * Used in presets @PhpCsFixer:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:strict_comparison
 */
$strict_comparison = [
    'strict_comparison' => true,
];

/**
 * Functions should be used with $strict param set to true.
 * Used in presets @PhpCsFixer:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:strict_param
 */
$strict_param = [
    'strict_param' => true,
];

/**
 * All multi-line strings must use correct line ending.
 * Used in presets @PhpCsFixer:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:string_line_ending
 */
$string_line_ending = [
    'string_line_ending' => true,
];

/**
 * A case should be followed by a colon and not a semicolon.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:switch_case_semicolon_to_colon
 */
$switch_case_semicolon_to_colon = [
    'switch_case_semicolon_to_colon' => true,
];

/**
 * Removes extra spaces between colon and case value.
 * Used in presets @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:switch_case_space
 */
$switch_case_space = [
    'switch_case_space' => true,
];

/**
 * Standardize spaces around ternary operator.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:ternary_operator_spaces
 */
$ternary_operator_spaces = [
    'ternary_operator_spaces' => true,
];

/**
 * Use null coalescing operator ?? where possible. Requires PHP >= 7.0.
 * Used in presets @PHP70Migration @PHP71Migration @PHP73Migration
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:ternary_to_null_coalescing
 */
$ternary_to_null_coalescing = [
    'ternary_to_null_coalescing' => true,
];

/**
 * PHP multi-line arrays should have a trailing comma.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:trailing_comma_in_multiline_array
 */
$trailing_comma_in_multiline_array = [
    'trailing_comma_in_multiline_array' => [
        'after_heredoc' => false,
    ]
];

/**
 * Arrays should be formatted like function/method arguments, without leading or trailing single line space.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:trim_array_spaces
 */
$trim_array_spaces = [
    'trim_array_spaces' => true,
];

/**
 * Unary operators should be placed adjacent to their operands.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:unary_operator_spaces
 */
$unary_operator_spaces = [
    'unary_operator_spaces' => true,
];

/**
 * Visibility MUST be declared on all properties and methods; abstract and final MUST be declared before the visibility; static MUST be declared after the visibility.
 * Used in presets @PHP71Migration @PHP73Migration @PSR2 @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:visibility_required
 */
$visibility_required = [
    'visibility_required' => [
        'elements' => [
            'property',
            'method',
        ],
    ],
];

/**
 * Add void return type to functions with missing or empty return statements, but priority is given to @return annotations. Requires PHP >= 7.1.
 * Used in presets @PHP71Migration:risky
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:void_return
 */
$void_return = [
    'void_return' => true,
];

/**
 * In array declaration, there MUST be a whitespace after each comma.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:whitespace_after_comma_in_array
 */
$whitespace_after_comma_in_array = [
    'whitespace_after_comma_in_array' => true,
];

/**
 * Write conditions in Yoda style (true), non-Yoda style (false) or ignore those conditions (null) based on configuration.
 * Used in presets @PhpCsFixer @Symfony
 * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:2.15|fixer:yoda_style
 */
$yoda_style = [
    'yoda_style' => [
        'always_move_variable' => false,
        'equal' => true,
    ],
];


$rules = array_merge(
//    '@PhpCsFixer' => true,
    $align_multiline_comment,
    $array_indentation,
    $array_syntax,
    $binary_operator_spaces,
    $blank_line_after_namespace,
    $blank_line_after_opening_tag,
//    $blank_line_before_statement,
    $braces,
    $cast_spaces,
//    $class_attributes_separation,
    $class_definition,
    $class_keyword_remove,
    $combine_consecutive_issets,
    $combine_consecutive_unsets,
    $compact_nullable_typehint,
    $concat_space,
    $declare_equal_normalize,
    $dir_constant,
    $doctrine_annotation_braces,
    $elseif,
    $encoding,
    $escape_implicit_backslashes,
    $explicit_string_variable,
    $full_opening_tag,
    $fully_qualified_strict_types,
    $function_declaration,
    $function_typehint_space,
    $heredoc_to_nowdoc,
    $include,
    $indentation_type,
    $line_ending,
    $linebreak_after_opening_tag,
    $list_syntax,
    $logical_operators,
    $lowercase_cast,
//    $lowercase_constants,
    $lowercase_keywords,
    $lowercase_static_reference,
    $magic_constant_casing,
    $magic_method_casing,
//    $method_argument_space,
    $method_chaining_indentation,
    $multiline_comment_opening_closing,
    $multiline_whitespace_before_semicolons,
    $native_function_casing,
    $native_function_type_declaration_casing,
    $new_with_braces,
    $no_alternative_syntax,
    $no_binary_string,
    $no_blank_lines_after_class_opening,
    $no_blank_lines_after_phpdoc,
    $no_break_comment,
    $no_closing_tag,
    $no_empty_comment,
    $no_empty_phpdoc,
    $no_empty_statement,
    $no_extra_blank_lines,
    $no_leading_import_slash,
    $no_leading_namespace_whitespace,
    $no_mixed_echo_print,
    $no_multiline_whitespace_around_double_arrow,
    $no_null_property_initialization,
    $no_php4_constructor,
    $no_short_bool_cast,
//    $no_short_echo_tag,
    $no_singleline_whitespace_before_semicolons,
    $no_spaces_after_function_name,
    $no_spaces_around_offset,
    $no_spaces_inside_parenthesis,
    $no_trailing_comma_in_list_call,
    $no_trailing_comma_in_singleline_array,
    $no_trailing_whitespace,
    $no_trailing_whitespace_in_comment,
    $no_unneeded_control_parentheses,
    $no_unneeded_curly_braces,
    $no_unneeded_final_method,
    $no_unset_cast,
    $no_unused_imports,
    $no_useless_else,
    $no_useless_return,
    $no_whitespace_before_comma_in_array,
    $no_whitespace_in_blank_line,
    $normalize_index_brace,
    $object_operator_without_whitespace,
    $ordered_imports,
    $php_unit_fqcn_annotation,
//    $php_unit_ordered_covers,
    $phpdoc_add_missing_param_annotation,
    $phpdoc_align,
    $phpdoc_annotation_without_dot,
    $phpdoc_indent,
//    $phpdoc_inline_tag,
    $phpdoc_no_access,
    $phpdoc_no_alias_tag,
    $phpdoc_no_package,
    $phpdoc_order,
    $phpdoc_return_self_reference,
    $phpdoc_scalar,
    $phpdoc_separation,
    $phpdoc_single_line_var_spacing,
    $phpdoc_summary,
    $phpdoc_trim,
    $phpdoc_trim_consecutive_blank_line_separation,
    $phpdoc_types,
    $phpdoc_types_order,
    $phpdoc_var_annotation_correct_order,
    $phpdoc_var_without_name,
    $return_assignment,
    $return_type_declaration,
    $self_accessor,
    $semicolon_after_instruction,
    $short_scalar_cast,
    $simple_to_complex_string_variable,
    $single_blank_line_at_eof,
    $single_blank_line_before_namespace,
    $single_class_element_per_statement,
    $single_import_per_statement,
    $single_line_after_imports,
    $single_quote,
    $single_trait_insert_per_statement,
    $space_after_semicolon,
    $standardize_not_equals,
    $switch_case_semicolon_to_colon,
    $switch_case_space,
    $ternary_operator_spaces,
    $ternary_to_null_coalescing,
//    $trailing_comma_in_multiline_array,
    $trim_array_spaces,
    $unary_operator_spaces,
    $visibility_required,
    $whitespace_after_comma_in_array
);

$excludes = [
    'vendor',
    'storage',
    'node_modules',
    'bootstrap',
    'docker',
];

return (new PhpCsFixer\Config())
    ->setRules($rules)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->exclude($excludes)
            ->notName('README.md')
            ->notName('*.xml')
            ->notName('*.yml')
            ->notName('_ide_helper.php')
            ->notName('_ide_helper_models.php')
    );
