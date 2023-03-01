function validate(){
    var formElement = document.querySelector('form');
  formElement.addEventListener('submit', event => {

    var pat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   var nam   =document.form1.nam.value;
   var emai =document.form1.email.value;
   var num   =document.form1.num.value;
   var pass  =document.form1.pass.value;
   var cf    =document.form1.cf.value;
    if(nam.length<=0){
      var dat="*please enter the name";
      document.getElementById('a').innerHTML= dat;
      event.preventDefault();
    }
  
     if(!emai.match(pat)){
      var da="*please enter a valid email";
      document.getElementById('b').innerHTML=da;
      event.preventDefault();
     }
     if(num.length<10){
      var d="*please enter your number";
      document.getElementById('c').innerHTML= d;
      event.preventDefault();
     }
     if(pass.length<=0){
      var a="*please enter your password";
      document.getElementById('d').innerHTML= a;
      event.preventDefault();
     }
     if(cf!=pass){
      var c="*password doesn't match";
      document.getElementById('e').innerHTML= c;
      event.preventDefault();
     }
      
      
      })
  }
  
  
  //image preview//
  
  InpImg.onchange = evt => {
    const [file] = InpImg.files
    if (file) {
      newImg.src = URL.createObjectURL(file)
    }
  
  }
  
