# # RecipientEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | ID number of transaction | [optional]
**msg_id** | **string** | ID number of selected message. | [optional]
**from_email** | **string** | Default From: email address. | [optional]
**to** | **string** | Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
**subject** | **string** | Default subject of email. | [optional]
**event_type** | [**EventType**](EventType.md) | Type of an Event | [optional]
**event_date** | [**\DateTime**](\DateTime.md) | Creation date | [optional]
**channel_name** | **string** | Name of selected channel. | [optional]
**message_category** | [**MessageCategory**](MessageCategory.md) | Message category | [optional]
**next_try_on** | [**\DateTime**](\DateTime.md) | Date of next try | [optional]
**message** | **string** | Content of message, HTML encoded | [optional]
**ip_address** | **string** | IP which this email was sent through | [optional]
**pool_name** | **string** | Name of an IP pool this email was sent through | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
