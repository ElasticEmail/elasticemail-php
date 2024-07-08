# # EmailJobStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID number of your attachment | [optional]
**status** | **string** | Name of status: submitted, complete, in_progress | [optional]
**recipients_count** | **int** |  | [optional]
**failed** | [**\ElasticEmail\Model\EmailJobFailedStatus[]**](EmailJobFailedStatus.md) |  | [optional]
**failed_count** | **int** | Total emails failed. | [optional]
**sent** | **string[]** |  | [optional]
**sent_count** | **int** | Total emails sent. | [optional]
**delivered** | **string[]** | Number of delivered messages | [optional]
**delivered_count** | **int** |  | [optional]
**pending** | **string[]** |  | [optional]
**pending_count** | **int** |  | [optional]
**opened** | **string[]** | Number of opened messages | [optional]
**opened_count** | **int** | Total emails opened. | [optional]
**clicked** | **string[]** | Number of clicked messages | [optional]
**clicked_count** | **int** | Total emails clicked | [optional]
**unsubscribed** | **string[]** | Number of unsubscribed messages | [optional]
**unsubscribed_count** | **int** | Total emails unsubscribed | [optional]
**abuse_reports** | **string[]** |  | [optional]
**abuse_reports_count** | **int** |  | [optional]
**message_ids** | **string[]** | List of all MessageIDs for this job. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
