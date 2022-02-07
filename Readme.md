# Extend eventnews with address relations

Use `tt_address` instead of simple records

In template, use

```html
<f:debug>{newsItem.organizerAddress.fullName}</f:debug>
<f:debug>{newsItem.locationAddress.fullName}</f:debug>
```
