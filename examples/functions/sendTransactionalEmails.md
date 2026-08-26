# Send Bulk Emails

This guide will walk you through steps of sending a bulk email using the PHP library.

*Required Access Level: endHttp*

## What's a template?
When using Elastic Email you send emails to your contacts. One of options is to send bulk emails. Bulk email can be described as a single email message send to a large group at once.

### Let's dig into the code

Put the below code to your file.

Load library using below line:

```php
require_once(__DIR__ . '/vendor/autoload.php');
```

Generate and use your API key (remember to check a required access level): 

```php
define('MY_APIKEY', 'YOUR_API_KEY');
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', MY_APIKEY);
```

Create an instance of EmailsApi that will be used to send a bulk email.

```php
$apiInstance = new ElasticEmail\Api\EmailsApi(
    new GuzzleHttp\Client(),
    $config
);
```

First you need to specify email details:

email recipients:

this example demostrates merge fields usage, for each recipient {name} will be changed to recipient's name


email content:

body parts – in HTML, PlainText or in both
from email – it needs to be your validated email address
email subject

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/emailsPost

```php
$email_message_data = new \ElasticEmail\Model\EmailTransactionalMessageData([
    "recipients" => new \ElasticEmail\Model\TransactionalRecipient([
        "to" => ["email@domain.com, email2@domain.com, email3@domain.com"],
        "cc" => ["email4@domain.com, email5@domain.com"],
        "bcc" => ["email6@domain.com"]
    ]),
    "content" => new \ElasticEmail\Model\EmailContent([
        "body" => [new \ElasticEmail\Model\BodyPart([
                "content_type" => "HTML",
                "content" => "My test email content"
            ])
        ],
        "from" => "mail@contact.com",
        "subject" => "My Subject",
        "reply_to" => "mail@contact.com",
    ]),
    "options" => new \ElasticEmail\Model\Options([
        "channel_name" => "My Channel"
    ])
]);

$response = $apiInstance->emailsTransactionalPost($email_message_data);
```

## The whole code to copy and paste:

```php
require_once(__DIR__ . '/vendor/autoload.php');

define('MY_APIKEY', 'YOUR_API_KEY');

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', MY_APIKEY);

$apiInstance = new ElasticEmail\Api\EmailsApi(
    new GuzzleHttp\Client(),
    $config
);

$email_message_data = new \ElasticEmail\Model\EmailTransactionalMessageData([
    "recipients" => new \ElasticEmail\Model\TransactionalRecipient([
        "to" => ["email@domain.com, email2@domain.com, email3@domain.com"],
        "cc" => ["email4@domain.com, email5@domain.com"],
        "bcc" => ["email6@domain.com"]
    ]),
    "content" => new \ElasticEmail\Model\EmailContent([
        "body" => [new \ElasticEmail\Model\BodyPart([
                "content_type" => "HTML",
                "content" => "My test email content"
            ])
        ],
        "from" => "mail@contact.com",
        "subject" => "My Subject",
        "reply_to" => "mail@contact.com",
    ]),
    "options" => new \ElasticEmail\Model\Options([
        "channel_name" => "My Channel"
    ])
]);

try {
    $response = $apiInstance->emailsTransactionalPost($email_message_data);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsTransactionalPost: ', $e->getMessage(), PHP_EOL;
}
```
