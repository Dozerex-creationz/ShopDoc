const sub=document.querySelector('#sub');

var name='';
var pass='';


sub.addEventListener('click',(event)=>{
event.preventDefault();
name=document.getElementById('name').value;
if(document.getElementById('name').value=='')
{
window.alert("enter a Valid username");
}
pass=document.getElementById('pass').value;
const temp=localStorage.data;
var check=temp.split(',');

var i=0; 
check.map((ele)=>{

if(i==0)
{
i==1;
if(name==ele)
{
i=2;
}
}

else if(i==2)
{
if(pass==ele)
{i=0;
alert('Congrats you are in!');
}
else
{
alert('wrong password!');

}
}

else
{i=0;
}
});
window.location.reload();
});


