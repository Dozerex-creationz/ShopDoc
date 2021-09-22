const sub=document.querySelector('#sub');

var name='';
var pass='';


console.log(localStorage.data);
if(localStorage.data)
{
console.log('fail');}
else
{
console.log('2hi');
localStorage.setItem('data',['admin','root']);
}

sub.addEventListener('click',(event)=>{
event.preventDefault();
console.log('called');
name=document.getElementById('name').value;
pass=document.getElementById('pass').value;
const val=[name,pass];
console.log(val);
var arr=[[localStorage.data]];
console.log(arr);
arr.push(val);
console.log(arr);
localStorage.setItem('data',arr);
window.location.reload();
});


