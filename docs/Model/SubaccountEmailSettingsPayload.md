# # SubaccountEmailSettingsPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requires_email_credits** | **bool** | True, if Account needs credits to send emails. Otherwise, false | [optional]
**email_size_limit** | **int** | Maximum size of email including attachments in MB&#39;s | [optional]
**daily_send_limit** | **int** | Amount of emails Account can send daily | [optional]
**max_contacts** | **int** | Maximum number of contacts the Account can have. 0 means that parent account&#39;s limit is used. | [optional]
**enable_private_ip_purchase** | **bool** | Can the SubAccount purchase Private IP for themselves | [optional]
**pool_name** | **string** | Name of your custom IP Pool to be used in the sending process | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
