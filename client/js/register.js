const url='http://localhost/faq/'

async function  register(event) {
    event.preventDefault()
    const form = document.getElementById("register")
    const formData = new FormData(form)
    var data=new Object()
    formData.forEach((value, key) => {
        data[key] = value;
    });
    
console.log(data)
    try{
        
        const response=await axios.post(url+"/server/user/register.php", 
            data,{
            headers:{
                'Content-Type':"application/json"
            }
        }
        )
        console.log(response)
        window.location.href=url+"client/questions/questions.html"
    }catch(error){
        console.log(error)
    }

}