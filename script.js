
const apikey ="799c103eb1ff564c772e8b3992c1fac3"
const apiurl ="https://api.openweathermap.org/data/2.5/weather?&units=metric&q="



const searchbox=document.querySelector(".search input");
const searcbtn=document.querySelector(".search button");


async function showWeather(city){
    const response=await fetch(apiurl +city+`&appid=${apikey}`);
    
    var data=await response.json()
   
    window.location.href="data.php?city="+data.name+"&temperature="+data.main.temperature+"&weather="+data.weather[0].main
    

}
searcbtn.addEventListener("click",()=>{
    showWeather(searchbox.value)
})




