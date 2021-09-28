const form = document.querySelector('.signup form');
const continueBtn = form.querySelector('.button input');
const errTxt = form.querySelector('.error-txt');
form.addEventListener('submit', (e) => {
    e.preventDefault();
});

continueBtn.addEventListener('click', () => {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/signup.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {
                    location.href = "users.php";
                } else {
                    errTxt.textContent = data;
                    errTxt.style.display = "block";
                }
                console.log(data);
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
})