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

Read your API key from the `ELASTICEMAIL_API_KEY` environment variable (remember to check a required access level). Set it with `export ELASTICEMAIL_API_KEY=your-api-key` before you run the script; the script stops with an error if it is not set:

```php
$apiKey = getenv('ELASTICEMAIL_API_KEY');
if (!$apiKey) {
    throw new RuntimeException('Set the ELASTICEMAIL_API_KEY environment variable');
}
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', $apiKey);
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
        "body" => [
            new \ElasticEmail\Model\BodyPart([
                "content_type" => "HTML",
                "content" => "<strong>My test email content</strong>"
            ]),
            new \ElasticEmail\Model\BodyPart([
                "content_type" => "PlainText",
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
```

Create an idempotency key and pass it with the send, so the send can be retried after a timeout without delivering the email twice: a retry with the same key and the same message gets the stored response instead of sending again. The response carries the `TransactionID`:

```php
// One new key per send (a UUID v4); reuse it only to retry this same send with the same message.
$bytes = random_bytes(16);
$bytes[6] = chr(ord($bytes[6]) & 0x0f | 0x40);
$bytes[8] = chr(ord($bytes[8]) & 0x3f | 0x80);
$idempotencyKey = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($bytes), 4));

$response = $apiInstance->emailsTransactionalPost($email_message_data, $idempotencyKey);
```

## The whole code to copy and paste:

```php
require_once(__DIR__ . '/vendor/autoload.php');

$apiKey = getenv('ELASTICEMAIL_API_KEY');
if (!$apiKey) {
    throw new RuntimeException('Set the ELASTICEMAIL_API_KEY environment variable');
}

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', $apiKey);

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
        "body" => [
            new \ElasticEmail\Model\BodyPart([
                "content_type" => "HTML",
                "content" => "<strong>My test email content</strong>"
            ]),
            new \ElasticEmail\Model\BodyPart([
                "content_type" => "PlainText",
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

// One new key per send (a UUID v4); reuse it only to retry this same send with the same message.
$bytes = random_bytes(16);
$bytes[6] = chr(ord($bytes[6]) & 0x0f | 0x40);
$bytes[8] = chr(ord($bytes[8]) & 0x3f | 0x80);
$idempotencyKey = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($bytes), 4));

try {
    $response = $apiInstance->emailsTransactionalPost($email_message_data, $idempotencyKey);
    echo 'TransactionID: ', $response->getTransactionId(), '  Idempotency-Key: ', $idempotencyKey, PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsTransactionalPost: ', $e->getMessage(), PHP_EOL;
}
```
