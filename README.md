# MicrosoftEmotionAPI Package
Microsoft Emotion API allows you to build more personalized apps with Microsoft’s cutting edge cloud-based emotion recognition algorithm.
* Domain: microsoft.com
* Credentials: subscriptionKey

## How to get credentials: 
 1. Go to the [Service page](https://www.microsoft.com/cognitive-services/en-us/computer-vision-api)
 2. Create [Microsoft account](https://www.microsoft.com/cognitive-services/en-US/subscriptions) or log in. 
 3. Choose "Emotion - Preview" to create new subscription
 4. In **Key** section choose Key1 or Key2 and press <kbd>Show</kbd> or  <kbd>Copy</kbd>

## TOC: 
* [getEmotionRecognition](#getEmotionRecognition)
* [getEmotionRecognitionInVideo](#getEmotionRecognitionInVideo)
* [getEmotionRecognitionWithFaceRectangles](#getEmotionRecognitionWithFaceRectangles)
* [getVideoRecognitionStatus](#getVideoRecognitionStatus)
 
<a name="getEmotionRecognition"/>
## MicrosoftEmotionAPI.getEmotionRecognition
Recognizes the emotions expressed by one or more people in an image, as well as returns a bounding box for the face. The emotions detected are happiness, sadness, surprise, anger, fear, contempt, and disgust or neutral. 

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Required: The api key obtained from Microsoft Cognitive Services.
| image          | String     | Required: The image for recognizing.

<a name="getEmotionRecognitionInVideo"/>
## MicrosoftEmotionAPI.getEmotionRecognitionInVideo
Method recognizes the emotions expressed by the people in an image and returns their emotions.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Required: The api key obtained from Microsoft Cognitive Services.
| video          | String     | Required: The video for recognizing.
| outputStyle    | String     | Optional: Defaults to “aggregate” style, but a user can specify “perFrame” style.

<a name="getEmotionRecognitionWithFaceRectangles"/>
## MicrosoftEmotionAPI.getEmotionRecognitionWithFaceRectangles
Recognizes the emotions expressed by one or more people in an image, as well as returns a bounding box for the face.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Required: The api key obtained from Microsoft Cognitive Services.
| image          | String     | Required: The image for recognizing.
| faceRectangles | String     | Optional: A face rectangle is in the form “left,top,width,height”. Delimited multiple face rectangles with a “;”.

<a name="getVideoRecognitionStatus"/>
## MicrosoftEmotionAPI.getVideoRecognitionStatus
Get recognition in Video operation result.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Required: The api key obtained from Microsoft Cognitive Services.
| objectId       | String     | Required: The ID of the uploaded video for recognizing.

