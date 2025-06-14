# # EmailValidationResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | Local part of an email | [optional]
**domain** | **string** | Name of selected domain. | [optional]
**email** | **string** | Full email address that was verified | [optional]
**suggested_spelling** | **string** | Suggested spelling if a possible mistake was found | [optional]
**disposable** | **bool** | Does the email have a temporary domain | [optional]
**role** | **bool** | Is an email a role email (e.g. info@, noreply@ etc.) | [optional]
**reason** | **string** | All detected issues | [optional]
**date_added** | **\DateTime** | Added date | [optional]
**result** | [**\ElasticEmail\Model\EmailValidationStatus**](EmailValidationStatus.md) |  | [optional]
**predicted_score** | **float** | Predicted score | [optional]
**predicted_status** | [**\ElasticEmail\Model\EmailPredictedValidationStatus**](EmailPredictedValidationStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
