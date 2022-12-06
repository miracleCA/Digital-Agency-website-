var Form = document.getElementById('contact-form')
var Firstname = document.getElementById('Firstname')
var Lastname = document.getElementById('Lastname')
var Email = document.getElementById('Email')
var Phone = document.getElementById('Phone')
var subject = document.getElementById('subject')
var message = document.getElementById('message')
var myfile = document.getElementById('myFile')
var submit = document.getElementById('submit')
var error1 = document.getElementById('error1')
var error2 = document.getElementById('error2')
var error3 = document.getElementById('error3')
var error4 = document.getElementById('error4')
var error5 = document.getElementById('error5')
var error6 = document.getElementById('error6')
var error7 = document.getElementById('error7')

var ValidEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
var ValidPhone = /^[\d,\s,\+,\-]{9,20}/


Form.addEventListener('submit', (e) => {
       var error01 = [];
       var error02 = [];
       var error03 = [];
       var error04 = [];
       var error05 = [];
       var error06 = [];

        if (Firstname.value === '' || Firstname.value === null) {
                error01.push('Please input your First name')
        }
        if (Lastname.value === '' || Lastname.value === null) {
                error02.push('Please input your Last name')
        }
        if (Email.value === '' || Email.value === null || !Email.value.match(ValidEmail)) {
                error03.push('Please input a valid E-mail address')
        }
        if (Phone.value === '' || Phone.value === null || !Phone.value.match(ValidPhone)) {
                error04.push('Please input a valid phone number')
        }
        if (subject.value === '' || subject.value === null) {
                error05.push('Please input your message subject')
        }
        if (message.value === '' || message.value === null) {
                error06.push('Please write your message in details.')
        }

        if (error01.length > 0 || error02.length > 0 || error03.length > 0 || error04.length > 0 || error05.length > 0 || error06.length > 0) {
                e.preventDefault()
        }
        else {
                Form.submit();
        }
        error1.innerHTML = error01.join('')
        error2.innerHTML = error02.join('')
        error3.innerHTML = error03.join('')
        error4.innerHTML = error04.join('')
        error5.innerHTML = error05.join('')
        error6.innerHTML = error06.join('')
  
});