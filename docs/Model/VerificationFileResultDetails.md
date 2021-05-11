# # VerificationFileResultDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**verification_result** | [**\ElasticEmail\Model\EmailValidationResult[]**](EmailValidationResult.md) | Verification result&#39;s details | [optional]
**verification_id** | **string** | Identifier of this verification result | [optional]
**filename** | **string** | Origin file name | [optional]
**verification_status** | [**VerificationStatus**](VerificationStatus.md) | In what state does this verification result currently is | [optional]
**file_upload_result** | [**FileUploadResult**](FileUploadResult.md) | How many emails were detected in the file for verification | [optional]
**date_added** | [**\DateTime**](\DateTime.md) | Date of creation in YYYY-MM-DDThh:ii:ss format | [optional]
**source** | **string** | Origin file extension | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
