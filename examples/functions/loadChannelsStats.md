# Load Channels Statistics

This guide will walk you through steps of loading statistics for each channel from your account using the PHP library.

*Required Access Level: ViewChannels*

## What statistics are returned?
When using Elastic Email you send email campaigns to your contacts. From that we create statistics reports for you eg. number of emails sent, number of delivered messages,Number of opened messages, number of unsubscribed messages, number of clicked messages etc.

### Let's dig into the code

Put the below code to your file.

Load library using below line:

```php
require_once(__DIR__ . '/vendor/autoload.php');
```

Read your API key from the `ELASTICEMAIL_API_KEY` environment variable (remember to check a required access level). Set it with `export ELASTICEMAIL_API_KEY=your-api-key` before you run the script; the script stops with an error if it is not set:

```php
$apiKey = getenv('ELASTICEMAIL_API_KEY');
if (!$apiKey) {
    throw new RuntimeException('Set the ELASTICEMAIL_API_KEY environment variable');
}
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', $apiKey);
```

Create an instance of StatisticsApi that will be used to get basic send statistics.

```php
$apiInstance = new ElasticEmail\Api\StatisticsApi(
    new GuzzleHttp\Client(),
    $config
);
```

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/statisticsChannelsGet

```php
$limit = 100;
$offset = 20;
$response = $apiInstance->statisticsChannelsGet($limit, $offset);
```

## The whole code to copy and paste:

```php
require_once(__DIR__ . '/vendor/autoload.php');

$apiKey = getenv('ELASTICEMAIL_API_KEY');
if (!$apiKey) {
    throw new RuntimeException('Set the ELASTICEMAIL_API_KEY environment variable');
}

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', $apiKey);

$apiInstance = new ElasticEmail\Api\StatisticsApi(
    new GuzzleHttp\Client(),
    $config
);

$limit = 100;
$offset = 20;

try {
    $response = $apiInstance->statisticsChannelsGet($limit, $offset);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsChannelsGet: ', $e->getMessage(), PHP_EOL;
}
```
