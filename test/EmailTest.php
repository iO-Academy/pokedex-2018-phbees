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
        $email = new Email('<script>bob@gmail.com');
        if ($email!==null){
            $result = 'object not instantiated';
        } else {
            $result = 'object instantiated';
        }
        $this->assertEquals($email, 'object not instantiated');
    }
    public function testTypeError_emailValidate () : void
    {
        $email = new Email(true);
        if ($email!==null){
            $result = 'object not instantiated';
        } else {
            $result = 'object instantiated';
        }
        $this->assertEquals($email, 'object not instantiated');
    }
}
