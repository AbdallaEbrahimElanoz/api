//stepone   الطريقة القديمة
/*
fetch("https://www.breakingbadapi.com/api/")
.then(function( response) {
  return response.json();
})
.then(function (data){ 
console.log (data)
})
*/
/*  الطريقة الجديدة
async function get(){
    const response = await fetch("https://www.breakingbadapi.com/api/")
    const data = await response.json()
    console.log (data)
}
get()

*/
/*
async function get(){
    const response = await fetch("https://www.breakingbadapi.com/api/characters")    عاوز كل الاشخاص 
    const data = await response.json()
    console.log (data)
}
get()
*/
/*
async function get(){
    const response = await fetch("https://www.breakingbadapi.com/api/characters/1")  عاوز شخص واحد 
    const data = await response.json()
    console.log (data)
}
get()
*/
/*
async function get(){
    const response = await fetch("https://www.breakingbadapi.com/api/characters")
    const data = await response.json()
    console.log (data[0].name) عاوز اسم شخص فقط
}
get()
*/
async function get(){
    const response = await fetch("https://www.breakingbadapi.com/api/characters")
    const data = await response.json()
    console.log(data) 

    data.map(function(actor){
     console.log(actor.name)
    })

    document.querySelector("#content h1").innerHTML= data[0].name  
    document.querySelector("#content h5").innerHTML= data[0].birthday  
    document.querySelector("#content img").src= data[0].img 
    document.querySelector("#actor").innerHTML=
    `<select>
    ${ data.map(actor => `<option> ${actor.name} </option>` )  }
  
    
</select>
`
}
get()