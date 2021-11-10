# # NewSmtpCredentials

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | Unique token to be used in the system | [optional]
**access_level** | [**\ElasticEmail\Model\AccessLevel**](AccessLevel.md) |  | [optional]
**name** | **string** | Name of the key. | [optional]
**date_created** | **\DateTime** | Date this SmtpCredential was created. | [optional]
**last_use** | **\DateTime** | Date this SmtpCredential was last used. | [optional]
**expires** | **\DateTime** | Date this SmtpCredential expires. | [optional]
**restrict_access_to_ip_range** | **string[]** | Which IPs can use this SmtpCredential | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
