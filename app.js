const phoneInput = document.querySelector(".phone");
const btn = document.querySelector(".btn")


const PhoneMask = new IMask(phoneInput, {
  mask: '{+7} (000) 000-00-00'
});

const checkLength = function(evt) {
  if (phoneField.value.length > 17) {
  	submit.removeAttribute('disabled')
  }
  if (phoneField.value.length < 18) {
  	submit.setAttribute('disabled', "")
  }
}


const phoneField = document.querySelector('input[name="phone"]')
const submit = document.querySelector('input[type="submit"]')
phoneField.addEventListener('keyup', checkLength)
