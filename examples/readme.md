## PHP Snippets

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/elasticemail/elasticemail-php.git"
    }
  ],
  "require": {
    "elasticemail/elasticemail-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/ElasticEmail/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apikey
$apiKey = getenv('ELASTICEMAIL_API_KEY');
if (!$apiKey) {
    throw new RuntimeException('Set the ELASTICEMAIL_API_KEY environment variable');
}
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', $apiKey);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of Campaign to delete

try {
    $apiInstance->campaignsByNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsByNameDelete: ', $e->getMessage(), PHP_EOL;
}

```

## Running a snippet

Every snippet reads your API key from the `ELASTICEMAIL_API_KEY` environment variable and stops with an error if it is not set. Put the snippet next to your `vendor/` folder (it loads `vendor/autoload.php` from its own directory), replace the sender, recipient and other placeholder values, then run it:

```bash
export ELASTICEMAIL_API_KEY=your-api-key
php deleteContact.php
```

## Snippets

| Snippet | Description |
| --- | --- |
| [addBulkContacts](functions/addBulkContacts.php) | [readme](functions/addBulkContacts.md) |
| [addCampaign](functions/addCampaign.php) | [readme](functions/addCampaign.md) |
| [addList](functions/addList.php) | [readme](functions/addList.md) |
| [addSingleContact](functions/addSingleContact.php) | [readme](functions/addSingleContact.md) |
| [addTemplate](functions/addTemplate.php) | [readme](functions/addTemplate.md) |
| [deleteCampaign](functions/deleteCampaign.php) | [readme](functions/deleteCampaign.md) |
| [deleteContact](functions/deleteContact.php) | [readme](functions/deleteContact.md) |
| [deleteContacts](functions/deleteContacts.php) | [readme](functions/deleteContacts.md) |
| [deleteList](functions/deleteList.php) | [readme](functions/deleteList.md) |
| [deleteTemplate](functions/deleteTemplate.php) | [readme](functions/deleteTemplate.md) |
| [exportContacts](functions/exportContacts.php) | [readme](functions/exportContacts.md) |
| [loadCampaign](functions/loadCampaign.php) | [readme](functions/loadCampaign.md) |
| [loadCampaigns](functions/loadCampaigns.php) | [readme](functions/loadCampaigns.md) |
| [loadCampaignsStats](functions/loadCampaignsStats.php) | [readme](functions/loadCampaignsStats.md) |
| [loadChannelsStats](functions/loadChannelsStats.php) | [readme](functions/loadChannelsStats.md) |
| [loadList](functions/loadList.php) | [readme](functions/loadList.md) |
| [loadStatistics](functions/loadStatistics.php) | [readme](functions/loadStatistics.md) |
| [loadTemplate](functions/loadTemplate.php) | [readme](functions/loadTemplate.md) |
| [sendBulkEmails](functions/sendBulkEmails.php) | [readme](functions/sendBulkEmails.md) |
| [sendTransactionalEmails](functions/sendTransactionalEmails.php) | [readme](functions/sendTransactionalEmails.md) |
| [updateCampaign](functions/updateCampaign.php) | [readme](functions/updateCampaign.md) |
| [uploadContacts](functions/uploadContacts.php) | [readme](functions/uploadContacts.md) |
