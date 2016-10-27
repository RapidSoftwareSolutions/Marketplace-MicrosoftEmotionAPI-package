<?php

namespace Tests\Functional;

require_once __DIR__ . '/../../src/Models/paginationClass.php';

class MicrosoftEmotionAPITest extends BaseTestCase {
    
    public $subscriptionKey = "a7aea4ec6fd84be69138a7b8b1b4c4d1";
    
    public function testGetEmotionRecognition() {
        
        $var = '{
                    "args": {
                      "subscriptionKey": "'.$this->subscriptionKey.'",
                      "image": "http://www.authenticityassociates.com/wp-content/uploads/2012/08/EmotionsAreEnergy1.jpg"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/MicrosoftEmotionAPI/getEmotionRecognition', $post_data);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetEmotionRecognitionInVideo() {
        
        $var = '{
                    "args": {
                      "subscriptionKey": "'.$this->subscriptionKey.'",
                      "video": "http://solidrun.maltegrosse.de/~fritsch/burosch1.mpg"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/MicrosoftEmotionAPI/getEmotionRecognitionInVideo', $post_data);
        
        $data = json_decode($response->getBody())->contextWrites->to;
        $res = parse_url($data[0][0]);
        $res = explode('/', $res['path']);
        $objectId = $res[4];

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
        
        return $objectId;

    }
    
    /**
     * @depends testGetEmotionRecognitionInVideo
     */
    public function testGetVideoRecognitionStatus($objectId) {
        
        $var = '{
                    "args": {
                      "subscriptionKey": "'.$this->subscriptionKey.'",
                      "objectId": "'.$objectId.'"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/MicrosoftEmotionAPI/getVideoRecognitionStatus', $post_data);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetEmotionRecognitionWithFaceRectangles() {
        
        $var = '{
                    "args": {
                      "subscriptionKey": "'.$this->subscriptionKey.'",
                      "image": "http://www.authenticityassociates.com/wp-content/uploads/2012/08/EmotionsAreEnergy1.jpg",
                      "faceRectangles": "735,383,210,210"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/MicrosoftEmotionAPI/getEmotionRecognitionWithFaceRectangles', $post_data);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }

}
