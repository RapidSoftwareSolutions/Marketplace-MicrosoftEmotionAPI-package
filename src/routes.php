<?php
$routes = [
    'getEmotionRecognition',
    'getEmotionRecognitionInVideo',
    'getEmotionRecognitionWithFaceRectangles',
    'getVideoRecognitionStatus',
    'metadata'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

