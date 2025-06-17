# # DomainDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Name of selected domain. | [optional]
**default_domain** | **bool** | True, if domain is used as default. Otherwise, false, | [optional]
**spf** | **bool** | True, if SPF record is verified | [optional]
**dkim** | **bool** | True, if DKIM record is verified | [optional]
**mx** | **bool** | True, if MX record is verified | [optional]
**dmarc** | **bool** |  | [optional]
**is_rewrite_domain_valid** | **bool** | True, if tracking CNAME record is verified | [optional]
**verify** | **bool** | True, if DKIM, SPF, or tracking are still to be verified | [optional]
**type** | [**\ElasticEmail\Model\TrackingType**](TrackingType.md) |  | [optional]
**tracking_status** | [**\ElasticEmail\Model\TrackingValidationStatus**](TrackingValidationStatus.md) |  | [optional]
**certificate_status** | [**\ElasticEmail\Model\CertificateValidationStatus**](CertificateValidationStatus.md) |  | [optional]
**certificate_validation_error** | **string** |  | [optional]
**tracking_type_user_request** | [**\ElasticEmail\Model\TrackingType**](TrackingType.md) |  | [optional]
**verp** | **bool** |  | [optional]
**custom_bounces_domain** | **string** |  | [optional]
**is_custom_bounces_domain_default** | **bool** |  | [optional]
**is_marked_for_deletion** | **bool** |  | [optional]
**ownership** | [**\ElasticEmail\Model\DomainOwner**](DomainOwner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
