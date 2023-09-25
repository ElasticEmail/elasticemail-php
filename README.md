# ElasticEmail

This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.

Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.

The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.

To start using this API, you will need your Access Token (available [here](https://app.elasticemail.com/marketing/settings/new/manage-api)). Remember to keep it safe. Required access levels are listed in the given request’s description.

Downloadable library clients can be found in our Github repository [here](https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

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
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
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


## Examples

Function ||
------------ | ------------- 
[addCampaign](examples/functions/addCampaign.php) | [readme](examples/functions/addCampaign.md)
[addBulkContacts](examples/functions/addBulkContacts.php) | [readme](examples/functions/addBulkContacts.md)
[addSingleContact](examples/functions/addSingleContact.php) | [readme](examples/functions/addSingleContact.md)
[addList](examples/functions/addList.php) | [readme](examples/functions/addList.md)
[addTemplate](examples/functions/addTemplate.php) | [readme](examples/functions/addTemplate.md)
[deleteCampaign](examples/functions/deleteCampaign.php) | [readme](examples/functions/deleteCampaign.md)
[deleteContact](examples/functions/deleteContact.php) | [readme](examples/functions/deleteContact.md)
[deleteList](examples/functions/deleteList.php) | [readme](examples/functions/deleteList.md)
[exportContacts](examples/functions/exportContacts.php) | [readme](examples/functions/exportContacts.md)
[loadCampaign](examples/functions/loadCampaign.php) | [readme](examples/functions/loadCampaign.md)
[loadCampaigns](examples/functions/loadCampaigns.php) | [readme](examples/functions/loadCampaigns.md)
[loadCampaignsStats](examples/functions/loadCampaignsStats.php) | [readme](examples/functions/loadCampaignsStats.md)
[loadChannelsStats](examples/functions/loadChannelsStats.php) | [readme](examples/functions/loadChannelsStats.md)
[loadList](examples/functions/loadList.php) | [readme](examples/functions/loadList.md)
[loadStatistics](examples/functions/loadStatistics.php) | [readme](examples/functions/loadStatistics.md)
[loadTemplate](examples/functions/loadTemplate.php) | [readme](examples/functions/loadTemplate.md)
[sendBulkEmails](examples/functions/sendBulkEmails.php) | [readme](examples/functions/sendBulkEmails.md)
[sendTransactionalEmails](examples/functions/sendTransactionalEmails.php) | [readme](examples/functions/sendTransactionalEmails.md)
[updateCampaign](examples/functions/updateCampaign.php) | [readme](examples/functions/updateCampaign.md)

## API Endpoints

All URIs are relative to *https://api.elasticemail.com/v4*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CampaignsApi* | [**campaignsByNameDelete**](docs/Api/CampaignsApi.md#campaignsbynamedelete) | **DELETE** /campaigns/{name} | Delete Campaign
*CampaignsApi* | [**campaignsByNameGet**](docs/Api/CampaignsApi.md#campaignsbynameget) | **GET** /campaigns/{name} | Load Campaign
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
*EmailsApi* | [**emailsByMsgidViewGet**](docs/Api/EmailsApi.md#emailsbymsgidviewget) | **GET** /emails/{msgid}/view | View Email
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

## Models

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
- [DeliveryOptimizationType](docs/Model/DeliveryOptimizationType.md)
- [EmailContent](docs/Model/EmailContent.md)
- [EmailData](docs/Model/EmailData.md)
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
- [TransactionalRecipient](docs/Model/TransactionalRecipient.md)
- [Utm](docs/Model/Utm.md)
- [VerificationFileResult](docs/Model/VerificationFileResult.md)
- [VerificationFileResultDetails](docs/Model/VerificationFileResultDetails.md)
- [VerificationStatus](docs/Model/VerificationStatus.md)

## Authorization

### apikey

- **Type**: API key
- **API key parameter name**: X-ElasticEmail-ApiKey
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@elasticemail.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `4.0.0`
    - Package version: `4.0.22`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
