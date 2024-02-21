document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
<form id="feedback-form">
    <input type="text" id="name" placeholder="Your Name" required>
        <textarea id="message" placeholder="Your Feedback" required></textarea>
        <button type="submit">Submit</button>
</form>
document.getElementById('feedback-form').addEventListener('submit', function (e) {
    e.preventDefault();
    // Add your form submission logic here
    alert('Form submitted!');
});
