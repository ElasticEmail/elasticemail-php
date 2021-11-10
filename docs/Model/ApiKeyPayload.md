# # ApiKeyPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the ApiKey for ease of reference. |
**access_level** | [**\ElasticEmail\Model\AccessLevel[]**](AccessLevel.md) | Access level or permission to be assigned to this ApiKey. |
**expires** | **\DateTime** | Date this ApiKey expires. | [optional]
**restrict_access_to_ip_range** | **string[]** | Which IPs can use this ApiKey | [optional]
**subaccount** | **string** | Email of the subaccount for which this ApiKey should be created | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
