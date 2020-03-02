<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class PostValidator.
 *
 * @package namespace App\Validators;
 */
class PostValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ],
    ];
}
