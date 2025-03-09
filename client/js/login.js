async function login(e){
    e.preventDefault();
    const form = document.getElementById('login')
    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => data[key] = value);

    console.log(data)

    try{
        const response = await axios.post("http://localhost/faq/server/user/login.php",data,
            {headers:{
                "Content-Type":"application/json"
            }}
        )
        console.log(response.data.status)
        if( response.data.status !=undefined && response.data.status=="success"){
            window.location.href="http://localhost/faq/client/questions/questions.html"
        }
        
    }catch(error){
    console.log(error)    
}
}