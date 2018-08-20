const pay= document.querySelector('#pay');
const cartPay= document.querySelector('#cartPay');
const x= document.querySelector('#x');

function payment(){
    pay.style='display:block';
    cartPay.style='display:none';
}
cartPay.addEventListener("click", payment);


