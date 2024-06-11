<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Advanced Invoice</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }
  .container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  .invoice-header {
    text-align: center;
    margin-bottom: 20px;
  }
  .invoice-header h1 {
    color: #333;
  }
  .invoice-details {
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
  }
  .invoice-details p {
    margin: 5px 0;
  }
  .invoice-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }
  .invoice-table th, .invoice-table td {
    border: 1px solid #ddd;
    padding: 8px;
  }
  .invoice-table th {
    background-color: #f2f2f2;
    text-align: left;
  }
  .invoice-total {
    text-align: right;
  }
  .invoice-total p {
    margin: 5px 0;
  }
  .notes {
    margin-top: 20px;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="invoice-header">
      <h1>Invoice</h1>
    </div>
    <div class="invoice-details">
      <div>
        <p><strong>Invoice Number:</strong>{{$order->id}} </p>
        <p><strong>Date:</strong> {{$order->order_date}}</p>
      </div>
      <div>
        <p><strong>Client:</strong> {{$order->customer->name}}</p>
        <p><strong>Email:</strong> {{$order->customer->email}}</p>
      </div>
    </div>
    <table class="invoice-table">
      <thead>
        <tr>
          <th>Description</th>
          <th>Quantity</th>
          <th>Unit Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($order->products as $product)
        <tr>
          <td>{{$product->product_name}}</td>
          <td>{{$product->product_qty}}</td>
          <td>{{$product->product_price}}</td>
          <td>{{$product->product_qty * $product->product_price}}</td>
        </tr>
        @endforeach
       
      </tbody>
    </table>
    <div class="invoice-total">
      <p><strong>Total:</strong> {{$order->order_total}}</p>
    </div>
  </div>
</body>
</html>
