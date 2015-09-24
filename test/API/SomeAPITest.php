<?php
class API_SomeAPITest extends PHPUnit_Framework_TestCase
{
    public function testCallsTheAppropriateService()
    {
        $mockService = $this->getMock('SomeService', ['getData']);
        $mockService->expects($this->once())
            ->method('getData');

        $api = new SomeAPI();
        $api->setService($mockService);

        $api->getData();
    }
}