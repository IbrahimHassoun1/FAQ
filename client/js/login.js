const url='http://ec2-51-44-85-143.eu-west-3.compute.amazonaws.com/faq/'
async function login(e){
    e.preventDefault();
    const form = document.getElementById('login')
    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => data[key] = value);

    console.log(data)

    try{
        const response = await axios.post(url+"server/user/login.php",data,
            {headers:{
                "Content-Type":"application/json"
            }}
        )
        console.log(response.data.status)
        if( response.data.status !=undefined && response.data.status=="success"){
            window.location.href=url+"client/questions/questions.html"
        }
        
    }catch(error){
    console.log(error)    
}
}