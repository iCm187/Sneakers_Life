let copButtons = document.getElementsByClassName('btn-cop');

for (let i = 0; i < copButtons.length; i++) {
    copButtons[i].addEventListener('click', function () {
        copButtons[i].classList.add('btn-light');
        fetch('/vote', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                vote: i
            })
        })
    })
}