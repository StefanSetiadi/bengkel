<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
  <script type="text/javascript"
		src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-OndwIWbOjxSues4X"></script>
  <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
</head>
<style>
    #snap-container {
      position: fixed; /* Stay fixed on the screen */
      top: 50%; /* Center vertically */
      left: 50%; /* Center horizontally */
      transform: translate(-50%, -50%); /* Adjust to center perfectly */
      background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent black background */
      color: white; /* Optional: white text color */
      z-index: 1000; /* Ensure it stays on top */
    }
  </style>

<body style="background-color:red;">
  <button id="pay-button">Pay!</button>

  <!-- @TODO: You can add the desired ID as a reference for the embedId parameter. -->
  <div id="snap-container"></div>

  <script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
      // Also, use the embedId that you defined in the div above, here.
      window.snap.embed('{{ $snapToken }}', {
        embedId: 'snap-container',
        onSuccess: function (result) {
          /* You may add your own implementation here */
        @php
            $transaksi = \App\Models\Transaksi::where('id_transaksi', 10)->first();
            $transaksi->status_pembayaran = 1;
            $transaksi->save();
        @endphp
          window.location.href = "http://127.0.0.1:8000/";
        //   alert("payment success!"); 
        //   console.log(result);
        },
        onPending: function (result) {
          /* You may add your own implementation here */
          alert("wating your payment!"); 
        //   console.log(result);
        },
        onError: function (result) {
          /* You may add your own implementation here */
          alert("payment failed!"); 
        //   console.log(result);
        },
        onClose: function () {
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      });
    });
</script>

</body>

</html>