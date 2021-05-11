# # CampaignTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**poolname** | **string** | Name of your custom IP Pool to be used in the sending process | [optional]
**from** | **string** | Your e-mail with an optional name (e.g.: John Doe &lt;email@domain.com&gt;) | [optional]
**reply_to** | **string** | To what address should the recipients reply to (e.g. John Doe &lt;email@domain.com&gt;) | [optional]
**subject** | **string** | Default subject of email. | [optional]
**template_name** | **string** | Name of template. | [optional]
**attach_files** | **string[]** | Names of previously uploaded files that should be sent as downloadable attachments | [optional]
**utm** | [**Utm**](Utm.md) | Utm marketing data to be attached to every link in this e-mail. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
