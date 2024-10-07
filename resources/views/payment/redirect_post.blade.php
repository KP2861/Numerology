<!DOCTYPE html>
<html>

<head>
    <title>Redirecting...</title>
</head>

<body>
    <form id="postForm" action="{{ route('numerology.mobile_numerology_pdf') }}" method="POST">
        @csrf
        <input type="hidden" name="payment_id" value="{{ $paymentId }}">
        <input type="hidden" name="some_other_data" value="additional data if needed">
    </form>

    <script type="text/javascript">
        document.getElementById('postForm').submit();
    </script>
</body>

</html>
