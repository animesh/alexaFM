// https://developer.amazon.com/en-US/docs/alexa/custom-skills/request-and-response-json-reference.html#standard-response-to-canfulfillintentrequest-launchrequest-or-intentrequest-example https://shkspr.mobi/blog/2019/09/quick-and-dirty-self-hosted-alexa-skills-2019/ 
<?php
//   Set the correct header for JSON data
header('Content-Type: application/json');
//   Set the response
$response = [
  "response" => [
    "outputSpeech" => [
      "type" => "PlainText",
      "text" => "This is a sample response from your webhook!"
    ]
  ]
];
echo json_encode($response);
