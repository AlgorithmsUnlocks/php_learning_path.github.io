const according = document.getElementsByClassName('contentBox');
for(i=0; i<according.length; i++){
  according[i].addEventListener('click',function(){
    this.classList.toggle('active');
  });
}