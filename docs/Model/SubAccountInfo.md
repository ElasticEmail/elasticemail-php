# # SubAccountInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**public_account_id** | **string** | Public key for limited access to your Account such as contact/add so you can use it safely on public websites. | [optional]
**email** | **string** | Proper email address. | [optional]
**settings** | [**SubaccountSettingsInfo**](SubaccountSettingsInfo.md) | SubAccount settings | [optional]
**last_activity** | [**\DateTime**](\DateTime.md) | Date of last activity on Account | [optional]
**email_credits** | **int** | Amount of email credits | [optional]
**total_emails_sent** | **int** | Amount of emails sent from this Account | [optional]
**reputation** | **double** | Numeric reputation | [optional]
**status** | [**AccountStatusEnum**](AccountStatusEnum.md) | Account&#39;s current status. | [optional]
**contacts_count** | **int** | How many contacts this SubAccount has stored | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
