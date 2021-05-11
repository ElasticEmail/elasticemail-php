# # ContactPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Proper email address. | [optional]
**status** | [**ContactStatus**](ContactStatus.md) | Status of the given resource | [optional]
**first_name** | **string** | First name. | [optional]
**last_name** | **string** | Last name. | [optional]
**custom_fields** | **map[string,string]** | A key-value collection of custom contact fields which can be used in the system. Only already existing custom fields will be saved. | [optional]
**consent** | [**\ElasticEmail\Model\ConsentData**](ConsentData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
