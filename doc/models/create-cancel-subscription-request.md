
# Create Cancel Subscription Request

Request for canceling a subscription

## Structure

`CreateCancelSubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cancelPendingInvoices` | `bool` | Required | Indicates if the pending invoices must also be canceled.<br><br>**Default**: `true` | getCancelPendingInvoices(): bool | setCancelPendingInvoices(bool cancelPendingInvoices): void |

## Example (as JSON)

```json
{
  "cancel_pending_invoices": true
}
```

