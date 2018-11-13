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
        $email = new Email('<script>email@gmails.com');
        $this->assertEquals($email, 'Not a valid email');
    }

    public function testTypeTest_emailValidate () : void
    {
        $email = new Email(2);
        $this->assertEquals($email, 'Not a valid email');
    }
}
