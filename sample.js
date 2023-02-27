function validate(){
    var formElement = document.querySelector('form');
  formElement.addEventListener('submit', event => {
    isvalid=true;
    
   var nam   =document.form1.nam.value;
   localStorage.setItem('name',nam);
   var emai =document.form1.email.value;
   var num   =document.form1.num.value;
   var pass  =document.form1.pass.value;
   var cf    =document.form1.cf.value;
    if(nam.length<=0){
      var dat="*please enter the name";
      document.getElementById('a').innerHTML= dat;
      isvalid=false;
    }

     if(emai.length<=0){
      var da="*please enter your email";
      document.getElementById('b').innerHTML= da;
      isvalid= false;
     }
     if(num.length<=0){
      var d="*please enter your number";
      document.getElementById('c').innerHTML= d;
      isvalid= false;
     }
     if(pass.length<=0){
      var a="*please enter your password";
      document.getElementById('d').innerHTML= a;
      isvalid= false;
     }
     if(cf.length<=0){
        var b="*please enter confirm password";
        document.getElementById('e').innerHTML= b;
        isvalid= false;
     }
     if(cf!=pass){
      var c="*password doesn't match";
      document.getElementById('e').innerHTML= c;
     }
      
      if(!isvalid){
        event.preventDefault();
      }})
}


  //image preview//

  InpImg.onchange = evt => {
    const [file] = InpImg.files
    if (file) {
      newImg.src = URL.createObjectURL(file)
    }

  }
