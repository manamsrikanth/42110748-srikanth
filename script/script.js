document.getElementById('insuranceForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const vehicleNumber = document.getElementById('vehicleNumber').value;
    const xhr = new XMLHttpRequest();
    const resultDiv = document.getElementById('insuranceResult');

    xhr.open('POST', 'insurance_show.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if (this.status == 200) {
            resultDiv.innerHTML = this.responseText;
        } else {
            resultDiv.innerHTML = "<p>An error occurred. Please try again.</p>";
        }
    };

    xhr.send('vehicleNumber=' + encodeURIComponent(vehicleNumber));
});
