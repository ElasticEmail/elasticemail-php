# # Contact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Proper email address. | [optional]
**status** | [**ContactStatus**](ContactStatus.md) | Status of the given resource | [optional]
**first_name** | **string** | First name. | [optional]
**last_name** | **string** | Last name. | [optional]
**custom_fields** | **map[string,string]** | A key-value collection of custom contact fields which can be used in the system. | [optional]
**consent** | [**\ElasticEmail\Model\ConsentData**](ConsentData.md) |  | [optional]
**source** | [**ContactSource**](ContactSource.md) | From where was this contact added | [optional]
**date_added** | [**\DateTime**](\DateTime.md) | Date of creation in YYYY-MM-DDThh:ii:ss format | [optional]
**date_updated** | [**\DateTime**](\DateTime.md) | Last change date | [optional]
**status_change_date** | [**\DateTime**](\DateTime.md) | Date of last status change. | [optional]
**activity** | [**ContactActivity**](ContactActivity.md) | Contact&#39;s email statistics and activity | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
