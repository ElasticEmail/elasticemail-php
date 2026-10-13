<div align="center">

<img src=".github/ee-logo.png" alt="Elastic Email" width="96" />

# Elastic Email PHP SDK

The official PHP client library for the [Elastic Email](https://elasticemail.com) REST API v4.

[![Packagist](https://img.shields.io/packagist/v/elasticemail/elasticemail-php?logo=packagist&logoColor=white&label=Packagist&color=F28D1A)](https://packagist.org/packages/elasticemail/elasticemail-php)
[![Packagist downloads](https://img.shields.io/packagist/dt/elasticemail/elasticemail-php?logo=packagist&logoColor=white&label=downloads&color=F28D1A)](https://packagist.org/packages/elasticemail/elasticemail-php/stats)
[![PHP](https://img.shields.io/badge/PHP-7.4%20%7C%208.x-777BB4?logo=php&logoColor=white)](https://www.php.net/supported-versions.php)
[![API](https://img.shields.io/badge/API-v4-0A7BBB)](https://elasticemail.com/developers/api-documentation/rest-api)
[![OpenAPI Generator](https://img.shields.io/badge/generated%20by-OpenAPI%20Generator-6BA539?logo=openapiinitiative&logoColor=white)](https://openapi-generator.tech)
[![License: MIT](https://img.shields.io/github/license/ElasticEmail/elasticemail-php?color=yellow)](LICENSE)

[![Latest release](https://img.shields.io/github/v/release/ElasticEmail/elasticemail-php?logo=github&label=release)](https://github.com/ElasticEmail/elasticemail-php/releases)
[![Last commit](https://img.shields.io/github/last-commit/ElasticEmail/elasticemail-php?logo=github)](https://github.com/ElasticEmail/elasticemail-php/commits/master)
[![Open issues](https://img.shields.io/github/issues/ElasticEmail/elasticemail-php?logo=github)](https://github.com/ElasticEmail/elasticemail-php/issues)
[![GitHub stars](https://img.shields.io/github/stars/ElasticEmail/elasticemail-php?style=flat&logo=github)](https://github.com/ElasticEmail/elasticemail-php/stargazers)

[Installation](#installation) •
[Quick start](#quick-start) •
[Examples](#more-examples) •
[API reference](#api-reference) •
[Models](#models) •
[Contributing](#contributing)

</div>

---

## Features

- **Transactional and bulk email.** Send single messages, bulk campaigns or CSV merge-file sends.
- **Contacts, lists and segments.** Add, update, import, export and bulk-delete contacts.
- **Campaigns and automations.** Create, update, pause and trigger automations for a contact.
- **Templates, files and attachments.** Manage templates and uploaded files.
- **Domains.** Verify sending domains and check SPF, DKIM, tracking and certificate status.
- **Webhooks and inbound routes.** Receive delivery events and route incoming mail.
- **Statistics, events and suppressions.** Track delivery, bounces, complaints and unsubscribes.
- **Subaccounts and security.** Manage subaccounts and API keys.
- **Sync and async.** Every endpoint has a blocking method and an `…Async` method that returns a Guzzle promise.

## Requirements

| Requirement | Version |
| --- | --- |
| PHP | 7.4 or later (PHP 8.x supported) |
| Extensions | `curl`, `json`, `mbstring` |
| HTTP client | [Guzzle](https://github.com/guzzle/guzzle) 7.3 or later |

You'll also need an Elastic Email **API key**. You can create one in your [API settings](https://app.elasticemail.com/marketing/settings/new/manage-api). Each endpoint's documentation lists the access level it needs.

## Installation

Install the [`elasticemail/elasticemail-php`](https://packagist.org/packages/elasticemail/elasticemail-php) package from Packagist with [Composer](https://getcomposer.org/):

```bash
composer require elasticemail/elasticemail-php
```

Or add it to your `composer.json`:

```json
{
  "require": {
    "elasticemail/elasticemail-php": "^4.3"
  }
}
```

Composer installs the dependencies ([guzzlehttp/guzzle](https://packagist.org/packages/guzzlehttp/guzzle) and [guzzlehttp/psr7](https://packagist.org/packages/guzzlehttp/psr7)) for you. Then load Composer's autoloader:

```php
require_once __DIR__ . '/vendor/autoload.php';
```

## Quick start

> [!IMPORTANT]
> Elastic Email only sends from verified domains. Before your first send, [verify your sending domain](https://help.elasticemail.com/en/articles/4934400-how-to-verify-your-domain) and use an address on that domain as the sender.

### Configure the client

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use ElasticEmail\Api\EmailsApi;
use ElasticEmail\ApiException;
use ElasticEmail\Configuration;
use ElasticEmail\Model;

$config = Configuration::getDefaultConfiguration()
    ->setApiKey('X-ElasticEmail-ApiKey', getenv('ELASTICEMAIL_API_KEY'));
```

> [!TIP]
> Keep your API key out of source code. Load it from an environment variable, a `.env` file kept out of version control or a secrets manager.

### Send a transactional email

```php
$emails = new EmailsApi(new GuzzleHttp\Client(), $config);

$message = new Model\EmailTransactionalMessageData([
    'recipients' => new Model\TransactionalRecipient([
        'to' => ['john.doe@example.com'],
    ]),
    'content' => new Model\EmailContent([
        'from' => 'My App <no-reply@yourdomain.com>',
        'subject' => 'Welcome aboard!',
        'body' => [
            new Model\BodyPart([
                'content_type' => Model\BodyContentType::HTML,
                'content' => '<h1>Hello!</h1><p>Thanks for signing up.</p>',
            ]),
            new Model\BodyPart([
                'content_type' => Model\BodyContentType::PLAIN_TEXT,
                'content' => 'Hello! Thanks for signing up.',
            ]),
        ],
    ]),
]);

try {
    $result = $emails->emailsTransactionalPost($message);
    echo "Sent. TransactionID: {$result->getTransactionId()}, MessageID: {$result->getMessageId()}", PHP_EOL;
} catch (ApiException $e) {
    echo "Elastic Email API error {$e->getCode()}: {$e->getMessage()}", PHP_EOL;
}
```

The `from` address must use a domain you've [verified in your Elastic Email account](https://help.elasticemail.com/en/articles/4934400-how-to-verify-your-domain).

### Send from a template with merge fields

```php
$message = new Model\EmailTransactionalMessageData([
    'recipients' => new Model\TransactionalRecipient([
        'to' => ['john.doe@example.com'],
    ]),
    'content' => new Model\EmailContent([
        'from' => 'My App <no-reply@yourdomain.com>',
        'template_name' => 'welcome-template',
        'merge' => ['firstname' => 'John'],
    ]),
]);

$emails->emailsTransactionalPost($message);
```

### Using a proxy

Pass any Guzzle options, such as a proxy or timeouts, to the HTTP client:

```php
$client = new GuzzleHttp\Client([
    'proxy' => 'http://myProxyUrl:80/',
    'timeout' => 600,
]);

$emails = new EmailsApi($client, $config);
```

## More examples

More complete, runnable samples are in the **[Elastic Email examples repository](https://github.com/ElasticEmail/elasticemail-examples)**. It covers transactional email, SMTP, webhooks, inbound email, contacts and serverless platforms across 20+ languages and frameworks.

- 🐘 [PHP examples](https://github.com/ElasticEmail/elasticemail-examples/tree/main/php-elasticemail-examples)
- 📂 [All examples](https://github.com/ElasticEmail/elasticemail-examples)

This repository also includes short snippets for common tasks in [`examples/functions`](examples/functions):

<details>
<summary><strong>Show snippets</strong></summary>

| Snippet | Description |
| --- | --- |
| [addBulkContacts](examples/functions/addBulkContacts.php) | [readme](examples/functions/addBulkContacts.md) |
| [addCampaign](examples/functions/addCampaign.php) | [readme](examples/functions/addCampaign.md) |
| [addList](examples/functions/addList.php) | [readme](examples/functions/addList.md) |
| [addSingleContact](examples/functions/addSingleContact.php) | [readme](examples/functions/addSingleContact.md) |
| [addTemplate](examples/functions/addTemplate.php) | [readme](examples/functions/addTemplate.md) |
| [deleteCampaign](examples/functions/deleteCampaign.php) | [readme](examples/functions/deleteCampaign.md) |
| [deleteContact](examples/functions/deleteContact.php) | [readme](examples/functions/deleteContact.md) |
| [deleteList](examples/functions/deleteList.php) | [readme](examples/functions/deleteList.md) |
| [exportContacts](examples/functions/exportContacts.php) | [readme](examples/functions/exportContacts.md) |
| [loadCampaign](examples/functions/loadCampaign.php) | [readme](examples/functions/loadCampaign.md) |
| [loadCampaigns](examples/functions/loadCampaigns.php) | [readme](examples/functions/loadCampaigns.md) |
| [loadCampaignsStats](examples/functions/loadCampaignsStats.php) | [readme](examples/functions/loadCampaignsStats.md) |
| [loadChannelsStats](examples/functions/loadChannelsStats.php) | [readme](examples/functions/loadChannelsStats.md) |
| [loadList](examples/functions/loadList.php) | [readme](examples/functions/loadList.md) |
| [loadStatistics](examples/functions/loadStatistics.php) | [readme](examples/functions/loadStatistics.md) |
| [loadTemplate](examples/functions/loadTemplate.php) | [readme](examples/functions/loadTemplate.md) |
| [sendBulkEmails](examples/functions/sendBulkEmails.php) | [readme](examples/functions/sendBulkEmails.md) |
| [sendTransactionalEmails](examples/functions/sendTransactionalEmails.php) | [readme](examples/functions/sendTransactionalEmails.md) |
| [updateCampaign](examples/functions/updateCampaign.php) | [readme](examples/functions/updateCampaign.md) |

</details>

## Authentication

| Scheme | Header | Used for |
| --- | --- | --- |
| `apikey` | `X-ElasticEmail-ApiKey` | All standard API calls |
| `ApiKeyAuthCustomBranding` | `X-Auth-Token` | Custom-branding (white-label) accounts |

## API limits

- Up to **20 concurrent connections** per account
- A hard timeout of **600 seconds** per request

## API reference

All URIs are relative to `https://api.elasticemail.com/v4`. The SDK covers **115 endpoints** across 16 API classes: `CampaignsApi`, `ContactsApi`, `DomainsApi`, `EmailsApi`, `EventsApi`, `FilesApi`, `InboundRouteApi`, `ListsApi`, `SecurityApi`, `SegmentsApi`, `StatisticsApi`, `SubAccountsApi`, `SuppressionsApi`, `TemplatesApi`, `VerificationsApi` and `WebhookApi`.

<details>
<summary><strong>Show all endpoints</strong></summary>

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CampaignsApi* | [**campaignsAutomationByNameTriggerPost**](docs/Api/CampaignsApi.md#campaignsautomationbynametriggerpost) | **POST** /campaigns/automation/{name}/trigger | Trigger Automation for Contact
*CampaignsApi* | [**campaignsByNameDelete**](docs/Api/CampaignsApi.md#campaignsbynamedelete) | **DELETE** /campaigns/{name} | Delete Campaign
*CampaignsApi* | [**campaignsByNameGet**](docs/Api/CampaignsApi.md#campaignsbynameget) | **GET** /campaigns/{name} | Load Campaign
*CampaignsApi* | [**campaignsByNamePausePut**](docs/Api/CampaignsApi.md#campaignsbynamepauseput) | **PUT** /campaigns/{name}/pause | Pause Campaign
*CampaignsApi* | [**campaignsByNamePut**](docs/Api/CampaignsApi.md#campaignsbynameput) | **PUT** /campaigns/{name} | Update Campaign
*CampaignsApi* | [**campaignsGet**](docs/Api/CampaignsApi.md#campaignsget) | **GET** /campaigns | Load Campaigns
*CampaignsApi* | [**campaignsPost**](docs/Api/CampaignsApi.md#campaignspost) | **POST** /campaigns | Add Campaign
*ContactsApi* | [**contactsByEmailDelete**](docs/Api/ContactsApi.md#contactsbyemaildelete) | **DELETE** /contacts/{email} | Delete Contact
*ContactsApi* | [**contactsByEmailGet**](docs/Api/ContactsApi.md#contactsbyemailget) | **GET** /contacts/{email} | Load Contact
*ContactsApi* | [**contactsByEmailPut**](docs/Api/ContactsApi.md#contactsbyemailput) | **PUT** /contacts/{email} | Update Contact
*ContactsApi* | [**contactsDeletePost**](docs/Api/ContactsApi.md#contactsdeletepost) | **POST** /contacts/delete | Delete Contacts Bulk
*ContactsApi* | [**contactsExportByIdStatusGet**](docs/Api/ContactsApi.md#contactsexportbyidstatusget) | **GET** /contacts/export/{id}/status | Check Export Status
*ContactsApi* | [**contactsExportPost**](docs/Api/ContactsApi.md#contactsexportpost) | **POST** /contacts/export | Export Contacts
*ContactsApi* | [**contactsGet**](docs/Api/ContactsApi.md#contactsget) | **GET** /contacts | Load Contacts
*ContactsApi* | [**contactsImportPost**](docs/Api/ContactsApi.md#contactsimportpost) | **POST** /contacts/import | Upload Contacts
*ContactsApi* | [**contactsPost**](docs/Api/ContactsApi.md#contactspost) | **POST** /contacts | Add Contact
*DomainsApi* | [**domainsByDomainDelete**](docs/Api/DomainsApi.md#domainsbydomaindelete) | **DELETE** /domains/{domain} | Delete Domain
*DomainsApi* | [**domainsByDomainGet**](docs/Api/DomainsApi.md#domainsbydomainget) | **GET** /domains/{domain} | Load Domain
*DomainsApi* | [**domainsByDomainPut**](docs/Api/DomainsApi.md#domainsbydomainput) | **PUT** /domains/{domain} | Update Domain
*DomainsApi* | [**domainsByDomainRestrictedGet**](docs/Api/DomainsApi.md#domainsbydomainrestrictedget) | **GET** /domains/{domain}/restricted | Check for domain restriction
*DomainsApi* | [**domainsByDomainVerificationPut**](docs/Api/DomainsApi.md#domainsbydomainverificationput) | **PUT** /domains/{domain}/verification | Verify Domain
*DomainsApi* | [**domainsByEmailDefaultPatch**](docs/Api/DomainsApi.md#domainsbyemaildefaultpatch) | **PATCH** /domains/{email}/default | Set Default
*DomainsApi* | [**domainsGet**](docs/Api/DomainsApi.md#domainsget) | **GET** /domains | Load Domains
*DomainsApi* | [**domainsPost**](docs/Api/DomainsApi.md#domainspost) | **POST** /domains | Add Domain
*EmailsApi* | [**emailsByMsgidViewGet**](docs/Api/EmailsApi.md#emailsbymsgidviewget) | **GET** /emails/{msgid}/view | View Email
*EmailsApi* | [**emailsByTransactionidStatusGet**](docs/Api/EmailsApi.md#emailsbytransactionidstatusget) | **GET** /emails/{transactionid}/status | Get Status
*EmailsApi* | [**emailsMergefilePost**](docs/Api/EmailsApi.md#emailsmergefilepost) | **POST** /emails/mergefile | Send Bulk Emails CSV
*EmailsApi* | [**emailsPost**](docs/Api/EmailsApi.md#emailspost) | **POST** /emails | Send Bulk Emails
*EmailsApi* | [**emailsTransactionalPost**](docs/Api/EmailsApi.md#emailstransactionalpost) | **POST** /emails/transactional | Send Transactional Email
*EventsApi* | [**eventsByTransactionidGet**](docs/Api/EventsApi.md#eventsbytransactionidget) | **GET** /events/{transactionid} | Load Email Events
*EventsApi* | [**eventsChannelsByNameExportPost**](docs/Api/EventsApi.md#eventschannelsbynameexportpost) | **POST** /events/channels/{name}/export | Export Channel Events
*EventsApi* | [**eventsChannelsByNameGet**](docs/Api/EventsApi.md#eventschannelsbynameget) | **GET** /events/channels/{name} | Load Channel Events
*EventsApi* | [**eventsChannelsExportByIdStatusGet**](docs/Api/EventsApi.md#eventschannelsexportbyidstatusget) | **GET** /events/channels/export/{id}/status | Check Channel Export Status
*EventsApi* | [**eventsExportByIdStatusGet**](docs/Api/EventsApi.md#eventsexportbyidstatusget) | **GET** /events/export/{id}/status | Check Export Status
*EventsApi* | [**eventsExportPost**](docs/Api/EventsApi.md#eventsexportpost) | **POST** /events/export | Export Events
*EventsApi* | [**eventsGet**](docs/Api/EventsApi.md#eventsget) | **GET** /events | Load Events
*FilesApi* | [**filesByNameDelete**](docs/Api/FilesApi.md#filesbynamedelete) | **DELETE** /files/{name} | Delete File
*FilesApi* | [**filesByNameGet**](docs/Api/FilesApi.md#filesbynameget) | **GET** /files/{name} | Download File
*FilesApi* | [**filesByNameInfoGet**](docs/Api/FilesApi.md#filesbynameinfoget) | **GET** /files/{name}/info | Load File Details
*FilesApi* | [**filesGet**](docs/Api/FilesApi.md#filesget) | **GET** /files | List Files
*FilesApi* | [**filesPost**](docs/Api/FilesApi.md#filespost) | **POST** /files | Upload File
*InboundRouteApi* | [**inboundrouteByIdDelete**](docs/Api/InboundRouteApi.md#inboundroutebyiddelete) | **DELETE** /inboundroute/{id} | Delete Route
*InboundRouteApi* | [**inboundrouteByIdGet**](docs/Api/InboundRouteApi.md#inboundroutebyidget) | **GET** /inboundroute/{id} | Get Route
*InboundRouteApi* | [**inboundrouteByIdPut**](docs/Api/InboundRouteApi.md#inboundroutebyidput) | **PUT** /inboundroute/{id} | Update Route
*InboundRouteApi* | [**inboundrouteGet**](docs/Api/InboundRouteApi.md#inboundrouteget) | **GET** /inboundroute | Get Routes
*InboundRouteApi* | [**inboundrouteOrderPut**](docs/Api/InboundRouteApi.md#inboundrouteorderput) | **PUT** /inboundroute/order | Update Sorting
*InboundRouteApi* | [**inboundroutePost**](docs/Api/InboundRouteApi.md#inboundroutepost) | **POST** /inboundroute | Create Route
*ListsApi* | [**listsByListnameContactsGet**](docs/Api/ListsApi.md#listsbylistnamecontactsget) | **GET** /lists/{listname}/contacts | Load Contacts in List
*ListsApi* | [**listsByNameContactsPost**](docs/Api/ListsApi.md#listsbynamecontactspost) | **POST** /lists/{name}/contacts | Add Contacts to List
*ListsApi* | [**listsByNameContactsRemovePost**](docs/Api/ListsApi.md#listsbynamecontactsremovepost) | **POST** /lists/{name}/contacts/remove | Remove Contacts from List
*ListsApi* | [**listsByNameDelete**](docs/Api/ListsApi.md#listsbynamedelete) | **DELETE** /lists/{name} | Delete List
*ListsApi* | [**listsByNameGet**](docs/Api/ListsApi.md#listsbynameget) | **GET** /lists/{name} | Load List
*ListsApi* | [**listsByNamePut**](docs/Api/ListsApi.md#listsbynameput) | **PUT** /lists/{name} | Update List
*ListsApi* | [**listsGet**](docs/Api/ListsApi.md#listsget) | **GET** /lists | Load Lists
*ListsApi* | [**listsPost**](docs/Api/ListsApi.md#listspost) | **POST** /lists | Add List
*SecurityApi* | [**securityApikeysByNameDelete**](docs/Api/SecurityApi.md#securityapikeysbynamedelete) | **DELETE** /security/apikeys/{name} | Delete ApiKey
*SecurityApi* | [**securityApikeysByNameGet**](docs/Api/SecurityApi.md#securityapikeysbynameget) | **GET** /security/apikeys/{name} | Load ApiKey
*SecurityApi* | [**securityApikeysByNamePut**](docs/Api/SecurityApi.md#securityapikeysbynameput) | **PUT** /security/apikeys/{name} | Update ApiKey
*SecurityApi* | [**securityApikeysGet**](docs/Api/SecurityApi.md#securityapikeysget) | **GET** /security/apikeys | List ApiKeys
*SecurityApi* | [**securityApikeysPost**](docs/Api/SecurityApi.md#securityapikeyspost) | **POST** /security/apikeys | Add ApiKey
*SecurityApi* | [**securitySmtpByNameDelete**](docs/Api/SecurityApi.md#securitysmtpbynamedelete) | **DELETE** /security/smtp/{name} | Delete SMTP Credential
*SecurityApi* | [**securitySmtpByNameGet**](docs/Api/SecurityApi.md#securitysmtpbynameget) | **GET** /security/smtp/{name} | Load SMTP Credential
*SecurityApi* | [**securitySmtpByNamePut**](docs/Api/SecurityApi.md#securitysmtpbynameput) | **PUT** /security/smtp/{name} | Update SMTP Credential
*SecurityApi* | [**securitySmtpGet**](docs/Api/SecurityApi.md#securitysmtpget) | **GET** /security/smtp | List SMTP Credentials
*SecurityApi* | [**securitySmtpPost**](docs/Api/SecurityApi.md#securitysmtppost) | **POST** /security/smtp | Add SMTP Credential
*SegmentsApi* | [**segmentsByNameDelete**](docs/Api/SegmentsApi.md#segmentsbynamedelete) | **DELETE** /segments/{name} | Delete Segment
*SegmentsApi* | [**segmentsByNameGet**](docs/Api/SegmentsApi.md#segmentsbynameget) | **GET** /segments/{name} | Load Segment
*SegmentsApi* | [**segmentsByNamePut**](docs/Api/SegmentsApi.md#segmentsbynameput) | **PUT** /segments/{name} | Update Segment
*SegmentsApi* | [**segmentsGet**](docs/Api/SegmentsApi.md#segmentsget) | **GET** /segments | Load Segments
*SegmentsApi* | [**segmentsPost**](docs/Api/SegmentsApi.md#segmentspost) | **POST** /segments | Add Segment
*StatisticsApi* | [**statisticsCampaignsByNameGet**](docs/Api/StatisticsApi.md#statisticscampaignsbynameget) | **GET** /statistics/campaigns/{name} | Load Campaign Stats
*StatisticsApi* | [**statisticsCampaignsGet**](docs/Api/StatisticsApi.md#statisticscampaignsget) | **GET** /statistics/campaigns | Load Campaigns Stats
*StatisticsApi* | [**statisticsChannelsByNameGet**](docs/Api/StatisticsApi.md#statisticschannelsbynameget) | **GET** /statistics/channels/{name} | Load Channel Stats
*StatisticsApi* | [**statisticsChannelsGet**](docs/Api/StatisticsApi.md#statisticschannelsget) | **GET** /statistics/channels | Load Channels Stats
*StatisticsApi* | [**statisticsGet**](docs/Api/StatisticsApi.md#statisticsget) | **GET** /statistics | Load Statistics
*SubAccountsApi* | [**subaccountsByEmailApikeyGet**](docs/Api/SubAccountsApi.md#subaccountsbyemailapikeyget) | **GET** /subaccounts/{email}/apikey | Get SubAccount ApiKey
*SubAccountsApi* | [**subaccountsByEmailCreditsPatch**](docs/Api/SubAccountsApi.md#subaccountsbyemailcreditspatch) | **PATCH** /subaccounts/{email}/credits | Add, Subtract Email Credits
*SubAccountsApi* | [**subaccountsByEmailDelete**](docs/Api/SubAccountsApi.md#subaccountsbyemaildelete) | **DELETE** /subaccounts/{email} | Delete SubAccount
*SubAccountsApi* | [**subaccountsByEmailGet**](docs/Api/SubAccountsApi.md#subaccountsbyemailget) | **GET** /subaccounts/{email} | Load SubAccount
*SubAccountsApi* | [**subaccountsByEmailSettingsEmailPut**](docs/Api/SubAccountsApi.md#subaccountsbyemailsettingsemailput) | **PUT** /subaccounts/{email}/settings/email | Update SubAccount Email Settings
*SubAccountsApi* | [**subaccountsGet**](docs/Api/SubAccountsApi.md#subaccountsget) | **GET** /subaccounts | Load SubAccounts
*SubAccountsApi* | [**subaccountsPost**](docs/Api/SubAccountsApi.md#subaccountspost) | **POST** /subaccounts | Add SubAccount
*SuppressionsApi* | [**suppressionsBouncesGet**](docs/Api/SuppressionsApi.md#suppressionsbouncesget) | **GET** /suppressions/bounces | Get Bounce List
*SuppressionsApi* | [**suppressionsBouncesImportPost**](docs/Api/SuppressionsApi.md#suppressionsbouncesimportpost) | **POST** /suppressions/bounces/import | Add Bounces Async
*SuppressionsApi* | [**suppressionsBouncesPost**](docs/Api/SuppressionsApi.md#suppressionsbouncespost) | **POST** /suppressions/bounces | Add Bounces
*SuppressionsApi* | [**suppressionsByEmailDelete**](docs/Api/SuppressionsApi.md#suppressionsbyemaildelete) | **DELETE** /suppressions/{email} | Delete Suppression
*SuppressionsApi* | [**suppressionsByEmailGet**](docs/Api/SuppressionsApi.md#suppressionsbyemailget) | **GET** /suppressions/{email} | Get Suppression
*SuppressionsApi* | [**suppressionsComplaintsGet**](docs/Api/SuppressionsApi.md#suppressionscomplaintsget) | **GET** /suppressions/complaints | Get Complaints List
*SuppressionsApi* | [**suppressionsComplaintsImportPost**](docs/Api/SuppressionsApi.md#suppressionscomplaintsimportpost) | **POST** /suppressions/complaints/import | Add Complaints Async
*SuppressionsApi* | [**suppressionsComplaintsPost**](docs/Api/SuppressionsApi.md#suppressionscomplaintspost) | **POST** /suppressions/complaints | Add Complaints
*SuppressionsApi* | [**suppressionsGet**](docs/Api/SuppressionsApi.md#suppressionsget) | **GET** /suppressions | Get Suppressions
*SuppressionsApi* | [**suppressionsUnsubscribesGet**](docs/Api/SuppressionsApi.md#suppressionsunsubscribesget) | **GET** /suppressions/unsubscribes | Get Unsubscribes List
*SuppressionsApi* | [**suppressionsUnsubscribesImportPost**](docs/Api/SuppressionsApi.md#suppressionsunsubscribesimportpost) | **POST** /suppressions/unsubscribes/import | Add Unsubscribes Async
*SuppressionsApi* | [**suppressionsUnsubscribesPost**](docs/Api/SuppressionsApi.md#suppressionsunsubscribespost) | **POST** /suppressions/unsubscribes | Add Unsubscribes
*TemplatesApi* | [**templatesByNameDelete**](docs/Api/TemplatesApi.md#templatesbynamedelete) | **DELETE** /templates/{name} | Delete Template
*TemplatesApi* | [**templatesByNameGet**](docs/Api/TemplatesApi.md#templatesbynameget) | **GET** /templates/{name} | Load Template
*TemplatesApi* | [**templatesByNamePut**](docs/Api/TemplatesApi.md#templatesbynameput) | **PUT** /templates/{name} | Update Template
*TemplatesApi* | [**templatesGet**](docs/Api/TemplatesApi.md#templatesget) | **GET** /templates | Load Templates
*TemplatesApi* | [**templatesPost**](docs/Api/TemplatesApi.md#templatespost) | **POST** /templates | Add Template
*VerificationsApi* | [**verificationsByEmailDelete**](docs/Api/VerificationsApi.md#verificationsbyemaildelete) | **DELETE** /verifications/{email} | Delete Email Verification Result
*VerificationsApi* | [**verificationsByEmailGet**](docs/Api/VerificationsApi.md#verificationsbyemailget) | **GET** /verifications/{email} | Get Email Verification Result
*VerificationsApi* | [**verificationsByEmailPost**](docs/Api/VerificationsApi.md#verificationsbyemailpost) | **POST** /verifications/{email} | Verify Email
*VerificationsApi* | [**verificationsFilesByIdDelete**](docs/Api/VerificationsApi.md#verificationsfilesbyiddelete) | **DELETE** /verifications/files/{id} | Delete File Verification Result
*VerificationsApi* | [**verificationsFilesByIdResultDownloadGet**](docs/Api/VerificationsApi.md#verificationsfilesbyidresultdownloadget) | **GET** /verifications/files/{id}/result/download | Download File Verification Result
*VerificationsApi* | [**verificationsFilesByIdResultGet**](docs/Api/VerificationsApi.md#verificationsfilesbyidresultget) | **GET** /verifications/files/{id}/result | Get Detailed File Verification Result
*VerificationsApi* | [**verificationsFilesByIdVerificationPost**](docs/Api/VerificationsApi.md#verificationsfilesbyidverificationpost) | **POST** /verifications/files/{id}/verification | Start verification
*VerificationsApi* | [**verificationsFilesPost**](docs/Api/VerificationsApi.md#verificationsfilespost) | **POST** /verifications/files | Upload File with Emails
*VerificationsApi* | [**verificationsFilesResultGet**](docs/Api/VerificationsApi.md#verificationsfilesresultget) | **GET** /verifications/files/result | Get Files Verification Results
*VerificationsApi* | [**verificationsGet**](docs/Api/VerificationsApi.md#verificationsget) | **GET** /verifications | Get Emails Verification Results
*WebhookApi* | [**webhookByPublicidDelete**](docs/Api/WebhookApi.md#webhookbypubliciddelete) | **DELETE** /webhook/{publicid} | Delete Webhook
*WebhookApi* | [**webhookByPublicidGet**](docs/Api/WebhookApi.md#webhookbypublicidget) | **GET** /webhook/{publicid} | Load Webhook
*WebhookApi* | [**webhookByPublicidPut**](docs/Api/WebhookApi.md#webhookbypublicidput) | **PUT** /webhook/{publicid} | Update Webhook
*WebhookApi* | [**webhookByPublicidSecretRotatePost**](docs/Api/WebhookApi.md#webhookbypublicidsecretrotatepost) | **POST** /webhook/{publicid}/secret/rotate | Rotate Webhook Secret
*WebhookApi* | [**webhookGet**](docs/Api/WebhookApi.md#webhookget) | **GET** /webhook | Load Webhooks
*WebhookApi* | [**webhookPost**](docs/Api/WebhookApi.md#webhookpost) | **POST** /webhook | Add Webhook

</details>

## Models

<details>
<summary><strong>Show all 98 models</strong></summary>

- [AccessLevel](docs/Model/AccessLevel.md)
- [AccountStatusEnum](docs/Model/AccountStatusEnum.md)
- [ApiKey](docs/Model/ApiKey.md)
- [ApiKeyPayload](docs/Model/ApiKeyPayload.md)
- [BodyContentType](docs/Model/BodyContentType.md)
- [BodyPart](docs/Model/BodyPart.md)
- [Campaign](docs/Model/Campaign.md)
- [CampaignOptions](docs/Model/CampaignOptions.md)
- [CampaignRecipient](docs/Model/CampaignRecipient.md)
- [CampaignStatus](docs/Model/CampaignStatus.md)
- [CampaignTemplate](docs/Model/CampaignTemplate.md)
- [CertificateValidationStatus](docs/Model/CertificateValidationStatus.md)
- [ChannelLogStatusSummary](docs/Model/ChannelLogStatusSummary.md)
- [CompressionFormat](docs/Model/CompressionFormat.md)
- [ConsentData](docs/Model/ConsentData.md)
- [ConsentTracking](docs/Model/ConsentTracking.md)
- [Contact](docs/Model/Contact.md)
- [ContactActivity](docs/Model/ContactActivity.md)
- [ContactPayload](docs/Model/ContactPayload.md)
- [ContactSource](docs/Model/ContactSource.md)
- [ContactStatus](docs/Model/ContactStatus.md)
- [ContactUpdatePayload](docs/Model/ContactUpdatePayload.md)
- [ContactsList](docs/Model/ContactsList.md)
- [DKIMRecord](docs/Model/DKIMRecord.md)
- [DeliveryOptimizationType](docs/Model/DeliveryOptimizationType.md)
- [DomainData](docs/Model/DomainData.md)
- [DomainDetail](docs/Model/DomainDetail.md)
- [DomainOwner](docs/Model/DomainOwner.md)
- [DomainPayload](docs/Model/DomainPayload.md)
- [DomainUpdatePayload](docs/Model/DomainUpdatePayload.md)
- [EmailContent](docs/Model/EmailContent.md)
- [EmailData](docs/Model/EmailData.md)
- [EmailJobFailedStatus](docs/Model/EmailJobFailedStatus.md)
- [EmailJobStatus](docs/Model/EmailJobStatus.md)
- [EmailMessageData](docs/Model/EmailMessageData.md)
- [EmailPredictedValidationStatus](docs/Model/EmailPredictedValidationStatus.md)
- [EmailRecipient](docs/Model/EmailRecipient.md)
- [EmailSend](docs/Model/EmailSend.md)
- [EmailStatus](docs/Model/EmailStatus.md)
- [EmailTransactionalMessageData](docs/Model/EmailTransactionalMessageData.md)
- [EmailValidationResult](docs/Model/EmailValidationResult.md)
- [EmailValidationStatus](docs/Model/EmailValidationStatus.md)
- [EmailView](docs/Model/EmailView.md)
- [EmailsPayload](docs/Model/EmailsPayload.md)
- [EncodingType](docs/Model/EncodingType.md)
- [EventType](docs/Model/EventType.md)
- [EventsOrderBy](docs/Model/EventsOrderBy.md)
- [ExportFileFormats](docs/Model/ExportFileFormats.md)
- [ExportLink](docs/Model/ExportLink.md)
- [ExportStatus](docs/Model/ExportStatus.md)
- [FileInfo](docs/Model/FileInfo.md)
- [FilePayload](docs/Model/FilePayload.md)
- [FileUploadResult](docs/Model/FileUploadResult.md)
- [InboundPayload](docs/Model/InboundPayload.md)
- [InboundRoute](docs/Model/InboundRoute.md)
- [InboundRouteActionType](docs/Model/InboundRouteActionType.md)
- [InboundRouteFilterType](docs/Model/InboundRouteFilterType.md)
- [ListPayload](docs/Model/ListPayload.md)
- [ListUpdatePayload](docs/Model/ListUpdatePayload.md)
- [LogJobStatus](docs/Model/LogJobStatus.md)
- [LogStatusSummary](docs/Model/LogStatusSummary.md)
- [MergeEmailPayload](docs/Model/MergeEmailPayload.md)
- [MessageAttachment](docs/Model/MessageAttachment.md)
- [MessageCategory](docs/Model/MessageCategory.md)
- [MessageCategoryEnum](docs/Model/MessageCategoryEnum.md)
- [NewApiKey](docs/Model/NewApiKey.md)
- [NewSmtpCredentials](docs/Model/NewSmtpCredentials.md)
- [Options](docs/Model/Options.md)
- [RecipientEvent](docs/Model/RecipientEvent.md)
- [Segment](docs/Model/Segment.md)
- [SegmentPayload](docs/Model/SegmentPayload.md)
- [SmtpCredentials](docs/Model/SmtpCredentials.md)
- [SmtpCredentialsPayload](docs/Model/SmtpCredentialsPayload.md)
- [SortOrderItem](docs/Model/SortOrderItem.md)
- [SplitOptimizationType](docs/Model/SplitOptimizationType.md)
- [SplitOptions](docs/Model/SplitOptions.md)
- [SubAccountInfo](docs/Model/SubAccountInfo.md)
- [SubaccountEmailCreditsPayload](docs/Model/SubaccountEmailCreditsPayload.md)
- [SubaccountEmailSettings](docs/Model/SubaccountEmailSettings.md)
- [SubaccountEmailSettingsPayload](docs/Model/SubaccountEmailSettingsPayload.md)
- [SubaccountPayload](docs/Model/SubaccountPayload.md)
- [SubaccountSettingsInfo](docs/Model/SubaccountSettingsInfo.md)
- [SubaccountSettingsInfoPayload](docs/Model/SubaccountSettingsInfoPayload.md)
- [Suppression](docs/Model/Suppression.md)
- [Template](docs/Model/Template.md)
- [TemplatePayload](docs/Model/TemplatePayload.md)
- [TemplateScope](docs/Model/TemplateScope.md)
- [TemplateType](docs/Model/TemplateType.md)
- [TrackingType](docs/Model/TrackingType.md)
- [TrackingValidationStatus](docs/Model/TrackingValidationStatus.md)
- [TransactionalRecipient](docs/Model/TransactionalRecipient.md)
- [Utm](docs/Model/Utm.md)
- [VerificationFileResult](docs/Model/VerificationFileResult.md)
- [VerificationFileResultDetails](docs/Model/VerificationFileResultDetails.md)
- [VerificationStatus](docs/Model/VerificationStatus.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookCreatePayload](docs/Model/WebhookCreatePayload.md)
- [WebhookDeliveryMethod](docs/Model/WebhookDeliveryMethod.md)
- [WebhookUpdatePayload](docs/Model/WebhookUpdatePayload.md)

</details>

## Tests

```bash
composer install
vendor/bin/phpunit
```

## Versioning

The SDK follows the Elastic Email API v4. Package versions and release notes are listed on [Packagist](https://packagist.org/packages/elasticemail/elasticemail-php) and in [GitHub Releases](https://github.com/ElasticEmail/elasticemail-php/releases).

<details>
<summary>Build details</summary>

- API version: 4.0.0
- SDK version: 4.3.0
- Generator version: 7.11.0
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

</details>

## Contributing

Contributions are welcome! Most of this SDK is generated from the Elastic Email OpenAPI specification by [OpenAPI Generator](https://openapi-generator.tech), so please read [CONTRIBUTING.md](CONTRIBUTING.md) before opening a pull request.

- 🐛 [Report a bug](https://github.com/ElasticEmail/elasticemail-php/issues/new?template=bug_report.md)
- 💡 [Request a feature](https://github.com/ElasticEmail/elasticemail-php/issues/new?template=feature_request.md)
- 🔒 [Report a security issue](SECURITY.md)

This project follows the [Contributor Covenant Code of Conduct](CODE_OF_CONDUCT.md).

## Support

> [!IMPORTANT]
> The fastest way to get help is the **chat widget on [elasticemail.com](https://elasticemail.com)**. Our support team can help with your account, sending, deliverability and API questions.

- 💬 [Chat with support on elasticemail.com](https://elasticemail.com) (preferred)
- 📚 [API documentation](https://elasticemail.com/developers/api-documentation/rest-api)
- 🧪 [Examples repository](https://github.com/ElasticEmail/elasticemail-examples)
- 🐛 [GitHub issues](https://github.com/ElasticEmail/elasticemail-php/issues), for bugs in this SDK only

## License

Released under the [MIT License](LICENSE). Copyright © 2021–2026 Elastic Email.
