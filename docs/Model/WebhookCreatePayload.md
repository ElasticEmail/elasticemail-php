# # WebhookCreatePayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Filename |
**url** | **string** | URL of notification. |
**notify_once_per_email** | **bool** |  | [optional]
**notification_for_sent** | **bool** |  | [optional]
**notification_for_opened** | **bool** |  | [optional]
**notification_for_clicked** | **bool** |  | [optional]
**notification_for_unsubscribed** | **bool** |  | [optional]
**notification_for_abuse_report** | **bool** |  | [optional]
**notification_for_error** | **bool** |  | [optional]
**enable_signing** | **bool** | Sign every request with HMAC-SHA256. Can be set only when the webhook is created. Default: false. | [optional]
**delivery_method** | [**\ElasticEmail\Model\WebhookDeliveryMethod**](WebhookDeliveryMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
