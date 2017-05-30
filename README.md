[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/MicrosoftEmotionAPI/functions?utm_source=RapidAPIGitHub_MicrosoftEmotionFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)


# MicrosoftEmotionAPI Package
Detect various emotions from an image of a face. 
* Domain: microsoft.com
* Credentials: subscriptionKey

## How to get credentials: 
 1. Go to the [Service page](https://www.microsoft.com/cognitive-services/en-us/computer-vision-api)
 2. Create [Microsoft account](https://www.microsoft.com/cognitive-services/en-US/subscriptions) or log in. 
 3. Choose "Emotion - Preview" to create new subscription
 4. In **Key** section choose Key1 or Key2 and press <kbd>Show</kbd> or  <kbd>Copy</kbd>

## MicrosoftEmotionAPI.getEmotionRecognition
Recognizes the emotions expressed by one or more people in an image, as well as returns a bounding box for the face. The emotions detected are happiness, sadness, surprise, anger, fear, contempt, and disgust or neutral. 

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Required: The api key obtained from Microsoft Cognitive Services.
| image          | File       | Required: The image for recognizing.

## MicrosoftEmotionAPI.getEmotionRecognitionInVideo
Method recognizes the emotions expressed by the people in an image and returns their emotions.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Required: The api key obtained from Microsoft Cognitive Services.
| video          | File       | Required: The video for recognizing.
| outputStyle    | Select     | Optional: Defaults to “aggregate” style, but a user can specify “perFrame” style.

## MicrosoftEmotionAPI.getEmotionRecognitionWithFaceRectangles
Recognizes the emotions expressed by one or more people in an image, as well as returns a bounding box for the face.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Required: The api key obtained from Microsoft Cognitive Services.
| image          | File       | Required: The image for recognizing.
| faceRectangles | String     | Optional: A face rectangle is in the form “left,top,width,height”. Delimited multiple face rectangles with a “;”.

## MicrosoftEmotionAPI.getVideoRecognitionStatus
Get recognition in Video operation result.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Required: The api key obtained from Microsoft Cognitive Services.
| objectId       | String     | Required: The ID of the uploaded video for recognizing.

