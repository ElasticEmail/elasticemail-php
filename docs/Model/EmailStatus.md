# # EmailStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Email address this email was sent from. | [optional]
**to** | **string** | Email address this email was sent to. | [optional]
**date** | **\DateTime** | Date the email was submitted. | [optional]
**status** | [**\ElasticEmail\Model\LogJobStatus**](LogJobStatus.md) |  | [optional]
**status_name** | **string** | Name of email&#39;s status | [optional]
**status_change_date** | **\DateTime** | Date of last status change. | [optional]
**date_sent** | **\DateTime** | Date when the email was sent | [optional]
**date_opened** | **\DateTime** | Date when the email changed the status to &#39;opened&#39; | [optional]
**date_clicked** | **\DateTime** | Date when the email changed the status to &#39;clicked&#39; | [optional]
**error_message** | **string** | Detailed error or bounced message. | [optional]
**transaction_id** | **string** | ID number of transaction | [optional]
**envelope_from** | **string** | Envelope from address | [optional]
**error_category** | [**\ElasticEmail\Model\MessageCategoryEnum**](MessageCategoryEnum.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
