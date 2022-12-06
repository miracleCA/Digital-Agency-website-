var Form2 = document.getElementById('Email-form')
var Email2 = document.getElementById('Sub-Email')
var submit = document.getElementById('mail-but')
var errors1 = document.getElementById('errors1')

var ValidEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

Form2.addEventListener('submit', (e) => {
        var errors01 = [];

        if (Email2.value === '' || Email2.value === null) {
                errors01.push('Please input an E-mail address')
        }
        else if (!Email2.value.match(ValidEmail)) {
                errors01.push('Please input a valid E-mail address')
        }

        if (errors01.length > 0) {
                e.preventDefault();
        }
        else {
                Form2.submit();
        }
        errors1.innerHTML = errors01.join('')
                
});