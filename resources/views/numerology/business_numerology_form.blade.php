<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Numerology</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Business Numerology Calculator</h1>
        <form action="{{ route('business_numerology.result') }}" method="POST">
            @csrf
            <div id="partner-fields">
                <div class="form-group">
                    <label for="partner_name_0">Partner Name:</label>
                    <input type="text" class="form-control" id="partner_name_0" name="partner_names[]" required>
                </div>
                <div class="form-group">
                    <label for="dob_0">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob_0" name="dob[]" required>
                </div>
            </div>
            <button type="button" class="btn btn-secondary" onclick="addPartner()">Add Another Partner</button>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>

    <script>
        let partnerIndex = 1;
        function addPartner() {
            const container = document.getElementById('partner-fields');
            const nameGroup = document.createElement('div');
            nameGroup.classList.add('form-group');
            nameGroup.innerHTML = `<label for="partner_name_${partnerIndex}">Partner Name:</label><input type="text" class="form-control" id="partner_name_${partnerIndex}" name="partner_names[]" required>`;
            
            const dobGroup = document.createElement('div');
            dobGroup.classList.add('form-group');
            dobGroup.innerHTML = `<label for="dob_${partnerIndex}">Date of Birth:</label><input type="date" class="form-control" id="dob_${partnerIndex}" name="dob[]" required>`;

            container.appendChild(nameGroup);
            container.appendChild(dobGroup);
            partnerIndex++;
        }
    </script>
</body>
</html>
