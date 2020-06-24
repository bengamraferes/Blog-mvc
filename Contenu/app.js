let supprimer =  document.querySelector('#supprimer');
let titre =  document.querySelector('#titre').textContent;
supprimer.addEventListener('click',()=>{
   if (window.confirm("Vous vouer supprimer "+titre+ " de vos billets")){
    return true;
   }
   else{return false;}
})
console.log(titre)