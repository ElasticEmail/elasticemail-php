# # CampaignOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_optimization** | [**\ElasticEmail\Model\DeliveryOptimizationType**](DeliveryOptimizationType.md) |  | [optional]
**track_opens** | **bool** | Should the opens be tracked? If no value has been provided, Account&#39;s default setting will be used. | [optional]
**track_clicks** | **bool** | Should the clicks be tracked? If no value has been provided, Account&#39;s default setting will be used. | [optional]
**schedule_for** | **\DateTime** | Date when this Campaign is scheduled to be sent on | [optional]
**trigger_frequency** | **float** | How often (in minutes) to send the campaign | [optional]
**trigger_count** | **int** | How many times send the campaign | [optional]
**split_options** | [**\ElasticEmail\Model\SplitOptions**](SplitOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
