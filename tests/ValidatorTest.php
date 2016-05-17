<?php

namespace Supl\IsrcValidator;

use Supl\IsrcValidator\Validator;
use PHPUnit_Framework_TestCase;

class ValidatorTest extends PHPUnit_Framework_TestCase
{

    public function provideTestValidate()
    {
        return [
            [
                'QM-6QV-14-00007',
                false,
            ],
            [
                'HKC840500162',
                true,
            ],
        ];
    }

    /**
     * @dataProvider provideTestValidate
     */
    public function testValidate($isrc, $expected)
    {
        $validator = new Validator();
        $this->assertSame($expected, $validator->validate($isrc));
    }
}
