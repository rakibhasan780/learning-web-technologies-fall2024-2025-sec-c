document.getElementById('addEmployerForm').addEventListener('submit', function(event) {
    var employerName = document.getElementsByName('employer_name')[0].value;
    var companyName = document.getElementsByName('company_name')[0].value;
    var contactNo = document.getElementsByName('contact_no')[0].value;
    
    if (!employerName || !companyName || !contactNo) {
        alert('All fields must be filled!');
        event.preventDefault();  // Prevent the form submission
    }
});
