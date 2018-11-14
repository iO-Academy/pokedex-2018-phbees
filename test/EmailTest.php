<?php
use PHPUnit\Framework\TestCase;
require_once "../Email.php";

class EmailTest extends TestCase
{
    public function testSuccess_emailValidate () : void
    {
        $email = new Email('bob@gmail.com');
        $this->assertEquals($email, 'bob@gmail.com');
    }

    public function testFail_emailValidate () : void
    {
        $this->expectException(UnexpectedValueException::class);
        $email = new Email('<script>email@gmails.com');
    }

    public function testTypeTest_emailValidate () : void
    {
        $this->expectException(UnexpectedValueException::class);
        $email = new Email(2);
    }

    public function testnull_emailValidate () : void
    {
        $this->expectException(UnexpectedValueException::class);
        $email = new Email('');
    }
}
