// Function to show the Thank You modal
function showThankYouModal() {
    const modal = document.getElementById('thankYouModal');
    modal.style.display = 'block';

    const closeBtn = modal.querySelector('.close');
    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const submitBtn = document.getElementById('submitBtn');
    const cancelBtn = document.getElementById('cancelBtn');
    submitBtn.addEventListener('click', function() {
        // Show a confirmation dialog using SweetAlert2
        Swal.fire({
            title: 'Confirmation',
            text: 'Are you sure you want to submit?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, submit',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Display success message before redirection
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully submitted the form!',
                    icon: 'success'
                }).then(() => {
                    // Perform form submission
                    // Replace this with your actual form submission logic
                    // For demo purposes, redirecting to "/website/UI/html/index.html"
                    window.location.href = '/website/UI/html/index.html';
                });
            }
        });
    });

    cancelBtn.addEventListener('click', function() {
        // Show a confirmation dialog using SweetAlert2 for cancellation
        Swal.fire({
            title: 'Confirmation',
            text: 'Are you sure you want to cancel?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, cancel',
            cancelButtonText: 'No, go back'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to "/website/UI/html/order.html" on confirmation
                window.location.href = '/website/UI/html/order.html';
            }
        });
    });
});

