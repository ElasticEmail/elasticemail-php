# # SmtpCredentialsPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the Credential for ease of reference. It must be a valid email address. | [optional]
**expires** | [**\DateTime**](\DateTime.md) | Date this SmtpCredential expires. | [optional]
**restrict_access_to_ip_range** | **string[]** | Which IPs can use this SmtpCredential | [optional]
**subaccount** | **string** | Email of the subaccount for which this SmtpCredential should be created | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
